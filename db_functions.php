 <?php
 
function project_displayer($cxn,$result,$counter)
	{
	
						while($row = mysqli_fetch_assoc($result))
						{
							 
				if($counter <= 10)
				{
	   $query1="SELECT firstname,phone,lastname from alumni where alumniid='{$row['alumniid']}'";
	   																$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query1");
																	$row1 = mysqli_fetch_assoc($result1);
																	$name = $row1['firstname'];
																	$phone = $row1['phone'];
																	$name1 = $row1['lastname'];
	   $query2=" SELECT department from department where departmentid='{$row['departmentid']}'";
																	$result2 = mysqli_query($cxn,$query2) or     
																	die("Couldn't execute SELECT query");
																	$row2 = mysqli_fetch_assoc($result2);
																	$department = $row2['department'];
	   $query3="SELECT school from school where schoolid='{$row['schoolid']}'";
																	$result3 = mysqli_query($cxn,$query3) or     
																	die("Couldn't execute SELECT query");
																	$row3 = mysqli_fetch_assoc($result3);
																	$school = $row3['school'];
	   $query4="SELECT year from year where yearid='{$row['yearid']}'";
																	$result4 = mysqli_query($cxn,$query4) or     
																	die("Couldn't execute SELECT query");
																	$row4 = mysqli_fetch_assoc($result4);
																	$year = $row4['year'];
	   $query5="SELECT title,filename,type,price,downloads,verification,memberid from project where projectid='{$row['projectid']}'";
																	$result5 = mysqli_query($cxn,$query5) or     
																	die("Couldn't execute SELECT query");
																	$row5 = mysqli_fetch_assoc($result5);
																	$title = $row5['title'];
														$memberid = $row5['memberid'];
																	$filename = $row5['filename'];
																	$verification = $row5['verification'];
																	$type = $row5['type'];
																global $projectid;
																	$projectid = $row['projectid'];
																	$price = $row5['price'];
																	$downloads = $row5['downloads'];
		$query6="SELECT comment from comments where projectid='{$row['projectid']}'";
													$result6 = mysqli_query($cxn,$query6) or     
													die("Couldn't execute SELECT query");
													$counte= 0;		
		$query7="SELECT firstname,surname,picture from member where memberid='$memberid'";
															$result7= mysqli_query($cxn,$query7) or     
															die("Couldn't execute SELECT query");
															$row7 = mysqli_fetch_assoc($result7);
															$firstname = $row7['firstname'];
																$surname = $row7['surname'];
															$picture = $row7['picture'];
			$query8="SELECT protype from protype where protypeid='{$row['protypeid']}'";
			$result8= mysqli_query($cxn,$query8) or     
			die("Couldn't execute SELECT query");
			$row8 = mysqli_fetch_assoc($result8);
			$protype = $row8['protype'];
																													
													
		while($row6 = mysqli_fetch_assoc($result6))
		{
			$counte= $counte + 1;
		}
		if($protype == "UnderGraduate")
		{
			$protype ="<a href='undergraduate.php' style='text-align:right;'> $protype</a>";
		}
		elseif($protype == "Masters")
		{
			$protype ="<a href='masters.php' style='text-align:right;'> $protype</a>";
		}
		elseif($protype == "PHD")
		{
			$protype ="<a href='phd.php' style='text-align:right;'> $protype</a>";
		}
		elseif($protype == "Other")
		{
			$protype ="<a href='others.php' style='text-align:right;'> $protype</a>";
		}
																	
																	
																	echo"  
																	<div class='col-md-12' style='background-color:white;' >
																	<div class='col-md-10' align='left' >
																	<span><img src='photo/$picture' href='photo/$picture' class='img-square' alt='$firstname' class='img-circle' width='50' height='50' /></span>
																	<span><a href='show_profile.php?id=$memberid' style='align:left;'>$firstname  $surname</a></span> 
																	<br>
																	</div>
																	";
																	if($type=="pdf")
																	{
																			echo"<div class='col-md-2'align='right'>
																		<img src='index.jpg' class='img-circle' alt='$title' class='img-circle' width='50' height='50'>
																		</div>";
																	}
																	else
																	{
																		echo"<div class='col-md-2'align='right'>
																		<img src='indexx.jpg' class='img-circle' alt='$title' class='img-circle' width='50' height='50'>
																		</div>";
																	}
																	echo" 
																	
						
																	
																<a  href='projectpage.php?id=$projectid' style='color:black;'>
																
																	
																	<table class='table table-bordered table-sm table-condensed  table-striped'>
																		<tr><td><strong>Title: </strong></td><td>$title</td></tr>
																		<tr><td><strong>Year: </strong></td><td>$year</td></tr>
																		<tr><td><strong>Department: </strong></td><td> $department</td></tr>
																		<tr><td><strong>School: </strong></td><td>$school</td></tr>
																		<tr><td><strong>Author:</strong></td><td> $name &nbsp; $name1</td></tr>
																		<tr><td><font color='darkblue'> <strong>$downloads Downloads</strong> & 
																			<strong>$counte Comments</strong></font></td><td>$protype</td>
																	</table>
																	
																	</a>
																	";
																	if($price == 0)
																	{
																		$price  = "Free";
																	}
																	else
																	{
																
																	  $price = "<img src='images/naira.jpg' class='img-circle' alt='Cinque Terre' width='20' height='20'>".$price;
																	 
																	}
																	if($verification == 0)
																	{
																		$verification = "Not Verified <font color='red'><i class='glyphicon glyphicon-warning-sign'></i></font>";
																	}
																	else
																	{
																		$verification = "Verified <font color='green'><i class='glyphicon glyphicon-ok'></i></font>";
																	}
																	echo"<div class='col-md-12' align='left'>
																			<strong>$price</strong><br>
																			<strong>$verification</strong><br>
																		</div>
																		<div class='col-md-12' align='right'>
																			<span><a href='download.php?id=$projectid' class='btn btn-success btn-md' role='button' style='width:40%;' >
																			<i class='fa fa-download'></i> Download
																			</a>
																			</span>
																			<span><a href='tel:$phone' class='btn btn-primary btn-md' role='button' download style='width:40%;'>
																			<i class='fa fa-phone'></i> Call Author
																			</a>
																			</span>
																		</div></div>
							<div class='col-md-12' style='background-color: #f8f8f8;  border-color: #f8f8f8;'><br><br></div>
																";
																$counter = $counter + 1;
				}											
			}
			
			return;
}

function paid_free_project_displayer($cxn,$row,$counter)
	{
	
	   $query1="SELECT firstname,phone,lastname from alumni where alumniid='{$row['alumniid']}'";
	   																$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query1");
																	$row1 = mysqli_fetch_assoc($result1);
																	$name = $row1['firstname'];
																	$phone = $row1['phone'];
																	$name1 = $row1['lastname'];
	   $query2=" SELECT department from department where departmentid='{$row['departmentid']}'";
																	$result2 = mysqli_query($cxn,$query2) or     
																	die("Couldn't execute SELECT query");
																	$row2 = mysqli_fetch_assoc($result2);
																	$department = $row2['department'];
	   $query3="SELECT school from school where schoolid='{$row['schoolid']}'";
																	$result3 = mysqli_query($cxn,$query3) or     
																	die("Couldn't execute SELECT query");
																	$row3 = mysqli_fetch_assoc($result3);
																	$school = $row3['school'];
	   $query4="SELECT year from year where yearid='{$row['yearid']}'";
																	$result4 = mysqli_query($cxn,$query4) or     
																	die("Couldn't execute SELECT query");
																	$row4 = mysqli_fetch_assoc($result4);
																	$year = $row4['year'];
	   $query5="SELECT title,filename,type,price,downloads,verification,memberid from project where projectid='{$row['projectid']}'";
																	$result5 = mysqli_query($cxn,$query5) or     
																	die("Couldn't execute SELECT query");
																	$row5 = mysqli_fetch_assoc($result5);
																	$title = $row5['title'];
														$memberid = $row5['memberid'];
																	$filename = $row5['filename'];
																	$verification = $row5['verification'];
																	$type = $row5['type'];
																global $projectid;
																	$projectid = $row['projectid'];
																	$price = $row5['price'];
																	global $downloads;
																	$downloads = $row5['downloads'];
		$query6="SELECT comment from comments where projectid='{$row['projectid']}'";
													$result6 = mysqli_query($cxn,$query6) or     
													die("Couldn't execute SELECT query");
													$counte= 0;		
		$query7="SELECT firstname,surname,picture from member where memberid='$memberid'";
															$result7= mysqli_query($cxn,$query7) or     
															die("Couldn't execute SELECT query");
															$row7 = mysqli_fetch_assoc($result7);
															$firstname = $row7['firstname'];
																$surname = $row7['surname'];
															$picture = $row7['picture'];
			$query8="SELECT protype from protype where protypeid='{$row['protypeid']}'";
			$result8= mysqli_query($cxn,$query8) or     
			die("Couldn't execute SELECT query");
			$row8 = mysqli_fetch_assoc($result8);
			$protype = $row8['protype'];
																													
													
		while($row6 = mysqli_fetch_assoc($result6))
		{
			$counte= $counte + 1;
		}
		if($protype == "UnderGraduate")
		{
			$protype ="<a href='undergraduate.php' style='text-align:right;'> $protype</a>";
		}
		elseif($protype == "Masters")
		{
			$protype ="<a href='masters.php' style='text-align:right;'> $protype</a>";
		}
		elseif($protype == "PHD")
		{
			$protype ="<a href='phd.php' style='text-align:right;'> $protype</a>";
		}
		elseif($protype == "Other")
		{
			$protype ="<a href='others.php' style='text-align:right;'> $protype</a>";
		}
																	
																	
																	echo"  
																	<div class='col-md-12' style='background-color:white;' >
																	<div class='col-md-10' align='left' >
																	<span><img src='photo/$picture' href='photo/$picture' class='img-square' alt='$firstname' class='img-circle' width='50' height='50' /></span>
																	<span><a href='show_profile.php?id=$memberid' style='align:left;'>$firstname  $surname</a></span> 
																	<br>
																	</div>
																	";
																	if($type=="pdf")
																	{
																			echo"<div class='col-md-2' align='left'>
																			<img src='index.jpg' class='img-circle' alt='$title' class='img-circle' width='50' height='50'>
																				</div>";
																	}
																	else
																	{
																		echo"<div class='col-md-2'align='right'>
																		<img src='indexx.jpg' class='img-circle' alt='$title' class='img-circle' width='50' height='50'>
																		</div>";
																	}
																	echo" 
																	
						
																	
																<a  href='projectpage.php?id=$projectid' style='color:black;'>
																
																	
																	<table class='table table-bordered table-sm table-condensed  table-striped'>
																		<tr><td><strong>Title: </strong></td><td>$title</td></tr>
																		<tr><td><strong>Year: </strong></td><td>$year</td></tr>
																		<tr><td><strong>Department: </strong></td><td> $department</td></tr>
																		<tr><td><strong>School: </strong></td><td>$school</td></tr>
																		<tr><td><strong>Author:</strong></td><td> $name &nbsp; $name1</td></tr>
																		<tr><td><font color='darkblue'> <strong>$downloads Downloads</strong> & 
																			<strong>$counte Comments</strong></font></td><td>$protype</td>
																	</table>
																	
																	</a>
																	";
																	if($price == 0)
																	{
																		$price  = "Free";
																	}
																	else
																	{
																
																	  $price = "<img src='images/naira.jpg' class='img-circle' alt='Cinque Terre' width='20' height='20'>".$price;
																	 
																	}
																	if($verification == 0)
																	{
																		$verification = "Not Verified <font color='red'><i class='glyphicon glyphicon-warning-sign'></i></font>";
																	}
																	else
																	{
																		$verification = "Verified <font color='green'><i class='glyphicon glyphicon-ok'></i></font>";
																	}
																	echo"<div class='col-md-12' align='left'>
																			<strong>$price</strong><br>
																			<strong>$verification</strong><br>
																		</div>
																		<div class='col-md-12' align='right'>
																			<span><a href='download.php?id=$projectid' class='btn btn-success btn-md' role='button' style='width:40%;' >
																			<i class='fa fa-download'></i> Download
																			</a>
																			</span>
																			<span><a href='tel:$phone' class='btn btn-primary btn-md' role='button' download style='width:40%;'>
																			<i class='fa fa-phone'></i> Call Author
																			</a>
																			</span>
																		</div></div>
							<div class='col-md-12' style='background-color: #f8f8f8;  border-color: #f8f8f8;'><br><br></div>
																";
																
													
		
			
			return;
}



function display_project($cxn,$entries)
	{
		if($entries==0)
		{
			echo"<div class='col-md-12' style='text-align:center'><strong>No Projects Added Yet <br></strong></div>";


		}
		else
		{
			
	
		$query = "SELECT * FROM entry order by entryid DESC"; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				 /* Display results in a table */
				$counter = 1;
				
				project_displayer($cxn,$result,$counter);
		}
	
		return;
	}
	
function insert_project($cxn,$firstname,$lastname,$phone,$title,$filepath,$year,$department,$school,$type)
	{
			if(empty($filepath))
			{
				echo"<div class='col-md-12' style='text-align:center'><strong>NOT ALLOWED!!,  there was a problem with the file you uploaded. <br><a href='addproject.php' class='btn btn-primary' role='button'>Back to Add project</a></strong></div>";


			}
			else 
			{
				
//1//
				$query11="SELECT * from alumni where  phone='$phone' ";
																	$result11= mysqli_query($cxn,$query11) or     
																	die("Couldn't execute SELECT query111");
																	$ntype = mysqli_num_rows($result11);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{   
				 $query1="insert into alumni (firstname,lastname,phone) values('$firstname','$lastname','$phone')";
	   																$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query1");
														
													$query = "SELECT alumniid from alumni  order by alumniid desc limit 1";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query8"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $alumniid;
													  $alumniid = $row['alumniid'];
							}
							else
							{
								$query11="SELECT  alumniid from alumni where firstname='$firstname' and lastname='$lastname' and phone='$phone' ";
																	$result11= mysqli_query($cxn,$query11) or     
																	die("Couldn't execute SELECT query121");
																		$row = mysqli_fetch_assoc($result11);
													  
													  global $alumniid;
													  $alumniid = $row['alumniid'];
								
							}
							
							
//2//
							
							
							
							
			$query22="SELECT * from project where title='$title' and filename='$filepath'  ";
																	$result22= mysqli_query($cxn,$query22) or     
																	die("Couldn't execute SELECT query22");
																	$ntype = mysqli_num_rows($result22);
						if ($ntype < 1)    
						//if new type is not in table  
							{   
																														
	   $query2=" insert into project (title,filename,type) values('$title','$filepath','$type')";
																	$result2 = mysqli_query($cxn,$query2) or     
																	die("Couldn't execute SELECT query2");
																		$query = "SELECT projectid from project order by projectid desc limit 1";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query9"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $projectid;
													   $projectid= $row['projectid'];
							}	
							else
							{
								$query = "SELECT projectid from project where title='$title' and filename='$filepath' ";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query9"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $projectid;
													   $projectid= $row['projectid'];
								
							}	
							
							
//3//


							
							
									$query = "SELECT yearid from year where year='$year'";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query10"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $yearid;
													   $yearid= $row['yearid'];
							
								


//4//								


					
								$query = "SELECT departmentid from department where department='$department'";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query11"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $departmentid;
													   $departmentid= $row['departmentid'];
							
						
						
						
						
//5//


			
								$query = "SELECT schoolid from school where school='$school'";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query12"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $schoolid;
													   $schoolid= $row['schoolid'];
							
							
							
	//6//
	
	
	
		
							
							//7//
								$query77="SELECT *  from entry where alumniid='$alumniid' and yearid='$yearid' and departmentid='$departmentid' and schoolid='$schoolid' and projectid='$projectid' ";
							$result77= mysqli_query($cxn,$query77) or     
							die("Couldn't execute SELECT query77");
					$ntype = mysqli_num_rows($result77);
					   
					if ($ntype < 1)    
						//if new type is not in table  
							{   
							 $query7="INSERT INTO entry(alumniid,yearid,departmentid,schoolid,projectid) VALUES ('$alumniid','$yearid','$departmentid','$schoolid','$projectid')";	
																		$result7 = mysqli_query($cxn,$query7) or     
																			die("Couldn't execute SELECT query7");
									echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>Project Added</strong></div>";

							}
						else 
								{
echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>That Project's entry already exist</strong></div>";

								}
											
																												 
			}
			return;
	}
	
function select_school($cxn)
{
		  
	 $query = "SELECT school FROM school order by school";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			
			while($row = mysqli_fetch_assoc($result))
					{
						extract($row);
						
						echo"<option>$school</option>";
					}
			
  return;
}

function select_year($cxn)
{
		  
	 $query = "SELECT year FROM year order by year DESC";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			while($row = mysqli_fetch_assoc($result))
					{
						extract($row);
						
						echo"<option>$year</option>";
					}
			
  return;
}

function count_projects($cxn)
{
		$query77="SELECT *  from entry";
														$result77= mysqli_query($cxn,$query77) or     
							die("Couldn't execute SELECT query77");
					$ntype = mysqli_num_rows($result77);
					   
					    
													  if($ntype<=0)
													  {
														  $ntype = 0;
														  global  $entries;
													  $entries = $ntype;
													  }
													  else
													  {
														  
													
													  global  $entries;
													  $entries = $ntype;
													  }
													  return;
													 
}

function select_department($cxn)
{
		  
	 $query = "SELECT department FROM department order by department";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			
			while($row = mysqli_fetch_assoc($result))
					{
						extract($row);
						
						echo"<option>$department</option>";
					}
			
  return;
}

function insert_alumni($cxn,$firstname,$lastname,$phone)
{
	
		$query11="SELECT * from alumni where  phone='$phone' ";
																	$result11= mysqli_query($cxn,$query11) or     
																	die("Couldn't execute SELECT query111");
																	$ntype = mysqli_num_rows($result11);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{   
				 $query1="insert into alumni (firstname,lastname,phone) values('$firstname','$lastname','$phone')";
	   																$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query1");
														
													$query = "SELECT alumniid from alumni  order by alumniid desc limit 1";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query8"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $alumniid;
													  $alumniid = $row['alumniid'];
							}
							else
							{
								$query11="SELECT  alumniid from alumni where  phone='$phone'";
																	$result11= mysqli_query($cxn,$query11) or     
																	die("Couldn't execute SELECT query121");
																		$row = mysqli_fetch_assoc($result11);
													  
													  global $alumniid;
													  $alumniid = $row['alumniid'];
								
							}
							return;
}

function insert_projects($cxn,$title,$filepath,$type,$price,$contents,$youtube,$description,$facebook,$memberid)
{
	
	date_default_timezone_set('Africa/Lagos');
													$time = date("h:i:sa");
													$date = date("d/m/y");
	
	if(empty($filepath))
										{
											echo"<div class='col-md-12' style='text-align:center'><strong>NOT ALLOWED!!,  there was a problem with the file you uploaded. <br>Please try Uploading In DOC or DOCX format<br><a href='addproject.php' class='btn btn-primary' role='button'>Back to Add project</a></strong></div>";


										}
										else 
										{
								
	
		$query22="SELECT * FROM project where title='$title' and filename='$filepath'";
																	$result22= mysqli_query($cxn,$query22) or     
																	die("Couldn't execute SELECT query2222");
																	$ntype = mysqli_num_rows($result22);
						if ($ntype < 1)    
						//if new type is not in table  
							{   
																														
	   $query2=" insert into project (title,filename,type,price,contents,youtube,description,facebook,memberid,time,date)  values('$title','$filepath','$type','$price','$contents','$youtube','$description','$facebook','$memberid','$time','$date')";
																	$result2 = mysqli_query($cxn,$query2) or     
																	die("Couldn't execute SELECT query2");
																		$query = "SELECT projectid from project order by projectid desc limit 1";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query9"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $projectid;
													   $projectid= $row['projectid'];
							}	
							else
							{
								$query = "SELECT projectid from project where title='$title' and filename='$filepath' ";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query9"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $projectid;
													   $projectid= $row['projectid'];
								
							}	
										}
							return;
}

function select_yearid($cxn,$year)
{
	
									$query = "SELECT yearid from year where year='$year'";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query10"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $yearid;
													   $yearid= $row['yearid'];
													   return;
}

function select_departmentid($cxn,$department)
{
	$query = "SELECT departmentid from department where department='$department'";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query11"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $departmentid;
													   $departmentid= $row['departmentid'];
													   return;
}

function select_schoolid($cxn,$school)
{
		$query = "SELECT schoolid from school where school='$school'";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query12"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $schoolid;
													   $schoolid= $row['schoolid'];
							return;
}

function entry($cxn,$alumniid,$yearid,$departmentid,$schoolid,$projectid,$choiceid,$protypeid,$priceid)
{
	$query77="SELECT *  from entry where alumniid='$alumniid' and yearid='$yearid' and departmentid='$departmentid' and schoolid='$schoolid' and projectid='$projectid' and choiceid='$choiceid'";
							$result77= mysqli_query($cxn,$query77) or     
							die("Couldn't execute SELECT query77");
					$ntype = mysqli_num_rows($result77);
					   
					if ($ntype < 1)    
						//if new type is not in table  
							{   
							 $query7="INSERT INTO entry(alumniid,yearid,departmentid,schoolid,projectid,choiceid,protypeid,priceid) VALUES ('$alumniid','$yearid','$departmentid','$schoolid','$projectid','$choiceid','$protypeid','$priceid')";	
																		$result7 = mysqli_query($cxn,$query7) or     
																			die("Couldn't execute SELECT query7");
																				echo"
	<script type='text/javascript'>
    window.location = 'success.php';
</script>
";
									

							}
						else 
								{
								$error = "That Project already exist";
									echo"
	<script type='text/javascript'>
    window.location = 'failure.php?error=$error';
</script>
";
										
								}
								return;
}

