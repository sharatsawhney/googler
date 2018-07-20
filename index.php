<?php  
    if($_GET){
		$text = $_GET['text'];
		$first = explode(" ",$text);
		$second = join("+",$first);
		$url = "http://www.ask.com/web?o=0&l=dir&qo=serpSearchTopBox&q=".$second;
		$content = file_get_contents($url);
		$first_step = explode( '<p class="PartialSearchResults-item-url">' , $content );
		$second_step = explode('</p>' , $first_step[1]);
		$link =   $second_step[0];
		$src = $link;
		
		$second_step2 = explode('</p>' , $first_step[3]);
	    $link2 =   $second_step2[0];
	    $src2= $link2;
		
		$second_step3 = explode('</p>' , $first_step[2]);
		$link3 =   $second_step3[0];
		$src3 = $link3;
		
			
		    header('Location: direct.php?src='.$src3.'&pre='.$src.'&next='.$src2);
		
		
    }
   


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Googler</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container wrapper">
      <h1>GOOGLER</h1><hr><br>
	  <form method="get"> 
	    <div class="form-group">
	      <input type="text" name="text" placeholder="Googler" class="form-control"><br><br>
		  <button type="submit" class="btn btn-primary">Search</button>
	    </div>
	  </form>
	  
	</div>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	

  </body>
</html>