<?php
session_start();
include("./conectar.php");
$sql = "SELECT * FROM servers";
if($videos = mysqli_query($link, $sql))
{
} 
else{
  //hacer cosas de error
  
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>CPReplay</title>
<link href="css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container"> 
  <header class="header">
    <img src="https://i.imgur.com/t2iQvlc.png" width="210" height="90">
	
  </header>
  <div class="" style="background-color: #282828; height: 55px; display:flex">
	
	</div>
  <div class="gallery">
    <?php
    
    while($video = mysqli_fetch_assoc($videos))
    {
      echo'<div class="thumbnail"></a>
      <h4>'.$video["server"].'</h4>
      <p class="tag">'.$video["date"].'</p>
    </div>';
    }
    
    ?>
  </div>

</div>
</body>
</html>
