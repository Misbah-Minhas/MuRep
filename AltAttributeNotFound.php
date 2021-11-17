<?php
include('simple_html_dom.php');
function db () {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mutationoperators";
$conn = mysqli_connect ($servername, $username, $password,$dbname);
return $conn;
}
$directoryName=$_POST['filepath'];
//echo $directoryName;
//$directoryName='D:\xamp\htdocs\MutationTesting\ApplicationUnderTest\SampleApplication\hello.html';
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
      <a class="navbar-brand">Step 3: Mutated Versions </a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Home</a></li>
    </ul>
  </div>
</nav>
				
		<?php
					echo "<input type='hidden' id='PathName' value='".$_POST['filepath']."'/>";
					$html = file_get_html($directoryName);
					$operator = "AltAttributeNotFound";
					if($operator == "AltAttributeNotFound")
					{
						$conn = db ();
						$sql= "TRUNCATE altattributenotfound";
								if ($conn->query($sql) === TRUE) {
											//echo "All previous record del";
											} else {
													echo "Error: " . $sql . "<br>" . $conn->error;
											}
							$dom = new DOMDocument;
							libxml_use_internal_errors(true);
							$dom->loadHTML($html);
							$inputs = $dom->getElementsByTagName('img');
								foreach ($inputs as $input){
										//$typeText=$input->getAttribute('alt');
										
										$OriginalCode=$input->getAttribute('alt');
										
										if($OriginalCode!=""){
										$OriginalCode = $input->ownerDocument->saveXML($input);
										//$OriginalCode=htmlspecialchars($OriginalCode,ENT_QUOTES);
										$OriginalCode=base64_encode($OriginalCode);
										$RandomNum="image";
										$input->setAttribute('alt', $RandomNum);
										$MRandomNum = $input->ownerDocument->saveXML($input);
										$MRandomNum=base64_encode($MRandomNum);
										addtodb($OriginalCode,$MRandomNum);
										}
										
										//}
										
										
										}					
					}
					else {
						echo "No it is not ID base Locator";
					}
					displayinfo();
				?>
<?php
function addtodb($OriginalCode,$MRandomNum){
$sql= "INSERT INTO altattributenotfound (OriginalCode,mutantV1) VALUES ('".$OriginalCode."','".$MRandomNum."')";
$conn = db ();
if ($conn->query($sql) === TRUE) {
		//echo "New record created successfully";
			//displayinfo();
			} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
				}
}
function displayinfo(){
$servername="localhost"; 
$username = "root";
$password = "";
$dbname = "mutationoperators";
$connect = mysqli_connect ($servername, $username, $password,$dbname);
	?>
 <body>       
           <div class="container">  
				<div class="row">
					<div class="col-md-4 col-lg-4 col-sm-4">
						<div class="mutationSummary" style="overflow: scroll;height:500px">
							<p>Mutation Summary</p>
							 <?php
 $page_query = "SELECT * FROM altattributenotfound";  
 //$page_result = mysqli_query($connect, $page_query); 
 $result = mysqli_query($connect, $page_query);
	echo "<form method='post'>";
  while($row = mysqli_fetch_array($result))  
	{
			echo "<hr>";
			echo "<h4>Original Code</h4>";
		//	$temp=base64_decode($row['OriginalCode']);
			
		
		   // $temp9= htmlspecialchars($temp,ENT_HTML401);
			$tempCode=base64_decode($row['OriginalCode']);
			$temp9= htmlspecialchars_decode($tempCode,ENT_HTML401);
	///	echo $temp9;
		
			$Otemp = htmlspecialchars(str_replace(' ', '', $temp9)); 
			echo "<span class='Ocode'>".$Otemp."</span>";
			echo "<h4>Mutants</h4>";
			echo "<span class='ClickMutants'><p onclick=mf(".$row['Sr'].",'mutantV1');><img src='images/bug.jpg' style='width:6%;'/>  Replace href attribute </p></span>";
		//	echo "<span class='ClickMutants'><p onclick=mf(".$row['Sr'].",'mutantV2');><img src='images/bug.jpg' style='width:6%;'/>  Add Numeric Values with ID attribute</p></span>";
			//echo "<span class='ClickMutants'><p onclick=mf(".$row['Sr'].",'mutantV3');><img src='images/bug.jpg' style='width:6%;'/>  Replace ID attribute with Random Values</p></span>";
			//echo "<span class='ClickMutants'><p onclick=mf(".$row['Sr'].",'mutantV4');><img src='images/bug.jpg' style='width:6%;'/>  Replace ID attribute with Nulll value</p></span>";
	}
	echo "</form>";
 ?>
				</div>
					</div>
					<div class="col-md-8 col-lg-8 col-sm-8">
						<div class="codeSection">
						<div class="table-responsive" id="pagination_data">  
						<?php

						// Specify the webpage
//$all_lines = file('D:/xamp/htdocs/MutationTesting/ApplicationUnderTest/exfolder/WebPage.html');
$all_lines = file($_POST['filepath']);
// Get source code
foreach ($all_lines as $line_num => $line)
 {  
   // Show source code line by line
   echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "<br>";
 }
 ?>
<?php
}
//header("Location: http://localhost/mutationTesting/mutants.php?$directoryName");
?>
	</div>
		</div>
	</div>
</body>
<script type="text/javascript">
function mf (data1, data2 ){
			//document.getElementById("pagination_data").innerHTML = "";
			var data3=document.getElementById("PathName").value;
			
			  //var data3="D:/xamp/htdocs/MutationTesting/ApplicationUnderTest/SampleApplication/hello.html";
			  var data4="altattributenotfound";
    load_data(data1,data2,data3,data4);  
      function load_data(page)  
      {  
           $.ajax({ 
                url:"mutateHTMLPage.php",  
                method:"POST",  
				//data: { columnName: data2, rowid: data1, directoryPage:data3},
				data: { columnName: data2, rowid: data1, directoryPage:data3,tableName:data4},
                success:function(data){  
                     $('#pagination_data').html(data);  
                }  
           })  
      }  
      }
</script>     
		