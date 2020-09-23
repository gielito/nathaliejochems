 <!-- ADMIN EVENEMENTEN -->
   


 <!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nathalie jochems</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700"
        rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
</head>


<body>



 <!-- ADMIN EVENEMENTENLIJST -->
    <!-- <a name="over-mij"></a> -->
    <?php include('includes/Database.php'); ?>
    <section id="eventlist" name="eventlist">
        <div class="py-5">
            <div class="container mt-5">
                <div class="row">
                 
                    <div class="col-md-12">
                    <?php //var_dump ($_GET['eventedit']);
                                    if (isset($_GET['eventedit'])){
                                        $editevent=$_GET['eventedit'];
                                    //echo $editevent;
                                        if ($editevent=="succes"){
                                            echo '<div class="alert alert-success mt-3" role="alert">
                                                    Het evenement is succesvol aangepast!
                                                    </div>'; } } else{
                                                        echo 'niet ok';
                                                    }
                                ?>
                        <h5>admin > evenementenlijst tonen</h5>
                        <div class="row">   
                            
                            <a href="http://localhost/nathaliejochems/includes/login.inc.php" target="_parent "class="nav-link">Terug naar admin overzicht >></a>
                        
                            <a href="http://localhost/nathaliejochems/index.php?link=overmij" target="_parent "class="nav-link">Terug naar de website >></a>
                        </div>
                                 <hr>

                                <div class="row mt-4"> 
                                
                                <h3>Evenement aanpassen</h3>
                               

                              <!-- $lijstid=$database->query("SELECT id FROM evenementen WHERE actief=1"); 
                                    echo  '<h6>'.$lijstid.'</h6>
                                    -->
                                
                                
                                <!-- start lijst EVENEMENTEN -->
                                <?php
                                        $lijst=$database->query("SELECT * FROM evenementen WHERE actief=1");
                                        //var_dump($lijst);
                                        //var_dump (mysqli_fetch_assoc($lijst));
                                                foreach (mysqli_fetch_all($lijst) as $rij){
                                                    $id = $rij[0];
                                                    $datum = $rij[1];
                                                    $titel = $rij[2];
                                                    $omschrijving = $rij[3];
                                                    $aantalplaatsen = $rij[4];
                                                    $deadlineinschrijving = $rij[5];
                                                //var_dump ($rij);
                                                
                                        echo' 
                                            <div class="col-md-9">
                                                <h6>Evenement '.$id.'</h6>
                                                <h4>'.$titel.'</h4>
                                                <h6>'.$datum.'</h6>

                                                <p>'.$omschrijving.'</p>
                                                <p>Aantal plaatsen: <b>'.$aantalplaatsen.'</b></p>
                                                <p>Inschrijving mogelijk tem: <b>'.$deadlineinschrijving.'</b></p>
                                              <a href="evenementAanpassen.php?id='.$id.'"><button> Evenement '.$id.' aanpassen </button></a>
                                                
                                                <hr>
                                                </div>';
                                                    }                                            
                                                   
                        ?> 

                        <?php mysqli_close($database->connection);?> 


                                </div>

                      

                    </div>







                    </div>
                </div>
            </div>
        </div>
    </section>







 <!-- END ADMIN EVENEMENTEN -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js "
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js "
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous ">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js "
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous ">
    </script>

    <script>
        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());
    </script>
</body>

</html>
