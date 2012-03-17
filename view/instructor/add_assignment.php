<?php if ($accessible): ?>

<?php if (isset($missing)):
$this->RenderMsg("You did not complete the required credentials.");
endif ?>
<?php if (isset($assigned)):
$this->RenderMsg("Assignment added!");
endif ?>

<h1>Instructor Control Panel</h1>

<h2>Add Assignment</h2>

<form action="" method="POST">
	<table>
		<tr>
			<td>
				<label for="title">Title:  </label>
			</td>
			<td>
				<input type="text" name="title">
			</td>
		</tr>
		
		<tr>
			<td>
				<label for="assignment">Description:  </label>
			</td>
			<td>
				<textarea id="nicEdittextarea" rows="10" cols="90" name="text"></textarea>
			</td>
			<tr>
			<td>
				<td>
					<input type="submit" name="submit" value="Submit"/>
				</td>
			</td>
			</tr>
		</tr>
	</table>
	
</form>
	
	
	
<?php else: 
$this->RenderMsg("You do not have sufficient privileges to view this page!"); ?>
<?php endif ?>

