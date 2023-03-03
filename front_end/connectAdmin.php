<?php
session_start();
include("../back_end/connexion.php");
 ?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Administrateur</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <link href="assets/css/main.css" rel="stylesheet" type="text/css"> 

</head>

<body>

<div class="container" id="containerConversion">
    <div class= "row">
        <h3>Connexion d'un administrateur</h3>
    </div>
    <form class="form" action="../back_end/testco.php" method="POST">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-3">
                    <label for="id"> Identifiant :</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="id"  required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <label for="mdp"> Mot de passe :</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="mdp"  required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 text-right">
                <input type="submit" id="connexion" value="Connexion">
            </div>
        </div>
        
        
    </form>
</div>
        
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>