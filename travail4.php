<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device_width,initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6 offset-3" style="margin-top:120px">
<form method="POST">
<div class="card">
<div class="card-header bg-danger">
<div class="card-title"><center><h3><font color="yellow"><marquee>les nombre superieur est</marquee></font></h3></center></div>
</div>
<div class="card-body">
<center>
<input type="number" name="N1" placeholder="saisir nombre" class="form-control"><br><br>
<input type="number" name="N2" placeholder="saisir nombre" class="form-control"><br><br>
<input type="submit" name="Verifier" value="Verifier" class="btn btn-primary">
<button class="btn btn-success"><a href="Travail3.php">Retour</a></button>
<button class="btn btn-warning"><a href="Travail5.php">Suivant</a></button>
</center>
</div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>
<?php
if (isset($_POST['Verifier'])) {
$a=$_POST['N1'];    
$b=$_POST['N2'];
if($a > $b){
echo"<h3><center>les nombre superieur est $a</center></h3>";
}
elseif($b > $a){
echo"<h3><center>les nombre superieur est $b</center></h3>";
}
else{
echo"<h3><center>les deux nombre sont egaux</center></h3>";
}
}
?>



