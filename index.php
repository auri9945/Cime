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

    <title>Hompage</title>
    <title>Searchbar</title>
<style>
 
/*barra di navigazione orizzontale con colore di sfondo a larghezza intera*/
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  /*serve per dire dove spostare la barra*/
  position: relative;
  top: -190px;
}
li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active){
  background-color: #111;
}
.active {
  background-color: #04AA6D;
}


</style>
</head>



<body>
    <div class="container mt-5"> <!-- container con all'interno il pulsante che rimanda a create.php nella quale viene creato il codice per inserire un nuovo post-->

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

<!--Creazione navbar e barra di ricerca-->
<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="#search">Search</a></li>
  <form class="form-inline my-2 my-lg-0">

  <!-- <button type="submit" class="button button--icon button--plain" style="z-index: 3">
    <span class="is-icon-search icon icon-medium" style="color: var(--navigation-text-color)"></span>
  </button> -->
  
    <input class="" style="width:50%;" type="search" placeholder="Cerca su CIME" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cerca</button>
  </form>
</ul>
</body>
</html>