<?php
include('simple_html_dom.php');
$servername="localhost"; 
 $username = "root";
$password = "";
$dbname = "mutationoperators";
$colName = $_POST['columnName'];
$rowId = $_POST['rowid'];
$filePath = $_POST['directoryPage'];
$tableName=$_POST['tableName'];
$page_query = "SELECT * FROM  ".$tableName." where Sr=".$rowId."" ;  
$data = file($filePath);
$connect = mysqli_connect ($servername, $username, $password,$dbname);
$result = mysqli_query($connect, $page_query);	
  while($row = mysqli_fetch_array($result))  
 { 
		$Otemp=$row["OriginalCode"];
		$Otemp1=base64_decode($row['OriginalCode']);
	//	$tempCode=base64_decode($row['OriginalCode']);
		$tempCode=base64_decode($row['OriginalCode']);
		$temp9= htmlspecialchars_decode($tempCode,ENT_HTML401);
	///	echo $temp9;
		
		$Otemp = htmlspecialchars(str_replace(' ', '', $temp9)); 
		echo $Otemp;
		$data = array_map('replace_a_line',$data);
 }
function replace_a_line($data) { 
		global $Otemp, $Mtemp;	
		$datatemp=str_replace(' ', '', htmlspecialchars($data));
		if (stristr($datatemp, $Otemp)) 
		{ 
			
			return htmlspecialchars_decode($Mtemp) . "\n";
		}
   return $data;
}
//file_put_contents('D:/xamp/htdocs/MutationTesting/ApplicationUnderTest/exfolder/MutatedFile.html', implode('', $data));

file_put_contents('C:/xampp/htdocs/MutationTesting/MutantedVersions/MutatedFile.php', implode('', $data));
$text= file_get_contents('C:/xampp/htdocs/MutationTesting/MutantedVersions/MutatedFile.php');
$all_lines = file('C:/xampp/htdocs/MutationTesting/MutantedVersions/MutatedFile.php');
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