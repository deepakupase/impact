<html>
<head>
<title>All Alumni</title>
</head>
<body>
	<h2>All Alumni</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<p>Found <strong><?php echo count($objects); ?></strong> objects</p>
	<table border="1" class="datatable">
	<tr><th>Sr.</th><th>Alumni ID</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>First Name</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Middle Name</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Last Name</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Gender</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Degree ID</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Branch ID</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Date Of Birth</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Marital Status</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Marriage Anniversary</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Photo</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>House No.</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Street Name</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Area</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>City</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>State</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Country</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Postal Code</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Alternate House No.</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Alternate Street Name</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Alternate Area</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Alternate City</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Alternate State</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Alternate Country</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Alternate Postal Code</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Email 1</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Email 2</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Mobile 1</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Mobile 2</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Home Phone</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Work Phone</th><th>Action</th></tr>
	<tr><th>Sr.</th><th>Year Of Passing</th><th>Action</th></tr>
	<?php
		$i = 1;
		foreach($objects as $obj){
			$editurl = site_url('core/c_alumni_info/edit/'.$obj->alumni_id);
			$deleteurl = site_url('core/c_alumni_info/delete/'.$obj->alumni_id);
		//	echo "<tr><td>{$i}</td><td>{$obj->alumni_id}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->fname}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->mname}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->lname}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->gender}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->degree_id}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->branch_id}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->dob}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->mar_status}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->mar_anniversary}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->photo}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->p_house_no}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->p_street_name}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->p_area}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->p_city}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->p_state}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->p_country}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->p_postal_code}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->c_house_no}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->c_street_name}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->c_area}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->c_city}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->c_state}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->c_country}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->c_postal_code}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->email_1}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->email_2}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->mobile_1}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->mobile_2}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->home_phone}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->work_phone}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
	echo "<tr><td>{$i}</td><td>{$obj->year_of_passing}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
			$i = $i+1;
		}
	?>
	</table>
</body>
</html>