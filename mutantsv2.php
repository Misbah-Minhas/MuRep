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
 
<?php
include('simple_html_dom.php');
// include('../WebPage.html');
// get DOM from URL or file
//$html = file_get_html('../simple_html_dom.php');
$servername="localhost"; 
 $username = "root";
$password = "";
$dbname = "mutationanalysis";
$connect = mysqli_connect ($servername, $username, $password,$dbname);
?>
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
</head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Web Mutation Testing </a>
    </div>
   <!-- <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>--->
    <ul class="nav navbar-nav navbar-right">
   <!--   <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Home</a></li>
    </ul>
  </div>
</nav>
      <body>  
           
           <div class="container">  
              
				<div class="row">
					<div class="col-md-4 col-lg-4 col-sm-4">
						<div class="mutationSummary" style="overflow: scroll;height:500px">
							<p>Mutation Summary</p>
							 <?php

			echo "<h4>Original Code</h4>";
		//	echo "<input type='radio' value='$row['OriginalCode']' ";
			//echo "<input type='button'  name='OMCode' class='appLink' value='".$row['OriginalCode']."' > &nbsp;&nbsp;&nbsp;";
			$x1=htmlspecialchars("<input type='text' placeholder='Type something...' id='myInput3' />");
			echo $x1;
				$x2=htmlspecialchars("<input type='text' placeholder='Type something...' id='73348734' />");
				echo "<h4>Replace ID with random values</h4>";
				//echo $x2;
				echo "<button type='btn'  value='".$x2."'>'".$x2."'</button>";
		echo "<hr>";
echo "<h4>Original Code</h4>";
		//	echo "<input type='radio' value='$row['OriginalCode']' ";
			//echo "<input type='button'  name='OMCode' class='appLink' value='".$row['OriginalCode']."' > &nbsp;&nbsp;&nbsp;";
			$x1=htmlspecialchars("<input type='text' id='FirstName1' />");
			echo $x1;
				$x2=htmlspecialchars("<input type='text' placeholder='Type something...' id='329382' />");
				echo "<h4>Replace ID with random values</h4>";
				//echo $x2;
				echo "<button type='btn'  value='".$x2."'>'".$x2."'</button>";
		echo "<hr>";
		echo "<h4>Original Code</h4>";
		//	echo "<input type='radio' value='$row['OriginalCode']' ";
			//echo "<input type='button'  name='OMCode' class='appLink' value='".$row['OriginalCode']."' > &nbsp;&nbsp;&nbsp;";
			$x1=htmlspecialchars("<input type='text'  id='secondName2' />");
			echo $x1;
				$x2=htmlspecialchars("<input type='text'  id='2323' />");
				echo "<h4>Replace ID with random values</h4>";
				//echo $x2;
				echo "<button type='btn'  value='".$x2."'>'".$x2."'</button>";
		echo "<hr>";
		echo "<h4>Original Code</h4>";
		//	echo "<input type='radio' value='$row['OriginalCode']' ";
			//echo "<input type='button'  name='OMCode' class='appLink' value='".$row['OriginalCode']."' > &nbsp;&nbsp;&nbsp;";
			$x1=htmlspecialchars("<input type='text' id='password5' />");
			echo $x1;
				$x2=htmlspecialchars("<input type='text'  id='88888' />");
				echo "<h4>Replace ID with random values</h4>";
				//echo $x2;
				echo "<button type='btn'  value='".$x2."'>'".$x2."'</button>";
		echo "<hr>";

	
 ?>
						</div>
					</div>
					<div class="col-md-8 col-lg-8 col-sm-8">
						<div class="codeSection">
							 
							<button class="btn btn-download">Download</button>
							
						<div class="table-responsive" id="pagination_data">  
                </div>  
							<?php

// Specify the webpage
$all_lines = file('file:///D:/3-msse/Thesis1/Implementation-mutation-operators/WebPage.html');
// Get source code
foreach ($all_lines as $line_num => $line)
 {  
   // Show source code line by line
   echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "<br>";
  
 }
/* $html = file_get_html('file:///D:/3-msse/Thesis1/Implementation-mutation-operators/WebPage.html');
 
 foreach($html->find() as $e) 
    echo $e . '<br>';
 ?>*/
 
/*
$content = file_get_html("file:///D:/3-msse/Thesis1/Implementation-mutation-operators/WebPage.html");
//echo $content;
$newcontent = str_replace("<label>First Name</label>", "<label>Minhas</label>", "$content");
file_put_contents("filename", "$newcontent");
echo $newcontent;
foreach ($newcontent as $line_num => $line)
 {  
   // Show source code line by line
  // echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "<br>";
  
 }
//echo htmlspecialchars($newcontent);
//var_dump(htmlspecialchars($newcontent));
?>*/
?>
		
						</div>
					</div>
				</div>
           </div> 
		
		   
      </body>  
 </html>  

