<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Custom Form Browser</title>
		<meta name="description" content="">
		<meta name="author" content="Vasu Naman">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		
		<!-- custom bootstrap insert -->
		<link rel="stylesheet" href="dist/css/bootstrap.css">
		<link rel="stylesheet" href="dist/css/bootstrap-theme.css">
        <link rel="stylesheet" href="dist/css/style.css">
	</head>

	<body>
		<div class="container">
        	<div class="row">
            	<div class="col-lg-4">
                	<div class="well well-lg">
                        <h1> A custom form browser script</h1>
                        <iframe class="philcustomframe" src="http://fastsureprofits.com/form.php" height="500" width="300"></iframe>
                    </div>
                  </div>
                <div class="col-lg-8">
                	<?php
                	$homepage = file_get_contents('http://fastsureprofits.com/form.php');
					$homepage2 = file_get_contents('http://fastsureprofits.com/form.php');
					
					$initial = strpos($homepage2, '<form');
					$final = strpos($homepage2, '</form');
					
					$form = substr($homepage2,$initial,$final);
					echo '<div class="naman">';
					
					echo '</div>';
					?>
					
                	<textarea class="form-control" rows="1"><?php echo $initial; ?></textarea>
                	<!-- <textarea class="form-control" rows="50"><?php echo $form; ?></textarea> -->
                	
                	
                	
                	<?php echo $form; ?>
                
                
                </div>
            
            </div>
        
        </div>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="dist/js/bootstrap.js"></script>
        
        
        
        <script type="text/javascript">
		$( document ).ready(function() {
			
				$.ajax({
				type: "GET",
				url:"",
				beforeSend:function(){
					// this is where we append a loading image
					$('').html('');
				  },
				success:function(result){
					console.log(result);
					$("").html('');
					return false;
				}});
		  
		});
		
		
		
		</script>
        
	</body>
</html>
