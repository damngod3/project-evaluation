<style>
	body {
		background-color: powderblue;
	}
	.button{
		background:#1161ee;
		  border:none;
  padding:15px 20px;
  border-radius:25px;
		}
	.checkbox{
		float:right;

	}
	table{
		border-collapse: collapse;
		width:50%;
	}
	td,th{
	
		text-align: left;
		padding: 8px;

	}
</style>
<body>


<center>
<form action="submit.php"  method="post" onsubmit="return ValidateForm(this);">
<script type="text/javascript">
function ValidateForm(form) {
if (form.Instructorname.value == "") { alert('Instructor name is required.'); form.Instructorname.focus(); return false; }
if (form.Course.value == "") { alert('Course  is required.'); form.Course.focus(); return false; }
if (form.Schedule.value == "") { alert('Schedule  is required.'); form.Schedule.focus(); return false; }
if (form.checkbox.value == "") { alert('Checkbox  is required.'); form.checkbox.focus(); return false; }
return true; }
</script><br>
<h1>Excel Training Skills and Career Center Inc.<br> Course Evaluation </h1>
<table style="width: 700px; border: 0;" cellpadding="4" cellspacing="0">
<tr> <td colspan="2">
<br /> <!--<b>Evaluator</b>
</td> </tr> <tr> <td style="width:50%">
<label for="EvaluatorName">Evaluator name*:</label><br />
<input name="EvaluatorName" type="text" maxlength="100" style="width: 300px;" />
</td> <td style="width:50%">
<label for="KnewStudentFor">How long have you known this Instructor?</label><br />
<select name="KnewStudentFor">
<option value="0-1 year">1 year or less</option>
<option value="1-3 years">1 - 3 years</option>
<option value="over 3 years">more than 3 years</option>
</select>
</td> </tr> <tr> <td>
<label for="EvaluatorPhoneNumber">Evaluator phone number:</label><br />
<input name="EvaluatorPhoneNumber" type="text" maxlength="50" style="width: 300px;" />
</td> <td>
<label for="EvaluatorEmailAddress">Evaluator email address:</label><br />
<input name="EvaluatorEmailAddress" type="text" maxlength="100" style="width: 300px;" />-->
</td> </tr> <tr> <td colspan="2">
 <b>Instructor</b>
</td> </tr> <tr> <td>
<label for="Instructorname">Instructor name:</label><br />
<input name="Instructorname" type="text" maxlength="100" style="width: 300px;" />
</td> <td>
	<label for="StudentName">Date:</label><br />
<input name="date" type="date" maxlength="100" style="width: 300px;" />
</td> </tr> <tr><td>

<label for="Course">Course:</label><br />
<select name="Course"  maxlength="100" style="width: 300px;" />
<option></option>
<option value="option">Web Development</option>
<option>Creative Web Design</option>
</select>
</td><td>

<label for="Schedule">Schedule:</label><br />
<select name="Schedule" type="text" maxlength="100" style="width: 300px;" />
<option></option>
<option>Mon-fri / 8am - 5pm</option>
</td></tr>
<br><table>
	<i>Please let us know how we can serve you better, Kindly check your answer for each of the given questions.</i>

<td><br>
<h3>Instructor:</h3>

<label>
	<tr>
		<th>QUESTIONS:</th>&ensp;
		<th>YES</th>
		<th>NO</th>
	</tr>
<tr>
		
		<td>1. Does s/he starthis class on time?</td>
		<td><input type="checkbox" name="checkbox"></td>
		<td><input type="checkbox" name="checkbox"></td>
	
</tr>
<tr>
	
		<td>2. Does s/he starthis class on time?</td>
		<td><input type="checkbox" name="checkbox"></td>
		<td><input type="checkbox" name="checkbox"></td>
		
	
</tr>
<tr>
	
		<td>3. Does s/he starthis class on time?</td>
		<td><input type="checkbox" class="check" name="checkbox"></td>
		<td><input type="checkbox" class="check" name="checkbox"></td>
		
	
</tr>







</tr>
<script>
	
</script>


<br>
</table><br>

<!--
<tr><td>

