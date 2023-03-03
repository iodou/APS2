<?php
    include("connexion.php");

    function isValidMDP($mdp)
    {
      return preg_match('/^(?=.* ?[A-Z])(?=.* ?[a-z])(?=.* ?[0-9])(?=.* ?[;§!@?]).{12,}$/', $mdp); 
    }

    if(isset($_POST['id']) && (isset($_POST['mdp'])) && isValidMDP($_POST['mdp']))
    {
        $testmdpid = $connexion->prepare('SELECT mdp,identifiant from admin');
        $testmdpid->execute();
        $test = $testmdpid->fetchAll();
        $b1 = 0;
        $internauteId = $_POST['id'];
        $internauteMdp = $_POST['mdp'];
        foreach($test as $ligne)
        {
            if($_POST['id'] == $ligne["identifiant"] && $_POST['mdp'] == $ligne["mdp"])
            {
                header('Location: ../acceuilAdmin.php');
                $b1 = 1;
            }
            else{
                header('Location: ../front_end/connectAdmin.php');
            }
        }
    }
    
?>
