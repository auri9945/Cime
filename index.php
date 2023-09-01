<!--connection to db-->

<?php
    include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hompage</title>
<!--link collegamenti-->

<!-- CSS -->
<link rel="stylesheet" href="stile.css">

<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384…" crossorigin="anonymous">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-…" crossorigin="anonymous"></script>

<!-- Bootbox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.3/bootbox.min.js" integrity="sha512-…" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Font Awesome Icons CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>



<body>
    <header> <!--creazione contenitore header con all'interno la navbar - barra di navogazione-->
        <div class="header">
            <nav class="navbar navbar-dark bg-dark justify-content-between">
                <div class="container">
                    <a href="index.php"> <img src="" alt="" class="logo"> CIME</a> <!-- logo con collegamento ipertestuale con la pagina index.php-->
                    <div class="nav_items">
                        <ul>
                            <li><a href="">Blog</a></li>
                            <li><a href="">About us</a></li>
                            <li><a href="">Contacts</a></li>
                        </ul>
                    </div>
                    <div class="nav_login">
                        <a href="" class="btn btn-light">Login</a> <!-- collegamento ipertestuale con il sistema di login-->
                        <a href="" style="color:white;">register</a> <!-- collegamento ipertestuale con il sistema di registrazione-->
                    </div>
                </div>
            </nav>
        </div>
    </header>
    
<div class="container mt-5"> <!-- container con all'interno il pulsante che rimanda a create.php nella uqale viene creato il codice per inserire un nuovo post-->

                <!--alert-->
                <!-- gli stiamo dicendo che il tetso di avviso " Il tuo post è stato caricato correttamente!" 
                può comparire solo nel caso in cui le info sono stato aggiunte al db-->
            <?php
            if(isset($_REQUEST['info']))
            {?>
                <?php 
                if($_REQUEST['info'] == "added")
                { ?>
                <div class="alert alert-success" role="alert">
                        Il tuo post è stato caricato correttamente!
                </div>
                <?php } ?>
            <?php } ?>

    <div class="text-container" style=" display:flex; align-items: center; justify-content:center;"> 
        <h2>WELCOME TO CIME</h2>
    </div>
    <div class="create-post" style=" display:flex; align-items: center; justify-content:center;">
    <a href="create.php" class="btn btn-outline-dark"> + Create a New Post</a> <!-- il tag a che fa da pulsante e coolagto alla pagina create.php-->
    </div>



    <div class="row">

        <?php foreach($query as $q) { ?>
            <div class="col-4 d-flex justify-content-center align-items-center" >
                <div class="card text-white bg-dark mt-5">
                    <div class="card-body" style="width: 18rem;" id="card-body">
                        <h5 class="card-title" id="card-title"> <?php echo $q['title']; ?></h5>
                        <p class="card-text">   <?php echo $q['content']; ?></p>
                        <span id="messaggio"></span>
                    </div>
                </div>
            </div>
            <?php 
                // imposto lo sfondo personalizzato
                if (isset($_SESSION["color"])) { // controllo se la variabile di sessione color è impostata
                    $color = $_SESSION["color"];
                    //echo "color = ".$color;
                ?>
                <script>
                $(document).ready(function() {
                    let col = "<?= $color ?>";
                    $("#card-title").css("background-color", col);
                });
                </script>
                <?php
                }
                else { // se la variabile di sessione color non è impostata
                    echo "La variabile di sessione color non è impostata :-(";
                }

                // inizializzo una variabile con un messaggio per l'utente
                $messaggio = "";
            ?>
        <?php }?>
    </div>

</div>


</body>
</html>