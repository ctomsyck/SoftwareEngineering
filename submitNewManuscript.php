<?php
    ob_start();?>
<body id="body1">
	<div id="header">
		<img src="http://ctomsyck.com/image/title.png" width="423px" height="126px">
	</div>
		
	<br>
	<br>
	<div class="wrapper">
  <div id="content">
<?php echo "<link rel='stylesheet' type='text/css' href='http://ctomsyck.com/stylesheet.css' />"; php?>

<?php 
session_start();   
$username = $_SESSION['username'];
$role = $_SESSION['role'];
$ID = $_SESSION['ID'];
 if($role == '1' || $role == '3'){
 ?> 
 
 <html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>Manuscript submission</title>
</head>
<body>
<table>
<form action="/submitManuscript.php" method="POST">
	<tr>
	<td><th>Manuscript submission form</th></td>
	</tr>
	<tr>
	<td>Select article type:</td>
	<td>
	<select id="manuscripts" name="manuscripts">
		<option value="Original Research">Original Research</option>
		<option value="Theoretical Article">Theoretical Article</option>
		<option value="Review Article">Review Article</option>
		<option value="Meta-Analysis">Meta-Analysis</option>
		<option value="Case Study or Applied Report">Case Study or Applied Report</option>
		<option value="Response to an Article or Case">Response to an Article or Case</option>
		<option value="Recent Developments">Recent Developments</option>
		<option value="Critical Perspectives">Critical Perspectives</option>
		<option value="Editorial or Opinion">Editorial or Opinion</option>
		<option value="Letter to Editor">Letter to Editor</option>
		<option value="Book, Film, or Art Review">Book, Film, or Art Review</option>
		<option value="Other">Other</option>
	</select><td>
	</tr>
	<tr><td>Is this manuscript being submitted as part of a Symposium or Special Issue?</td><td></td></tr>
	<tr><td><input type="checkbox" ID="yesno" name="yesno" value="Yes" checked> Yes
    <input type="checkbox" name="yesno2" ID="yesno2" value="No" > No</td><td></td></tr>
	<tr>
	<td>If <q>Yes,</q> what is the Symposium or Special Issue topic? </td>
	<td><input type="text" id="symposiumTitle" name="symposiumTitle" maxlength="100"/></td>
	</tr>
	<tr>
	<td>Enter full title of submission:</td>
	<td><input type="text" id="title" name="title" maxlength="1000" required/>* required</td>
	</tr>
	<tr>
	<td>Add authors</td>
	</tr>
	<tr><td>Multiple academic degrees maybe added to the author names<td></tr>
	<tr>
	<td>First author:</td>
	<td><input type="text" id="firstAuthor" name="firstAuthor" maxlength="50" required/>* required</td>
	</tr>
	<tr>
	<td>Second author:</td>
	<td><input type="text" id="secondAuthor" name="secondAuthor" maxlength="50"/></td>
	</tr>
	<tr>
	<td>Third author:</td>
	<td><input type="text" id="thirdAuthor" name="thirdAuthor" maxlength="50"/></td>
	</tr>
	<tr>
	<td>Fourth author:</td>
	<td><input type="text" id="fourthAuthor" name="fourthAuthor" maxlength="50"/></td>
	</tr> 
	<tr>
	<td>Corresponding author:</td>
	<td><input type="text" id="CorrespondingAuthor" name="CorrespondingAuthor" maxlength="50" /></td>
	</tr>
	<tr>
	<td>Corresponding author email:</td>
	<td><input type="text" id="CorrespondingEmail" name="CorrespondingEmail" maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" /></td>
	</tr>
	<tr><td>Please add any additional authors in the comments text area below.</td><td></td></tr>
	<tr><td>Funding information</td></tr>
	<tr>
	<td>Funder name:</td>
	<td><input type="text" id="funderName" name="funderName" maxlength="50"/></td>
	</tr>
	<tr>
	<td>Grant number:</td>
	<td><input type="text" id="grantNumber" name="grantNumber" maxlength="50"/></td>
	</tr>
	<tr>
	<td>Grant recipient:</td>
	<td><input type="text" id="grantRecipient" name="grantRecipient" maxlength="50"/></td>
	</tr>
</table>
	<br>Enter the abstract of your manuscript into the text area below. The abstract may be
	<br>cut and pasted from the word document, however the formatting will be lost.
	<br>Enter abstract<br><textarea id="abstract" name="abstract" rows="10" cols="80"> </textarea><br>
	<br>Manuscripts submitted to the Journal of Bioethical Inquiry must be offered exclusively to the journal.
	<br>If a submitted article overlaps considerably with previously published articles or articles concurrently
	<br>submitted elsewhere, copies of these should be included with the submitted manuscript.
	<br><br>By checking the following boxes, the corresponding author confirms the following:
	<br>This manuscript has not been published before.
	<input type="checkbox" ID="published" name="published" value="yes" checked> Yes
	<input type="checkbox" ID="published2" name="published2" value="no" > No
	<br>This manuscript is currently not under consideration for publication anywhere else.
	<input type="checkbox" ID="publishedTwo" name="publishedTwo" value="yes" checked> Yes
	<input type="checkbox" ID="publishedTwo2" name="publishedTwo2" value="no" > No
	<br>This manuscript has been approved by all co-authors, if any, as well as by the responsible authorities (tacitly or explicitly) at the institute where the work has been carried out.
	<input type="checkbox" ID="publishedThree" name="publishedThree" value="yes" checked> Yes
	<input type="checkbox" ID="publishedThree2" name="publishedThree2" value="no" > No
	<br><br>Please include any additional comments to the editor<br><textarea id="editor" name="editor" rows="10" cols="80"> </textarea><br>
	<br>After hitting submit the next page will allow you to upload your document files.<br>

	
    <input type="submit" value="submit">
</form>

<br><br><a href="/submitterMain.php">Submitter main</a><br>
</body>
</html>
	</div>
		<div class="push"></div>
	</div>
		<footer>Copyright &copy; 2015</footer>
<?php
    } else {
        header('Location: /submitterMain.php/'); //change link to redirect user
        ob_end_flush();
    }?>