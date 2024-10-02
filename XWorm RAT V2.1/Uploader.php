<?php
if (isset($_FILES['file']) and is_uploaded_file($_FILES['file']['tmp_name'])) {
$upload_dir = './Uploader';
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

$file = "$upload_dir/index.html";
if(!is_file($file)){
    file_put_contents($file, '');
}

if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["file"]["tmp_name"];
    $name = $_FILES["file"]["name"];
	if (ends_with( $name, '.php')) { //Block .php 
		
		} else {
			
   move_uploaded_file($tmp_name, "$upload_dir/$name");
}

 }
}
function ends_with($haystack, $needles)
{
	foreach ((array) $needles as $needle)
	{
		if ((string) $needle === substr($haystack, -strlen($needle))) return true;
	}
return false;
}
?>