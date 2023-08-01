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
<!--link collegamenti-->

<!--CSS-->
<link rel="stylesheet" href="stile.css">
<!-- libreria jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--CSS di Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384…" crossorigin="anonymous">
<!--JS di Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-…" crossorigin="anonymous"></script>
<!--JS di Bootbox-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.3/bootbox.min.js" integrity="sha512-…" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--CSS con le icone Font Awesome-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <title>Hompage</title>
</head>
<body>
    <header> <!--creazione contenitore header con all'interno la navbar - barra di navogazione-->
        <div class="header">
            <nav class="navbar navbar-dark bg-dark justify-content-between">
                <div class="container">
                    <a href="index.php"> <img src="" alt="" class="logo"> CIME</a>
                    <di class="search">
                        <input type="search" class="search-bar" placeholder="search..">
                        <a href="" class="btn btn-search btn-outline-light "> search</a>
                    </di>
                    <div class="login">
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
            <div class="col-4 d-flex justify-content-center align-items-center">
                <div class="card text-white bg-dark mt-5">
                    <div class="card-body" style="width: 18rem;">
                        <h5 class="card-title"> <?php echo $q['title']; ?></h5>
                        <p class="card-text">   <?php echo $q['content']; ?></p>
                        <a href="" class="btn btn-light"> Read More <span class="text-danger">&rarr;</span></a> <!--al posto del read more andrenno i rispettivi like e dislike-->
                    </div>
                </div>
            </div>
        <?php }?>
    </div>

</div>


</body>
</html>