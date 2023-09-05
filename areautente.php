<?php 


session_start();
if(!isset($_SESSION['loggato']) || $_SESSION['loggato'] !== true){
  header("location: login.php");
  exit;


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG CIME</title>


</head>
<body>
<h1>Area utente</h1>
<?php //stampare il messaggio di benvenuto utilizzando il valore dell'array associativo $_SESSION.
echo "Benvenuto " . $_SESSION["nickname"];
?>

<a href="logout.php"> Esci dal Blog di Cime</a>

</body>
</html>