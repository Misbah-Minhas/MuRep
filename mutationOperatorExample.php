<!DOCTYPE html>
<html lang="en">
<head>
   <title>Mutation Testing Tool</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/style.css">
   <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.2-web/css/all.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
	function validateForm(){
			if($('.fileLink').is(':checked') && $('.operators').is(':checked'))
				{ 
				return true;
				
				}
			else {
				alert("Select file and operator to proceed");
				return false;
				//window.location.href="index.php";
			}
	}
	jQuery(document).ready(function($) {
				   var form = $('form[name="FileOpe"]'),
				   radio = $('input[name="operator"]'),
                   choice = '';
                   radio.change(function(e) {
                    choice = this.value;
                            if (choice === 'AutomaticallyGeneratedIDnotFound') {
                              form.attr('action', 'AutomaticallyGeneratedIDnotFound.php');
                                             } 
							if (choice === 'IndexBasedLocatorTargetnotFound')
										{
										form.attr('action', 'IndexBasedLocatorTargetnotFound.php');
										}
							if (choice === 'HrefBaseLocatorNotFound')
										{
										form.attr('action', 'hrefAttributeNotFound.php');
										}
							if (choice === 'TypeAttributeChange')
										{
										form.attr('action', 'TypeAttributeNotFound.php');
										}
										});
									});
	
	
	</script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Step 2: Select File and Mutation Operators </a>
    </div>
   
    <ul class="nav navbar-nav navbar-right">
   <!--   <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Home</a></li>
    </ul>
  </div>
</nav>

<?php
//$dir="D:/myxaamp/htdocs/MutationTestingTool/ApplicationUnderTest/exfolder";
if(isset($_POST['application'])){
	
function getDirContents($dir, &$results = array()) {
	//echo "SAB";
	//echo $dir;
    $files = scandir($dir);
	//var_dump("<br>",$files);
    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $results[] = $path;
        } else if ($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }
    return $results;
}
$directoryName=$_POST['application'];

$my_array=getDirContents($directoryName);
}
else {
	?>
	<script type="text/javascript">location.href = 'index.PHP';</script>
<?PHP
}
//print_r($my_array);
echo "<div class='container-fluid'>";
//echo "<form  method='post' action='Delete-value-option.php'>";
//<script type="text/javascript">location.href = 'index.PHP';</script>
echo "<form  method='post' action='try.php' name='FileOpe' onsubmit='return validateForm()'>";
//echo "<form  method='post' action='style.php' onsubmit='return validateForm()'  >";
echo "<div>"; 
	echo "<div class='col-md-7'>";
	echo "<h3> Files </h3>";
	echo "<div class='files'>";
//	
		foreach ($my_array as $value) {
			echo "<span>";
			
			echo "<input type='radio'  name='filepath' value='$value' class='fileLink'>";
			
			//$GLOBALS['filepath']="MIS";		
			//$_REQUEST["filepath"] =$value;
			echo "<label>$value</label> <br>";
			echo "</span>";
									  }
    echo "</div>";	
	  echo "</div>";
echo "<div class='col-md-5'>";
echo "<h3>Web Operators</h3>";
echo "<br>";
//echo "<h4>Locator Base</h4>";
//echo "<h5>&nbsp;Attribut Base Locators</h5>";
//echo "<h6>&nbsp;&nbsp;Element Attribute not Found </h6>";
echo "<div><p><span class='webOperators'><input type='radio' id='AttributeID' name='operator' value='AutomaticallyGeneratedIDnotFound' class='operators'>
		<label for='AttributeID1'>Automatically Generated ID not Found</label></span></p></div>";
		
		echo "<div><p><span class='webOperators'><input type='radio' id='LoctorNotFound' name='operator' value='IndexBasedLocatorTargetnotFound' class='operators'>
		<label for='AttributeID1'>IndexBasedLocatorTargetnotFound</label></span></p></div>";
	
		echo "<div><p><span class='webOperators'><input type='radio' id='HrefNotFound' name='operator' value='HrefBaseLocatorNotFound' class='operators'>
		<label for='AttributeID1'>HREF Attribute Not found</label></span></p></div>";
		
		echo "<div><p><span class='webOperators'><input type='radio' id='TypeAttributeChange' name='operator' value='TypeAttributeChange' class='operators'>
		<label for='AttributeID1'>Type Attribute Change</label></span></p></div>";
		
		
 echo "</div>";
  echo "</div>";
 echo "</div>";
/* echo "<input type='submit' id='button' value='Submit' class='btn btn-primary' SelectRedirect>";*/
?>
<div class="container-fluid">
<div class="row">
<div class="genrateMutants">
<br>
<button class="btn btn-mutants" id="appPath" type="submit"> Generate Mutants <i class="fas fa-arrow-right"></i> </button>
<!--<button class='btn btn-mutants' id='ProcessInput' type='submit' onclick="validateForm()"> Generate Mutants <i class='fas fa-arrow-right'></i> </button>
-->
</div>
</div>
</div>
</body>
</html>