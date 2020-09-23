
<?php include('includes/Database.php'); ?>

<?php

if (isset($_POST['event-edit'])){
   
        $datum = $_POST['datum'];
        $titel = $_POST['titel'];
        $omschrijving = $_POST['omschrijving'];
        $aantalplaatsen = $_POST['aantalplaatsen'];
        $deadlineinschrijving = $_POST['deadlineinschrijving'];
        $actief = $_POST['actief'];
        $id=$_POST['id'];

        $sql = "UPDATE evenementen SET datum='$datum', titel='$titel', omschrijving='$omschrijving', aantalplaatsen=$aantalplaatsen, deadlineinschrijving='$deadlineinschrijving', actief=$actief WHERE id = $id";
        echo $sql;
       if($database->query($sql)){
            header("Location: evenementen_lijst.php?eventedit=succes");
       }
            exit();  
    
    }
        
               mysqli_close($database->connection);

?>
