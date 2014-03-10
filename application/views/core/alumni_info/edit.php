<html>
<head>
<title>Update Alumni</title>
</head>
<body>
	<h2>Update Alumni</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_alumni_info/edit/'.@$object->alumni_id); ?>" method="POST" id="alumni_add">
		<table class="formtable">
			<!--<tr><td>Alumni ID</td><td><input type="text" name="alumni_id" id="alumni_id" class="textbox" value="<?php echo @$object->alumni_id; ?>" readonly></td></tr> -->
			<tr><td>First Name</td><td><input type="text" name="fname" name="fname" value="<?php echo @$object->fname; ?>" class="textbox"></td></tr>
			<tr><td>Middle Name</td><td><input type="text" name="mname" name="mname" value="<?php echo @$object->mname; ?>" class="textbox"></td></tr>
			<tr><td>Last Name</td><td><input type="text" name="lname" name="lname" value="<?php echo @$object->lname; ?>" class="textbox"></td></tr>
			<tr><td>Gender</td><td><input type="text" name="gender" name="gender" value="<?php echo @$object->gender; ?>" class="textbox"></td></tr>
			<tr><td>Degree ID</td><td><input type="text" name="degree_id" name="degree_id" value="<?php echo @$object->degree_id; ?>" class="textbox"></td></tr>
			<tr><td>Branch ID</td><td><input type="text" name="branch_id" name="branch_id" value="<?php echo @$object->branch_id; ?>" class="textbox"></td></tr>
			<tr><td>Date Of Birth</td><td><input type="text" name="dob" name="dob" value="<?php echo @$object->dob; ?>" class="textbox"></td></tr>
			<tr><td>Marital status</td><td><input type="text" name="mar_status" name="mar_status" value="<?php echo @$object->mar_status; ?>" class="textbox"></td></tr>
			<tr><td>Marriage Anniversary</td><td><input type="text" name="mar_anniversary" name="mar_anniversary" value="<?php echo @$object->mar_anniversary; ?>" class="textbox"></td></tr>
			<tr><td>Photo</td><td><input type="text" name="photo" name="photo" value="<?php echo @$object->photo; ?>" class="textbox"></td></tr>
			<tr><td>House No.</td><td><input type="text" name="p_house_no" name="p_house_no" value="<?php echo @$object->p_house_no; ?>" class="textbox"></td></tr>
			<tr><td>Street Name</td><td><input type="text" name="p_street_name" name="p_street_name" value="<?php echo @$object->p_street_name; ?>" class="textbox"></td></tr>
			<tr><td>Area</td><td><input type="text" name="p_area" name="p_area" value="<?php echo @$object->p_area; ?>" class="textbox"></td></tr>
			<tr><td>City</td><td><input type="text" name="p_city" name="p_city" value="<?php echo @$object->p_city; ?>" class="textbox"></td></tr>
			<tr><td>State</td><td><input type="text" name="p_state" name="p_state" value="<?php echo @$object->p_state; ?>" class="textbox"></td></tr>
			<tr><td>Country</td><td><input type="text" name="p_country" name="p_country" value="<?php echo @$object->p_country; ?>" class="textbox"></td></tr>
			<tr><td>Postal Code</td><td><input type="text" name="p_postal_code" name="p_postal_code" value="<?php echo @$object->p_postal_code; ?>" class="textbox"></td></tr>
			<tr><td>Alternate House No.</td><td><input type="text" name="c_house_no" name="c_house_no" value="<?php echo @$object->c_house_no; ?>" class="textbox"></td></tr>
			<tr><td>Alternate Street Name</td><td><input type="text" name="c_street_name" name="c_street_name" value="<?php echo @$object->c_street_name; ?>" class="textbox"></td></tr>
			<tr><td>Alternate Area</td><td><input type="text" name="c_area" name="c_area" value="<?php echo @$object->c_area; ?>" class="textbox"></td></tr>
			<tr><td>Alternate City</td><td><input type="text" name="c_city" name="c_city" value="<?php echo @$object->c_city; ?>" class="textbox"></td></tr>
			<tr><td>Alternate State</td><td><input type="text" name="c_state" name="c_state" value="<?php echo @$object->c_state; ?>" class="textbox"></td></tr>
			<tr><td>Alternate Country</td><td><input type="text" name="c_country" name="c_country" value="<?php echo @$object->c_country; ?>" class="textbox"></td></tr>
			<tr><td>Alternate Postal Code</td><td><input type="text" name="c_postal_code" name="c_postal_code" value="<?php echo @$object->c_postal_code; ?>" class="textbox"></td></tr>
			<tr><td>Email 1</td><td><input type="text" name="email_1" name="email_1" value="<?php echo @$object->email_1; ?>" class="textbox"></td></tr>
			<tr><td>Email 2</td><td><input type="text" name="email_2" name="email_2" value="<?php echo @$object->email_2; ?>" class="textbox"></td></tr>
			<tr><td>Mobile 1</td><td><input type="text" name="mobile_1" name="mobile_1" value="<?php echo @$object->mobile_1; ?>" class="textbox"></td></tr>
			<tr><td>Mobile 2</td><td><input type="text" name="mobile_2" name="mobile_2" value="<?php echo @$object->mobile_2; ?>" class="textbox"></td></tr>
			<tr><td>Home Phone</td><td><input type="text" name="home_phone" name="home_phone" value="<?php echo @$object->home_phone; ?>" class="textbox"></td></tr>
			<tr><td>Work phone</td><td><input type="text" name="work_phone" name="work_phone" value="<?php echo @$object->work_phone; ?>" class="textbox"></td></tr>
			<tr><td>Year Of Passing</td><td><input type="text" name="year_of_passing" name="year_of_passing" value="<?php echo @$object->year_of_passing; ?>" class="textbox"></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>