<style type="text/css">	
.box{
	margin-right:45%;
	float:right;
	width:580px;
	height:550px;
	z-index:1; 
	top:0px;
	border:0px solid gray;
	text-align:center;
	font-size:14px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
}
</style>
<body>
<br>
<div class= "box">
	<?php echo "<iframe class='youtube-player' type='text/html' width='580' height='350' src='http://www.youtube.com/embed/".$video->enlace."' frameborder='0'></iframe>";?>
	<br><br><br>
	<?php echo $video->comentario."<br><br><br>";?>
	
</div>

</body>

