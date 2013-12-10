<!DOCTYPE html>
<html>
 <title> 
 
 </title>
 <head>
 <base href="<?php echo BASE_HREF ?>">
<script src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.ad-gallery.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.ad-gallery.css" />
<link rel="stylesheet" type="text/css" href="css/dialog-box.css" />

<script>
$(function(){
	var galleries = $('.ad-gallery').adGallery({
		//width: '900px',
		//height: false,
		//description_wrapper: $('#descriptions') // comment this to turn on description, 
		start_at_index: 0,
		loader_image: 'js/loader.gif'
	});
});
</script>

</head>
<body>
 