<label for="YearInSchool">Years in Excel:</label><br />
<select name="Rank">
<option value="">- Rank -</option>
<option value="Freshman">Freshman</option>
<option value="Sophomore">Sophomore</option>
<option value="Junior">Junior</option>
<option value="Senior">Senior</option>
</select>
OR
<select name="Grade">
<option value="">- Grade -</option>
<option value="1st grade">1st grade</option>
<option value="2nd grade">2nd grade</option>
<option value="3rd grade">3rd grade</option>
<option value="4th grade">4th grade</option>
<option value="4th grade">4th grade</option>
<option value="5th grade">5th grade</option>
<option value="6th grade">6th grade</option>
<option value="7th grade">7th grade</option>
<option value="8th grade">8th grade</option>
<option value="9th grade">9th grade</option>
<option value="10th grade">10th grade</option>
<option value="11th grade">11th grade</option>
<option value="12th grade">12th grade</option>
</select>
OR
<select name="YearsInSchool">
<option value="">- Years -</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</td> </tr> <tr> <td colspan="2">
<br /> <b>Instructor's performance</b>
</td> </tr> <tr> <td>
<select name="AcademicProgress" style="width:155px;">
<option value="">- Academic progress -</option>
<option value="Poor">Poor</option>
<option value="Below Average">Below Average</option>
<option value="Average">Average</option>
<option value="Above Average">Above Average</option>
<option value="Excellent">Excellent</option>
<option value="N/A">N/A</option>
</select>  
<select name="ClassParticipation" style="width:155px;">
<option value="">- Class participation -</option>
<option value="Poor">Poor</option>
<option value="Below Average">Below Average</option>
<option value="Average">Average</option>
<option value="Above Average">Above Average</option>
<option value="Excellent">Excellent</option>
<option value="N/A">N/A</option>
</select>
</td> <td>
<select name="Creativity" style="width:155px;">
<option value="">- Creativity -</option>
<option value="Poor">Poor</option>
<option value="Below Average">Below Average</option>
<option value="Average">Average</option>
<option value="Above Average">Above Average</option>
<option value="Excellent">Excellent</option>
<option value="N/A">N/A</option>
</select>  
<select name="Dependability" style="width:155px;">
<option value="">- Dependability -</option>
<option value="Poor">Poor</option>
<option value="Below Average">Below Average</option>
<option value="Average">Average</option>
<option value="Above Average">Above Average</option>
<option value="Excellent">Excellent</option>
<option value="N/A">N/A</option>
</select>
</td> </tr> <tr> <td>
<select name="Initiative" style="width:155px;">
<option value="">- Initiative -</option>
<option value="Poor">Poor</option>
<option value="Below Average">Below Average</option>
<option value="Average">Average</option>
<option value="Above Average">Above Average</option>
<option value="Excellent">Excellent</option>
<option value="N/A">N/A</option>
</select>  
<select name="Teamwork" style="width:155px;">
<option value="">- Teamwork -</option>
<option value="Poor">Poor</option>
<option value="Below Average">Below Average</option>
<option value="Average">Average</option>
<option value="Above Average">Above Average</option>
<option value="Excellent">Excellent</option>
<option value="N/A">N/A</option>
</select>
</td> <td>
<select name="OrganizationalSkills" style="width:155px;">
<option value="">- Organizational skills -</option>
<option value="Poor">Poor</option>
<option value="Below Average">Below Average</option>
<option value="Average">Average</option>
<option value="Above Average">Above Average</option>
<option value="Excellent">Excellent</option>
<option value="N/A">N/A</option>
</select>  
<select name="ProblemSolving" style="width:155px;">
<option value="">- Problem solving -</option>
<option value="Poor">Poor</option>
<option value="Below Average">Below Average</option>
<option value="Average">Average</option>
<option value="Above Average">Above Average</option>
<option value="Excellent">Excellent</option>
<option value="N/A">N/A</option>
</select>
</td> </tr> <tr> <td colspan="2">
<br />
<label for="WhatDistinguishes">What distinguishes this Instructor from others?</label>
<textarea name="WhatDistinguishes" rows="7" cols="40" style="width: 650px;"></textarea>
</td> </tr> <tr> <td colspan="2">
<label for="Describe">How would you describe this Instructor to others?</label>
<textarea name="Describe" rows="7" cols="40" style="width: 650px;"></textarea>
</td> </tr> <tr> <td colspan="2">
<label for="Comments">Other relevant comments:</label>
<textarea name="Comments" rows="7" cols="40" style="width: 650px;"></textarea>
</td> </tr> <tr> <td>
<br />

</td> <td>
<br />

</td> </tr>
</table>-->
<input class="button" name="submit" type="submit" value="Submit" />

</form>
</center>
</body>