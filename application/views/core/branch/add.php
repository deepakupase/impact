<html>
<head>
<title>Add Branch</title>
</head>
<body>
	<h2>Add Branch</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_branch/add'); ?>" method="POST" id="branch_add">
		<table class="formtable">
			<tr><td>Branch ID</td><td><input type="text" name="branch_id" id="branch_id" class="textbox" readonly></td></tr>
			<tr><td>Branch Name</td><td><input type="text" name="branch_name" name="branch_name" class="textbox"></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>