<?php
get_header();
?>
<body>
	<video id="myVideo" loop muted autoplay>
  	<source src="<?php
  		echo get_template_directory_uri();
  	?>/My Portfolio_2.mp4" type="video/mp4">
  	<source src="<?php
  		echo get_template_directory_uri();
  	?>/My-Portfolio_2.ogg" type="video/ogg">
	Your browser does not support the video tag.
</video>
</body>
<?php
get_footer();
