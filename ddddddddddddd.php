



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
				<input class='form-control' type='text' id='facebook' placeholder='enter facebook' name='facebook' value='$facebook'/>
				</h5> </div><br></div><br>
				<div class='col-md-12'  style='background-color:grey; color:white;text-align:left;'><strong>Youtube Video Link:</strong></div>
				<div class='col-md-12'style='text-align:left;'>
				<h5>
				<div class='form-group'>
				<input class='form-control' type='text'id='youtube'  placeholder='enter first name 'name='youtube' value='$youtube' />
				</h5></div></div><br>
				
				
				
				
				
		<tr><td><strong>Verification Status: </strong></td><td>$verification</td></tr>
		<tr><td><strong>Title: </strong></td><td>
		<div class='form-group'>
		<input class='form-control' type='text'  placeholder='enter project title' id='title' name='title' value='$title'  required/>
		</div>
		</td></tr>
		<tr><td><strong>Type: </strong></td><td>$type</td></tr>
		
		<tr><td><strong>Year: </strong></td><td>
		<div class='form-group'>
		<select class='form-control' name='year' id='year'>
	<option>$year</option>";
			select_year($cxn);
		echo"
		 </select>
		</div>
		</td></tr>
		
		
	<tr><td><strong>Department: </strong></td><td>
	<div class='form-group'>
<select class='form-control' name='department' id='department'>
	<option>$department</option>";
		select_department($cxn);
		echo"
		 </select>
		 </div>
	</td></tr>
	
	<tr><td><strong>School: </strong></td><td>
	<div class='form-group'>
	<select class='form-control' name='school' id='school'>
	<option>$school</option>";
		select_school($cxn);
		echo"
		 </select>
		 </div>
	</td></tr>
	
	<tr><td><strong>Author:</strong></td><td>
	<div class='form-group'>
	<input class='form-control' type='text'  placeholder='enter first name 'name='firstname' id='firstname' value='$name' required/>
	</div>
	<div class='form-group'>
<input class='form-control' type='text'  placeholder='enter last name 'name='lastname' id='lastname' value='$name1' required/>
	</div>
	</td></tr>
	
	<tr><td><strong>Author's Phone: </strong></td><td>
		<div class='form-group'>
		<input class='form-control' type='text'  placeholder='enter phone' id='phone' name='phone' value='$phone'  required/>
		</div>
		</td></tr>
	<tr><td><strong>Downloads: </strong></td><td>$downloads</td></tr>
<tr><td><strong>Abstract: </strong></td><td>
 <div class='form-group'>
  <textarea class='form-control' rows='10'  name='description' id='description' value='$description' required>$description</textarea>
</div>
</td></tr>
<tr><td><strong>Contents: </strong></td><td>
<div class='form-group'>
  <textarea class='form-control' rows='10'  name='contents' id='contents' value='$contents' required>$contents</textarea>
</div>
</td></tr>
<tr><td><strong>Facebook Page: </strong></td><td>
<input class='form-control' type='text' id='facebook' placeholder='enter facebook' name='facebook' value='$facebook'/></td></tr>
<tr><td><strong>Youtube Video Link: </strong></td><td>
<input class='form-control' type='text'id='youtube'  placeholder='enter first name 'name='youtube' value='$youtube' /></td></tr>
																
																	</table>