function search_members($cxn,$search)
 {
	if(empty($search))
	{
		echo"<div class='col-md-12' style='text-align:center'><strong><br>There was no search entry. <br><br><a href='index.php' class='btn btn-primary' role='button'>Back to Home</a></strong></div>";

	}
	else
	{
		$search = filter_var($search, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		
		$search = explode(" ",$search);
		$size = sizeof($search) - 1;
		$firstnames = array();
		$surnames = array();
		
		for($i=0;$i<=sizeof($search);$i++)
		{
			if($i <= $size)
			{
	
			
			
				$query = "SELECT memberid FROM member WHERE firstname LIKE '%$search[$i]%'";
							$result= mysqli_query($cxn,$query) or     
								die("Couldn't execute SELECT querykk");
								$ntype = mysqli_num_rows($result);
								
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{
							}
					else	
					{
						$row = mysqli_fetch_assoc($result);
						array_push($firstnames,$row['memberid']);
							
					}
			}
		}
		
		for($i=0;$i<=sizeof($search);$i++)
		{
			if($i <= $size)
			{
			
			
				$query = "SELECT memberid FROM member WHERE surname LIKE '%$search[$i]%'";
							$result= mysqli_query($cxn,$query) or     
								die("Couldn't execute SELECT querykk");
								$ntype = mysqli_num_rows($result);
								
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{
							}
					else	
					{
						$row = mysqli_fetch_assoc($result);
						array_push($surnames,$row['memberid']);
							
					}
			}
		}
			$the_int = array_intersect($surnames,$firstnames);
		
			$the_diff = array_diff($firstnames,$surnames);
			$the_diff2 = array_diff($surnames,$firstnames);
			
		
			
			foreach($the_int as $value)
			{
				$query = "SELECT * FROM member WHERE memberid='$value'";
							$result= mysqli_query($cxn,$query) or     
								die("Couldn't execute SELECT querykk");
								$ntype = mysqli_num_rows($result);
					
							while($row = mysqli_fetch_assoc($result))
										{
											$firstname = $row['firstname'];
											$surname = $row['surname'];
											$picture = $row['picture'];
											$school = $row['school'];
											$memberid = $row['memberid'];
														
								if(empty($school))
								{
									
								}
								else
								{
									$school = "<br> Studied at $school";
								}    														
												echo"
												<div class='col-md-12' >
   <span> <img src='photo/$picture' href='photo/$picture' class='img-square' alt='$firstname on Jarazone' width='100px' height='100px' ></span><br>
	<span><a href='show_profile.php?id=$memberid' style='color:black;' ><strong>$firstname  $surname</strong></a></span>
	<span>$school</span>
												</div>
												<div class='col-md-12' >&nbsp;</div>
												";
										}
					}
					
		foreach($the_diff as $value)
			{
				$query = "SELECT * FROM member WHERE memberid='$value'";
							$result= mysqli_query($cxn,$query) or     
								die("Couldn't execute SELECT querykk");
								$ntype = mysqli_num_rows($result);
					
							while($row = mysqli_fetch_assoc($result))
										{
											$firstname = $row['firstname'];
											$surname = $row['surname'];
											$picture = $row['picture'];
											$school = $row['school'];
											$memberid = $row['memberid'];
														
								if(empty($school))
								{
									
								}
								else
								{
									$school = "<br> Studied at $school";
								}    														
												echo"
												<div class='col-md-12' >
   <span> <img src='photo/$picture' href='photo/$picture' class='img-square' alt='$firstname on Jarazone' width='100px' height='100px' ></span><br>
	<span><a href='show_profile.php?id=$memberid' style='color:black;' ><strong>$firstname  $surname</strong></a></span>
	<span>$school</span>
												</div>
												<div class='col-md-12' >&nbsp;</div>
												";
										}
					}
					
			foreach($the_diff2 as $value)
			{
				$query = "SELECT * FROM member WHERE memberid='$value'";
							$result= mysqli_query($cxn,$query) or     
								die("Couldn't execute SELECT querykk");
								$ntype = mysqli_num_rows($result);
					if ($ntype < 1)    
						//if new type is not in table  
							{
								echo"<strong>No Jarazone Members Matching Search Results</strong>";
							}
							else
							{
							while($row = mysqli_fetch_assoc($result))
										{
											$firstname = $row['firstname'];
											$surname = $row['surname'];
											$picture = $row['picture'];
											$school = $row['school'];
											$memberid = $row['memberid'];
														
								if(empty($school))
								{
									
								}
								else
								{
									$school = "<br> Studied at $school";
								}    														
												echo"
												<div class='col-md-12' >
   <span> <img src='photo/$picture' href='photo/$picture' class='img-square' alt='$firstname on Jarazone' width='100px' height='100px' ></span><br>
	<span><a href='show_profile.php?id=$memberid' style='color:black;' ><strong>$firstname  $surname</strong></a></span>
	<span>$school</span>
												</div>
												<div class='col-md-12' >&nbsp;</div>
												";
										}
							}
		
					}
		}
		

return;	
	}
	
	
function search_projects($cxn,$search)
 {
	if(empty($search))
	{
		echo"<div class='col-md-12' style='text-align:center'><strong><br>There was no search entry. <br><br><a href='index.php' class='btn btn-primary' role='button'>Back to Home</a></strong></div>";

	}
	else
	{
		$search = filter_var($search, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		
				$query1 = "SELECT projectid FROM project WHERE title LIKE '%$search%'";
							$result1= mysqli_query($cxn,$query1) or     
								die("Couldn't execute SELECT querykk");
								$ntype = mysqli_num_rows($result1);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{
								echo"<strong>No Projects Matching Search Results</strong>";
							}
					else	
					{
					$counter = 0;
							while($row1 = mysqli_fetch_assoc($result1))
										{
											
										
											$query = "SELECT * FROM entry where projectid='{$row1['projectid']}'"; 
														$result = mysqli_query($cxn,$query)   
															or die ("couldn't execute query.");		
															$row = mysqli_fetch_assoc($result);
															
															
															
															paid_free_project_displayer($cxn,$row,$counter);
															$counter = $counter + 1;
											
											
										}
					}	
									
	
	}
return;	
	}	
	
	
function search_dept_projects($cxn,$search,$id)
 {
	if(empty($search))
	{
		echo"<div class='col-md-12' style='text-align:center'><strong><br>There was no search entry. <br><br><a href='index.php' class='btn btn-primary' role='button'>Back to Home</a></strong></div>";

	}
	else
	{
		$search = filter_var($search, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		
				$query1 = "SELECT projectid FROM project WHERE title LIKE '%$search%'";
							$result1= mysqli_query($cxn,$query1) or     
								die("Couldn't execute SELECT querykk");
								$ntype = mysqli_num_rows($result1);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{
								echo"<strong>No Projects Matching Search Results</strong>";
							}
					else	
					{
					$counter = 0;
					$check = 0;
							while($row1 = mysqli_fetch_assoc($result1))
										{
											
											
											
											$query = "SELECT * FROM entry where projectid='{$row1['projectid']}' and departmentid='$id'"; 
														$result = mysqli_query($cxn,$query)   
															or die ("couldn't execute query.");	
														$ntype = mysqli_num_rows($result);
													//   
														if ($ntype < 1)    
															//if new type is not in table  
																{
																	
																}
														else	
														{
															$check = $check + 1;
															$row = mysqli_fetch_assoc($result);
															
															
															
															paid_free_project_displayer($cxn,$row,$counter);
															$counter = $counter + 1;
														}
											
											
										}
										if($check == 0)
										{
											echo"<strong>No Projects Matching Search Results</strong>";
										}
					}	
									
	
	}
return;	
	}	
	
	
function search_dept_type_projects($cxn,$search,$id,$typeid)
 {
	if(empty($search))
	{
		echo"<div class='col-md-12' style='text-align:center'><strong><br>There was no search entry. <br><br><a href='index.php' class='btn btn-primary' role='button'>Back to Home</a></strong></div>";

	}
	else
	{
		$search = filter_var($search, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		
				$query1 = "SELECT projectid FROM project WHERE title LIKE '%$search%'";
							$result1= mysqli_query($cxn,$query1) or     
								die("Couldn't execute SELECT querykk");
								$ntype = mysqli_num_rows($result1);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{
								echo"<strong>No Projects Matching Search Results</strong>";
							}
					else	
					{
					$counter = 0;
					$check = 0;
							while($row1 = mysqli_fetch_assoc($result1))
										{
											
											
											
											$query = "SELECT * FROM entry where projectid='{$row1['projectid']}' and departmentid='$id' and protypeid='$typeid'"; 
														$result = mysqli_query($cxn,$query)   
															or die ("couldn't execute query.");	
														$ntype = mysqli_num_rows($result);
													//   
														if ($ntype < 1)    
															//if new type is not in table  
																{
																	
																}
														else	
														{
															$check = $check + 1;
															$row = mysqli_fetch_assoc($result);
															
															
															
															paid_free_project_displayer($cxn,$row,$counter);
															$counter = $counter + 1;
														}
											
											
										}
										if($check == 0)
										{
											echo"<strong>No Projects Matching Search Results</strong>";
										}
					}	
									
	
	}
return;	
	}		

function project_page($cxn,$id)
{
	$query = "SELECT * FROM entry where projectid='$id'"; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				 /* Display results in a table */
				 $row = mysqli_fetch_assoc($result);
				   $query1="SELECT firstname,phone,lastname from alumni where alumniid='{$row['alumniid']}'";
	   																$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query1");
																	$row1 = mysqli_fetch_assoc($result1);
																	$name = $row1['firstname'];
																	$phone = $row1['phone'];
																	$name1 = $row1['lastname'];
	   $query2=" SELECT department from department where departmentid='{$row['departmentid']}'";
																	$result2 = mysqli_query($cxn,$query2) or     
																	die("Couldn't execute SELECT query");
																	$row2 = mysqli_fetch_assoc($result2);
																	$department = $row2['department'];
		$query5 = "select entryid from entry where departmentid='{$row['departmentid']}'";
							$result5= mysqli_query($cxn,$query5) or     
								die("Couldn't execute SELECT query5");
								$similar=0;
								$dept = $row['departmentid'];
							while($row5 = mysqli_fetch_assoc($result5))
										{
																		
													$similar = $similar + 1;
										}
	   $query3="SELECT school from school where schoolid='{$row['schoolid']}'";
																	$result3 = mysqli_query($cxn,$query3) or     
																	die("Couldn't execute SELECT query");
																	$row3 = mysqli_fetch_assoc($result3);
																	$school = $row3['school'];
	   $query4="SELECT year from year where yearid='{$row['yearid']}'";
																	$result4 = mysqli_query($cxn,$query4) or     
																	die("Couldn't execute SELECT query");
																	$row4 = mysqli_fetch_assoc($result4);
																	$year = $row4['year'];
	   $query5="SELECT description,contents,facebook,youtube,title,filename,type,downloads,price from project where projectid='{$row['projectid']}'";
																	$result5 = mysqli_query($cxn,$query5) or     
																	die("Couldn't execute SELECT query");
																	$row5 = mysqli_fetch_assoc($result5);
																	$title = $row5['title'];
																	
																	$description = $row5['description'];
																	$description = str_replace("<p>","&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$description);
																	$description = nl2br($description);
																	
																	
																	$contents = $row5['contents'];
																	$contents = nl2br($contents);
																	
																	$facebook = $row5['facebook'];
																	$youtube = $row5['youtube'];
														
																	$filename = $row5['filename'];
																	
																	$type = $row5['type'];
																	$downloads= $row5['downloads'];
																	$price = $row5['price'];
		$query6="SELECT comment from comments where projectid='{$row['projectid']}'";
		$result6 = mysqli_query($cxn,$query6) or     
		die("Couldn't execute SELECT query");
		$counter= 0;
		while($row6 = mysqli_fetch_assoc($result6))
		{
			$counter= $counter + 1;
		}
																	echo" <div class='col-md-12 ' align='center'>
																	";
																	
																
																	if($type=="pdf")
																	{
																			echo"<h1><img src='index.jpg' class='img-circle' alt='$title' class='img-circle' width='100' height='50'><h1>$title</h1>";
																	}
																	else
																	{
																		echo"<img src='indexx.jpg' class='img-circle' alt='$title' class='img-circle' width='100' height='50'><h1>$title</h1>";
																	}
																	
																	echo"
																	</div>";
																	if($price == 0)
																	{
																		$price  = "Free";
																	}
																	else
																	{
																
																	  $price = "<img src='images/naira.jpg' class='img-circle' alt='Cinque Terre' width='20' height='20'>".$price;
																	 
																	}
																	echo"<div class='col-md-12' align='center'><strong>Price Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$price</strong></div>
						<br><br><br><div class='col-md-12' align='center'>
																	<a href='download.php?id=$id' class='btn btn-success btn-md' role='button' ><i class='fa fa-download'></i> Download</a>
																	<a href='tel:$phone' class='btn btn-primary btn-md' role='button' download><i class='fa fa-phone'></i> Call Author</a>
																	</div>
																	<div class='col-md-4' align='center'> 
																	</div>
																<div class='col-md-4' align='center'> 
																<br><br>
																<table class='table table-bordered table-sm table-condensed  table-striped'>
    <thead>
	
      <tr>
        <th style='text-align:center;'><h5><strong>$downloads Downloads</strong></h5></th>
        <th style='text-align:center;'><h5><strong>$counter Comments</strong></h5></th>
        <th style='text-align:center;'><h5><strong><a href='search_department.php?id=$dept' style='color:black;' > $similar Similar</a></strong></h5></th>
      </tr>
    </thead>
	</table>
	<table class='table table-bordered table-sm table-condensed  table-striped'>
	
																	<tr><td><strong>Year: </strong></td><td>$year</td></tr>
																	<tr><td><strong>Department: </strong></td><td> $department</td></tr>
																	<tr><td><strong>School: </strong></td><td>$school</td></tr>
																	<tr><td><strong>Author:</strong></td><td> $name &nbsp; $name1</td></tr>
<tr><td></td><td><div class='fb-like' data-href='https://jarazone.com/' data-width='5px' data-layout='standard' data-action='like' data-size='small' data-show-faces='true' data-share='true'></div></td></tr>
																	</table></div>
																		<div class='col-md-4' align='center'> 
																	</div>
																	</div>

																	<br>
																
																		";
	if(empty($description))
	{
		
	}
	else
	{
		echo"<a data-toggle='collapse' align='left'href='#description' style='width:100%;  'class='btn btn-default btn-md' role='button'>Abstract <i class='fa fa-caret-down'></i></a><br></div>
				<div id='description' class='collapse'  style='text-align:left;'>
		<div class='col-md-12'><strong>Abstract:</strong></div>
			<div class='well well-md col-md-12' align='left'><p>$description</p></div><br><br>
			</div>
			";
	}
	
	if(empty($contents))
	{
		
	}
	else
	{
		echo"<a data-toggle='collapse' align='left'href='#content' style='width:100%;  'class='btn btn-default btn-md' role='button'>Content <i class='fa fa-caret-down'></i></a><br></div>
				<div id='content' class='collapse'  style='text-align:left;'>
		<div class='col-md-12' ><strong>Table Of Conetnts</strong></div>
			<div class='well well-md col-md-12' align='left'>$contents</div><br><br>
			</div>
			<div class='col-md-12' align='center'>&nbsp;&nbsp;&nbsp;</div>
			";
	}
	if(empty($facebook))
	{
		
	}
	else
	{
		echo"
<div class='col-md-12' align='center'><strong>Facebook Page</strong></div>
			<div class='col-md-12' align='center'>
<div class='fb-page' data-href='$facebook' data-tabs='timeline' data-small-header='false' data-adapt-container-width='true' data-hide-cover='false' data-show-facepile='true'><blockquote cite='$facebook' class='fb-xfbml-parse-ignore'><a href='$facebook'>$title</a></blockquote></div>
			</div><br><br>
			<div class='col-md-12' align='center'>&nbsp;&nbsp;&nbsp;</div>
			";
	}
	
		if(empty($youtube))
	{
		
	}
	else
	{
		echo
		"
		<div class='col-md-12' align='center'><strong>Youtube Video</strong></div>
		<div class='col-md-4' align='center'></div>
		<div class='col-md-4' align='center'>$youtube</div>
		<div class='col-md-4' align='center'></div>
		<br><br>
			";
	}
																		return;
}

function get_comments($cxn)
{
	$query = "SELECT * FROM comments order by commentid DESC"; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				 /* Display results in a table */
				
				
				
						while($row = mysqli_fetch_assoc($result))
						{
							
							$name = $row['name'];
							$comment = $row['comment'];
							$time = $row['time'];
							echo"<div class='col-md-4'>Posted By: $name</div>";
							echo"<div class='col-md-8'>$time</div>";
							echo"<div class='col-md-12'>$comment</div><br>";
						}
							
}


function get_comment($cxn)
{
	$query = "SELECT * FROM comments order by commentid DESC LIMIT 1"; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				 /* Display results in a table */
				
				
				
						$row = mysqli_fetch_assoc($result);
						
							
							$name = $row['name'];
							$comment = $row['comment'];
							$time = $row['time'];
							echo"<div class='col-md-4'>Posted By: $name</div>";
							echo"<div class='col-md-8'>$time</div>";
							echo"<div class='col-md-12'>$comment</div><br>";
						
							
}

function select_bank($cxn)
{
		  
	 $query = "SELECT bank FROM banks order by bank";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			
			while($row = mysqli_fetch_assoc($result))
					{
						extract($row);
						
						echo"<option>$bank</option>";
					}
			
  return;
}

function select_acctype($cxn)
{
		  
	 $query = "SELECT acctype FROM  acctype order by  acctype ";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			
			while($row = mysqli_fetch_assoc($result))
					{
						extract($row);
						
						echo"<option>$acctype </option>";
					}
			
  return;
}

function select_choiceid($cxn,$choice)
{
	
									$query = "SELECT choiceid from choice where choice='$choice'";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query10"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $choiceid;
													  $choiceid= $row['choiceid'];
													   return;
}

function select_acctypeid($cxn,$acctype)
{
		$query = "SELECT acctypeid from acctype where acctype='$acctype'";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query10"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $acctypeid;
													  $acctypeid= $row['acctypeid'];
													   return;
}

function select_bankid($cxn,$bank)
{
	$query = "SELECT bankid FROM banks where bank='$bank'";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			$row = mysqli_fetch_assoc($result);
			 global $bankid;
		$bankid = $row['bankid'];
			
  return;
}

function insert_paymentinfo($cxn,$projectid,$accname,$acctypeid,$bankid,$phone,$accountnumber,$email,$price)
{
	
				$query11="SELECT * from paymentinfo where  projectid='$projectid'";
																				$result11= mysqli_query($cxn,$query11) or     
																				die("Couldn't execute SELECT query111");
																				$ntype = mysqli_num_rows($result11);
							//   
								if ($ntype < 1)    
									//if new type is not in table  
										{   
			$query1="insert into paymentinfo(projectid,accname,acctypeid,bankid,phone,accnum,email,amount) values('$projectid','$accname','$acctypeid','$bankid','$phone','$accountnumber','$email','$price')";
																				$result1 = mysqli_query($cxn,$query1) or     
																				die("Couldn't execute SELECT query1hh");
																
										}
										else
										{
	$query = "update paymentinfo set accname='$accname',accnum='$accountnumber',acctypeid='$acctypeid',bankid='$bankid',email='$email',phone='$phone' where projectid='$projectid'";
				$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute SELECT query8,$accnum"); 
										}
										return;
}

function download($cxn,$id)
{
	 $query5="SELECT title,filename,type,downloads from project where projectid='$id'";
																	$result5 = mysqli_query($cxn,$query5) or     
																	die("Couldn't execute SELECT query");
																	$row5 = mysqli_fetch_assoc($result5);
																	$title = $row5['title'];
														
																	$filename = $row5['filename'];
																	
																	$type = $row5['type'];
																	$downloads = $row5['downloads'] + 1;
		  $query2=" UPDATE project set downloads='$downloads' WHERE projectid='$id'";
		$result2 = mysqli_query($cxn,$query2) or     
		die("Couldn't execute SELECT query2");
		
		  $query2=" UPDATE entry set downloads='$downloads' WHERE projectid='$id'";
		$result2 = mysqli_query($cxn,$query2) or     
		die("Couldn't execute SELECT query2");
		
		echo"
	<script type='text/javascript'>
    window.location = 'projects/$filename';
</script>
";
																	
}

function download_func($filename,$id){
	
	$target_file = $target_dir .basename($filename);
	 $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
	  $new_filename = $id.'_jarazone_project.'.$FileType;
	  
  if(!empty($filename)){
    // Specify file path.
    $path = 'projects/'; // '/uplods/'
    $download_file =  $path.$filename;
    // Check file is exists on given path.
    if(file_exists($download_file))
    {
      // Getting file extension.
      $extension = explode('.',$filename);
      $extension = $extension[count($extension)-1]; 
      // For Gecko browsers
      header('Content-Transfer-Encoding: binary');  
      header('Last-Modified: ' . gmdate('D, d M Y H:i:s', filemtime($path)) . ' GMT');
      // Supports for download resume
      header('Accept-Ranges: bytes');  
      // Calculate File size
      header('Content-Length: ' . filesize($download_file));  
      header('Content-Encoding: none');
      // Change the mime type if the file is not PDF
      header('Content-Type: application/'.$extension);  
      // Make the browser display the Save As dialog
      header('Content-Disposition: attachment; filename=' . $new_filename);  
      readfile($download_file); 
      exit;
    }
    else
    {
      echo 'File does not exists on given path';
    }
 
 }
}

function admin_download($cxn,$id,$admin_id)
{
	 $query5="SELECT title,filename,type,downloads from project where projectid='$id'";
																	$result5 = mysqli_query($cxn,$query5) or     
																	die("Couldn't execute SELECT query");
																	$row5 = mysqli_fetch_assoc($result5);
																	$title = $row5['title'];
														
																	$filename = $row5['filename'];
																	
																	$type = $row5['type'];
																	$downloads = $row5['downloads'] + 1;
																	date_default_timezone_set('Africa/Lagos');
	$time = date("h:i:sa");
	$date = date("d/m/y");
$query1="insert into admin_download_log(project_id,time,date,admin_id) values('$id','$time','$date','$admin_id')";
																				$result1 = mysqli_query($cxn,$query1) or     
																				die("Couldn't execute SELECT query1hh");
	download_func($filename,$id);
return;			
}



function insert_comment($cxn,$id,$name,$comment)
{
	$name = ucfirst($name);
	date_default_timezone_set('Africa/Lagos');
	$time = date("h:i:sa");
	$date = date("d/m/y");
	
	
	 $query1="insert into comments (name,comment,date,time,projectid) values('$name','$comment','$date','$time','$id')";
														$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query1");
																	echo"
	<script >
    window.location = 'projectpage.php?id=$id';
</script>
";



}

function display_comment($cxn,$id)
{
	$query5="SELECT comment,name,date,time from comments where projectid='$id' order by projectid DESC";
																	$result5 = mysqli_query($cxn,$query5) or     
																	die("Couldn't execute SELECT query");
																		$ntype = mysqli_num_rows($result5);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{
								echo"<div class='col-md-12' style='text-align:left'><strong><br>No comments Yet<br></strong></div>";

							}
					else
						{

																			while($row5 = mysqli_fetch_assoc($result5))
							{
								 
					
																		$name = $row5['name'];
															
																		$comment = $row5['comment'];
																		
																		$time = $row5['time'];
																		$date = $row5['date'];
																		echo"<div class='col-md-12 align='left' >By<font color='darkblue'>  $name </font></div>
																		<div class='col-md-12 align='left'><strong>$comment</strong></div><div class='col-md-12 align='left'><font color='darkblue'><h6>on $date at $time</h6></font></div><br>";
							}
						}
						return;
}

function display_departments($cxn)
{
	$query = "SELECT department,departmentid FROM department order by department";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			echo"<div class='col-md-4'></div><div class='col-md-4'>";
			while($row = mysqli_fetch_assoc($result))
					{
						extract($row);
						
						echo"<a href='department.php?id=$departmentid' style='width:100%; text-align:left;'class='btn btn-default btn-md' role='button'>$department <i class='fa fa-angle-double-right' style='text-align:right;' ></i></a><br>";
					}
			echo"</div><div class='col-md-4'></div>";
  return;
}
function display_type_departments($cxn,$id)
{
	$query = "SELECT department,departmentid FROM department order by department";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			echo"<div class='col-md-4'></div><div class='col-md-4'>";
			while($row = mysqli_fetch_assoc($result))
					{
						extract($row);
						if($id == 1)
							{
	echo"<a href='undergraduate_department.php?id=$departmentid'style='width:100%; text-align:left;'class='btn btn-default btn-md' role='button'>$department <i class='fa fa-angle-double-right' style='text-align:right;' ></i></a><br>";
							}
					elseif($id == 2)
						{
	echo"<a href='masters_department.php?id=$departmentid'style='width:100%; text-align:left;'class='btn btn-default btn-md' role='button'>$department <i class='fa fa-angle-double-right' style='text-align:right;' ></i></a><br>";
						}
					elseif($id == 3)
						{
	echo"<a href='phd_department.php?id=$departmentid'style='width:100%; text-align:left;'class='btn btn-default btn-md' role='button'>$department <i class='fa fa-angle-double-right' style='text-align:right;' ></i></a><br>";						
						}
					elseif($id == 4)
						{
	echo"<a href='others_department.php?id=$departmentid'style='width:100%; text-align:left;'class='btn btn-default btn-md' role='button'>$department <i class='fa fa-angle-double-right' style='text-align:right;' ></i></a><br>";						
						}
					else
					{
				
				echo"<a href='department.php?id=$departmentid' style='width:100%; text-align:left;'class='btn btn-default btn-md' role='button'>$department <i class='fa fa-angle-double-right' style='text-align:right;' ></i></a><br>";
					}
					}
			echo"</div><div class='col-md-4'></div>";
  return;
}

function display_departmental_projects($cxn,$departmentid)
	{
		
		$query = "SELECT department FROM department where departmentid='$departmentid' ";
			$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute select query");
				$row = mysqli_fetch_assoc($result);
				$department = $row['department'];
	$query = "SELECT * FROM entry where departmentid='$departmentid' order by entryid DESC "; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$counter = 1;
							$ntype = mysqli_num_rows($result);
					//   
						if ($ntype < 1)    
							//if new type is not in table  
								{   
								echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No More Projects <br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";


								}
								else
								{

									project_displayer($cxn,$result,$counter);									
																																		
								}
			
			return;
		
	}


function departmental_search($cxn,$search,$id)
{
	if(empty($search))
	{
		echo"<div class='col-md-12' style='text-align:center'><strong><br>There was no search entry. <br><br><a href='index.php' class='btn btn-primary' role='button'>Back to Home</a></strong></div>";

	}
	else
	{
		$search = filter_var($search, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		
	
	$alumniids=array();
				$query = "select alumniid from alumni where firstname like '%$search%' union select alumniid from alumni where lastname like '%$search%' union select alumniid from alumni where phone like '%$search%'";
							$result= mysqli_query($cxn,$query) or     
								die("Couldn't execute SELECT querykk");
								$ntype = mysqli_num_rows($result);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{
							}
					else	
					{
					
							while($row = mysqli_fetch_assoc($result))
										{
																		
																		array_push($alumniids,$row['alumniid']);
										}
					}	
									
	$projectids=array();
				$query1 = "select projectid from project where title like '%$search%'";
							$result1= mysqli_query($cxn,$query1) or     
								die("Couldn't execute SELECT query1");
										$ntype = mysqli_num_rows($result1);
				//   
				
					if ($ntype < 1)    
						//if new type is not in table  
							{
							}
					else	
					{
							while($row1 = mysqli_fetch_assoc($result1))
										{
																		
																		array_push($projectids,$row1['projectid']);
										}	
					}	
					
					
	$departmentids=array();
				$query2 = "select departmentid from department where department like '%$search%'";
							$result2= mysqli_query($cxn,$query2) or     
								die("Couldn't execute SELECT query2");
										$ntype = mysqli_num_rows($result2);
				//   
				
					if ($ntype < 1)    
						//if new type is not in table  
							{
							}
					else	
					{
							while($row2 = mysqli_fetch_assoc($result2))
										{
																		
																		array_push($departmentids,$row2['departmentid']);
										}	
					}
					
	$schoolids=array();
				$query3 = "select schoolid from school where school like '%$search%'";
							$result3= mysqli_query($cxn,$query3) or     
								die("Couldn't execute SELECT query3");
										$ntype = mysqli_num_rows($result3);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{
							}
					else	
					{
							while($row3 = mysqli_fetch_assoc($result3))
										{
																		
																		array_push($schoolids,$row3['schoolid']);
										}
					}
				
	$yearids=array();
				$query4 = "select yearid from year where year like '%$search%'";
							$result4= mysqli_query($cxn,$query4) or     
								die("Couldn't execute SELECT query4");
										$ntype = mysqli_num_rows($result4);
				//   
				
					if ($ntype < 1)    
						//if new type is not in table  
							{
							}
					else	
					{
							while($row4 = mysqli_fetch_assoc($result4))
										{
																		
																		array_push($yearids,$row4['yearid']);
										}
					}
				
			

$entryids=array()	;		

foreach($alumniids as $value )
{	
										
	
				$query5 = "select entryid from entry where alumniid like $value and departmentid='$id'";
							$result5= mysqli_query($cxn,$query5) or     
								die("Couldn't execute SELECT query5");
							while($row5 = mysqli_fetch_assoc($result5))
										{
																		
																		array_push($entryids,$row5['entryid']);
										}
}										
	
foreach($projectids as $value )
{	
										
	
				$query6 = "select entryid from entry where projectid like $value and departmentid='$id'";
							$result6= mysqli_query($cxn,$query6) or     
								die("Couldn't execute SELECT query6");
							while($row6 = mysqli_fetch_assoc($result6))
										{
																		
																		array_push($entryids,$row6['entryid']);
										}
}

foreach($departmentids as $value )
{	
										
	
				$query7 = "select entryid from entry where departmentid like $value and departmentid='$id'";
							$result7= mysqli_query($cxn,$query7) or     
								die("Couldn't execute SELECT query7");
							while($row7 = mysqli_fetch_assoc($result7))
										{
																		
																		array_push($entryids,$row7['entryid']);
										}
}		

foreach($schoolids as $value )
{	
										
	
				$query8 = "select entryid from entry where schoolid like $value and departmentid='$id'";
							$result8= mysqli_query($cxn,$query8) or     
								die("Couldn't execute SELECT query8");
							while($row8 = mysqli_fetch_assoc($result8))
										{
																		
																		array_push($entryids,$row8['entryid']);
										}
}		

foreach($yearids as $value )
{	
										
	
				$query9 = "select entryid from entry where yearid like $value and departmentid='$id'";
							$result9= mysqli_query($cxn,$query9) or     
								die("Couldn't execute SELECT query9");
							while($row9 = mysqli_fetch_assoc($result9))
										{
																		
																		array_push($entryids,$row9['entryid']);
										}
}		

	if(sizeof($entryids)<1)
	{
		echo"<div class='col-md-12' style='text-align:center'><strong><br>No Projects Found. <br><br><a href='index.php' class='btn btn-primary' role='button'>Back to Home</a></strong></div>";


	}
	else
					{
		echo"<div class='col-md-12' style='text-align:center'><strong>Search Results</strong></div><br>";

rsort($entryids);
							foreach($entryids as $value )
							{	
																	
																
																			$query = "SELECT * FROM entry where entryid='$value'";
																						$result = mysqli_query($cxn,$query)   
												or die ("couldn't execute query.");
												 /* Display results in a table */
												
												
														$row = mysqli_fetch_assoc($result);
														
															  
														   
																
											$query1="SELECT firstname,phone,lastname from alumni where alumniid='{$row['alumniid']}'";
	   																$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query1");
																	$row1 = mysqli_fetch_assoc($result1);
																	$name = $row1['firstname'];
																	$phone = $row1['phone'];
																	$name1 = $row1['lastname'];
	   $query2=" SELECT department from department where departmentid='{$row['departmentid']}'";
																	$result2 = mysqli_query($cxn,$query2) or     
																	die("Couldn't execute SELECT query");
																	$row2 = mysqli_fetch_assoc($result2);
																	$department = $row2['department'];
	   $query3="SELECT school from school where schoolid='{$row['schoolid']}'";
																	$result3 = mysqli_query($cxn,$query3) or     
																	die("Couldn't execute SELECT query");
																	$row3 = mysqli_fetch_assoc($result3);
																	$school = $row3['school'];
	   $query4="SELECT year from year where yearid='{$row['yearid']}'";
																	$result4 = mysqli_query($cxn,$query4) or     
																	die("Couldn't execute SELECT query");
																	$row4 = mysqli_fetch_assoc($result4);
																	$year = $row4['year'];
	   $query5="SELECT title,filename,type,price,downloads from project where projectid='{$row['projectid']}'";
																	$result5 = mysqli_query($cxn,$query5) or     
																	die("Couldn't execute SELECT query");
																	$row5 = mysqli_fetch_assoc($result5);
																	$title = $row5['title'];
														
																	$filename = $row5['filename'];
																	
																	$type = $row5['type'];
																	$projectid = $row['projectid'];
																	$price = $row5['price'];
																	$downloads = $row5['downloads'];
																	$query6="SELECT comment from comments where projectid='{$row['projectid']}'";
		$result6 = mysqli_query($cxn,$query6) or     
		die("Couldn't execute SELECT query");
		$counte= 0;
		while($row6 = mysqli_fetch_assoc($result6))
		{
			$counte= $counte + 1;
		}
																	
																	
																	
																	echo"<a  href='projectpage.php?id=$projectid' style='color: black'> <div class='col-md-6'>
																	";
																	echo" <div class='col-md-12' align='left'>
																	";
																	if($type=="pdf")
																	{
																			echo"<img src='index.jpg' class='img-circle' alt='$title' class='img-circle' width='100' height='50'>";
																	}
																	else
																	{
																		echo"<img src='indexx.jpg' class='img-circle' alt='$title' class='img-circle' width='100' height='50'>";
																	}
																	echo"
																	</div>
						
																	
																<div class='col-md-12' align='left'> 
																	
																	<table class='table table-bordered table-sm table-condensed  table-striped'>
																	<tr><td><strong>Title: </strong></td><td>$title</td></tr>
																	<tr><td><strong>Year: </strong></td><td>$year</td></tr>
																	<tr><td><strong>Department: </strong></td><td> $department</td></tr>
																	<tr><td><strong>School: </strong></td><td>$school</td></tr>
																	<tr><td><strong>Author:</strong></td><td> $name &nbsp; $name1</td></tr>
																	<tr><td><font color='darkblue'> <strong>$downloads Downloads</strong> & <strong>$counte Comments</strong></font></td><td><div class='fb-like' data-href='https://jarazone.com/' data-width='5px' data-layout='standard' data-action='like' data-size='small' data-show-faces='true' data-share='true'></div></td></tr>
</table>
																	</div>
																	";
																	if($price == 0)
																	{
																		$price  = "Free";
																	}
																	else
																	{
																
																	  $price = "<img src='images/naira.jpg' class='img-circle' alt='Cinque Terre' width='20' height='20'>".$price;
																	 
																	}
																	echo"<div class='col-md-12' align='left'><strong>$price</strong></div>
																	
																	<div class='col-md-12' align='right'>
																	<a href='download.php?id=$projectid' class='btn btn-success btn-md' role='button' ><i class='fa fa-download'></i> Download</a>
																	<a href='tel:$phone' class='btn btn-primary btn-md' role='button' download><i class='fa fa-phone'></i> Call Author</a>
																	</div>
																	</div>
																	</a><br><br>";
															
																										 
														
							}
					}
	}
	return;
}

function department($cxn,$id)
{
	$query = "SELECT department FROM department where departmentid='$id' ";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			$row = mysqli_fetch_assoc($result);
			global $department;
			$department = $row['department'];
}

function select_priceid($cxn,$price)
{
	$query = "SELECT priceid from price where price='$price'";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query10"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $priceid;
													  $priceid= $row['priceid'];
	
				return;
}

function select_price($cxn)
{
		  
	 $query = "SELECT price FROM price order by priceid";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			
			while($row = mysqli_fetch_assoc($result))
					{
						extract($row);
						
						echo"<option>$price</option>";
					}
			
  return;
}

function display_projects($cxn)
{
		$query = "SELECT * FROM entry order by entryid DESC "; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				 /* Display results in a table */
				$counter = 1;
				
						$ntype = mysqli_num_rows($result);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{   
							echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No More Projects <br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
							}
							else
							{
								project_displayer($cxn,$result,$counter);
			
							}
		
		return;
}
	
function display_free_projects($cxn)
 {
				$query = "SELECT * FROM entry where priceid='5' order by projectid DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No Free Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 10)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function display_paid_projects($cxn)
{
		$query = "SELECT * FROM entry where priceid<5 order by projectid DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No Free Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 10)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function display_free_Departmental_projects($cxn,$departmentid)
{
			$query = "SELECT * FROM entry where priceid='5' and departmentid='$departmentid' order by projectid DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No Free Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 10)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
	}
					
function display_paid_departmental_projects($cxn,$departmentid)
 {
	$query = "SELECT * FROM entry where priceid<5 and departmentid='$departmentid' order by projectid DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No Free Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 10)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}				


function display_paid_type_departmental_projects($cxn,$departmentid,$protypeid)
{
$query = "SELECT * FROM entry where priceid<'5' and departmentid='$departmentid' and protypeid='$protypeid'  order by projectid DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No Free Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 10)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}				


function addmember($cxn,$email,$surname,$firstname,$pwd)
{
	$query = "SELECT email from member where email='$email'";
	$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query13");
			$ntype = mysqli_num_rows($result);
					if ($ntype < 1)    
					{
						$firstname = ucfirst($firstname);
						$surname = ucfirst($surname);
							date_default_timezone_set('Africa/Lagos');
							$time = date("h:i:sa");
							$date = date("d/m/y");
							$query1="insert into member (time,date,password,firstname,email,surname) values('$time','$date',md5('$pwd'),'$firstname','$email','$surname')";
														$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query14");
																	
								$_SESSION['auth'] = "yes";
								$_SESSION['firstname'] = "$firstname";
								$_SESSION['surname'] = "$surname";
								$_SESSION['email'] = "$email";
									$query = "SELECT * from member where email='$email' and password=md5('$pwd')";
										$result = mysqli_query($cxn,$query) or     
										die("Couldn't execute select query15");
										$row = mysqli_fetch_assoc($result);
										extract($row);
								$_SESSION['id'] = "$memberid";
								$_SESSION['picture'] = "$picture";
								 /* send email to new Customer */  
								 $emess = "You have successfully registered. ";    
								 $emess .= "Your new user name and password are: ";    
								 $emess .= "\n\n\t$firstname\n\t";      
								 $emess .= "$pwd\n\n";     
								 $emess .= "We appreciate your interest. \n\n";   
								 $emess .= "If you have any questions or problems,";      
								 $emess .= " email service@jarazone.com";    
								 $subj = "Your new customer registration"; 
								  $mailsend=mail("$email","$subj","$emess"); 
								  $time = date("h:i:sa");
							$date = date("d/m/y");
								  $query1="insert into login (id,firstname,email,logintime,loginDate) values('$memberid','$firstname','$email','$time','$date')";
														$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query2");
																	
																		$_SESSION['auth'] = "yes";
																		$_SESSION['firstname'] = "$firstname";
																		$_SESSION['surname'] = "$surname";
																		$_SESSION['email'] = "$email";
																		$_SESSION['id'] = "$memberid";
																		$_SESSION['picture'] = "$picture";
		$query = "SELECT loginid from login where id='$memberid' order by logintime desc limit 1";
		$result = mysqli_query($cxn,$query) or     
		die("Couldn't execute select query12");
		$row = mysqli_fetch_assoc($result);
			extract($row);
			$_SESSION['loginid'] = "$loginid";
						echo"
	<script type='text/javascript'>
    window.location = 'account.php'
</script>
";
								  
					}
					else
					{
						 $error = "email already regietered";
						 	echo"
	<script type='text/javascript'>
    window.location = 'signup_form.php?error= $error'
</script>
";
						 
					}
					return;
	
}

function login($cxn,$email,$pwd)
{
	$query = "SELECT email from member where email='$email'";
	$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			$ntype = mysqli_num_rows($result);
					if ($ntype < 1)    
					{
						$error = "Email Not Regietered";
						  header("Location: login_form.php?error= $error"); 
					}
					else
					{
						
						$query = "SELECT * from member where email='$email' and password=md5('$pwd')";
							$result = mysqli_query($cxn,$query) or     
									die("Couldn't execute select query12");
									$ntype = mysqli_num_rows($result);
											if ($ntype < 1)    
											{
												$error = "Password Is Incorrect";
													echo"
	<script type='text/javascript'>
    window.location = 'login_form.php?error= $error'
</script>
";
												
														
											}
											else
											{
												
												$row = mysqli_fetch_assoc($result);
												extract($row);
													date_default_timezone_set('Africa/Lagos');
													$time = date("h:i:sa");
													$date = date("d/m/y");
												$query1="insert into login (id,firstname,email,logintime,loginDate) values('$memberid','$firstname','$email','$time','$date')";
														$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query2");
																	
																		$_SESSION['auth'] = "yes";
																		$_SESSION['firstname'] = "$firstname";
																		$_SESSION['surname'] = "$surname";
																		$_SESSION['email'] = "$email";
																		$_SESSION['id'] = "$memberid";
																		$_SESSION['picture'] = "$picture";
		$query = "SELECT loginid from login where id='$memberid' order by logintime desc limit 1";
		$result = mysqli_query($cxn,$query) or     
		die("Couldn't execute select query12");
		$row = mysqli_fetch_assoc($result);
			extract($row);
			$_SESSION['loginid'] = "$loginid";
			
			echo"
	<script type='text/javascript'>
    window.location = 'account.php';
</script>
";
																	
																		 
											}
					}
					
				return;	
}

function help_login($cxn)
{
	
	if($_SESSION['auth'] == "yes")
	{
		$firstname = $_SESSION['firstname'];
		$surname = $_SESSION['surname'];
		$email = $_SESSION['email'];
		$id = $_SESSION['id'];
		date_default_timezone_set('Africa/Lagos');
													$time = date("h:i:sa");
													$date = date("d/m/y");
												$query1="insert into login (id,firstname,email,logintime,loginDate) values('$memberid','$firstname','$email','$time','$date')";
														$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query2");
	}
	return;
	
}

function account($cxn,$firstname,$surname,$email,$id)
{
	
	
	
	$firstname = $_SESSION['firstname'];
	$surname = $_SESSION['surname'];
		$email = $_SESSION['email'];
		$id = $_SESSION['id'];
		$picture = $_SESSION['picture'] ;
		echo"<img src='photo/$picture' href='photo/$picture' class='img-circle' alt='$firstname on Jarazone' width='200' height='35%' align='center' style='align:center;'><br>";
		if(isset($_GET['errorr'])) 
	 {      
 $errorr = $_GET['errorr'];
			echo  "<div id='er'>$errorr</div> ";
	} 
		echo"<div id='pic'><a onclick='pic()'><h6>&nbsp;&nbsp;&nbsp;Edit Profile Picture <i class='glyphicon glyphicon-pencil'></i></h6></a></div><br>";
		echo"<div id='initial'><h4>&nbsp;&nbsp;&nbsp;Welcome $firstname</h4><br><br>";
		
			echo"<div class='col-md-4'></div><div class='col-md-4'>";
						
						echo"<a  onclick='display(1)'style='width:100%; height:50px; text-align:left;'class='btn btn-default btn-md' role='button'><i class='glyphicon glyphicon-user'></i> Profile </a><br>";
						echo"<a href='projectform.php' style='width:100%; height:50px; text-align:left;'class='btn btn-default btn-md' role='button'><i class='fa fa-cloud-upload'></i>  Upload Project</a><br>";
						echo"<a  onclick='display(2)' style='width:100%; height:50px; text-align:left;'class='btn btn-default btn-md' role='button'><i class='fa fa-database'></i>   Projects</a><br>";
						echo"<a  onclick='display(3)' style='width:100%; height:50px; text-align:left;'class='btn btn-default btn-md' role='button'><i class='fa fa-usd'></i>  Earnings</a><br>";
						echo"<a href='logout.php'style='width:100%; height:50px; text-align:left;'class='btn btn-default btn-md' role='button'><i class='glyphicon glyphicon-log-out'></i>  Log Out</a><br>";
						
					
			echo"</div><div class='col-md-4'></div></div>";
			return;
	
}

function destroy_session()
{
	session_start();
	session_destroy();
	header("Location: index.php");
}

function select_protype($cxn)
{
	$query = "select * from protype";
	$result = mysqli_query($cxn,$query) or     
	die("Couldn't execute SELECT query");
	while($row = mysqli_fetch_assoc($result))
					{
						extract($row);
						
						echo"<option>$protype</option>";
					}
			
  return;
	
}

function profile($cxn)
{

	
	
	$firstname = $_SESSION['firstname'];
	$surname = $_SESSION['surname'];
		$email = $_SESSION['email'];
		$id = $_SESSION['id'];
		$picture = $_SESSION['picture'] ;
		$query = "select * from member where memberid='$id'";
		$result = mysqli_query($cxn,$query) or     
		die("Couldn't execute SELECT query");
		$row = mysqli_fetch_assoc($result);
		$school= $row['school'];
		$location = $row['location'];
		$facebook = $row['facebook'];
		$whatsapp = $row['whatsapp'];
		$instagram = $row['instagram'];
		$twitter = $row['twitter'];
		$google= $row['google'];
		$snapchat = $row['snapchat'];
		
		
		
		
		
		
		
		
		
		
		
		
		echo"<div class='col-md-12' style='background-color:white;  color:skyblue; text-align:center;'>
	<a style='color:blue;' onclick='edit_profile($id)'> <img src='images/b_edit.png'  alt='edit on Jarazone'/> Edit</a>
		</div>
		
		<br><div class='col-md-12' style='background-color:grey; color:white;text-align:left;'>Basic info</div>
		
		<div class='col-md-12' style='background-color:white; text-align:left;'>
		<h5>firstname: $firstname</h5>
		<h5>Surname: $surname </h5>
		</div>
		";
					if(empty($row['school']))
					{
						echo"<br>
						<div class='col-md-12' style='background-color:grey; color:white;text-align:left;'>school</div>
					<div class='col-md-12' style='background-color:white; color:skyblue; text-align:left;'>
					<h5><a onclick='edit_profile($id)' color:skyblue;>Add school</a></h5>
					</div>
					";
					}
					else
					{
					echo"<br><div class='col-md-12' style='background-color:grey; color:white;text-align:left;'>School</div>
					<div class='col-md-12' style='background-color:white; text-align:left;'><h5>$school</h5></div>";
					}
					
					
					if(empty($row['location']))
					{
						echo"<br>
						<div class='col-md-12' style='background-color:grey; color:white;text-align:left;'>Location</div>
					<div class='col-md-12' style='background-color:white; color:skyblue; text-align:left;'>
					<h5><a onclick='edit_profile($id)'' color:skyblue;>Add Location</a></h5>
					</div>
					";
					}
					else
					{
					echo"<br><div class='col-md-12' style='background-color:grey; color:white;text-align:left;'>Location</div>
					<div class='col-md-12' style='background-color:white; text-align:left;'><h5>$location</h5></div>";
					}
					
					
					//socila//
					echo"<br>
						<div class='col-md-12' style='background-color:grey; color:white;text-align:left;'>Social Links</div>";
						
								//facebook//
								if(empty($row['facebook']))
							{
								echo"
							<div class='col-md-12' style='background-color:white; color:skyblue; text-align:left;'>
							<h5><a onclick='edit_profile($id)' color:skyblue;>Add Facebook </a></h5>
							</div>
							";
							}
							else
							{
							echo"
							<div class='col-md-12' style='background-color:white; text-align:left;'><h5>Facebook:
facebook</h5></div>";
							}
															//whatsapp//
								if(empty($row['whatsapp']))
							{
								echo"
							<div class='col-md-12' style='background-color:white; color:skyblue; text-align:left;'>
							<h5><a onclick='edit_profile($id)' color:skyblue;>Add Whatsapp Number</a></h5>
							</div>
							";
							}
							else
							{
							echo"
							<div class='col-md-12' style='background-color:white; text-align:left;'><h5>Whatsapp Number: $whatsapp</h5></div>";
							}
															//instagram//
								if(empty($row['instagram']))
							{
								echo"
							<div class='col-md-12' style='background-color:white; color:skyblue; text-align:left;'>
							<h5><a onclick='edit_profile($id)' color:skyblue;>Add Instagram </a></h5>
							</div>
							";
							}
							else
							{
							echo"
							<div class='col-md-12' style='background-color:white; text-align:left;'><h5>Instagram: $instagram</h5></div>";
							}
							
															//twitter//
								if(empty($row['twitter']))
							{
								echo"
							<div class='col-md-12' style='background-color:white; color:skyblue; text-align:left;'>
							<h5><a onclick='edit_profile($id)' color:skyblue;>Add Twitter</a></h5>
							</div>
							";
							}
							else
							{
							echo"
							<div class='col-md-12' style='background-color:white; text-align:left;'><h5>Twitter: $twitter</h5></div>";
							}
							
															//snapchat//
								if(empty($row['snapchat']))
							{
								echo"
							<div class='col-md-12' style='background-color:white; color:skyblue; text-align:left;'>
							<h5><a onclick='edit_profile($id)' color:skyblue;>Add Snapchat </a></h5>
							</div>
							";
							}
							else
							{
							echo"
							<div class='col-md-12' style='background-color:white; text-align:left;'><h5>Snapchat: $snapchat</h5></div>";
							}
							
															//google//
								if(empty($row['google']))
							{
								echo"
							<div class='col-md-12' style='background-color:white; color:skyblue; text-align:left;'>
							<h5><a onclick='edit_profile($id)' color:skyblue;>Add Google </a></h5>
							</div>
							";
							}
							else
							{
							echo"
							<div class='col-md-12' style='background-color:white; text-align:left;'><h5>Google: $google</h5></div>";
							}
							
echo"<div class='col-md-12' style='background-color:white;  color:skyblue; text-align:center;'>
	<a style='color:blue;' onclick='edit_profile($id)'><img src='images/b_edit.png'  alt='edit on Jarazone'/> Edit</a>
		</div>";
					
					
		return;
		
		
		
}

function my_projects($cxn,$mem_id)
{
$query = "SELECT * from member where memberid='$mem_id'";
							$result = mysqli_query($cxn,$query) or     
									die("Couldn't execute select query12");
									$row = mysqli_fetch_assoc($result);
												extract($row);
																	
																		$_SESSION['id'] = "$memberid";
																		$id = $_SESSION['id'];
																		$mem_id = $_SESSION['id'];
																		
		$query = "select * from project where memberid='$id'";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			echo"<div class='col-md-12' ><div class='col-md-4'></div><div class='col-md-4' align='center' >Project Info <br><br>Please Select A Project below <br>
			<select class='form-control' name='my_project' id='my_project' onchange='show_project_info($mem_id)'>
			<option value='0'>Projects</option>";
			while($row = mysqli_fetch_assoc($result))
			{
				$title = $row['title'];
				$projectid = $row['projectid'];
				echo"";
						
						echo"<option  value='$projectid'>
						$title
						</option>";			
			
			}
			
			echo"</select></div><div class='col-md-4'></div></div>
			<div class='col-md-12'>&nbsp;&nbsp;</div>";
			
			return;
			
		
}

function my_projects_earnings($cxn,$memo_id)
{
	$firstname = $_SESSION['firstname'];
		$email = $_SESSION['email'];
		$id = $_SESSION['id'];
		$picture = $_SESSION['picture'] ;
		$query = "select * from project where memberid='$id'";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			echo"<div class='col-md-12' ><div class='col-md-4'></div><div class='col-md-4' align='center' >Project Earnings <br><br>Please Select A Project below <br>
			<select class='form-control' name='my_projecte' id='my_projecte' onchange='show_earnings_info()'>
			<option value='0'>Projects</option>";
			while($row = mysqli_fetch_assoc($result))
			{
				$title = $row['title'];
				$projectid = $row['projectid'];
				echo"";
						
						echo"<option  value='$projectid'>
						$title
						</option>";			
			
			}
			
			echo"</select>
		</div><div class='col-md-4'></div></div>
		<div class='col-md-12'>&nbsp;&nbsp;</div>";
			
			return;
		
}

function show_earnings($cxn,$id)
{
	$query = "select downloads,price,title from project where projectid='$id'";
	$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query1");
				 /* Display results in a table */
				 $row = mysqli_fetch_assoc($result);
				 $downloads = $row['downloads'];
				 $price = $row['price'];
				  $title = $row['title'];
				 
				 $earnings =  $downloads * $price;
				 
	 $query2 = "select * from paymentinfo where projectid='$id'";
	$result2 = mysqli_query($cxn,$query2)   
				or die ("couldn't execute query2");
				 /* Display results in a table */
				 $row2 = mysqli_fetch_assoc($result2);
				  $email = $row2['email'];
				   $accname = $row2['accname'];
				    $accnum = $row2['accnum'];
					  $phone = $row2['phone'];
					  $bankid = $row2['bankid'];
					  $acctypeid = $row2['acctypeid'];
					  
  $query3 = "select * from banks where bankid='$bankid'";
	$result3 = mysqli_query($cxn,$query3)   
				or die ("couldn't execute query3");
				 /* Display results in a table */
				 $row3 = mysqli_fetch_assoc($result3);
				  $bank = $row3['bank'];
				  
				 
	$query4 = "select * from acctype where acctypeid='$acctypeid'";
	$result4 = mysqli_query($cxn,$query4)   
				or die ("couldn't execute query4");
				 /* Display results in a table */
				 $row4 = mysqli_fetch_assoc($result4);
				  $acctype = $row4['acctype'];
				  if($price == 0)
				  {
					   echo"
					   <div class='col-md-12' style='background-color:grey; color:white;text-align:left;' ><strong>Project Title:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5> $title </h5></div><br>
		<div class='col-md-12' style='background-color:grey; color:white;text-align:left;' ><strong>Downloads:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5> $downloads </h5></div><br>
				<div class='col-md-12'style='background-color:grey; color:white;text-align:left;'><strong>Price:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$price</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Earnings:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$earnings</h5></div><br>
				";
				  }
				  else
				  {
					  
				  echo"
<div class='col-md-12' align='center'><a style='color:blue;' onclick='edit_earnings($id)'><img src='images/b_edit.png'  alt='edit on Jarazone'/> Edit</a></div><br>
		<div class='col-md-12' style='background-color:grey; color:white;text-align:left;' ><strong>Project Title:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5> $title </h5></div><br>
		<div class='col-md-12' style='background-color:grey; color:white;text-align:left;' ><strong>Downloads:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5> $downloads </h5></div><br>
				<div class='col-md-12'style='background-color:grey; color:white;text-align:left;'><strong>Price:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$price</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Earnings:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$earnings</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Account Name:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$accname</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Account Number:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$accnum</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Bank:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$bank</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Account Type:</strong></div>
				<div class='col-md-12' style='text-align:left;'> <h5>$acctype</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Phone:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$phone </h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Email:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$email</h5> <br></div><br>
<div class='col-md-12' align='center'><a style='color:blue;'onclick='edit_earnings($id)'><img src='images/b_edit.png'  alt='edit on Jarazone'/> Edit</a></div>
																	
																	
		";
				  }

}

function profile_tab($cxn,$value)
{
	ob_start();
  session_start();
	
	$firstname = $_SESSION['firstname'];
	$surname = $_SESSION['surname'];
		$email = $_SESSION['email'];
		$id = $_SESSION['id'];
		$picture = $_SESSION['picture'] ;
		
	echo"<div id='namee'><h4><span>&nbsp;&nbsp;&nbsp;$firstname $surname</h4></div><br>";
	if($value == 1)
	{
		echo"<ul class='nav nav-pills' style='width:100%;'>
    <li class='active'><a data-toggle='tab' href='#Profile' onclick='change()' ><i class='glyphicon glyphicon-user'></i> Profile</a></li>
    <li><a  href='projectform.php'><i class='fa fa-cloud-upload'></i> Upload Project</a></li>
    <li ><a data-toggle='tab' href='#menu1' onclick='empty(1)'><i class='fa fa-database'></i>  Projects</a></li>
	 <li><a data-toggle='tab' href='#menu2' onclick='empty(2)'><i class='fa fa-usd'></i> Earnings</a></li>
    <li ><a  href='logout.php'><i class='glyphicon glyphicon-log-out'></i> Log Out</a></li>
  </ul>
   <div class='tab-content'>
   
    <div id='Profile' class='tab-pane fade in active'>
 </div>
    <div id='menu1' class='tab-pane fade col-md-12'>
";
my_projects($cxn);
echo"
</div>
    <div id='menu2' class='tab-pane fade'>
";
my_projects_earnings($cxn);
echo"
</div>
  </div>
  ";
	}
	
	elseif($value == 2)
	{
		echo"<ul class='nav nav-pills' style='width:100%;'>
    <li ><a data-toggle='tab' href='#Profile' onclick='change()'><i class='glyphicon glyphicon-user'></i> Profile</a></li>
    <li><a  href='projectform.php'><i class='fa fa-cloud-upload'></i> Upload Project</a></li>
    <li class='active'><a data-toggle='tab' href='#menu1' onclick='empty(1)'><i class='fa fa-database'></i> Projects</a></li>
	 <li><a data-toggle='tab' href='#menu2' onclick='empty(2)'><i class='fa fa-usd'></i> Earnings</a></li>
    <li ><a  href='logout.php'><i class='glyphicon glyphicon-log-out'></i> Log Out</a></li>
  </ul>
   <div class='tab-content'>
    <div id='Profile' class='tab-pane fade '>
 </div>
    <div id='menu1' class='tab-pane fade col-md-12 in active'>
";
my_projects($cxn);
echo"
</div>
    <div id='menu2' class='tab-pane fade'>
 ";
my_projects_earnings($cxn);
echo"
</div>
  </div>
  ";
	}
	
	elseif($value == 3)
	{
		echo"<ul class='nav nav-pills' style='width:100%;'>
    <li > <a data-toggle='tab' href='#Profile' onclick='change()'><i class='glyphicon glyphicon-user'></i> Profile </a></li>
    <li><a  href='projectform.php'><i class='fa fa-cloud-upload'></i> Upload Project</a></li>
    <li ><a data-toggle='tab' href='#menu1' onclick='empty(1)'><i class='fa fa-database'></i> Projects</a></li>
	 <li class='active'><a data-toggle='tab' href='#menu2'  onclick='empty(2)'><i class='fa fa-usd'></i> Earnings</a></li>
    <li ><a  href='logout.php'><i class='glyphicon glyphicon-log-out'></i> Log Out</a></li>
  </ul>
  
   <div class='tab-content'>
    <div id='Profile' class='tab-pane fade '>
 </div>
    <div id='menu1' class='tab-pane fade >
	";
my_projects($cxn);
echo"
</div>
    <div id='menu2' class='tab-pane fade col-md-12 in active'>
	";
my_projects_earnings($cxn);
echo"
</div>
  </div>";
	}
	return;
	
}

function change_price($cxn,$protype)
{
	if($protype == "UnderGraduate")
	{
		$id = 1;
	}
	elseif($protype == "Masters")
	{
		$id = 2;
	}
	elseif($protype == "PHD")
	{
		$id = 3;
	}
	elseif($protype == "Other")
	{
		$id = 4;
	}
	 $query = "SELECT price FROM price where priceid='$id'";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			$row = mysqli_fetch_assoc($result);
					
						extract($row);
						
						echo"<option>$price</option>";
					
			
  return;
}

function select_protypeid($cxn,$protype)
{
	$query = "SELECT protypeid FROM protype where protype='$protype'";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			$row = mysqli_fetch_assoc($result);
			global $protypeid;
			$protypeid = $row['protypeid'];
			return;
					
}

function show_project($cxn,$id,$mem_id)
{
	$query = "SELECT * FROM entry where projectid='$id'"; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				 /* Display results in a table */
				 $row = mysqli_fetch_assoc($result);
				   $query1="SELECT firstname,phone,lastname from alumni where alumniid='{$row['alumniid']}'";
	   																$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query1");
																	$row1 = mysqli_fetch_assoc($result1);
																	$name = $row1['firstname'];
																	$phone = $row1['phone'];
																	$name1 = $row1['lastname'];
	   $query2=" SELECT department from department where departmentid='{$row['departmentid']}'";
																	$result2 = mysqli_query($cxn,$query2) or     
																	die("Couldn't execute SELECT query");
																	$row2 = mysqli_fetch_assoc($result2);
																	$department = $row2['department'];
		$query5 = "select entryid from entry where departmentid='{$row['departmentid']}'";
							$result5= mysqli_query($cxn,$query5) or     
								die("Couldn't execute SELECT query5");
								$similar=0;
								$dept = $row['departmentid'];
							while($row5 = mysqli_fetch_assoc($result5))
										{
																		
													$similar = $similar + 1;
										}
	   $query3="SELECT school from school where schoolid='{$row['schoolid']}'";
																	$result3 = mysqli_query($cxn,$query3) or     
																	die("Couldn't execute SELECT query");
																	$row3 = mysqli_fetch_assoc($result3);
																	$school = $row3['school'];
	   $query4="SELECT year from year where yearid='{$row['yearid']}'";
																	$result4 = mysqli_query($cxn,$query4) or     
																	die("Couldn't execute SELECT query");
																	$row4 = mysqli_fetch_assoc($result4);
																	$year = $row4['year'];
	   $query5="SELECT title,filename,type,downloads,price,description,contents,facebook,youtube,verification from project where projectid='{$row['projectid']}'";
																	$result5 = mysqli_query($cxn,$query5) or     
																	die("Couldn't execute SELECT query");
																	$row5 = mysqli_fetch_assoc($result5);
																	$title = $row5['title'];
																	$description = $row5['description'];
																	$description = nl2br($description);
																	
																	$contents = $row5['contents'];
																	$contents = nl2br($contents);
																	
																	$facebook = $row5['facebook'];
																	$youtube = $row5['youtube'];
																	$verification = $row5['verification'];
														
																	$filename = $row5['filename'];
																	
																	$type = $row5['type'];
																	$downloads= $row5['downloads'];
																	$price = $row5['price'];
		$query6="SELECT comment from comments where projectid='{$row['projectid']}'";
		$result6 = mysqli_query($cxn,$query6) or     
		die("Couldn't execute SELECT query");
		if($verification ==0)
																	{
																		$verification = "Not Verified <font color='red'><i class='glyphicon glyphicon-warning-sign'></i></font>";
																	}
																	else
																	{
																		$verification = "Verified <font color='green'><i class='glyphicon glyphicon-ok'></i></font>";
																	}
		echo"
<div class='col-md-12' align='center'>
<a style='color:blue;' onclick='edit($id,$mem_id)'><img src='images/b_edit.png'  alt='edit on Jarazone'/> Edit</a>&nbsp;&nbsp;&nbsp;
<a style='color:blue;' onclick='delit($id)'><img src='images/b_drop.png'  alt='delete on Jarazone'/> Delete</a>
</div><br>
		<div class='col-md-12' style='background-color:grey; color:white;text-align:left;' ><strong>Verification Status:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$verification</h5></div><br>
				<div class='col-md-12'style='background-color:grey; color:white;text-align:left;'><strong>Title:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$title</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Type:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$type</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Year:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$year</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Department:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$department</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>School:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$school</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Author:</strong></div>
				<div class='col-md-12' style='text-align:left;'> <h5>$name &nbsp; $name1 </h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Author's Phone:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$phone </h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Downloads:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$downloads</h5> <br></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Abstract:</strong></div>
				<div class='col-md-12'style='text-align:left;'><h5>
				<a data-toggle='collapse' align='left'href='#description' style='width:100%;  'class='btn btn-default btn-md' role='button'>Abstract <i class='fa fa-caret-down'></i></a><br></div>
				<div id='description' class='collapse'  style='text-align:left;'>
				$description
				</div>
				</h5> <br></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Contents:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>
				<a data-toggle='collapse' align='left'href='#contents' style='width:100%; 'class='btn btn-default btn-md' role='button'>Contents <i class='fa fa-caret-down'></i></a><br></div>
				<div id='contents' class='collapse' style='text-align:left;'>
				$contents 
				</div>
				</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Facebook Page:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$facebook</h5> <br></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Youtube Video Link:</strong></div>
				<div class='col-md-12'style='text-align:left;'><h5>$youtube </h5></div><br>
<div class='col-md-12' align='center'><a style='color:blue;' onclick='edit($id,$mem_id)'><img src='images/b_edit.png'  alt='edit on Jarazone'/> Edit</a>&nbsp;&nbsp;&nbsp;
<a style='color:blue;' onclick='delit($id)'><img src='images/b_drop.png'  alt='delete on Jarazone'/> Delete</a>
</div>
																	
																	
		";
		
return;
		}

function edit_project($cxn,$id,$mem_id)
{
	
	$query = "SELECT * FROM entry where projectid='$id'"; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				 /* Display results in a table */
				 $row = mysqli_fetch_assoc($result);
				   $query1="SELECT firstname,phone,lastname from alumni where alumniid='{$row['alumniid']}'";
	   																$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query1");
																	$row1 = mysqli_fetch_assoc($result1);
																	$name = $row1['firstname'];
																	$phone = $row1['phone'];
																	$name1 = $row1['lastname'];
	   $query2=" SELECT department from department where departmentid='{$row['departmentid']}'";
																	$result2 = mysqli_query($cxn,$query2) or     
																	die("Couldn't execute SELECT query");
																	$row2 = mysqli_fetch_assoc($result2);
																	$department = $row2['department'];
		$query5 = "select entryid from entry where departmentid='{$row['departmentid']}'";
							$result5= mysqli_query($cxn,$query5) or     
								die("Couldn't execute SELECT query5");
								$similar=0;
								$dept = $row['departmentid'];
							while($row5 = mysqli_fetch_assoc($result5))
										{
																		
													$similar = $similar + 1;
										}
	   $query3="SELECT school from school where schoolid='{$row['schoolid']}'";
																	$result3 = mysqli_query($cxn,$query3) or     
																	die("Couldn't execute SELECT query");
																	$row3 = mysqli_fetch_assoc($result3);
																	$school = $row3['school'];
	   $query4="SELECT year from year where yearid='{$row['yearid']}'";
																	$result4 = mysqli_query($cxn,$query4) or     
																	die("Couldn't execute SELECT query");
																	$row4 = mysqli_fetch_assoc($result4);
																	$year = $row4['year'];
	   $query5="SELECT title,filename,type,downloads,price,description,contents,facebook,youtube,verification from project where projectid='{$row['projectid']}'";
																	$result5 = mysqli_query($cxn,$query5) or     
																	die("Couldn't execute SELECT query");
																	$row5 = mysqli_fetch_assoc($result5);
																	$title = $row5['title'];
																	$description = $row5['description'];
																	$contents = $row5['contents'];
																	$facebook = $row5['facebook'];
																	$youtube = $row5['youtube'];
																	$verification = $row5['verification'];
														
																	$filename = $row5['filename'];
																	
																	$type = $row5['type'];
																	$downloads= $row5['downloads'];
																	$price = $row5['price'];
		$query6="SELECT comment from comments where projectid='{$row['projectid']}'";
		$result6 = mysqli_query($cxn,$query6) or     
		die("Couldn't execute SELECT query");
		if($verification ==0)
																	{
																		$verification = "Not Verified <font color='red'><i class='glyphicon glyphicon-warning-sign'></i></font>";
																	}
																	else
																	{
																		$verification = "Verified <font color='green'><i class='glyphicon glyphicon-ok'></i></font>";
																	}
		echo"
		 
		<div class='col-md-12' align='center'> <button  class='btn btn-primary btn-md' onclick='update_project($mem_id)' >Save</button></div>
		<div class='col-md-12' style='background-color:grey; color:white;text-align:left;' ><strong>Verification Status:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$verification</h5></div><br>
				<div class='col-md-12'style='background-color:grey; color:white;text-align:left;'><strong>Title:</strong></div>
				<div class='col-md-12' style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<input class='form-control' type='text'  placeholder='enter project title' id='title' name='title' value='$title'  required/>
				</div>
				</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Type:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$type</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Year:</strong></div>
				<div class='col-md-12' style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<select class='form-control' name='year' id='year'>
				<option>$year</option>";
				select_year($cxn);
				echo"
				</select>
				</div>
				</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Department:</strong></div>
				<div class='col-md-12' style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<select class='form-control' name='department' id='department'>
				<option>$department</option>";
				select_department($cxn);
				echo"
				</select>
				</div>
				</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>School:</strong></div>
				<div class='col-md-12' style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<select class='form-control' name='school' id='school'>
				<option>$school</option>";
				select_school($cxn);
				echo"
				</select>
				</div>
				</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Author:</strong></div>
				<div class='col-md-12' style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<input class='form-control' type='text'  placeholder='enter first name 'name='firstname' id='firstname' value='$name' required/>
				</div>
				<div class='form-group'>
				<input class='form-control' type='text'  placeholder='enter last name 'name='lastname' id='lastname' value='$name1' required/>
				</div>
				</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Author's Phone:</strong></div>
				<div class='col-md-12' style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<input class='form-control' type='text'  placeholder='enter phone' id='phone' name='phone' value='$phone'  required/>
				</div>
				</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Downloads:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$downloads</h5> <br></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Abstract:</strong></div>
				<div class='col-md-12'style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<textarea class='form-control' rows='10'  name='description' id='description' value='$description' required>$description</textarea>
				</div>
				</h5> <br></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Contents:</strong></div>
				<div class='col-md-12' style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<textarea class='form-control' rows='10'  name='contents' id='contents' value='$contents' required>$contents</textarea>
				</div>
				</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Facebook Page:</strong></div>
				<div class='col-md-12' style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<input class='form-control' type='text' id='fbn' placeholder='enter facebook' name='fbn' value='$facebook'/>
				</h5> </div><br></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Youtube Video Link:</strong></div>
				<div class='col-md-12'style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<input class='form-control' type='text'id='youtube'  placeholder='enter first name 'name='youtube' value='$youtube' />
				</h5></div></div><br>
			<div class='col-md-12' align='center'> <button  class='btn btn-primary btn-md' onclick='update_project($mem_id)' >Save</button></div>
			<input type='hidden' id='id' name='id' value='$id'/>
																
																	
		";
return;
}

function delete_project($cxn,$id)
{
	$query = "SELECT title FROM project where projectid='$id'"; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				$row = mysqli_fetch_assoc($result);
				$project = $row['title'];
				
		$query = "DELETE FROM entry where projectid='$id'"; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				
				$query = "DELETE FROM project where projectid='$id'"; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				
				echo"$project has been deleted";
}

function edit_profile($cxn)
{
	
	
	$firstname = $_SESSION['firstname'];
	$surname = $_SESSION['surname'];
		$email = $_SESSION['email'];
		$id = $_SESSION['id'];
		$picture = $_SESSION['picture'] ;
		$query = "select * from member where memberid='$id'";
		$result = mysqli_query($cxn,$query) or     
		die("Couldn't execute SELECT query");
		$row = mysqli_fetch_assoc($result);
		$school= $row['school'];
		$location = $row['location'];
		$facebook = $row['facebook'];
		$whatsapp = $row['whatsapp'];
		$instagram = $row['instagram'];
		$twitter = $row['twitter'];
		$google= $row['google'];
		$snapchat= $row['snapchat'];
		
		
		
		
		
		
		echo"
		 
		<div class='col-md-12'> <button onclick='update_profile($id)' class='btn btn-primary btn-md'>Save</button></div>
		
		<div class='col-md-12' style='background-color:grey; color:white;text-align:left;'>Basic info</div>
		
		<div class='col-md-12' style='background-color:white; text-align:left;'>
		<div class='form-group'>
		 <label class='control-label col-md-2' style='text-align:left; ' for='firstname' >firstname:</label>
		 <div class='col-sm-10'>
		<input class='form-control' type='text'  placeholder='enter  firstname'   id='firstname'  name='firstname' value='$firstname'required />
		</div>
		</div>
		</div>
		<div class='col-md-12' style='background-color:white; text-align:left;'>
		<div class='form-group'>
		 <label class='control-label col-md-2' style='text-align:left; ' for='surname' >surname:</label>
		 <div class='col-sm-10'>
		<input class='form-control' type='text'  placeholder='enter  surname'   id='surname'  name='surname' value='$surname'required />
		</div>
		</div>
		</div>
		
		";
				
					echo"<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>School:</strong></div>
				<div class='col-md-12' style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<select class='form-control' name='school' id='school'>
				<option>$school</option>";
				select_school($cxn);
				echo"
				</select>
				</div>
				</h5></div><br>";
					
					
					
					
					echo"<div class='col-md-12' style='background-color:grey; color:white;text-align:left;'>Location</div>
					<div class='col-md-12' style='background-color:white; text-align:left;'>
		<div class='form-group'>
		 <label class='control-label col-md-2' style='text-align:left; ' for='school'>Location:</label>
		 <div class='col-sm-10'>
		<input class='form-control' type='text'  placeholder='enter location' id='location' name='location' value='$location' required />
		</div>
		</div>
		</div>
				";
					
					
					
					//socila//
					echo"<br>
						<div class='col-md-12' style='background-color:grey; color:white;text-align:left;'>Social Links</div>";
						
								//facebook//
							echo"
							<div class='col-md-12' style='background-color:white; text-align:left;'>
		<div class='form-group'>
		 <label class='control-label col-md-2' style='text-align:left; ' for='facebook'>Facebook:</label>
		 <div class='col-sm-10'>
		<input class='form-control' type='text'  placeholder='enter facebook' id='facebook' name='facebook' value='$facebook' required />
		</div>
		</div>
		</div>";
															//whatsapp//
							
							echo"
						<div class='col-md-12' style='background-color:white; text-align:left;'>
		<div class='form-group'>
		 <label class='control-label col-md-2' style='text-align:left; ' for='whatsapp'>Whatsapp Number:</label>
		 <div class='col-sm-10'>
		<input class='form-control' type='text'  placeholder='enter whatsapp number' id='whatsapp'  name='whatsapp' value='$whatsapp' required />
		</div>
		</div>
		</div>";
				
															//instagram//
							
							echo"
							<div class='col-md-12' style='background-color:white; text-align:left;'>
		<div class='form-group'>
		 <label class='control-label col-md-2' style='text-align:left; ' for='instagram'>Instagram:</label>
		 <div class='col-sm-10'>
		<input class='form-control' type='text'  placeholder='enter instagram' id='instagram' name='instagram' value='$instagram' required />
		</div>
		</div>
		</div>";
							
							
															//twitter//
								
							echo"
								<div class='col-md-12' style='background-color:white; text-align:left;'>
		<div class='form-group'>
		 <label class='control-label col-md-2' style='text-align:left; ' for='twitter'>Twitter:</label>
		 <div class='col-sm-10'>
		<input class='form-control' type='text'  placeholder='enter twitter' id='twitter' name='twitter' value='$twitter' required />
		</div>
		</div>
		</div>";
							
							
															//snapchat//
								
							echo"
							<div class='col-md-12' style='background-color:white; text-align:left;'>
		<div class='form-group'>
		 <label class='control-label col-md-2' style='text-align:left; ' for='snapchat'>Snapchat:</label>
		 <div class='col-sm-10'>
		<input class='form-control' type='text'  placeholder='enter snapchat' id='snapchat' name='snapchat' value='$snapchat' required />
		</div>
		</div>
		</div>";
							
							
															//google//
							
							echo"
							<div class='col-md-12' style='background-color:white; text-align:left;'>
		<div class='form-group'>
		 <label class='control-label col-md-2' style='text-align:left; ' for='google'>Google:</label>
		 <div class='col-sm-10'>
		<input class='form-control' type='text'  placeholder='enter google' id='google' name='google' value='$google' required />
		</div>
		</div>
		</div>";
		echo"
		<div class='col-md-12'> <button onclick='update_profile($id)' class='btn btn-primary btn-md'>Save</button></div>
		";
							return;
		

		
		
}

function edit_earnings($cxn,$id)
{
	
	$query = "select downloads,price from project where projectid='$id'";
	$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query1");
				 /* Display results in a table */
				 $row = mysqli_fetch_assoc($result);
				 $downloads = $row['downloads'];
				 $price = $row['price'];
				 
				 $earnings =  $downloads * $price;
				 
	 $query2 = "select * from paymentinfo where projectid='$id'";
	$result2 = mysqli_query($cxn,$query2)   
				or die ("couldn't execute query2");
				 /* Display results in a table */
				 $row2 = mysqli_fetch_assoc($result2);
				  $email = $row2['email'];
				   $accname = $row2['accname'];
				    $accnum = $row2['accnum'];
					  $phone = $row2['phone'];
					  $bankid = $row2['bankid'];
					  $acctypeid = $row2['acctypeid'];
					  
  $query3 = "select * from banks where bankid='$bankid'";
	$result3 = mysqli_query($cxn,$query3)   
				or die ("couldn't execute query3");
				 /* Display results in a table */
				 $row3 = mysqli_fetch_assoc($result3);
				  $bank = $row3['bank'];
				  
				 
	$query4 = "select * from acctype where acctypeid='$acctypeid'";
	$result4 = mysqli_query($cxn,$query4)   
				or die ("couldn't execute query4");
				 /* Display results in a table */
				 $row4 = mysqli_fetch_assoc($result4);
				  $acctype = $row4['acctype'];
				  if($price == 0)
				  {
					   echo"
					   
		<div class='col-md-12' style='background-color:grey; color:white;text-align:left;' ><strong>Downloads:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5> $downloads </h5></div><br>
				<div class='col-md-12'style='background-color:grey; color:white;text-align:left;'><strong>Price:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$price</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Earnings:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$earnings</h5></div><br>
				
				";
				  }
				  else
				  {
	echo"
	<div class='col-md-12'> <button onclick='update_earnings($id)' class='btn btn-primary btn-md'>Save</button></div>
	<div class='col-md-12' style='background-color:grey; color:white;text-align:left;' ><strong>Downloads:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5> $downloads </h5></div><br>
				<div class='col-md-12'style='background-color:grey; color:white;text-align:left;'><strong>Price:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$price</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Earnings:</strong></div>
				<div class='col-md-12' style='text-align:left;'><h5>$earnings</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Account Name:</strong></div>
				<div class='col-md-12' style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<input class='form-control' type='text'  placeholder='enter project title' id='accname' name='accname' value='$accname'  required/>
				</div>
				</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Account Number:</strong></div>
				<div class='col-md-12' style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<input class='form-control' type='text'  placeholder='enter project title' id='accnum' name='accnum' value='$accnum'  required/>
				</div>
				</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Bank:</strong></div>
				<div class='col-md-12' style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<select class='form-control' name='bank' id='bank'>
				<option>$bank</option>";
				select_bank($cxn);
				echo"
				</select>
				</div>
				</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Account Type:</strong></div>
				<div class='col-md-12' style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<select class='form-control' name='acctype' id='acctype'>
				<option>$acctype</option>";
				select_acctype($cxn);
				echo"
				</select>
				</div>
				</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Phone:</strong></div>
				<div class='col-md-12' style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<input class='form-control' type='phone'  placeholder='enter project phone' id='phone' name='phone' value='$phone'  required/>
				</div>
				</h5></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Email:</strong></div>
				<div class='col-md-12' style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<input class='form-control' type='email'  placeholder='enter project Email' id='email' name='email' value='$email'  required/>
				</div>
				</h5></div><br>
				<div class='col-md-12'> <button onclick='update_earnings($id)' class='btn btn-primary btn-md'>Save</button></div>
	";
				  }
	
}

function update_projects($cxn,$title,$year,$department,$school,$firstname,$lastname,$contents,$youtube,$description,$facebook,$id,$phone,$mem_id)
{
	
	
									$query = "SELECT yearid from year where year='$year'";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query10"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $yearid;
													   $yearid= $row['yearid'];


	$query = "SELECT departmentid from department where department='$department'";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query11"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $departmentid;
													   $departmentid= $row['departmentid'];
	
		$query = "SELECT schoolid from school where school='$school'";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query12"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $schoolid;
													   $schoolid= $row['schoolid'];
	
	 $query2=" update project set title='$title',contents='$contents',youtube='$youtube',description='$description',facebook='$facebook' where projectid='$id'";
																	$result2 = mysqli_query($cxn,$query2) or     
																	die("Couldn't execute SELECT query2");
	$query9= "update entry set yearid='$yearid',departmentid='$departmentid',schoolid='$schoolid' where projectid='$id'";
													$result9 = mysqli_query($cxn,$query9) or     
													die("Couldn't execute SELECT query9"); 
													
		$query = "SELECT alumniid FROM entry where projectid='$id'"; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");	
				$row = mysqli_fetch_assoc($result);

 $query1="update alumni set  firstname='$firstname',phone='$phone',lastname='$lastname' where alumniid='{$row['alumniid']}'";
	   																$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query1");	
																	
													 
		show_project($cxn,$id,$mem_id);
return;		

}

function update_profile($cxn,$firstname,$surname,$school,$location,$whatsapp,$instagram,$twitter,$snapchat,$facebook,$google,$id)
{
 $query2="update member set firstname='$firstname',surname='$surname',school='$school',location='$location',whatsapp='$whatsapp',facebook='$facebook',instagram='$instagram',twitter='$twitter',snapchat='$snapchat',google='$google'  where memberid='$id'";
																	$result = mysqli_query($cxn,$query2) or     
													die("Couldn't execute SELECT query10"); 
				$query = "SELECT * from member where memberid='$id'";
							$result = mysqli_query($cxn,$query) or     
									die("Couldn't execute select query12");
									$row = mysqli_fetch_assoc($result);
												extract($row);
																		$_SESSION['firstname'] = "$firstname";
																		$_SESSION['surname'] = "$surname";
																		$_SESSION['email'] = "$email";
																		$_SESSION['id'] = "$memberid";
																		$_SESSION['picture'] = "$picture";
																
		
		profile($cxn);
		
		return;

}

function update_earnings($cxn,$id,$accname,$accnum,$acctype,$bank,$phone,$email)
{
	
			$query = "SELECT acctypeid from acctype where acctype='$acctype'";
													$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute SELECT query10"); 
													$row = mysqli_fetch_assoc($result);
													  
													  global $acctypeid;
													  $acctypeid= $row['acctypeid'];
					
											$query = "SELECT bankid FROM banks where bank='$bank'";
												$result = mysqli_query($cxn,$query) or     
													die("Couldn't execute select query9");
													$row = mysqli_fetch_assoc($result);
													 global $bankid;
												$bankid = $row['bankid'];
											
$query = "update paymentinfo set accname='$accname',accnum='$accnum',acctypeid='$acctypeid',bankid='$bankid',email='$email',phone='$phone' where projectid='$id'";
				$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute SELECT query8,$accnum"); 
				
				show_earnings($cxn,$id);
				return;
}

function display_type_departmental_projects($cxn,$departmentid,$protypeid)
{
	$query = "SELECT department FROM department where departmentid='$departmentid' ";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query7");
			$row = mysqli_fetch_assoc($result);
			$department = $row['department'];
			
			
			
	$query = "SELECT * FROM entry where departmentid='$departmentid' and protypeid='$protypeid' order by entryid DESC "; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query6.");
					 /* Display results in a table */
					$counter = 1;
							$ntype = mysqli_num_rows($result);
					//   
						if ($ntype < 1)    
							//if new type is not in table  
								{   
								echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No More Projects <br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";


								}
								else
								{

									project_displayer($cxn,$result,$counter);									
																																		
								}
			
			return;
}

function display_free_type_Departmental_projects($cxn,$departmentid,$protypeid)
{
		$query = "SELECT * FROM entry where priceid='5' and departmentid='$departmentid' and protypeid='$protypeid' order by projectid DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No Free Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 10)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function update_profile_pic($cxn,$filepath)
{

	$id = $_SESSION['id'];
	$_SESSION['picture'] = "$filepath";

 $query2="update member set picture='$filepath'  where memberid='$id'";
																	$result = mysqli_query($cxn,$query2) or     
													die("Couldn't execute SELECT query10"); 
													return;
													
}

function show_profile($cxn,$id)
{
	echo"<div class='col-md-3' ></div><div class='col-md-6'  style='background-color:black; align:center; color:white;'>";
	  $query = "select * from member where memberid='$id'";
		$result = mysqli_query($cxn,$query) or     
		die("Couldn't execute SELECT query");
		$row = mysqli_fetch_assoc($result);
							$school= $row['school'];
							$location = $row['location'];
							$facebook = $row['facebook'];
							$whatsapp = $row['whatsapp'];
							$instagram = $row['instagram'];
							$twitter = $row['twitter'];
							$google= $row['google'];
							$firstname = $row['firstname'];
							$surname = $row['surname'];
							$email = $row['email'];
							$picture = $row['picture'] ;
						

							
							echo"<br><br><div class='col-md-12' align='center' ><img src='photo/$picture' href='photo/$picture'class='img-square' alt='$firstname on Jarazone' width='150' height='150' align='center'></div>";
	
		
		echo"<div class='col-md-12' style='text-align:center;'><h4>$firstname $surname</h4></div>
		 <div class='col-md-12' style='background-color:grey; color:white;text-align:left;'>Projects</div><div class='col-md-12' align='left'>
		 <input type='hidden' name='email' value='$email' />";
		 
		 
		 $query2 = "select * from project where memberid='$id'";
		$result2 = mysqli_query($cxn,$query2) or     
		die("Couldn't execute SELECT query");
		$ntype = mysqli_num_rows($result2);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{   
							echo"<div class='col-md-12' style=' text-align:left;'><h5>No Projects Yet</h5></div>";
							
							}
							else
							{
		$u =1;
		echo"<ol>";
		
		while($row2 = mysqli_fetch_assoc($result2))
		{
			
							$projectid= $row2['projectid'];
							$title = $row2['title'];
							$type = $row2['type'];
							echo"<li align='left'><h5 align='left'><a href='projectpage.php?id=$projectid' color:skyblue;>$title</a></li>";
							$u = $u + 1;
		}
							
	echo"</ol>";
							}
		echo"</div>
		";
					if(empty($row['school']))
					{
						echo"<br>
						<div class='col-md-12' style='background-color:grey; color:white;text-align:left;'>school</div>
					<div class='col-md-12' id='profile1' style=' color:skyblue; text-align:left;'>
					<h5><a onclick='ask(1)' >Ask For school</a></h5>
					</div>
					";
					}
					else
					{
					echo"<br><div class='col-md-12' style='background-color:grey; color:white;text-align:left;'>School</div>
					<div class='col-md-12' style=' text-align:left;'><h5>$school</h5></div>";
					}
					
					
					if(empty($row['location']))
					{
						echo"<br>
						<div class='col-md-12' style='background-color:grey; color:white;text-align:left;'>Location</div>
					<div class='col-md-12' id='profile2' style=' color:skyblue; text-align:left;'>
					<h5><a onclick='ask(2)'>Ask For Location</a></h5>
					</div>
					";
					}
					else
					{
					echo"<br><div class='col-md-12' style='background-color:grey; color:white;text-align:left;'>Location</div>
					<div class='col-md-12' style=' text-align:left;'><h5>$location</h5></div>";
					}
					
					
					//socila//
					echo"<br>
						<div class='col-md-12' style='background-color:grey; color:white;text-align:left;'>Social Links</div>";
						
								//facebook//
								if(empty($row['facebook']))
							{
								echo"
							<div class='col-md-12' id='profile3' style=' color:skyblue; text-align:left;'>
							<h5><a onclick='ask(3)' >Ask For  Facebook </a></h5>
							</div>
							";
							}
							else
							{
							echo"
							<div class='col-md-12' style=' text-align:left;'><h5>Facebook: $facebook</h5></div>";
							}
															//whatsapp//
								if(empty($row['whatsapp']))
							{
								echo"
							<div class='col-md-12' id='profile4'  style=' color:skyblue; text-align:left;'>
							<h5><a onclick='ask(4)' >Ask For  Whatsapp Number</a></h5>
							</div>
							";
							}
							else
							{
							echo"
							<div class='col-md-12' style=' text-align:left;'><h5>Whatsapp Number: $whatsapp</h5></div>";
							}
															//instagram//
								if(empty($row['instagram']))
							{
								echo"
							<div class='col-md-12' id='profile5'  style=' color:skyblue; text-align:left;'>
							<h5><a onclick='ask(5)'   >Ask For Instagram </a></h5>
							</div>
							";
							}
							else
							{
							echo"
							<div class='col-md-12' style=' text-align:left;'><h5>Instagram: $instagram</h5></div>";
							}
							
															//twitter//
								if(empty($row['twitter']))
							{
								echo"
							<div class='col-md-12' id='profile6' style=' color:skyblue; text-align:left;'>
							<h5><a onclick='ask(6)'  >Ask For Twitter</a></h5>
							</div>
							";
							}
							else
							{
							echo"
							<div class='col-md-12' style=' text-align:left;'><h5>Twitter: $twitter</h5></div>";
							}
							
															//snapchat//
								if(empty($row['snapchat']))
							{
								echo"
							<div class='col-md-12' id='profile7' style=' color:skyblue; text-align:left;'>
							<h5><a onclick='ask(7)'  >Ask For Snapchat </a></h5>
							</div>
							";
							}
							else
							{
							$snapchat=	$row['snapchat'];
							echo"
							<div class='col-md-12' style=' text-align:left;'><h5>Snapchat: $snapchat</h5></div>";
							}
							
															//google//
								if(empty($row['google']))
							{
								echo"
							<div class='col-md-12' id='profile8' style=' color:skyblue; text-align:left;'>
							<h5><a onclick='ask(8)'  >Ask For Google </a></h5>
							</div>
							";
							}
							else
							{
							echo"
							<div class='col-md-12' style=' text-align:left;'><h5>Google: $google</h5></div>";
							}
					
					echo"</div><div class='col-md-3' ></div>";
		return;
		
		
		
}

function add_verifier($cxn,$email,$surname,$firstname,$pwd)
{
	$query = "SELECT email from verifiers where email='$email'";
	$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query1");
			$ntype = mysqli_num_rows($result);
					if ($ntype < 1)    
					{
						$firstname = ucfirst($firstname);
						$surname = ucfirst($surname);
							date_default_timezone_set('Africa/Lagos');
							$time = date("h:i:sa");
							$date = date("d/m/y");
							$query1="insert into verifiers (time,date,password,firstname,email,surname) values('$time','$date',md5('$pwd'),'$firstname','$email','$surname')";
														$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query2");
															
								$_SESSION['auth_verify'] = "yes";
								$_SESSION['firstname'] = "$firstname";
								$_SESSION['surname'] = "$surname";
								$_SESSION['email'] = "$email";
										$query = "SELECT * from verifiers where email='$email'  and password=md5('$pwd')";
										$result = mysqli_query($cxn,$query) or     
										die("Couldn't execute select query3");
										$row = mysqli_fetch_assoc($result);
										extract($row);
								$_SESSION['id'] = "$id";
								$_SESSION['picture'] = "$picture";
								 /* send email to new Customer */  
								 $emess = "You have successfully registered to be a . ";    
								 $emess .= "Your new user name and password are: ";    
								 $emess .= "\n\n\t$firstname\n\t";      
								 $emess .= "$pwd\n\n";     
								 $emess .= "We appreciate your interest. \n\n";   
								 $emess .= "If you have any questions or problems,";      
								 $emess .= " email service@jarazone.com";    
								 $subj = "Your new Verifier  registration"; 
								  $mailsend=mail("$email","$subj","$emess"); 
								    header("Location: verifier_account.php"); 
					}
					else
					{
						 $error = "email already regietered";
						  header("Location: verifier_signup.php?error= $error"); 
					}
					return;

}

function verifier_login($cxn,$email,$pwd)
{
	$query = "SELECT email from  verifiers where email='$email'";
	$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			$ntype = mysqli_num_rows($result);
					if ($ntype < 1)    
					{
						$error = "Email Not Regietered";
						  header("Location: verify_login.php?error= $error"); 
					}
					else
					{
						
						$query = "SELECT * from verifiers where email='$email' and password=md5('$pwd')";
							$result = mysqli_query($cxn,$query) or     
									die("Couldn't execute select query12");
									$ntype = mysqli_num_rows($result);
											if ($ntype < 1)    
											{
												$error = "Password Is Incorrect";
														header("Location: verify_login.php?error= $error");
											}
											else
											{
													
												
														$row = mysqli_fetch_assoc($result);
														extract($row);
														if($approval == 0)
														{
															$error = "You've Not Been Approved";
														header("Location: verify_login.php?error= $error");
														}
														else
														{
															
														
															date_default_timezone_set('Africa/Lagos');
															$time = date("h:i:sa");
															$date = date("d/m/y");
														$query1="insert into verifier_login (id,firstname,email,logintime,logindate) values('$id','$firstname','$email','$time','$date')";
																$result1 = mysqli_query($cxn,$query1) or     
																			die("Couldn't execute SELECT query2");
																		
																				$_SESSION['auth_verify'] = "yes";
																				$_SESSION['firstname'] = "$firstname";
																				$_SESSION['surname'] = "$surname";
																				$_SESSION['email'] = "$email";
																				$_SESSION['id'] = "$id";
																				$_SESSION['picture'] = "$picture";
				$query = "SELECT loginid from verifier_login where id='$id' order by logintime desc limit 1";
				$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute select query12");
				$row = mysqli_fetch_assoc($result);
					extract($row);
					$_SESSION['loginid'] = "$loginid";
					
				
																			
																				 header("Location: verifier_account.php"); 
													}
											}
							}
					
				return;	
}

function project_verification($cxn)
{
	$query = "SELECT * from Project where status='0' order by time";
				$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute select query12");
				$ntype = mysqli_num_rows($result);
				//   check how many projects are not verified
					if ($ntype < 1)    
						//if new type is not in table  
						{
							echo"All Projects have been Checked For Veification";
						}
						else
						{
							global $roll;
							$roll = 1;
							while($row = mysqli_fetch_assoc($result))
									{
										
										extract($row);
										
										if($status == 0)
										{
											$status = "Not Checked";
										}
										else
										{
											$status = "Checked";
										}
										
										echo"
										
																<tr id='project_row$roll'>
																	 <td>$status</td>
																	  <td>$projectid</td>
																	  <td>$title</td>
																	   <!-- Trigger the modal with a button -->
<td>
<input type='hidden' id='rooll$roll' name ='rooll$roll' value='$filename'></input>
<span><button type='button' class='btn btn-default btn-sm' onclick='Open_file($roll)' ><i class='glyphicon glyphicon-folder-open'></i> Open Project</button></span>
</td>
																		 <td>
	   <button onclick='verify($projectid,$roll)' type='button' class='btn  btn-success'>Verify <i class='glyphicon glyphicon-ok'></i></button>
	   </td>
	   <td>
	    <button onclick='refute($projectid,$roll)' type='button' class='btn  btn-danger'>Refute <i class='glyphicon glyphicon-warning-sign'></i></button>
																		</td>
																 </tr>		
													 
					
											 ";
											 
											 $roll = $roll + 1;
											 
									}
									
				
									
						}
						
						return;
}
function project_verify($cxn,$roll)
{
	for($i=1; $i<=$roll; $i++)
	{
		echo"<tr id='verify_row$i'></tr>";
	}
	return;
}
function project_refute($cxn,$roll)
{
	for($i=1; $i<=$roll; $i++)
	{
		echo"<tr id='refute_row$i'></tr>";
	}
	return;
}

function verifier_account($cxn,$rolls)
	{
		
	
		$roll = $rolls;
		$firstname = $_SESSION['firstname'];
	$surname = $_SESSION['surname'];
		$email = $_SESSION['email'];
		$id = $_SESSION['id'];
		$picture = $_SESSION['picture'] ;
		
		echo"<img src='photo/$picture' href='photo/$picture' class='img-circle' alt='$firstname on Jarazone' width='100' height='15%' align='center' style='align:left;'><span> <strong>Verifier Name :</strong> $firstname $surname</span>";
			
		

		echo"
		<ul class='nav nav-pills' style='width:100%;'>
    <li class='active'><a data-toggle='tab' href='#Profile' ><i class='fa fa-clock-o'></i> Recent Projects</a></li>
    <li ><a data-toggle='tab' href='#menu1' ><i class='glyphicon glyphicon-ok'></i>  Verified Projects</a></li>
	 <li><a data-toggle='tab' href='#menu2' ><i class='glyphicon glyphicon-warning-sign'></i> Refuted Projects</a></li>
    <li ><a  href='verifier_logout.php'><i class='glyphicon glyphicon-log-out'></i> Log Out</a></li>
  </ul>
   <div class='tab-content'>
   
    <div id='Profile' class='tab-pane fade in active'>
	";
	echo" <table class='table table-bordered table-sm table-condensed  table-striped' style='text-align:center;'>
													<thead>
													
													  <tr>
														<th style='text-align:center;'>Status</th>
														<th style='text-align:center;'>I.D.</th>
														<th style='text-align:center;'>Title</th>
														<th style='text-align:center;'>Open File</th>
														<th style='text-align:center;' colspan='2'>Verification</th>
													  </tr>
													</thead>
													 <tbody>";
project_verification($cxn); 
echo" </tbody></table></div>";


echo"
    <div id='menu1' class='tab-pane fade col-md-12'>
";
echo" <table class='table table-bordered table-sm table-condensed  table-striped' style='text-align:center;'>
													<thead>
													
													  <tr>
														<th style='text-align:center;'>Status</th>
														<th style='text-align:center;'>I.D.</th>
														<th style='text-align:center;'>Title</th>
														<th style='text-align:center;'>Open File</th>
														<th style='text-align:center;' colspan='2'>Verification</th>
													  </tr>
													</thead>
													 <tbody id='verify_body'>
													";
project_verify($cxn,$roll);

echo" </tbody></table><div id='verify_msg' class='col-md-12' align='center'><strong>Projects That You Verified will Be shown here.</strong></div>
</div>";


echo"
    <div id='menu2' class='tab-pane fade'>
";
echo" <table class='table table-bordered table-sm table-condensed  table-striped' style='text-align:center;'>
													<thead>
													
													  <tr>
														<th style='text-align:center;'>Status</th>
														<th style='text-align:center;'>I.D.</th>
														<th style='text-align:center;'>Title</th>
														<th style='text-align:center;'>Open File</th>
														<th style='text-align:center;' colspan='2'>Verification</th>
													  </tr>
													</thead>
													 <tbody id='refute_body'>
													 ";
 project_refute($cxn,$roll);
echo" </tbody></table><div id='refute_msg' class='col-md-12' align='center'><strong>Projects That You Refuted will Be shown here.</strong></div>
</div>";
echo"

  </div>
  ";
	
		
		
		
		
return;		
		
		
		
		
	}
	
function verify($cxn,$id,$roll)
	{

		$verifier_id = $_SESSION['id'];
		
		$query2=" update project set verification='1',status='1' where projectid='$id'";
					$result2 = mysqli_query($cxn,$query2) or     
					die("Couldn't execute SELECT query2");
	

						date_default_timezone_set('Africa/Lagos');
						$time = date("h:i:sa");
						$date = date("d/m/y");
						$status = 1;
						
	$query = "SELECT * from verifier_verification_log where project_id='$id'";
				$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute select query123");
				$ntype = mysqli_num_rows($result);
				//   check how many projects are not verified
					if ($ntype < 1)    
						//if new type is not in table  
						{
							date_default_timezone_set('Africa/Lagos');
						$time = date("h:i:sa");
						$date = date("d/m/y");
	$query1="insert into verifier_verification_log (status,project_id,verifier_id,verification,time,date) values('$status','$id','$verifier_id','1','$time','$date')";
										$result1 = mysqli_query($cxn,$query1) or     
													die("Couldn't execute SELECT query2");
						}
						else
						{
							date_default_timezone_set('Africa/Lagos');
						$time = date("h:i:sa");
						$date = date("d/m/y");
	$query2=" update  verifier_verification_log set verification='1',status='1',time='$time',date='$date' where project_id='$id'";
					$result2 = mysqli_query($cxn,$query2) or     
					die("Couldn't execute SELECT query2");
	
						}
	
	
	
	
			$query= "SELECT * from Project where projectid='$id'";
				$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute select query12");
							$row = mysqli_fetch_assoc($result);
									
										extract($row);
										if($status == 0)
										{
											$status = "Not Checked";
										}
										else
										{
											$status = "Checked";
										}
										
										echo"
																
																	 <td>$status</td>
																	  <td>$id</td>
																	  <td>$title</td>
<td>
<input type='hidden' id='rooll$roll' name ='rooll$roll' value='$filename'></input>
<span><button type='button' class='btn btn-default btn-sm' onclick='Open_file($roll)' ><i class='glyphicon glyphicon-folder-open'></i> Open Project</button></span>
</td>
																		 <td>
																		Verified <i class='glyphicon glyphicon-ok'></i>
																		</td>
																		<td>
	    <button onclick='refute($id,$roll)' type='button' class='btn  btn-danger'>Refute <i class='glyphicon glyphicon-warning-sign'></i></button>
																		</td>
																	
													 
											 ";
		
			return;						
	}
	
	function refute($cxn,$id,$roll)
	{
	
		
		$verifier_id = $_SESSION['id'];
		
		$query2=" update project set verification='0',status='1' where projectid='$id'";
					$result2 = mysqli_query($cxn,$query2) or     
					die("Couldn't execute SELECT query2");
	

						date_default_timezone_set('Africa/Lagos');
						$time = date("h:i:sa");
						$date = date("d/m/y");
						
	$query = "SELECT * from verifier_verification_log where project_id='$id'";
				$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute select query123");
				$ntype = mysqli_num_rows($result);
				//   check how many projects are not verified
					if ($ntype < 1)    
						//if new type is not in table  
						{
							date_default_timezone_set('Africa/Lagos');
						$time = date("h:i:sa");
						$date = date("d/m/y");
						$status = 1;
						
	$query1="insert into verifier_verification_log (status,project_id,verifier_id,verification,time,date) values('$status','$id','$verifier_id','0','$time','$date')";
										$result1 = mysqli_query($cxn,$query1) or     
													die("Couldn't execute SELECT query2");
						}
						else
						{
							date_default_timezone_set('Africa/Lagos');
						$time = date("h:i:sa");
						$date = date("d/m/y");
	$query2=" update  verifier_verification_log set verification='0',status='1',time='$time',date='$date' where project_id='$id'";
					$result2 = mysqli_query($cxn,$query2) or     
					die("Couldn't execute SELECT query2");
	
						}
	
	
	
	
	
			$query = "SELECT * from Project where projectid='$id'";
				$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute select query12");
							$row = mysqli_fetch_assoc($result);
									{
										extract($row);
										if($status == 0)
										{
											$status = "Not Checked";
										}
										else
										{
											$status = "Checked";
										}
										
										echo"
																
																	 <td>$status</td>
																	  <td>$id</td>
																	  <td>$title</td>
																	  <td>
<input type='hidden' id='rooll$roll' name ='rooll$roll' value='$filename'></input>
<span><button type='button' class='btn btn-default btn-sm' onclick='Open_file($roll)' ><i class='glyphicon glyphicon-folder-open'></i> Open Project</button></span>
</td>
																		 <td>
	<button onclick='verify($projectid,$roll)' type='button' class='btn  btn-success'>Verify <i class='glyphicon glyphicon-ok'></i></button>
	</td>
	<td>
	    Refuted <i class='glyphicon glyphicon-warning-sign'></i>
		</td>
														
																
													 
											 ";
		
									}
									return;
	}
	

	
function rolls($cxn)
{
	$query = "SELECT * from Project where status='0' order by time";
				$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute select query123");
				$ntype = mysqli_num_rows($result);
				//   check how many projects are not verified
					if ($ntype < 1)    
						//if new type is not in table  
						{
							global $rolls;
							$rolls = 1;
						}
						else
						{
							global $rolls;
							$rolls = 1;
							while($row = mysqli_fetch_assoc($result))
									{
										
											 $rolls = $rolls + 1;
									}
						}
						return;
}

function rollss($cxn)
	{
	$query = "SELECT * from Project where admin_status='0' order by time";
				$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute select query124");
				$ntype = mysqli_num_rows($result);
				//   check how many projects are not verified
					if ($ntype < 1)    
						//if new type is not in table  
						{
							global $rollss;
							$rollss = 1;
						}
						else
						{
							global $rollss;
							$rollss = 1;
							while($row = mysqli_fetch_assoc($result))
									{
										
											 $rollss = $rollss + 1;
									}
						}
						return;
}

function add_admin($cxn,$email,$surname,$firstname,$pwd)
{
	$query = "SELECT email from admin_members where email='$email'";
	$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query1");
			$ntype = mysqli_num_rows($result);
					if ($ntype < 1)    
					{
						$firstname = ucfirst($firstname);
						$surname = ucfirst($surname);
							date_default_timezone_set('Africa/Lagos');
							$time = date("h:i:sa");
							$date = date("d/m/y");
							$query1="insert into admin_members (time,date,password,firstname,email,surname) values('$time','$date',md5('$pwd'),'$firstname','$email','$surname')";
														$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query2");
																
								$_SESSION['auth_admin'] = "yes";
								$_SESSION['firstname'] = "$firstname";
								$_SESSION['surname'] = "$surname";
								$_SESSION['email'] = "$email";
										$query = "SELECT * from admin_members where email='$email'  and password=md5('$pwd')";
										$result = mysqli_query($cxn,$query) or     
										die("Couldn't execute select query3");
										$row = mysqli_fetch_assoc($result);
										extract($row);
								$_SESSION['id'] = "$admin_id";
								$_SESSION['picture'] = "$picture";
								 /* send email to new Customer */  
								 $emess = "You have successfully registered to be a Jarazone Administrator . ";    
								 $emess .= "Your new user name and password are: ";    
								 $emess .= "\n\n\t$firstname\n\t";      
								 $emess .= "$pwd\n\n";     
								 $emess .= "We will approve you soon,We appreciate your interest. \n\n";   
								 $emess .= "If you have any questions or problems,";      
								 $emess .= " email service@jarazone.com";    
								 $subj = "Your new Administration  registration"; 
								  $mailsend=mail("$email","$subj","$emess"); 
								    header("Location: admin_account.php"); 
					}
					else
					{
						 $error = "email already regietered";
						  header("Location: admin_signup.php?error= $error"); 
					}
					return;

}


function admin_login($cxn,$email,$pwd)
{
	$query = "SELECT email from  admin_members where email='$email'";
	$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			$ntype = mysqli_num_rows($result);
					if ($ntype < 1)    
					{
						$error = "Email Not Regietered";
						  header("Location: admin_login.php?error= $error"); 
					}
					else
					{
						
						$query = "SELECT * from admin_members where email='$email' and password=md5('$pwd')";
							$result = mysqli_query($cxn,$query) or     
									die("Couldn't execute select query12");
									$ntype = mysqli_num_rows($result);
											if ($ntype < 1)    
											{
												$error = "Password Is Incorrect";
														header("Location: admin_login.php?error= $error");
											}
											else
											{
												
														$row = mysqli_fetch_assoc($result);
														extract($row);
														if($approval == 0)
														{
															$error = "You've Not Been Approved";
														header("Location: admin_login.php?error= $error");
														}
														else
														{
															
														
															date_default_timezone_set('Africa/Lagos');
															$time = date("h:i:sa");
															$date = date("d/m/y");
														$query1="insert into admin_login (id,firstname,email,logintime,logindate) values('$admin_id','$firstname','$email','$time','$date')";
																$result1 = mysqli_query($cxn,$query1) or     
																			die("Couldn't execute SELECT query2");
																			
																				$_SESSION['auth_admin'] = "yes";
																				$_SESSION['firstname'] = "$firstname";
																				$_SESSION['surname'] = "$surname";
																				$_SESSION['email'] = "$email";
																				$_SESSION['id'] = "$admin_id";
																				$_SESSION['picture'] = "$picture";
				$query = "SELECT loginid from admin_login where id='$admin_id' order by logintime desc limit 1";
				$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute select query12");
				$row = mysqli_fetch_assoc($result);
					extract($row);
					$_SESSION['loginid'] = "$loginid";
					
				
																			
																				 header("Location: admin_account.php"); 
													}
											}
							}
					
				return;	
}


function all_projects($cxn)
{
	$query = "SELECT * FROM entry order by entryid DESC"; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				 /* Display results in a table */
				 $ntype = mysqli_num_rows($result);
				
				
						while($row = mysqli_fetch_assoc($result))
						{
							 
	       
				
	   $query1="SELECT firstname,phone,lastname from alumni where alumniid='{$row['alumniid']}'";
	   																$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query1");
																	$row1 = mysqli_fetch_assoc($result1);
																	$name = $row1['firstname'];
																	$phone = $row1['phone'];
																	$name1 = $row1['lastname'];
	   $query2=" SELECT department from department where departmentid='{$row['departmentid']}'";
																	$result2 = mysqli_query($cxn,$query2) or     
																	die("Couldn't execute SELECT query");
																	$row2 = mysqli_fetch_assoc($result2);
																	$department = $row2['department'];
	   $query3="SELECT school from school where schoolid='{$row['schoolid']}'";
																	$result3 = mysqli_query($cxn,$query3) or     
																	die("Couldn't execute SELECT query");
																	$row3 = mysqli_fetch_assoc($result3);
																	$school = $row3['school'];
	   $query4="SELECT year from year where yearid='{$row['yearid']}'";
																	$result4 = mysqli_query($cxn,$query4) or     
																	die("Couldn't execute SELECT query");
																	$row4 = mysqli_fetch_assoc($result4);
																	$year = $row4['year'];
$query5="SELECT admin_status,status,description,contents,facebook,youtube,title,filename,time,date,type,price,downloads,verification,memberid from project where projectid='{$row['projectid']}'";
																	$result5 = mysqli_query($cxn,$query5) or     
																	die("Couldn't execute SELECT query");
																	$row5 = mysqli_fetch_assoc($result5);
																	$title = $row5['title'];
														$memberid = $row5['memberid'];
																	$filename = $row5['filename'];
																	$verification = $row5['verification'];
																	$type = $row5['type'];
																	$projectid = $row['projectid'];
																	$price = $row5['price'];
																	$description = $row5['description'];
																	$downloads = $row5['downloads'];
																	$contents = $row5['contents'];
																	$facebook = $row5['facebook'];
																	$youtube = $row5['youtube'];
																	$date = $row5['date'];
																	$time = $row5['time'];
																	$admin_status = $row5['admin_status'];
																	$status = $row5['status'];
																	
		$query6="SELECT comment from comments where projectid='{$row['projectid']}'";
													$result6 = mysqli_query($cxn,$query6) or     
													die("Couldn't execute SELECT query");
													$counte= 0;		
		$query7="SELECT firstname,surname,picture from member where memberid='$memberid'";
															$result7= mysqli_query($cxn,$query7) or     
															die("Couldn't execute SELECT query");
															$row7 = mysqli_fetch_assoc($result7);
															$firstname = $row7['firstname'];
																$surname = $row7['surname'];
															$picture = $row7['picture'];
			$query8="SELECT protype from protype where protypeid='{$row['protypeid']}'";
			$result8= mysqli_query($cxn,$query8) or     
			die("Couldn't execute SELECT query");
			$row8 = mysqli_fetch_assoc($result8);
			$protype = $row8['protype'];
																													
													
		while($row6 = mysqli_fetch_assoc($result6))
		{
			$counte= $counte + 1;
		}
		if($protype == "UnderGraduate")
		{
			$protype ="$protype";
		}
		elseif($protype == "Masters")
		{
			$protype ="$protype";
		}
		elseif($protype == "PHD")
		{
			$protype ="$protype";
		}
		elseif($protype == "Other")
		{
			$protype ="$protype";
		}
										if($status == 0)
										{
											$status = "Not Checked";
										}
										else
										{
											$status = "Checked";
										}		
										if($admin_status == 0)
										{
											$admin_status = "Not Checked";
										}
										else
										{
											$admin_status = "Checked";
										}
																	
																	if($verification == 0)
																	{
																		$verification = "Not Verified <font color='red'><i class='glyphicon glyphicon-warning-sign'></i></font>";
																	}
																	else
																	{
																		$verification = "Verified <font color='green'><i class='glyphicon glyphicon-ok'></i></font>";
																	}
																	
																	
																	if($type=="pdf")
																	{
																			$type="<img src='index.jpg' class='img-circle' alt='$type' class='img-circle' width='50' height='50' >";
																	}
																	else
																	{
																		$type="<img src='indexx.jpg' class='img-circle' alt='$type' class='img-circle' width='50' height='50' >";
																	}
																	echo
																	" 
																	<tr id='table_roll$ntype'>
																		<td>$ntype</td>
<td>
<a style='color:blue;' onclick='delite($projectid,$ntype)'><img src='images/b_drop.png'  alt='delete on Jarazone'/> Delete</a>
</td>
																		<td>$status</td>
																		<td>$admin_status</td>
																		<td>$projectid</td>
																		<td>$type</td>
																		<td>$title</td>
																		<td>$time</td>
																		<td>$date</td>
																		<td>$name $name1</td>
																		<td>$phone</td>
																		<td><img src='photo/$picture' href='photo/$picture' class='img-circle' alt='$firstname' class='img-circle' width='50' height='50' /><br><span>$firstname  $surname</span></td>
																		<td><i class='glyphicon glyphicon-folder-open'></i></td>
																		<td>
<input type='hidden' id='rooll$ntype' name ='rooll$ntype' value='$filename'></input>
<span><a style='color:black;'  onclick='Open_file($ntype)' ><i class='glyphicon glyphicon-folder-open'></i></a></span>
</td>
																		<td>$downloads</td>
																		<td>$price</td>
																				<td>
						<input type='hidden' id='rolll$ntype' name ='rolll$ntype' value='$title'></input>
<input type='hidden' id='roolll$ntype' name ='roolll$ntype' value='$description'></input>
<span><a style='color:black;'  onclick='Open_sub_file($ntype)' ><i class='glyphicon glyphicon-folder-open'></i></a></span>
</td>
																		<td>
<input type='hidden' id='crooll$ntype' name ='crooll$ntype' value='$contents'></input>
<span><a style='color:black;'  onclick='Open_sub_file2($ntype)' ><i class='glyphicon glyphicon-folder-open'></i></a></span>
</td>
																		<td>$facebook</td>
																		<td>$youtube</td>
																		<td>$verification </td>
																	</tr>		
																
																	
																	";
																	$ntype = $ntype - 1;
			}
																	return;
																	
						
}
function admin_project_verify($cxn,$roll)
{
	for($i=1; $i<=$roll; $i++)
	{
		echo"<tr id='admin_verify_row$i'></tr>";
	}
	return;
}
function admin_project_refute($cxn,$roll)
{
	for($i=1; $i<=$roll; $i++)
	{
		echo"<tr id='admin_refute_row$i'></tr>";
	}
	return;
}


function admin_account($cxn,$rollss)
	{
		$roll = $rollss;
		$firstname = $_SESSION['firstname'];
	$surname = $_SESSION['surname'];
		$email = $_SESSION['email'];
		$id = $_SESSION['id'];
		$picture = $_SESSION['picture']  ;
	
		echo"
		<ul class='nav  nav-pills nav-stacked nav-justified'>
		
		 <li role='presentation' class='dropdown active' >
									<a class='dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>
									  Projects <span class='caret'></span>
									</a>
									<ul class='dropdown-menu'>
									<li ><a data-toggle='tab' href='#menu1' onclick='load_all_projects()' > All Projects</a></li>
									<li ><a data-toggle='tab' href='#menu2' onclick='load_Unchecked_projects()'>Unchecked Projects</a></li>
									<li ><a data-toggle='tab' href='#menu3'  class='active'></a></li>
									
									  </ul>
		</li>
		<li role='presentation' class='dropdown'>
									<a class='dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>
									  Members <span class='caret'></span>
									</a>
									<ul class='dropdown-menu'>
								<li ><a data-toggle='tab' href='#menu4' onclick='load_all_members()'>All Members</a></li>
								    <li><a data-toggle='tab' href='#menu6' onclick='load_members_login()'>Members Login</a></li>
									<li><a data-toggle='tab' href='#menu7' onclick='load_members_logout()'> Members Logout</a></li>
									</ul>
		</li>
		<li role='presentation' class='dropdown'>
									<a class='dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>
									  Verifiers <span class='caret'></span>
									</a>
									<ul class='dropdown-menu'>
									  <li ><a data-toggle='tab' href='#menu8' onclick='load_verifiers()'> Verifiers</a></li>
									<li><a data-toggle='tab' href='#menu10'  onclick='load_verifiers_login()' >Verifiers Login</a></li>
									<li><a data-toggle='tab' href='#menu11'  onclick='load_verifiers_logout()'> Verifiers Logout</a></li>
									</ul>
		</li>
		<li role='presentation' class='dropdown'>
									<a class='dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>
									  Verification <span class='caret'></span>
									</a>
									<ul class='dropdown-menu'>
									<li><a data-toggle='tab' href='#menu12' onclick='admin_verification()' >Recent Projects</a></li>
									 <li><a data-toggle='tab' href='#menu13' > Verified Projects</a></li>
									  <li><a data-toggle='tab' href='#menu14' >Refuted Projects</a></li>
									</ul>
		</li>
			<li ><a  href='admin_logout.php'><i class='glyphicon glyphicon-log-out'></i> Log Out</a></li>
  </ul>
   <div class='tab-content'>
		<div id='menu1'class='tab-pane fade '>
											<table class='table table-bordered table-sm table-condensed  table-striped' style='text-align:center;'>
																					<thead>
																					
																					  <tr>
																						<th style='text-align:center;'>S/N</th>
																						<th style='text-align:center;'>Options</th>
																						<th style='text-align:center;'>Verification Status</th>
																						<th style='text-align:center;'>Admin Status</th>
																						<th style='text-align:center;'>I.D.</th>
																						<th style='text-align:center;'>Type</th>
																						<th style='text-align:center;'>Title</th>
																						<th style='text-align:center;'>Time Of Creation</th>
																						<th style='text-align:center;'>Date Of Creation</th>
																						<th style='text-align:center;'>Author</th>
																						<th style='text-align:center;'>Author's Phone</th>
																						<th style='text-align:center;'>Created By</th>
																						<th style='text-align:center;'>Send Message</th>
																						<th style='text-align:center;'>Open File</th>
																						<th style='text-align:center;'>Downloads</th>
																						<th style='text-align:center;'>Price</th>
																						<th style='text-align:center;'>Abstract</th>
																						<th style='text-align:center;'>Table Of Contents</th>
																						<th style='text-align:center;'>Facebook Link</th>
																						<th style='text-align:center;'>Youtube Link</th>
																						<th style='text-align:center;'>Verification</th>
																					  </tr>
																					</thead>
																					 <tbody id='body_1'>

																					</tbody>
											</table>
		</div>
			<div id='menu2' class='tab-pane fade '>
						<table class='table table-bordered table-sm table-condensed  table-striped' style='text-align:center;'>
																					<thead>
																					
																					  <tr>
																						<th style='text-align:center;'>S/N</th>
																						<th style='text-align:center;'>Options</th>
																						<th style='text-align:center;'>Verification Status</th>
																						<th style='text-align:center;'>Admin Status</th>
																						<th style='text-align:center;'>I.D.</th>
																						<th style='text-align:center;'>Type</th>
																						<th style='text-align:center;'>Title</th>
																						<th style='text-align:center;'>Time Of Creation</th>
																						<th style='text-align:center;'>Date Of Creation</th>
																						<th style='text-align:center;'>Created By</th>
																						<th style='text-align:center;'>Open File</th>
																						<th style='text-align:center;'>Downloads</th>
																						<th style='text-align:center;'>Price</th>
																						<th style='text-align:center;'>Abstract</th>
																						<th style='text-align:center;'>Table Of Contents</th>
																						<th style='text-align:center;'>Facebook Link</th>
																						<th style='text-align:center;'>Youtube Link</th>
																						<th style='text-align:center;'>Verification</th>
																					  </tr>
																					</thead>
																					 <tbody id='body_2'>

																					</tbody>
											</table>
			</div>
					<div id='menu3' class='tab-pane fade in active'>
				
					</div>
						<div id='menu4' class='tab-pane fade' >
							<table class='table table-bordered table-sm table-condensed  table-striped' style='text-align:center;'>
																					<thead>
																					
																					  <tr>
																						<th style='text-align:center;'>S/N</th>
																						<th style='text-align:center;'>Options</th>
																						<th style='text-align:center;'>I.D.</th>
																						<th style='text-align:center;'>Photo</th>
																						<th style='text-align:center;'>Firstname</th>
																						<th style='text-align:center;'>Surname</th>
																						<th style='text-align:center;'>Date Joined</th>
																						<th style='text-align:center;'>Time Joined</th>
																						<th style='text-align:center;'>Email</th>
																						<th style='text-align:center;'>Location</th>
																						<th style='text-align:center;'>School</th>
																						<th style='text-align:center;'>Facebook</th>
																						<th style='text-align:center;'>Twitter</th>
																						<th style='text-align:center;'>Instagraam</th>
																						<th style='text-align:center;'>Snapchat</th>
																						<th style='text-align:center;'>Google</th>
																						
																						
																						
																					  </tr>
																					</thead>
																					 <tbody id='body_4'>

																					</tbody>
											</table>
						</div>
							<div id='menu5' class='tab-pane fade'>
									
							</div>
								<div id='menu6' class='tab-pane fade'>
				<table class='table table-bordered table-sm table-condensed  table-striped' style='text-align:center;'>
																					<thead>
																					
																					  <tr>
																						<th style='text-align:center;'>S/N</th>
																						<th style='text-align:center;'>Login I.D.</th>
																						<th style='text-align:center;'>Member I.D.</th>
																						<th style='text-align:center;'>Time</th>
																						<th style='text-align:center;'>Date</th>
																						<th style='text-align:center;'>Photo</th>
																						<th style='text-align:center;'>Firstname</th>
																						<th style='text-align:center;'>Surname</th>
																						<th style='text-align:center;'>Email</th>
																				
																					  </tr>
																					</thead>
																					 <tbody id='body_6'>

																					</tbody>
											</table>
								</div>
									<div id='menu7' class='tab-pane fade' col-md-12>
					<table class='table table-bordered table-sm table-condensed  table-striped' style='text-align:center;'>
																					<thead>
																					
																					  <tr>
																						<th style='text-align:center;'>S/N</th>
																						<th style='text-align:center;'>Login I.D.</th>
																						<th style='text-align:center;'>Logout I.D.</th>
																						<th style='text-align:center;'>Member I.D.</th>
																						<th style='text-align:center;'>Time</th>
																						<th style='text-align:center;'>Date</th>
																						<th style='text-align:center;'>Photo</th>
																						<th style='text-align:center;'>Firstname</th>
																						<th style='text-align:center;'>Surname</th>
																						<th style='text-align:center;'>Email</th>
																				
																					  </tr>
																					</thead>
																					 <tbody id='body_7'>

																					</tbody>
											</table>
									</div>
										<div id='menu8' class='tab-pane fade'>
						<table class='table table-bordered table-sm table-condensed  table-striped' style='text-align:center;'>
																					<thead>
																					
																					  <tr>
																						<th style='text-align:center;'>S/N</th>
																						<th style='text-align:center;'>Options</th>
																						<th style='text-align:center;'>Approval</th>
																						<th style='text-align:center;'>I.D.</th>
																						<th style='text-align:center;'>Photo</th>
																						<th style='text-align:center;'>Firstname</th>
																						<th style='text-align:center;'>Surname</th>
																						<th style='text-align:center;'>Date Joined</th>
																						<th style='text-align:center;'>Time Joined</th>
																						<th style='text-align:center;'>Email</th>
																						
																						
																						
																					  </tr>
																					</thead>
																					 <tbody id='body_8'>

																					</tbody>
											</table>
										</div>
											<div id='menu9' class='tab-pane fade'>
				
											</div>
												<div id='menu10' class='tab-pane fade'>
				<table class='table table-bordered table-sm table-condensed  table-striped' style='text-align:center;'>
																					<thead>
																					
																					  <tr>
																						<th style='text-align:center;'>S/N</th>
																						<th style='text-align:center;'>Login I.D.</th>
																						<th style='text-align:center;'>I.D.</th>
																						<th style='text-align:center;'>Time </th>
																						<th style='text-align:center;'>Date</th>
																						<th style='text-align:center;'>Photo</th>
																						<th style='text-align:center;'>Firstname</th>
																						<th style='text-align:center;'>Surname</th>
																						<th style='text-align:center;'>Email</th>
																						
																						
																						
																					  </tr>
																					</thead>
																					 <tbody id='body_10'>

																					</tbody>
											</table>
												</div>
													<div id='menu11' class='tab-pane fade'>
					<table class='table table-bordered table-sm table-condensed  table-striped' style='text-align:center;'>
																					<thead>
																					
																					  <tr>
																						<th style='text-align:center;'>S/N</th>
																						<th style='text-align:center;'>Login I.D.</th>
																						<th style='text-align:center;'>Logout I.D.</th>
																						<th style='text-align:center;'>I.D.</th>
																						<th style='text-align:center;'>Time </th>
																						<th style='text-align:center;'>Date</th>
																						<th style='text-align:center;'>Photo</th>
																						<th style='text-align:center;'>Firstname</th>
																						<th style='text-align:center;'>Surname</th>
																						<th style='text-align:center;'>Email</th>
																						
																						
																						
																					  </tr>
																					</thead>
																					 <tbody id='body_11'>

																					</tbody>
											</table>
														</div>
																<div id='menu12' class='tab-pane fade'>
					<table class='table table-bordered table-sm table-condensed  table-striped' style='text-align:center;'>
													<thead>
													
													  <tr id='project_row$roll'>
													  <th style='text-align:center;'>S/N</th>
													  <th style='text-align:center;'>Download Project</th>
													   <th style='text-align:center;'>ReUpload Project</th>
														<th style='text-align:center;'>Status</th>
														<th style='text-align:center;'>Verifier Status</th>
															<th style='text-align:center;'>Verifier Verification</th>
														<th style='text-align:center;'>I.D.</th>
														<th style='text-align:center;'>Title</th>
														<th style='text-align:center;'>Open File</th>
														<th style='text-align:center;' colspan='2'>Verification</th>
													  </tr>
													</thead>
												 <tbody id='body_12'>

												</tbody>
											</table>
															</div>
															<div id='menu13' class='tab-pane fade'>
					<table class='table table-bordered table-sm table-condensed  table-striped' style='text-align:center;'>
													<thead>
													
													  <tr>
													  <th style='text-align:center;'>S/N</th>
													  <th style='text-align:center;'>Options</th>
														<th style='text-align:center;'>Status</th>
														<th style='text-align:center;'>Verifier Status</th>
														<th style='text-align:center;'>Verifier Verification</th>
														<th style='text-align:center;'>I.D.</th>
														<th style='text-align:center;'>Title</th>
														<th style='text-align:center;'>Open File</th>
														<th style='text-align:center;' colspan='2'>Verification</th>
													  </tr>
													</thead>
												 <tbody id='body_13'>";
												 admin_project_verify($cxn,$roll);
												 echo"

												</tbody>
											</table>
															</div>
																<div id='menu14' class='tab-pane fade'>
																<table class='table table-bordered table-sm table-condensed  table-striped' style='text-align:center;'>
													<thead>
													
													  <tr>
													  <th style='text-align:center;'>S/N</th>
													  <th style='text-align:center;'>Options</th>
														<th style='text-align:center;'>Status</th>
														<th style='text-align:center;'>Verifier Status</th>
														<th style='text-align:center;'>Verifier Verification</th>
														<th style='text-align:center;'>I.D.</th>
														<th style='text-align:center;'>Title</th>
														<th style='text-align:center;'>Open File</th>
														<th style='text-align:center;' colspan='2'>Verification</th>
													  </tr>
													</thead>
												 <tbody id='body_14'>";
												 admin_project_refute($cxn,$roll);
												 echo"

												</tbody>
					
																</div>
					
	</div>
  ";
  return;
	}
	
	
	
function Unchecked_projects($cxn)
{
	$query = "SELECT * FROM entry order by entryid DESC"; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				 /* Display results in a table */
				 $ntype = mysqli_num_rows($result);
				
				
						while($row = mysqli_fetch_assoc($result))
						{
							 
	       
				
	   $query1="SELECT firstname,phone,lastname from alumni where alumniid='{$row['alumniid']}'";
	   																$result1 = mysqli_query($cxn,$query1) or     
																	die("Couldn't execute SELECT query1");
																	$row1 = mysqli_fetch_assoc($result1);
																	$name = $row1['firstname'];
																	$phone = $row1['phone'];
																	$name1 = $row1['lastname'];
	   $query2=" SELECT department from department where departmentid='{$row['departmentid']}'";
																	$result2 = mysqli_query($cxn,$query2) or     
																	die("Couldn't execute SELECT query");
																	$row2 = mysqli_fetch_assoc($result2);
																	$department = $row2['department'];
	   $query3="SELECT school from school where schoolid='{$row['schoolid']}'";
																	$result3 = mysqli_query($cxn,$query3) or     
																	die("Couldn't execute SELECT query");
																	$row3 = mysqli_fetch_assoc($result3);
																	$school = $row3['school'];
	   $query4="SELECT year from year where yearid='{$row['yearid']}'";
																	$result4 = mysqli_query($cxn,$query4) or     
																	die("Couldn't execute SELECT query");
																	$row4 = mysqli_fetch_assoc($result4);
																	$year = $row4['year'];
$query5="SELECT admin_status,status,description,contents,facebook,youtube,title,filename,time,date,type,price,downloads,verification,memberid from project where projectid='{$row['projectid']}'";
																	$result5 = mysqli_query($cxn,$query5) or     
																	die("Couldn't execute SELECT query");
																	$row5 = mysqli_fetch_assoc($result5);
																	$title = $row5['title'];
														$memberid = $row5['memberid'];
																	$filename = $row5['filename'];
																	$verification = $row5['verification'];
																	$type = $row5['type'];
																	$projectid = $row['projectid'];
																	$price = $row5['price'];
																	$description = $row5['description'];
																	$downloads = $row5['downloads'];
																	$contents = $row5['contents'];
																	$facebook = $row5['facebook'];
																	$youtube = $row5['youtube'];
																	$date = $row5['date'];
																	$time = $row5['time'];
																	$admin_status = $row5['admin_status'];
																	$status = $row5['status'];
																	
		$query6="SELECT comment from comments where projectid='{$row['projectid']}'";
													$result6 = mysqli_query($cxn,$query6) or     
													die("Couldn't execute SELECT query");
													$counte= 0;		
		$query7="SELECT firstname,surname,picture from member where memberid='$memberid'";
															$result7= mysqli_query($cxn,$query7) or     
															die("Couldn't execute SELECT query");
															$row7 = mysqli_fetch_assoc($result7);
															$firstname = $row7['firstname'];
																$surname = $row7['surname'];
															$picture = $row7['picture'];
			$query8="SELECT protype from protype where protypeid='{$row['protypeid']}'";
			$result8= mysqli_query($cxn,$query8) or     
			die("Couldn't execute SELECT query");
			$row8 = mysqli_fetch_assoc($result8);
			$protype = $row8['protype'];
																													
													
		while($row6 = mysqli_fetch_assoc($result6))
		{
			$counte= $counte + 1;
		}
		if($protype == "UnderGraduate")
		{
			$protype ="$protype";
		}
		elseif($protype == "Masters")
		{
			$protype ="$protype";
		}
		elseif($protype == "PHD")
		{
			$protype ="$protype";
		}
		elseif($protype == "Other")
		{
			$protype ="$protype";
		}
										if($status == 0)
										{
											$status = "Not Checked";
										}
										else
										{
											$status = "Checked";
										}		
																	
																	if($verification == 0)
																	{
																		$verification = "Not Verified <font color='red'><i class='glyphicon glyphicon-warning-sign'></i></font>";
																	}
																	else
																	{
																		$verification = "Verified <font color='green'><i class='glyphicon glyphicon-ok'></i></font>";
																	}
																	
																	
																	if($type=="pdf")
																	{
																			$type="<img src='index.jpg' class='img-circle' alt='$type' class='img-circle' width='50' height='50' >";
																	}
																	else
																	{
																		$type="<img src='indexx.jpg' class='img-circle' alt='$type' class='img-circle' width='50' height='50' >";
																	}
																	
																	
if($admin_status == 0)
{
$admin_status = "Not Checked";
echo
																	" 
																	<tr>
																		<td>$ntype</td>
																		<td><img src='images/b_drop.png' href='images/b_drop.png' class='img-circle' alt='drop' class='img-circle' /> Delete</td>
																		<td>$status</td>
																		<td>$admin_status</td>
																		<td>$projectid</td>
																		<td>$type</td>
																		<td>$title</td>
																		<td>$time</td>
																		<td>$date</td>
																		<td><img src='photo/$picture' href='photo/$picture' class='img-circle' alt='$firstname' class='img-circle' width='50' height='50' /><br><span>$firstname  $surname</span></td>
																		<td><i class='glyphicon glyphicon-folder-open'></i></td>
																		<td>$downloads</td>
																		<td>$price</td>
																		<td><i class='glyphicon glyphicon-folder-open'></i></td>
																		<td><i class='glyphicon glyphicon-folder-open'></i></td>
																		<td>$facebook</td>
																		<td>$youtube</td>
																		<td>$verification </td>
																	</tr>		
																
																	
																	";
																	
}
else
{
	
}
$ntype = $ntype - 1;
																	
			}
																	return;
																	
						
}


function all_members($cxn)
{
	$query = "SELECT * FROM member order by memberid DESC"; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				 /* Display results in a table */
				 $ntype = mysqli_num_rows($result);
				
				
						while($row = mysqli_fetch_assoc($result))
						{
							extract($row);
																echo
																	" 
																	<tr>
																		<td>$ntype</td>
<td><span><img src='images/b_drop.png' href='images/b_drop.png' class='img-circle' alt='drop' class='img-circle' /> Block</span><br> <br><span><img src='images/b_move.png' href='images/b_move.png' class='img-circle' alt='drop' class='img-circle' />Report</span></td>
																		<td>$memberid</td>
																		<td><img src='photo/$picture' href='photo/$picture' class='img-circle' alt='$firstname' class='img-circle' width='50' height='50' /></td>
																		<td>$firstname</td>
																		<td>$surname</td>
																		<td>$date</td>
																		<td>$time</td>
																		<td>$email</td>
																		<td>$location</td>
																		<td>$school</td>
																		<td>$facebook</td>
																		<td>$twitter</td>
																		<td>$instagram</td>
																		<td>$snapchat</td>
																		<td>$google</td>
																		
																	</tr>		
																
																	
																	";
																	$ntype = $ntype - 1;
						}
																	return;
																	
						
}

function member_login($cxn)
{
	$query="select * from login order by loginid DESC";
		$result = mysqli_query($cxn,$query) or     
		die("Couldn't execute SELECT query1");
		 $ntype = mysqli_num_rows($result);
				
		
		while($row = mysqli_fetch_assoc($result))
		{
		
				extract($row);
				
				$query1="SELECT firstname,surname,picture from member where memberid='$id'";
					$result1 = mysqli_query($cxn,$query1) or     
					die("Couldn't execute SELECT query2");
					$row1 = mysqli_fetch_assoc($result1);
					$firstname = $row1['firstname'];
					$surname = $row1['surname'];
					$picture = $row1['picture'];
					
					
					
					
			
								echo"<tr>
																		<td>$ntype</td>
																		<td>$loginid</td>
																		<td>$id</td>
																		<td>$logintime</td>
																		<td>$loginDate</td>
<td><img src='photo/$picture' href='photo/$picture' class='img-circle' alt='$firstname' class='img-circle' width='50' height='50'/> </td>
																		<td>$firstname</td>
																		<td>$surname</td>
																		<td>$email</td>
											</tr>							
									";
									$ntype = $ntype - 1;
		}
			
			
		return;
		
		
		
		
		
}




function member_logout($cxn)
{
	$query="select * from logout order by logoutid DESC";
		$result = mysqli_query($cxn,$query) or     
		die("Couldn't execute SELECT query1");
		 $ntype = mysqli_num_rows($result);
				
		
		while($row = mysqli_fetch_assoc($result))
		{
		
				extract($row);
				
				$query1="SELECT firstname,surname,picture from member where memberid='$id'";
					$result1 = mysqli_query($cxn,$query1) or     
					die("Couldn't execute SELECT query2");
					$row1 = mysqli_fetch_assoc($result1);
					$firstname = $row1['firstname'];
					$surname = $row1['surname'];
					$picture = $row1['picture'];
					
					
					
					
			
								echo"<tr>
																		<td>$ntype</td>
																		<td>$loginid</td>
																		<td>$logoutid</td>
																		<td>$id</td>
																		<td>$logouttime</td>
																		<td>$logoutDate</td>
<td><img src='photo/$picture' href='photo/$picture' class='img-circle' alt='$firstname' class='img-circle' width='50' height='50'/> </td>
																		<td>$firstname</td>
																		<td>$surname</td>
																		<td>$email</td>
											</tr>							
									";
									$ntype = $ntype - 1;
		}
			
			
		return;
		
		
		
		
		
}

function all_verifiers($cxn)
{
	
	$query = "SELECT * FROM verifiers order by id DESC"; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				 /* Display results in a table */
				 $ntype = mysqli_num_rows($result);
				
				
						while($row = mysqli_fetch_assoc($result))
						{
							extract($row);
							if($approval == 1)
							{
								$approval = "Approved <font color='green'><i class='glyphicon glyphicon-ok'></i></font>";
							}
							else
							{
								$approval = "Not Approved <font color='red'><i class='glyphicon glyphicon-warning-sign'></i></font>";
							}
																echo
																	" 
																	<tr>
																		<td>$ntype</td>
<td><span><img src='images/b_drop.png' href='images/b_drop.png' class='img-circle' alt='drop' class='img-circle' /> Block</span><br> <br><span><img src='images/b_move.png' href='images/b_move.png' class='img-circle' alt='drop' class='img-circle' />Report</span></td>
																		<td>$approval</td>
																		
																		<td>$id</td>
																		<td><img src='photo/$picture' href='photo/$picture' class='img-square' alt='$firstname' class='img-circle' width='50' height='50' /></td>
																		<td>$firstname</td>
																		<td>$surname</td>
																		<td>$date</td>
																		<td>$time</td>
																		<td>$email</td>
																		
																	</tr>		
																
																	
																	";
																	$ntype = $ntype - 1;
						}
																	return;
											
	
	
	
	
}

function verifier_login_list($cxn)
{
	$query="select * from verifier_login order by loginid DESC";
		$result = mysqli_query($cxn,$query) or     
		die("Couldn't execute SELECT query1");
		 $ntype = mysqli_num_rows($result);
				
		
		while($row = mysqli_fetch_assoc($result))
		{
		
				extract($row);
				
				$query1="SELECT firstname,surname,picture from verifiers where id='$id'";
					$result1 = mysqli_query($cxn,$query1) or     
					die("Couldn't execute SELECT query2");
					$row1 = mysqli_fetch_assoc($result1);
					$firstname = $row1['firstname'];
					$surname = $row1['surname'];
					$picture = $row1['picture'];
					
					
					
					
			
								echo"<tr>
																		<td>$ntype</td>
																		<td>$loginid</td>
																		<td>$id</td>
																		<td>$logintime</td>
																		<td>$logindate</td>
<td><img src='photo/$picture' href='photo/$picture' class='img-circle' alt='$firstname' class='img-circle' width='50' height='50'/> </td>
																		<td>$firstname</td>
																		<td>$surname</td>
																		<td>$email</td>
											</tr>							
									";
									$ntype = $ntype - 1;
		}
			
			
		return;
		
		
		
		
		
}


function verifier_logout_list($cxn)
{
	$query="select * from verifier_logout order by logoutid DESC";
		$result = mysqli_query($cxn,$query) or     
		die("Couldn't execute SELECT query1");
		 $ntype = mysqli_num_rows($result);
				
		
		while($row = mysqli_fetch_assoc($result))
		{
		
				extract($row);
				
				$query1="SELECT firstname,surname,picture from verifiers where id='$id'";
					$result1 = mysqli_query($cxn,$query1) or     
					die("Couldn't execute SELECT query2");
					$row1 = mysqli_fetch_assoc($result1);
					$firstname = $row1['firstname'];
					$surname = $row1['surname'];
					$picture = $row1['picture'];
					
					
					
					
			
								echo"<tr>
																		<td>$ntype</td>
																		<td>$loginid</td>
																		<td>$logoutid</td>
																		<td>$id</td>
																		<td>$logouttime</td>
																		<td>$logoutdate</td>
<td><img src='photo/$picture' href='photo/$picture' class='img-circle' alt='$firstname' class='img-circle' width='50' height='50'/> </td>
																		<td>$firstname</td>
																		<td>$surname</td>
																		<td>$email</td>
											</tr>							
									";
									$ntype = $ntype - 1;
		}
			
			
		return;
			
}

function admin_verification($cxn)
{
	$query = "SELECT * from Project where admin_status='0'";
				$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute select query12");
				$ntype = mysqli_num_rows($result);
				//   check how many projects are not verified
					if ($ntype < 1)    
						//if new type is not in table  
						{
							echo"All Projects have been Checked For Admin Veification";
						}
						else
						{
							global $roll;
							$roll = 1;
							while($row = mysqli_fetch_assoc($result))
									{
										
										extract($row);
										if($status == 0)
										{
											$status = "Not Checked";
											$verification ="Not Checked";
										}
										else
										{
											$status = "Checked";
											if($verification == 1)
											{
												$verification = "Verified";
											}
											else
											{
													$verification = "Refuted";
											}
										}
										if($admin_status == 0)
										{
											$admin_status = "Not Checked";
										}
										else
										{
											$admin_status = "Checked";
										}
										
										echo"
																<tr id='admin_project_row$roll'>
																<td>$ntype</td>
																<td>
																			<span>
																			<a onclick='download_file($projectid)' class='btn btn-success btn-md' role='button'  >
																			<i class='fa fa-download'></i>
																			</a>
																			</span>
																</td>
																<td >
																<span>
																			<a onclick='reupload($projectid)' target='_blank' class='btn btn-info btn-md' role='button'  >
																			<i class='fa fa-upload'></i>
																			</a>
																			</span>
																</td>
																<td>$admin_status</td>
																	 <td>$status</td>
																	  <td>$verification</td>
																	  <td>$projectid</td>
																	  <td>$title</td>
																	  <td>
<input type='hidden' id='rooll$roll' name ='rooll$roll' value='$filename'></input>
<span><button type='button' class='btn btn-default btn-sm' onclick='Open_file($roll)' ><i class='glyphicon glyphicon-folder-open'></i> Open Project</button></span>
</td>
																		 <td >
	   <button onclick='admin_verify($projectid,$roll)' type='button' class='btn  btn-success'>Verify <i class='glyphicon glyphicon-ok'></i></button>
	   </td>
	   <td>
	    <button onclick='admin_refute($projectid,$roll)' type='button' class='btn  btn-danger'>Refute <i class='glyphicon glyphicon-warning-sign'></i></button>
																		</td>
																 </tr>		
													 
											 ";
											 $roll = $roll + 1;
											 $ntype = $ntype - 1;
									}
						}
						return;
}
function admin_verify($cxn,$id,$roll)
	{
		
		$admin_id = $_SESSION['id'];
		
		$query2=" update project set verification='1',admin_status='1' where projectid='$id'";
					$result2 = mysqli_query($cxn,$query2) or     
					die("Couldn't execute SELECT query2");
	

						date_default_timezone_set('Africa/Lagos');
						$time = date("h:i:sa");
						$date = date("d/m/y");
						$status = 1;
						
	$query = "SELECT * from admin_verification_log where project_id='$id'";
				$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute select query123");
				$ntype = mysqli_num_rows($result);
				//   check how many projects are not verified
					if ($ntype < 1)    
						//if new type is not in table  
						{
							date_default_timezone_set('Africa/Lagos');
						$time = date("h:i:sa");
						$date = date("d/m/y");
	$query1="insert into admin_verification_log (admin_status,status,project_id,admin_id,admin_verification,time,date) values('1','$status','$id','$admin_id','1','$time','$date')";
										$result1 = mysqli_query($cxn,$query1) or     
													die("Couldn't execute SELECT queryo2");
						}
						else
						{
							date_default_timezone_set('Africa/Lagos');
						$time = date("h:i:sa");
						$date = date("d/m/y");
	$query2=" update  admin_verification_log set admin_verification='1',admin_status='1',time='$time',date='$date' where project_id='$id'";
					$result2 = mysqli_query($cxn,$query2) or     
					die("Couldn't execute SELECT queryoo2");
	
						}
	
	
	
	
			$query= "SELECT * from Project where projectid='$id'";
				$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute select query12");
							$row = mysqli_fetch_assoc($result);
									
										extract($row);
									if($status == 0)
										{
											$status = "Not Checked";
											$verification ="Not Checked";
										}
										else
										{
											$status = "Checked";
											if($verification == 1)
											{
												$verification = "Verified";
											}
											else
											{
													$verification = "Refuted";
											}
										}
										if($admin_status == 0)
										{
											$admin_status = "Not Checked";
										}
										else
										{
											$admin_status = "Checked";
										}
										
										echo"
																
																<td>$roll</td>
																<td></td>
																<td>$admin_status</td>
																	 <td>$status</td>
																	  <td>$verification</td>
																	  <td>$projectid</td>
																	  <td>$title</td>
																	   <td><i class='glyphicon glyphicon-folder-open'></i></td>
																		 <td >
	   Verified <i class='glyphicon glyphicon-warning-ok'></i>
	   </td>
	   <td>
	    <button onclick='admin_refute($projectid,$roll)' type='button' class='btn  btn-danger'>Refute <i class='glyphicon glyphicon-warning-sign'></i></button>
																		</td>
																
													 
											 ";
											 return;
									
	}
	
	
	function admin_refute($cxn,$id,$roll)
	{
		
		$admin_id = $_SESSION['id'];
		
		$query2=" update project set verification='0',admin_status='1' where projectid='$id'";
					$result2 = mysqli_query($cxn,$query2) or     
					die("Couldn't execute SELECT query2");
	

						date_default_timezone_set('Africa/Lagos');
						$time = date("h:i:sa");
						$date = date("d/m/y");
						$status = 1;
						
	$query = "SELECT * from admin_verification_log where project_id='$id'";
				$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute select query123");
				$ntype = mysqli_num_rows($result);
				//   check how many projects are not verified
					if ($ntype < 1)    
						//if new type is not in table  
						{
							date_default_timezone_set('Africa/Lagos');
						$time = date("h:i:sa");
						$date = date("d/m/y");
	$query1="insert into admin_verification_log (admin_status,status,project_id,admin_id,admin_verification,time,date) values('1','$status','$id','$admin_id','0','$time','$date')";
										$result1 = mysqli_query($cxn,$query1) or     
													die("Couldn't execute SELECT queryo2");
						}
						else
						{
							date_default_timezone_set('Africa/Lagos');
						$time = date("h:i:sa");
						$date = date("d/m/y");
	$query2=" update  admin_verification_log set admin_verification='0',admin_status='1',time='$time',date='$date' where project_id='$id'";
					$result2 = mysqli_query($cxn,$query2) or     
					die("Couldn't execute SELECT queryoo2");
	
						}
	
	
	
	
			$query= "SELECT * from Project where projectid='$id'";
				$result = mysqli_query($cxn,$query) or     
				die("Couldn't execute select query12");
							$row = mysqli_fetch_assoc($result);
									
										extract($row);
									if($status == 0)
										{
											$status = "Not Checked";
											$verification ="Not Checked";
										}
										else
										{
											$status = "Checked";
											if($verification == 1)
											{
												$verification = "Verified";
											}
											else
											{
													$verification = "Refuted";
											}
										}
										if($admin_status == 0)
										{
											$admin_status = "Not Checked";
										}
										else
										{
											$admin_status = "Checked";
										}
										
										echo"
																
																<td>$roll</td>
																<td></td>
																<td>$admin_status</td>
																	 <td>$status</td>
																	  <td>$verification</td>
																	  <td>$projectid</td>
																	  <td>$title</td>
																	  <td>
<input type='hidden' id='rooll$roll' name ='rooll$roll' value='$filename'></input>
<span><button type='button' class='btn btn-default btn-sm' onclick='Open_file($roll)' ><i class='glyphicon glyphicon-folder-open'></i> Open Project</button></span>
</td>
																		 <td>
	  <button onclick='verify($projectid,$roll)' type='button' class='btn  btn-success'>Verify <i class='glyphicon glyphicon-ok'></i></button>
	  </td>
	  <td>
	    Refuted <i class='glyphicon glyphicon-warning-sign'></i>
																		</td>
																
													 
											 ";
											 return;
									
	}
	
function add_school($school,$cxn)
{
	$school = ucfirst($school);
									$query11="SELECT * from school where  school='$school'";
												$result11= mysqli_query($cxn,$query11) or     
												die("Couldn't execute SELECT query111");
												$ntype = mysqli_num_rows($result11);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{   
				 $query1="insert into school (school) values('$school')";
									$result1 = mysqli_query($cxn,$query1) or     
									die("Couldn't execute SELECT query1");
									
									echo"<h6>School Added <font color='green'><i class='glyphicon glyphicon-ok'></i></font></h6>";
							}
							else
							{
								echo"<font color='red'><h6>School already exist</h6></font>";
							}
							return;
														
}

function add_dept($dept,$cxn)
{
	
									$query11="SELECT * from department where  department='$dept'";
												$result11= mysqli_query($cxn,$query11) or     
												die("Couldn't execute SELECT query111");
												$ntype = mysqli_num_rows($result11);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{   
				 $query1="insert into department (department) values('$dept')";
									$result1 = mysqli_query($cxn,$query1) or     
									die("Couldn't execute SELECT query1");
									
									echo"<h6>Department Added <font color='green'><i class='glyphicon glyphicon-ok'></i></font></h6>";
							}
							else
							{
								echo"<font color='red'><h6>Department already exist</h6></font>";
							}
							return;
														
}

function add_bank($bank,$cxn)
{
	
									$query11="SELECT * from banks where  bank='$bank'";
												$result11= mysqli_query($cxn,$query11) or     
												die("Couldn't execute SELECT query111");
												$ntype = mysqli_num_rows($result11);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{   
				 $query1="insert into banks (bank) values('$bank')";
									$result1 = mysqli_query($cxn,$query1) or     
									die("Couldn't execute SELECT query1");
									
									echo"<h6>Bank Added <font color='green'><i class='glyphicon glyphicon-ok'></i></font></h6>";
							}
							else
							{
								echo"<font color='red'><h6>Bank already exist</h6></font>";
							}
							return;
														
}

function add_year($year,$cxn)
{
	
									$query11="SELECT * from year where  year='$year'";
												$result11= mysqli_query($cxn,$query11) or     
												die("Couldn't execute SELECT query111");
												$ntype = mysqli_num_rows($result11);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{   
				 $query1="insert into year (year) values('$year')";
									$result1 = mysqli_query($cxn,$query1) or     
									die("Couldn't execute SELECT query1");
									
									echo"<h6>Year Added <font color='green'><i class='glyphicon glyphicon-ok'></i></font></h6>";
							}
							else
							{
								echo"<font color='red'><h6>Year already exist</h6></font>";
							}
							return;
														
}


function update_school($school,$id,$cxn)
	{
		
										
					 $query1="update school set school='$school' where schoolid='$id'";
										$result1 = mysqli_query($cxn,$query1) or     
										die("Couldn't execute SELECT query1");
								
								return;
															
	}

	
function delete_school($school,$id,$cxn)
	{
		
										
					 $query1="DELETE FROM school where schoolid='$id'";
										$result1 = mysqli_query($cxn,$query1) or     
										die("Couldn't execute SELECT query1");
								
								return;
															
	}
	
	
function update_dept($department,$id,$cxn)
	{
		
										
					 $query1="update department set department='$department' where departmentid='$id'";
										$result1 = mysqli_query($cxn,$query1) or     
										die("Couldn't execute SELECT query1");
								
								return;
															
	}

	
function delete_dept($department,$id,$cxn)
	{
		
										
					 $query1="DELETE FROM department where departmentid='$id'";
										$result1 = mysqli_query($cxn,$query1) or     
										die("Couldn't execute SELECT query1");
								
								return;
															
	}

	
function update_bank($bank,$id,$cxn)
	{
		
										
					 $query1="update banks set bank='$bank' where bankid='$id'";
										$result1 = mysqli_query($cxn,$query1) or     
										die("Couldn't execute SELECT query1");
								
								return;
															
	}

	
function delete_bank($bank,$id,$cxn)
	{
		
										
					 $query1="DELETE FROM banks where bankid='$id'";
										$result1 = mysqli_query($cxn,$query1) or     
										die("Couldn't execute SELECT query1");
								
								return;
															
	}
	
	
function update_year($year,$id,$cxn)
	{
		
										
					 $query1="update year set year='$year' where yearid='$id'";
										$result1 = mysqli_query($cxn,$query1) or     
										die("Couldn't execute SELECT query1");
								
								return;
															
	}

	
function delete_year($year,$id,$cxn)
	{
		
										
					 $query1="DELETE FROM year where yearid='$id'";
										$result1 = mysqli_query($cxn,$query1) or     
										die("Couldn't execute SELECT query1");
								
								return;
															
	}
function display_projects_with_tell($cxn,$school,$dept,$schoolid,$departmentid)
{
	
		$query = "SELECT * FROM entry where schoolid='$schoolid' and departmentid='$departmentid' order by entryid DESC "; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				 /* Display results in a table */
				$counter = 1;
						$ntype = mysqli_num_rows($result);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{   
							echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No More Projects <br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";


							}
							else
							{
								project_displayer($cxn,$result,$counter);									
																																	
							}
		
		return;
	}
	
function display_free_projects_with_tell($cxn,$school,$dept,$schoolid,$departmentid)
 {
	 
		$query = "SELECT * FROM entry where priceid='5' and departmentid='$departmentid' and schoolid='$schoolid' order by projectid DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No Free Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 10)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}	
	
function display_paid_projects_with_tell($cxn,$school,$dept,$schoolid,$departmentid)
{
  $query = "SELECT * FROM entry where priceid<'5' and departmentid='$departmentid' and schoolid='$schoolid'  order by projectid DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No Free Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 10)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}


function show_more($cxn,$id)
	{
		$query = "SELECT * FROM entry where projectid<$id order by entryid DESC "; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				 /* Display results in a table */
				$counter = 1;
						$ntype = mysqli_num_rows($result);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{   
							echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No More Projects <br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
							
							}
							else
							{
								
								project_displayer($cxn,$result,$counter);
							}
		return;
	}
	
function show_more_tell($cxn,$id,$schoolid,$deptid)
	{
		$query = "SELECT * FROM entry where projectid<$id and schoolid='$schoolid' and departmentid='$deptid' order by entryid DESC "; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				 /* Display results in a table */
				$counter = 1;
						$ntype = mysqli_num_rows($result);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{   
							echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No More Projects <br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
							
							}
							else
							{
								
								project_displayer($cxn,$result,$counter);
							}
		return;
	}
function show_more_dept($cxn,$id,$deptid)
	{
		$query = "SELECT * FROM entry where projectid<$id  and departmentid='$deptid' order by entryid DESC "; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				 /* Display results in a table */
				$counter = 1;
						$ntype = mysqli_num_rows($result);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{   
							echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No More Projects <br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
							
							}
							else
							{
								
								project_displayer($cxn,$result,$counter);
							}
		return;
	}
	
function show_more_type($cxn,$id,$deptid,$protypeid)
	{
		$query = "SELECT * FROM entry where projectid<$id  and departmentid='$deptid' and protypeid='$protypeid' order by entryid DESC "; 
			$result = mysqli_query($cxn,$query)   
				or die ("couldn't execute query.");
				 /* Display results in a table */
				$counter = 1;
						$ntype = mysqli_num_rows($result);
				//   
					if ($ntype < 1)    
						//if new type is not in table  
							{   
							echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No More Projects <br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
							
							}
							else
							{
								
								project_displayer($cxn,$result,$counter);
							}
		return;
	}

function show_more_free($cxn,$id)
	{
		$query = "SELECT * FROM entry where priceid='5' and projectid<$id  order by projectid DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No Free Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 2)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
	}
	
	function show_more_free_tell($cxn,$id,$schoolid,$deptid)
	{
		$query = "SELECT * FROM entry where priceid='5' and projectid<$id  and schoolid='$schoolid' and departmentid='$deptid' order by projectid DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No Free Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 2)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
	}
	
function show_more_free_dept($cxn,$id,$deptid)
	{
		$query = "SELECT * FROM entry where priceid='5' and projectid<$id  and departmentid='$deptid' order by projectid DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No Free Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 2)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
	}
	
function show_more_free_type($cxn,$id,$deptid,$protypeid)
	{
		$query = "SELECT * FROM entry where priceid='5' and projectid<$id  and departmentid='$deptid' and protypeid='$protypeid' order by projectid DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No Free Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 2)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
	}
function show_more_paid($cxn,$id)
{
$query = "SELECT * FROM entry where priceid<5 and projectid<$id order by projectid DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No Free Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 2)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}


function show_more_paid_tell($cxn,$id,$schoolid,$deptid)
{
	 $query = "SELECT * FROM entry where priceid<'5' and projectid<$id and departmentid='$deptid' and schoolid='$schoolid'  order by projectid DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No Free Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 2)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function show_more_paid_dept($cxn,$id,$deptid)
{
	$query = "SELECT * FROM entry where priceid<5 and projectid<$id and departmentid='$deptid' order by projectid DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No Free Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 2)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function show_more_paid_type($cxn,$id,$deptid,$protypeid)
{
	$query = "SELECT * FROM entry where priceid<'5' and projectid<$id and departmentid='$deptid' and protypeid='$protypeid'  order by projectid DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No Free Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 2)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function top_100_projects($cxn)
{
	$query = "SELECT * FROM entry order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function free_top_100_projects($cxn)
{
		$query = "SELECT * FROM entry where priceid='5' order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function paid_top_100_projects($cxn)
{
		$query = "SELECT * FROM entry where priceid<5 order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function top_display_departments($cxn)
{
	$query = "SELECT department,departmentid FROM department order by department";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			echo"<div class='col-md-4'></div><div class='col-md-4'>";
			while($row = mysqli_fetch_assoc($result))
					{
						extract($row);
						
						echo"<a onclick='toper($departmentid,1)' style='width:100%; text-align:left;'class='btn btn-default btn-md' role='button'>$department <i class='fa fa-angle-double-right' style='text-align:right;' ></i></a><br>";
					}
			echo"</div><div class='col-md-4'></div>";
  return;
}

function top_masters_display_dept($cxn)
{
	$query = "SELECT department,departmentid FROM department order by department";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			echo"<div class='col-md-4'></div><div class='col-md-4'>";
			while($row = mysqli_fetch_assoc($result))
					{
						extract($row);
						
						echo"<a onclick='toper($departmentid,2)' style='width:100%; text-align:left;'class='btn btn-default btn-md' role='button'>$department <i class='fa fa-angle-double-right' style='text-align:right;' ></i></a><br>";
					}
			echo"</div><div class='col-md-4'></div>";
  return;
}

function top_underg_display_dept($cxn)
{
	$query = "SELECT department,departmentid FROM department order by department";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			echo"<div class='col-md-4'></div><div class='col-md-4'>";
			while($row = mysqli_fetch_assoc($result))
					{
						extract($row);
						
						echo"<a onclick='toper($departmentid,3)' style='width:100%; text-align:left;'class='btn btn-default btn-md' role='button'>$department <i class='fa fa-angle-double-right' style='text-align:right;' ></i></a><br>";
					}
			echo"</div><div class='col-md-4'></div>";
  return;
}

function top_phd_display_dept($cxn)
{
	$query = "SELECT department,departmentid FROM department order by department";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			echo"<div class='col-md-4'></div><div class='col-md-4'>";
			while($row = mysqli_fetch_assoc($result))
					{
						extract($row);
						
						echo"<a onclick='toper($departmentid,4)' style='width:100%; text-align:left;'class='btn btn-default btn-md' role='button'>$department <i class='fa fa-angle-double-right' style='text-align:right;' ></i></a><br>";
					}
			echo"</div><div class='col-md-4'></div>";
  return;
}

function top_others_display_dept($cxn)
{
	$query = "SELECT department,departmentid FROM department order by department";
		$result = mysqli_query($cxn,$query) or     
			die("Couldn't execute select query");
			echo"<div class='col-md-4'></div><div class='col-md-4'>";
			while($row = mysqli_fetch_assoc($result))
					{
						extract($row);
						
						echo"<a onclick='toper($departmentid,5)' style='width:100%; text-align:left;'class='btn btn-default btn-md' role='button'>$department <i class='fa fa-angle-double-right' style='text-align:right;' ></i></a><br>";
					}
			echo"</div><div class='col-md-4'></div>";
  return;
}

function top_100_projects_dept($cxn,$deptid)
{
	$query = "SELECT * FROM entry where departmentid='$deptid' order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function top_100_free_projects_dept($cxn,$deptid)
{
	$query = "SELECT * FROM entry where departmentid='$deptid' and priceid='5' order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function top_100_paid_projects_dept($cxn,$deptid)
{
	$query = "SELECT * FROM entry where departmentid='$deptid' and priceid<5 order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function top_100_projects_masters($cxn,$deptid)
{
	$query = "SELECT * FROM entry where departmentid='$deptid' and protypeid='2'order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function top_100_free_projects_masters($cxn,$deptid)
{
	$query = "SELECT * FROM entry where departmentid='$deptid' and priceid='5' and protypeid='2' order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function top_100_paid_projects_masters($cxn,$deptid)
{
	$query = "SELECT * FROM entry where departmentid='$deptid' and protypeid='2' and priceid<5 order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function top_100_projects_underg($cxn,$deptid)
{
	$query = "SELECT * FROM entry where departmentid='$deptid' and protypeid='1'order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function top_100_free_projects_underg($cxn,$deptid)
{
	$query = "SELECT * FROM entry where departmentid='$deptid' and priceid='5' and protypeid='1' order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function top_100_paid_projects_underg($cxn,$deptid)
{
	$query = "SELECT * FROM entry where departmentid='$deptid' and protypeid='1' and priceid<5 order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function top_100_projects_phd($cxn,$deptid)
{
	$query = "SELECT * FROM entry where departmentid='$deptid' and protypeid='3'order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function top_100_free_projects_phd($cxn,$deptid)
{
	$query = "SELECT * FROM entry where departmentid='$deptid' and priceid='5' and protypeid='3' order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function top_100_paid_projects_phd($cxn,$deptid)
{
	$query = "SELECT * FROM entry where departmentid='$deptid' and protypeid='3' and priceid<5 order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function top_100_projects_others($cxn,$deptid)
{
	$query = "SELECT * FROM entry where departmentid='$deptid' and protypeid='4'order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function top_100_free_projects_others($cxn,$deptid)
{
	$query = "SELECT * FROM entry where departmentid='$deptid' and priceid='5' and protypeid='4' order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function top_100_paid_projects_others($cxn,$deptid)
{
	$query = "SELECT * FROM entry where departmentid='$deptid' and protypeid='4' and priceid<5 order by downloads DESC"; 
				$result = mysqli_query($cxn,$query)   
					or die ("couldn't execute query.");
					 /* Display results in a table */
					$ntype = mysqli_num_rows($result);
// 					
									$counter = 1;
								if ($ntype < 1)    
									//if new type is not in table  
										{   
										echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>No  Projects Yet<br><a href='projectform.php' class='btn btn-primary' role='button'>Add A Project</a></strong></div>";
										
										}
										else
										{ 
										
														while($row = mysqli_fetch_assoc($result))
														{
															if($counter  <= 100)
																{
																	paid_free_project_displayer($cxn,$row,$counter);
																	$counter = $counter + 1;
																}
														}
										}
		return;
}

function Change_session($cxn,$id)
{
	
	$query = "SELECT * from member where memberid='$id'";
							$result = mysqli_query($cxn,$query) or     
									die("Couldn't execute select query12");
									$row = mysqli_fetch_assoc($result);
												extract($row);
									
									session_destroy();
										session_start();
																		$_SESSION['auth'] = "yes";
																		$_SESSION['firstname'] = "$firstname";
																		$_SESSION['surname'] = "$surname";
																		$_SESSION['email'] = "$email";
																		$_SESSION['id'] = "$memberid";
																		$_SESSION['picture'] = "$picture";
}

