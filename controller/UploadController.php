<?php
require_once("../../model/Upload.php");
class UploadController 
{
	public function submitUpload()
	{
		Upload::pushUpload();
		if(count(Upload::$errors)>0)
		{	
			echo "<div id='errorBox'>
			<div id='errorTitle'>
			Errors:
			</div>";
		}
		UploadController::getInfo(Upload::$errors);
		echo "</div>";
		/*
		echo "<div id='replaceBox'>
			<div id='replaceTitle'>
			Overwrite? :
			</div>
			";
		UploadController::getInfo(Upload::$existingFiles);
		echo "</div>";
		 */
		if(count(Upload::$successFiles)>0)
		{
			echo "<div id='successBox'>
			<div id='successTitle'>
			Successfully Uploaded :
			</div>";
		}
		UploadController::getInfo(Upload::$successFiles);
		echo "</div>";


	}
	public function countArray($array)
	{
		if(count($array)>0)
			return true;
		else
			return false;
	}
	public function getInfo($data)
	{
		foreach($data as $display)
		{
			echo "<div id='msgBox'>";
			echo $display;
			echo "</div>";

		}
	}
}
