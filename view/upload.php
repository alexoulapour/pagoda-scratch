<html>
<?php
/*
function call_me()
{
	echo "test call me";
}
 */
require_once("UploadController.php");
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php basename(/include/upload.js?>"></script>
<body>
<div id="shout">
	<form method='POST' enctype='multipart/form-data' action="<?php submitUpload();?>">
		<ul id='parentFilelist'></ul>
		<a href='#' id='attacher'>Attach Files</a>
		<input type='submit' name='submit' id='submit' value='Upload'/>
	</form>
</div>
<div id="formBox">
</div>
</body>
</html>