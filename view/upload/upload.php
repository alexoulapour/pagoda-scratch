<html>
<?php
/*
function call_me()
{
	echo "test call me";
}
 */
require_once("../../controller/UploadController.php");
if(isset($_POST['submit']))
{
	UploadController::submitUpload();
}
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="../../include/upload.js"></script>
<body>
<div id="shout">
<form method='POST' enctype='multipart/form-data' action="">
		<ul id='parentFilelist'></ul>
		<a href='#' id='attacher'>Attach Files</a>
		<input type='submit' name='submit' id='submit' value='Upload'/>
	</form>
</div>
<div id="formBox">
</div>
</body>
</html>
