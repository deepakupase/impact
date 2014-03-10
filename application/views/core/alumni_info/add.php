<html>
<head>
<title>Add Alumni</title>
</head>
<body>
	<h2>Add Alumni</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_alumni_info/add'); ?>" method="POST" id="alumni_add">
		<table class="formtable">
			<!--<tr><td>Alumni ID</td><td><input type="text" name="alumni_id" id="alumni_id" class="textbox" readonly></td></tr>  -->
			<tr><td>First Name</td><td><input type="text" name="fname" id="fname" class="textbox"></td></tr>
			<tr><td>Middle Name</td><td><input type="text" name="mname" id="mname" class="textbox" ></td></tr>
			<tr><td>Last Name</td><td><input type="text" name="lname" id="lname" class="textbox" ></td></tr>
			<tr><td>Gender</td><td><input type="text" name="gender" id="gender" class="textbox" ></td></tr>
			<tr><td>Degree ID</td><td><input type="text" name="degree_id" id="degree_id" class="textbox" ></td></tr>
			<tr><td>Branch ID</td><td><input type="text" name="branch_id" id="branch_id" class="textbox" ></td></tr>
			<tr><td>Date Of Birth</td><td><input type="text" name="dob" id="dob" class="textbox" ></td></tr>
			<tr><td>Marital Status</td><td><input type="text" name="mar_status" id="mar_status" class="textbox" ></td></tr>
			<tr><td>Marriage Anniversary</td><td><input type="text" name="mar_anniversary" id="mar_anniversary" class="textbox" ></td></tr>
			<tr><td>Photo</td><td><input type="text" name="photo" id="photo" class="textbox" ></td></tr>
			<tr><td>House No.</td><td><input type="text" name="p_house_no" id="p_house_no" class="textbox" ></td></tr>
			<tr><td>Street Name</td><td><input type="text" name="p_street_name" id="p_street_name" class="textbox" ></td></tr>
			<tr><td>Area</td><td><input type="text" name="p_area" id="p_area" class="textbox" ></td></tr>
			<tr><td>City</td><td><input type="text" name="p_city" id="p_city" class="textbox" ></td></tr>
			<tr><td>State</td><td><input type="text" name="p_state" id="p_state" class="textbox" ></td></tr>
			<tr><td>Country</td><td><input type="text" name="p_country" id="p_country" class="textbox" ></td></tr>
			<tr><td>Postal Code</td><td><input type="text" name="p_postal_code" id="p_postal_codelname" class="textbox" ></td></tr>
			<tr><td>Alternate House No.</td><td><input type="text" name="c_house_no" id="c_house_no" class="textbox" ></td></tr>
			<tr><td>Alternate Street Name</td><td><input type="text" name="c_street_name" id="c_street_name" class="textbox" ></td></tr>
			<tr><td>Alternate Area</td><td><input type="text" name="c_area" id="c_area" class="textbox" ></td></tr>
			<tr><td>Alternate City</td><td><input type="text" name="c_city" id="c_city" class="textbox" ></td></tr>
			<tr><td>Alternate State</td><td><input type="text" name="c_state" id="c_state" class="textbox" ></td></tr>
			<tr><td>Alternate Country</td><td><input type="text" name="c_country" id="c_country" class="textbox" ></td></tr>
			<tr><td>Alternate Postal Code</td><td><input type="text" name="c_postal_code" id="c_postal_codelname" class="textbox" ></td></tr>
			<tr><td>Email 1</td><td><input type="text" name="email_1" id="email_1" class="textbox" ></td></tr>
			<tr><td>Email 2</td><td><input type="text" name="email_2" id="email_2" class="textbox" ></td></tr>
			<tr><td>Mobile 1</td><td><input type="text" name="mobile_1" id="mobile_1" class="textbox" ></td></tr>
			<tr><td>Mobile 2</td><td><input type="text" name="mobile_2" id="mobile_2" class="textbox" ></td></tr>
			<tr><td>Home (Phone)</td><td><input type="text" name="home_phone" id="home_phone" class="textbox" ></td></tr>
			<tr><td>Work (Phone)</td><td><input type="text" name="work_phone" id="work_phone" class="textbox" ></td></tr>
			<tr><td>Year of Passing</td><td><input type="text" name="year_of_passing" name="year_of_passing" class="textbox"></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>