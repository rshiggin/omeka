<!DOCTYPE html>
<html>
<head>
<?php
queue_css_file('style');
$css = "
div.content {margin-right: 10px; max-width:310px;}
div.thumbnail {float:right;}
h1 {margin: 0;}


";
queue_css_string($css);
echo head_css();
?>

</head>
<body>
<div class="thumbnail"><?php echo file_image('thumbnail', array(), $files[0]); ?></div>  
</body>
</html>