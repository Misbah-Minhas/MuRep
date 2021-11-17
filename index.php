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
	
	if($('.appLink').is(':checked'))
				{ 
				return true;
			}
			else {
				alert("Select an application to proceed");
				return false;
			
			}
			
}
</script>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Web Mutation Testing Tool</h1>
</div>
<section class="hero">
<div class="container">
  <div class="row">
    
    <div class="col-sm-6">
	<form name="myForm" action="mutationOperator.php" onsubmit="return validateForm()" method="post"> 
      <h3>Select Application</h3>
      <?php
if ($handle = opendir('C:/xampp/htdocs/MutationTesting/ApplicationUnderTest')) {
    $blacklist = array('.', '..', 'somedir', 'somefile.php');
    while (false !== ($file = readdir($handle))) {
        if (!in_array($file, $blacklist)) {
			
			echo "<br>";
			
			echo "<label class='container indexcontainer'>";
			$path='C:/xampp/htdocs/MutationTesting/ApplicationUnderTest/'.$file ;
			
			echo "<input type='radio'  name='application' class='appLink' value='".$path."' >";
			echo $file;
			echo "<span class='checkmark'></span>";
			echo "</label>";
        }
    }
    closedir($handle);
}
?>
	<div class="submission-btn">
	  
	<button class="btn btn-next" id="appPath" type="submit"> Next <i class="fas fa-arrow-right"></i> </button>
	</div>
	</form>
    </div>
	<div class="col-sm-6">
		<img src="images/banner.png" alt="image" class="img-responsive"/>
    </div>
  </div>
</div>
</section>
</body>
</html>



