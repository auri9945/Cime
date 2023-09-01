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

* {
    margin: 0;
    padding: 0;
    outline: 0;
    border: 0;
    appearance: 0;
    list-style: none;
    text-decoration: none;
}

body{
    font-family: 'Montserrat', sans-serif;
    font-size: 1.16rem;
    color: #1e1e66;
}

a:link {
  text-decoration: none;
  color: #f2f2fe;
}

nav {
  background: #6f6af8;
  width: 100vw;
  height: 6.5rem;
  position: fixed;
  top: 0;
  z-index: 10;
  box-shadow: 0 1rem 1rem rgba(0, 0, 0.2);
}

nav button{
    display: none;

}

.nav-container {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.avatar {
    width: 3.5rem;
    height: 3.5rem;
    border-radius: 50%;
    overflow: hidden;
    border: 0.3rem solid #0f0f3e;
}


.nav-logo {
    font-weight: 600;
    font-size: 1.2rem;
    color: #f2f2fe;

}

.nav-items {
    display: flex;
    align-items: center;
    gap: 4rem;
}

.nav__profilo {
    position: relative;
    cursor: pointer;

}

.nav__profilo ul {
    position: absolute;

    top: 125%;
    right: 0;
    display: flex;
    flex-direction: column;
    box-shadow: 0 3rem 3rem rgba(0, 0, 0, 0.4);
    visibility: hidden;
    opacity: 0;
    transition: var(--transition);
}

.search-bar {
  width: 100%;
  border-radius: 10px;
  padding: 7px;
  font-size: 1rem;
}

/*===========Mostrare menù a tendina quando si passa sull'icona profilo ===========*/
.navprofilo:hover > ul {
    visibility: visible;
    opacity: 1;
}

.navprofilo ul li a {

    padding: 1rem;
    background: #1e1e66;
    display: block;
    width: 100%;
}

.navprofilo ul li:last-child a {
    background: #da0f3f;
    color: #0f0f3e;
}


</style>
</head>

<!--navbar stefania-->
       <!-- <nav> 
        <div class="container nav__container">
          <a href="indexblog.html" class="nav__logo">CIME BLOG</a>

          <ul class="nav__items">
           <li><a href="blog.html" class="btn btn-light">Blog</a></li> 
           <li> <a href="login.php" class="btn btn-light">Login</a> collegamento ipertestuale con il sistema di login </li>
           <li><a href="registrazione.php" class="btn btn-light">Registrati</a>  collegamento ipertestuale con il sistema di registrazione</li>

           <li class="nav__profilo">
            <div class="avatar">
                <img src="./immagini/avatar1.png">
            </div>
            <ul>
            <li><a href="areautente.html">Area utente</a></li>
            <li><a href="logout.html">Logout</a></li>
           </ul>
           </li>
          </ul>

<button id="open__nav-btn"><i class="uil uil-list-ul"></i></button>
<button id="close__nav-btn"><i class="uil uil-times-circle"></i></button>
        </div>
        </nav>   -->


<body>
<!--Creazione navbar e barra di ricerca-->
<header>
  <nav class="navbar">
      <div class= "container nav-container">
      <a href="index.php" class="nav-logo">CIME Blog</a>

        <ul class="nav-items"></ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">contacts</a></li>
          <form class="form-inline my-2 my-lg-0">

      <!-- <button type="submit" class="button button--icon button--plain" style="z-index: 3">
        <span class="is-icon-search icon icon-medium" style="color: var(--navigation-text-color)"></span>
      </button> -->
      
        <input class="search-bar" style="width:50%;" type="search" placeholder="Cerca su CIME" aria-label="Search">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Cerca</button>
      </form>

      <li> <a href="login.php">Login</a> <!-- collegamento ipertestuale con il sistema di login--></li>
      <li><a href="registrazione.php">Sign Up</a> <!-- collegamento ipertestuale con il sistema di registrazione--></li>

           <li class="nav__profilo">
            <div class="avatar">
                <img src="./immagini/....">
            </div>
            <ul>
            <li><a href="areautente.php">Area utente</a></li>
            <li><a href="logout.php">Logout</a></li>
            
    </ul>
    </div>
  </nav>
</header>



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

</body>
</html>