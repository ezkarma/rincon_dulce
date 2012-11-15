<?php 
class Connection{

    public $con;

    private $host;

    private $user;

    private $pass;

    private $db;

    private $debug = 1;

    /** 
     * Connection constructor with global configuration
     */
    public function __construct(){
        $this->debug = 1;
        $this->host = "localhost";
        $this->user = "rincon";
        $this->pass = "dulce";
        $this->db = "pasteleria";
    }

    /** 
     * Initiate a configuration 
     * A singleton paradigm is used here to prevent multiple connections to the database within the script
     *
     * Throws Exception on Fail to connect
     */
    public function start(){
        if(isset($_GLOBALS['con'])){
            $this->con = $_GLOBALS['con'];
            return "Success";
        }
        if($this->con = mysql_connect($this->host,$this->user,$this->pass, false, 1)){
            $_GLOBALS['con'] = $this->con;

            if($this->db != ""){
                if(mysql_select_db($this->db,$this->con)){
                    mysql_query("SET NAMES 'utf8'",$this->con);
                    //mysql_query("SET time_zone = '+01:00';",$this->con);
                    return "Success";
                }else{
                    throw new Exception('No schema selected.');
                }
            }
        }
        throw new Exception('Could not stablish a connection to de db.');
    }

    /**
     * Close db connection
     */
    public function close(){
        if($this->con != NULL){
            mysql_close($this->con);
        }
    }
}

/** 
 * Class Transaction handles queries to the database
 */
class Transaction{
    private $con;
    private $debug;

    /**
     * Transaction constructor which setss debug on or off
     */
    public function __construct($con){
        $this->con = $con;
        $this->debug = $GLOBALS["debug"];
    }

    /**
     * Begin transacction for complex queries
     */
    public function begin(){
        mysql_query("SET autocommit = 0;");
        $res = mysql_query("START TRANSACTION",$this->con);
        if(mysql_errno()){
            switch($this->debug){ 
            case '1':
                debug_print_backtrace();
                die("Error: ".mysql_error()."<br />".mysql_error());
                break;
            default:
                throw new Exception('Ocurrio un problema en la conexion a la base de datos.');
                break;
            }
        }
        mysql_query("BEGIN",$this->con);
    }

    /**
     * Excecute a given query
     *
     * @return Resultset
     */
    public function execute($query){
        $res = mysql_query($query);
        if(mysql_errno()){
            switch($this->debug){ //){
            case '1':
                debug_print_backtrace();
                die("Error: ".mysql_error()."<br />".$query);
                break;
            default:
                throw new Exception('Ocurrio un problema en la conexion a la base de datos.');
                break;
            }
        }
        return $res;
    }

    /**
     * Exectute a given query
     *
     * @return ArrayResult
     */
    public function executeArr($query){
        $res = mysql_query($query);
        if(mysql_errno()){
            switch($this->debug){ //){
            case '1':
                debug_print_backtrace();
                die("Error: ".mysql_error()."<br />".$query);
                break;
            default:
                throw new Exception('Ocurrio un problema en la conexion a la base de datos.');
                break;
            }
        }
        return $this->resultToArr($res);
    }

    /**
     * Transform result into an array of results
     */
    public function resultToArr($result){
        $arr = array();
        while($row = mysql_fetch_assoc($result)){
            $arr[] = $row;
        }
        return $arr;
    }

    /**
     * Get last inserted ID
     */
    public function last_id(){
        $id = mysql_insert_id($this->con);
        return $id;
    }

    /**
     * Commit current transaction
     */
    public function commit(){
        mysql_query("COMMIT",$this->con);
    }

    /**
     * Undo current transaction
     */
    public function rollback(){
        mysql_query("ROLLBACK",$this->con);
    }
}
?>
