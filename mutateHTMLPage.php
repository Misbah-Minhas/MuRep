<?php
include('simple_html_dom.php');
$servername="localhost"; 
$username = "root";
$password = "";
$dbname = "mutationoperators";
$colName = $_POST['columnName'];
$colName = "mutantV1";
$rowId = $_POST['rowid'];
//$rowId = 1;
$filePath = $_POST['directoryPage'];
//$filePath = 'C:\xampp\htdocs\MutationTesting\ApplicationUnderTest\Winku\landing.html';
$tableName=$_POST['tableName'];
//$tableName= "idnotfound";
$page_query = "SELECT * FROM  ".$tableName." where Sr=".$rowId."" ;  
$data = file($filePath);
$connect = mysqli_connect ($servername, $username, $password,$dbname);
$result = mysqli_query($connect, $page_query);	

  while($row = mysqli_fetch_array($result))  
 { 
		$Otemp=$row["OriginalCode"];
		$Otemp12=$row["mutantV1"];
		
		$Otemp1=base64_decode($row['OriginalCode']);
		
		$tempCode=base64_decode($row['OriginalCode']);
		
		$temp9= htmlspecialchars_decode($tempCode,ENT_HTML401);
		
		$Otemp = htmlspecialchars(str_replace(' ', '', $temp9)); 
		
		
		//-----------------------------------------------------
		
		$Otemp12=$row["mutantV1"];
		
		$Otemp1=base64_decode($row['mutantV1']);
		
		$tempCode1=base64_decode($row['mutantV1']);
		
		$temp91= htmlspecialchars_decode($tempCode1,ENT_HTML401);
		
		$Otemp111 = htmlspecialchars(str_replace(' ', '', $temp91)); 
		
		$Otemp111=htmlspecialchars($temp91);
		//echo $Otemp111;
		echo "Original Code " . $Otemp;
		echo "<br>";
		echo "Mutated Code " . $Otemp111;
		
		//-----------------------------------------------------
		
		$data = array_map('replace_a_line',$data);
		
		
 }
function replace_a_line($data) { 
		global $Otemp, $Otemp111;	
		

		$datatemp=str_replace(' ', '', htmlspecialchars($data));
		if (stristr($datatemp, $Otemp)) 
		{ 
			//echo "yes";
			return htmlspecialchars_decode($Otemp111) . "\n";
		}
   return $data;
}
file_put_contents('C:/xampp/htdocs/MutationTesting/MutantedVersions/MutatedFile.html', implode('', $data));
$text= file_get_contents('C:/xampp/htdocs/MutationTesting/MutantedVersions/MutatedFile.html');
$all_lines = file('C:/xampp/htdocs/MutationTesting/MutantedVersions/MutatedFile.html');
echo "<div class='submission-btn' style='text-align:right;text-align: right;
    padding: 0px;
    border-bottom: 1px solid #e4e4e4;' >
	  <a href='DownloadFile.php' class='btn btn-next'> <i class='fas fa-download'></i> Download </a>
	</div>";
foreach ($all_lines as $line_num => $line)
 {  
  echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "<br>";
 }	
?>
<script type="text/javascript">
function DownloadFile (data1, data2 ){
	
    load_data(data1,data2);  
      function load_data(page)  
      {  
		
           $.ajax({ 
                url:"DownloadFile.php",  
                method:"POST",  
				data: { FilePath: data1, Operator: data2},
                success:function(data){  
                   //  $('#pagination_data').html(data);  
                }  
           })  
      }  
      }
</script>