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
    
<div class="container mt-5">
    <!--creazione di un form semplice-->
    <form method="POST">
        <input type="text" name="title" placeholder="Blog Title" class="form-contol bg-dark text-white my-3 text-center">
        <textarea class="form-control bg-dark text-white my-3" name="content"></textarea>
        <button class="btn btn-dark"name="new_post">Add Post</button>
    </form>
</div>





</body>
</html>