<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
function removeFileList(fileId)
{
	var fileObj = document.getElementById(fileId);
	fileObj.parentNode.removeChild(fileObj);
}
$(document).ready(function(){
	var attacher= new Array();
	var fileCounter = 0;
	//The following function generates codes for input type file to be automatically added after Attach files link is clicked.
	$("#attacher").click(function(){
		var li = document.createElement('li');
		li.setAttribute('id','file'+fileCounter);
		li.innerHTML = '<input type="file" name="docs[]" id="docs'+fileCounter+'"/> <a href="#" onClick="removeFileList(\'file'+fileCounter+'\')">Remove</a>';
		document.getElementById('parentFilelist').appendChild(li);
		//$('#docs'+fileCounter).click();
		$('#docs'+fileCounter).trigger('click');
		fileCounter++;
	});
	
});
