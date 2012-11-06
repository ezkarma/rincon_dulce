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
	<?php echo $video2->comentario2."<br><br>";?>
	<?php echo "<iframe class='youtube-player' type='text/html' width='580' height='350' src='http://www.youtube.com/embed/".$video2->enlace2."' frameborder='0'></iframe>";?>
	<br><br><br><br><br><br>
	<?php echo $video3->comentario3."<br><br>";?>
	<?php echo "<iframe class='youtube-player' type='text/html' width='580' height='350' src='http://www.youtube.com/embed/".$video3->enlace3."' frameborder='0'></iframe>";?>
	<br><br><br><br><br><br>
	<?php echo $video4->comentario4."<br><br>";?>
	<?php echo "<iframe class='youtube-player' type='text/html' width='580' height='350' src='http://www.youtube.com/embed/".$video4->enlace4."' frameborder='0'></iframe>";?>
	<br><br><br><br><br><br>
	<?php echo $video5->comentario5."<br><br>";?>
	<?php echo "<iframe class='youtube-player' type='text/html' width='580' height='350' src='http://www.youtube.com/embed/".$video5->enlace5."' frameborder='0'></iframe>";?>
	<br><br><br><br><br><br>
	
</div>

</body>

