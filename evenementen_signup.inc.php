
<?php include('includes/Database.php'); ?>

<?php

if (isset($_POST['event-submit'])){
   
        $datum = $_POST['datum'];
        $titel = $_POST['titel'];
        $omschrijving = $_POST['omschrijving'];
        $aantalplaatsen = $_POST['aantalplaatsen'];
        $deadlineinschrijving = $_POST['deadlineinschrijving'];
        $actief = $_POST['actief'];

        $sql = "INSERT INTO evenementen (datum, titel, omschrijving, aantalplaatsen, deadlineinschrijving, actief) VALUES ('$datum ', '$titel', '$omschrijving', '$aantalplaatsen', '$deadlineinschrijving', '$actief.')";
       if($database->query($sql)){
            header("Location: evenementen_signup.php?EvenementToevoegen=success");
       }
            exit();  
    
    }
        
               mysqli_close($database->connection);

?>
