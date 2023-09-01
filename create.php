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

    <title>Create Post</title>
</head>
<body>

<!--CSS perchè non parte il collegamento con i l foglio-->
<style>
    .row{
        width: 100%;
        display: flex;
        align-items: center;  
    }

    .col-3{
        max-width: 300px;
        margin-right: 7%;
    }
    .form-contol{
        padding: 10px;
        border-radius: 20px;
        width: 100%;
    }

    .input_color{
        padding: 3px;
        border-radius: 5px;
    }

    .form-control{
        height: 200px;
    }
</style>
    
<!--creazione di un form semplice-->

<div class="container mt-5">
    <form method="POST">
        <div class="row">
            <div class="col-3">
                <input type="text" name="title" placeholder="Blog Title" class="form-contol bg-dark text-white my-3 text-center">
            </div>
            <div class="col-3">
                <h3>Scegli il colore per il tuo post</h3>
            </div>
            <div class="col-3">
                <input class="input_color" type="color" id="colore" required> <!--creazione input color con id "colore" -->
            </div>
        </div>
        <textarea class="form-control bg-dark text-white my-3" name="content"></textarea>
        <button class="btn btn-dark"name="new_post">Add Post</button>
    </form>
</div>

<script>
    $(document).ready(function() {
    $("#colore").on("change", () => { // quando il capo id=colore cambia, viene eseguita la funzione anonima.
      const col = $("#colore").val(); 
      //console.log("colore: "+col);
      // il valore di un campo input, type=color è una stringa di 7 caratteri che indica il colore (RGB) in formato esadecimale che inizia sempre con #
      // --> uso la funzione encodeURIComponent per sostituire # con la sua codifica %23 (altrimenti la HTTP request si confonde...)
      const col_ok = encodeURIComponent(col);
      const fetchPromise = fetch("logic.php?c="+col_ok); // invio una http request di tipo GET al server attraverso la funzione fetch, cchiedendo lo script contenuto in logic.pho passasndo il parametro c con il colore selezionato. 
      fetchPromise.then( (response) => { // quando arriva la risposta da parte del server viene consumata la promessa eseguenda la .then (contine un arrow function che come parametro la response)
          $("#card-title").css("background-color", col);
          return response.text(); // uso il return per stabilire una nuova promessa. 
      }) //controllo se la response è ok, in tal caso, imposto il colore. 
      .then( (data) => {
          $("#messaggio").html("<p>"+data+"</p><br /><br />");
      }) 
      // quando viene consumata la seconda promessa stampo il messaggio del server e lo inerisco nell'elemento DOM con id="messaggio"
      .catch( (error) => {
          // stampo l'errore sulla console e sulla pagina (N.B. sulla pagina, solo in fase di sviluppo!)
          console.log(error.message);
          $("messaggio").html(error.message);
      });
    }); //onchange
  }); //ready
</script>




</body>
</html>