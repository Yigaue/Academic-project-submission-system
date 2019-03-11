<?php
session_start();
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;

$memberid = $_SESSION['id'];
	
		$title=$_POST['title'];
		$year=$_POST['year'];
		$department=$_POST['department'];
		$school=$_POST['school'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$phone=$_POST['phone'];
		$choice = $_POST['choice'];
		$protype = $_POST['protype'];
		$contents = $_POST['contents'];
		$youtube = $_POST['youtube'];
		$facebook = $_POST['facebook'];
		$description = $_POST['description'];
		
		
		
				
	if(empty($_POST['title']) or empty($_POST['protype'])   or empty($_POST['year']) or empty($_POST['department'])  or empty($_POST['school']) or empty($_POST['firstname']) or empty($_POST['lastname']) or empty($_POST['phone'])) 
	{
		echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>NOT ALLOWED!!,  you have not filled all required fields. <br>Please go </strong></div>
		<a href='projectform.php' class='btn btn-primary btn-lg' role='button'>Back</a>";


	}
	else
	{
		
		
	if($choice == "free")
																{
																	
																	
															if(empty($_POST['title'])  or empty($_POST['year']) or empty($_POST['department'])  or empty($_POST['school']) or empty($_POST['firstname']) or empty($_POST['lastname']) or empty($_POST['phone'])) 
															{
															echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>NOT ALLOWED!!,  you have not filled all required fields. <br>Please go <a href ='projectform.php' class='btn btn-info' role='button'>BACK </a></strong></div>";


																}
																else
																{
																	
																	$title=$_POST['title'];
																	$year=$_POST['year'];
																	$department=$_POST['department'];
																	$school=$_POST['school'];
																	$firstname=$_POST['firstname'];
																	$lastname=$_POST['lastname'];
																	$phone=$_POST['phone'];
																	$choice=$_POST['choice'];
																	$protype = $_POST['protype'];
																			$contents = $_POST['contents'];
																	$youtube = $_POST['youtube'];
																	$facebook = $_POST['facebook'];
																	$description = $_POST['description'];
																	
																	if(empty($_POST['price']))
																	{
																		$_POST['price']= 0;
																		$price = $_POST['price'];
																	}
																	
																	
																	
																	
																	
																	include("processfile.php");
																	
																	if ($uploadOk == 0)
																		{
																		echo"<div class='col-md-12' style='text-align:center'><strong>NOT ALLOWED!!,  there was a problem with the file you uploaded. <br>Please try Uploading In DOC or DOCX format<br><a href='addproject.php' class='btn btn-info' role='button'>Back to Add project</a></strong></div>";


																			
																		} 
																	else 	
																			{
																				if (move_uploaded_file($_FILES["project"]["tmp_name"], $target_file)) 
																				{ 
																					if($pdfFileType == "pdf")
																					{
																						$type = "pdf";
																					}
																					else
																					{
																						$type = "doc";
																					}
																								if(empty($filepath))
																									{
																										echo"<div class='col-md-12' style='text-align:center'><strong>NOT ALLOWED!!,  there was a problem with the file you uploaded. <br>Please try Uploading In DOC or DOCX format<br><a href='addproject.php' class='btn btn-info' role='button'>Back to Add project</a></strong></div>";


																									}
																									else 
																									{
																										if(empty($price))
																										{
																											$price= 0;
																										}
																										
																											insert_alumni($cxn,$firstname,$lastname,$phone);
																								
																											insert_projects($cxn,$title,$filepath,$type,$price,$contents,$youtube,$description,$facebook,$memberid);
																											select_yearid($cxn,$year);
																											select_departmentid($cxn,$department);
																											select_schoolid($cxn,$school);
																											select_choiceid($cxn,$choice);
																											select_priceid($cxn,$price);
																											select_protypeid($cxn,$protype);
																											select_priceid($cxn,$price);
																											entry($cxn,$alumniid,$yearid,$departmentid,$schoolid,$projectid,$choiceid,$protypeid,$priceid);
																											
																									}
																				}										
																			else
																				{
																									echo"<div class='col-md-12' style='text-align:center'><strong>Sorry,there was a problem with the file you  uploaded.<br>Try Uploading another File <br><a href='projectform.php' class='btn btn-info' role='button'>Back to Add project</a></strong></div>";

																				}
																			}
																	
																	
																}
																}
	else
						{

						if(empty($_POST['accountname'])  or empty($_POST['accounttype']) or empty($_POST['bank'])  or empty($_POST['phone']) or empty($_POST['accountnumber']) or empty($_POST['email']) or empty($_POST['price'])) 
						{

						echo"<br><br><br><div class='col-md-12' style='text-align:center'><strong>NOT ALLOWED!!,  you have not filled all required fields. <br>Please go <a href ='projectform.php' class='btn btn-info' role='button'>BACK </a></strong></div>";


						}
						else
						{



						$accname=$_POST['accountname'];
						$acctype=$_POST['accounttype'];
						$bank=$_POST['bank'];
						$phone=$_POST['phone'];
						$accountnumber=$_POST['accountnumber'];
						$email=$_POST['email'];
						$price=$_POST['price'];
						$choice = $_POST['choice'];
						$protype = $_POST['protype'];
						$contents = $_POST['contents'];
						$youtube = $_POST['youtube'];
						$facebook = $_POST['facebook'];
						$description = $_POST['description'];					




						include("processfile.php");

						if ($uploadOk == 0)
						{
						echo"<div class='col-md-12' style='text-align:center'><strong>NOT ALLOWED!!,  there was a problem with the file you uploaded. <br>Please try Uploading In DOC or DOCX format<br><a href='addproject.php' class='btn btn-info' role='button'>Back to Add project</a></strong></div>";



						} 
						else 	
								{
								if (move_uploaded_file($_FILES["project"]["tmp_name"], $target_file)) 
								{ 
										if($pdfFileType == "pdf")
										{
										$type = "pdf";
										}
										else
										{
										$type = "doc";
										}
												if(empty($filepath))
												{
												echo"<div class='col-md-12' style='text-align:center'><strong>NOT ALLOWED!!,  there was a problem with the file you uploaded. <br>Please try Uploading In DOC or DOCX format<br><a href='addproject.php' class='btn btn-info' role='button'>Back to Add project</a></strong></div>";


												}
												else 
												{
												select_acctypeid($cxn,$acctype);
												select_bankid($cxn,$bank);
												insert_alumni($cxn,$firstname,$lastname,$phone);
												insert_projects($cxn,$title,$filepath,$type,$price,$contents,$youtube,$description,$facebook,$memberid);
												select_yearid($cxn,$year);
												select_departmentid($cxn,$department);
												select_schoolid($cxn,$school);
												select_choiceid($cxn,$choice);
												select_protypeid($cxn,$protype);
												select_priceid($cxn,$price);
												insert_paymentinfo($cxn,$projectid,$accname,$acctypeid,$bankid,$phone,$accountnumber,$email,$price);
												entry($cxn,$alumniid,$yearid,$departmentid,$schoolid,$projectid,$choiceid,$protypeid,$priceid);
								

												}
								}										
								else
								{
								echo"<div class='col-md-12' style='text-align:center'><strong>Sorry,there was a problem with the file you  uploaded.<br>Try Uploading another File <br><a href='projectform.php' class='btn btn-info' role='button'>Back to Add project</a></strong></div>";

								}
								}


						}

						}
	}
					
?>