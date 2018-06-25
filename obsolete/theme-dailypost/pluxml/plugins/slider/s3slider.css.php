<?php header("Content-type: text/css"); ?>
#slider {
	width:<?php echo (int)$_GET['w']; ?>px;
	height:<?php echo (int)$_GET['h']; ?>px;
	position:relative;
	overflow:hidden;
	margin-bottom:15px;
	margin-left:auto;
	margin-right:auto;}
#sliderContent{
	width:720px;
	height:<?php echo (int)$_GET['h']; ?>px;
	position:absolute;
	top:0;
	margin-left:0;}
.sliderImage{
	float:left;
	position:relative;
	display:none;}
.sliderImage span {
	position:absolute;
	font:10px/15px Arial, Helvetica, sans-serif;
	padding:10px 13px;
	width:<?php echo $_GET['w']; ?>px;
	background-color:<?php echo $_GET['bc']; ?>;
	filter:alpha(opacity=70);
	-moz-opacity:0.7;
	-khtml-opacity:0.7;
	opacity:0.7;
	color:<?php echo $_GET['tc']; ?>;
	display:none;}
.sliderImage span a {
	color:<?php echo $_GET['lc']; ?>;
}
.clear {clear:both;}
.sliderImage span strong{
	font-size:14px;}
.top{
	top:0;
	left:0;}
.bottom{
	bottom:4px;
	left:0;}
.left{
	top:-4px;
	left:0;
	width:120px !important;
	height:95%;}
.right{
	right:40px;
	bottom:6px;
	width:120px !important;
	height:95%;}