
 <!-- ADMIN EVENEMENT AANPASSEN -->
   


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



 <!-- ADMIN EVENEMENT AANPASSEN -->
  

    <section id="signup" name="signup">
        <div class="py-5">
            <div class="container mt-5">
                <div class="row">
                 
                    <div class="col-md-12">
                      
                        <h5>admin > Evenement aanpassen</h5>
                        <div class="row">   
                            
                            <a href="http://localhost/nathaliejochems/includes/login.inc.php" target="_parent "class="nav-link">Terug naar admin overzicht >></a>
                        
                            <a href="http://localhost/nathaliejochems/index.php?link=overmij" target="_parent "class="nav-link">Terug naar de website >></a>
                        </div>
                        <hr>

                        <div class="row mt-4">
                            <h3>Evenement aanpassen</h3>
                     
                            <?php 
                            include('includes/Database.php'); 
                            if(isset($_GET['id'])){
                                $selectedId = $_GET['id'];
                                $sql = "SELECT * FROM evenementen WHERE id = $selectedId ";
                                $data = $database->query($sql);
                                
                                $evenementGegevens= mysqli_fetch_assoc($data);
                                var_dump($evenementGegevens);
                            }

                            //echo($selectedId);?>

                            <form action="evenementAanpassen.inc.php" method="post">
                                        <input type="date" name="datum" value="<?php echo $evenementGegevens['datum']?>">
                                        <input type="text" name="titel" value="<?php echo $evenementGegevens['titel']?>">
                                        <input type="text" name="omschrijving" value="<?php echo $evenementGegevens['omschrijving']?>">
                                        <input type="text" name="aantalplaatsen" value="<?php echo $evenementGegevens['aantalplaatsen']?>">
                                        <input type="date" name="deadlineinschrijving" value="<?php echo $evenementGegevens['deadlineinschrijving']?>">
                                        <input type="number" name="actief" value="<?php echo $evenementGegevens['actief']?>">
                                        <input type="text" name="id" value="<?php echo $selectedId?>" hidden>
                                
                                    <button type="submit" name="event-edit">EvenementAanpassen</button>
                                            <div>
                                               

                                              
                                            </div>
                            </form>
                        </div>

                        







                    </div>
                </div>
            </div>
        </div>
    </section>
