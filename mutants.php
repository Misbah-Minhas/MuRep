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

<?php
include('simple_html_dom.php');
// include('../WebPage.html');
// get DOM from URL or file
//$html = file_get_html('../simple_html_dom.php');
$servername="localhost"; 
 $username = "root";
$password = "";
$dbname = "mutationoperators";
$connect = mysqli_connect ($servername, $username, $password,$dbname);
?>
<script type="text/javascript">
function mf (data1, data2){
	//alert(data2);
    load_data(data1,data2);  
      function load_data(page)  
      {  
	
           $.ajax({  
                url:"mutatePage.php",  
                method:"POST",  
				data: { columnName: data2, rowid: data1 },
            //    data:{page:page},  
                success:function(data){  
                     $('#pagination_data').html(data);  
                }  
           });  
      }  
      }
</script>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Step 3: Mutated Versions </a>
    </div>
   
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
 $page_query = "SELECT * FROM idbaselocator";  
 //$page_result = mysqli_query($connect, $page_query); 
 $result = mysqli_query($connect, $page_query);

	echo "<form method='post'>";
  while($row = mysqli_fetch_array($result))  
	{
			echo "<hr>";
			echo "<p id='button' onclick=mf('Sr','OriginalCode'); value='clicked'/>click</p>";
			echo "<h4>Original Code</h4>";
		//	echo "<input type='radio' value='$row['OriginalCode']' ";
			//echo "<input type='button'  name='OMCode' class='appLink' value='".$row['OriginalCode']."' > &nbsp;&nbsp;&nbsp;";
			echo "<input type='submit' value='".$row['OriginalCode']."' onclick='f1('misb')''; class='pagination_link' />";
		//	echo ($row['OriginalCode']);
			echo "<br>";
			echo "<h4>Remove Varaiables from ID</h4>";
		//	echo "<input type='radio'  name='OMCode' class='appLink' value='".$row['mutantV1']."' > &nbsp;&nbsp;&nbsp;";
			echo "<input type='' value='misW' id='one' name='msn' class='pagination_link'/>";
		//	echo ($row['mutantV1']);
			echo "<br>";
			echo "<h4>Add Random value with ID</h4>";
			//echo "<input type='radio'  name='OMCode' class='appLink' value='".$row['mutantV2']."' > &nbsp;&nbsp;&nbsp;";
			echo "<input type='button' id='".$row['mutantV2']."' onclick='f1(this)' class='pagination_link' />";

		//	echo ($row['mutantV2']);
			
			echo "<br>";
			echo "<h4>Replace with Random Values</h4>";
		//	echo "<input type='radio'  name='OMCode' class='appLink' value='".$row['mutantV3']."' > &nbsp;&nbsp;&nbsp;";
			echo "<input type='button' id='".$row['mutantV3']."' onclick='f1(this)' class='pagination_link'/>";

		//	echo ($row['mutantV3']);
			
			echo "<h4>Delete value of ID</h4>";
		//	echo "<input type='radio'  name='OMCode' class='appLink' value='".$row['mutantV4']."' > &nbsp;&nbsp;&nbsp;";
			echo "<input type='button' id='".$row['mutantV4']."' onclick='f1(this)' class='pagination_link' />";

		//	echo ($row['mutantV4']);
			
			echo "<br>";

	}
	echo "</form>";
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
$all_lines = $d;
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

