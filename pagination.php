<?php  
 //pagination.php 
 include('simple_html_dom.php');
$servername="localhost"; 
 $username = "root";
$password = "";
$dbname = "mutationanalysis";
//$html = file_get_html('D:/3-msse/Thesis1/Implementation-mutation-operators/WebPage.html');
$connect = mysqli_connect ($servername, $username, $password,$dbname);
 //$connect = mysqli_connect("localhost", "root", "", "testing");  
 

 
 $record_per_page = 1;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT * FROM idbaselocator ";  
 $result = mysqli_query($connect, $query);  
 $output .= "  
      <table class='table table-bordered'>  
           <tr>  
                <th>Original Version</th>  
                <th>Mutant Version</th>  
				<th>Mutant Version</th>  
				<th>Mutant Version</th>  
				<th>Mutant Version</th>  
           </tr>  
 ";  
 while($row = mysqli_fetch_array($result))  
 {  

$html = file_get_html('D:/xamp/htdocs/MutationTesting/ApplicationUnderTest/exfolder/WebPage.html');
   /*   $output .= '  
           <tr>  
                <td>'.$row["mutantV1"].'</td>  
               
				<td>'.$row["mutantV2"].'</td>  
				
				
           </tr>  
      ';*/  
	  
	 
	  
		foreach($html->find('input') as $e)
		{
		
				if($e->outertext == htmlspecialchars_decode($row['OriginalCode']))
				{
					$output .='
						<tr>
								
							<td>' .htmlspecialchars($html).'</td>';
					
					$e->outertext=htmlspecialchars_decode($row['mutantV1']);
						$output .='
									
							<td>' .htmlspecialchars($html).'
							</td>';
							$e->outertext=htmlspecialchars_decode($row['mutantV2']);
							$output .='
	
							<td>' .htmlspecialchars($html).'
							</td>';
							$e->outertext=htmlspecialchars_decode($row['mutantV3']);
							$output .='
	
							<td>' .htmlspecialchars($html).'
							</td>';
								$e->outertext=htmlspecialchars_decode($row['mutantV4']);
							$output .='
	
							<td>' .htmlspecialchars($html).'
							</td>';		
				}
					'</tr>';	
		 }  
 }   
 $output .= '</table><br /><div align="center">';  
 $page_query = "SELECT * FROM idbaselocator";  
 $page_result = mysqli_query($connect, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  
 }  
 $output .= '</div><br /><br />';  
 echo $output;  
 ?>  
 
 
