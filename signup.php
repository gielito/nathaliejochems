
 <!-- signup-->
   


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



 <!-- SIGNUP NEW USER-->
    <!-- <a name="over-mij"></a> -->

    <section id="signup" name="signup">
        <div class="py-5">
            <div class="container mt-5">
                <div class="row">
                 
                    <div class="col-md-12">
                      
                        <h5>admin > gebruiker toevoegen</h5>
                        <div class="row">   
                            
                            <a href="http://localhost/nathaliejochems/includes/login.inc.php" target="_parent "class="nav-link">Terug naar admin overzicht >></a>
                        
                            <a href="http://localhost/nathaliejochems/index.php?link=overmij" target="_parent "class="nav-link">Terug naar de website >></a>
                        </div>
                        <hr>

                        <div class="row mt-4">
                            <h3>Nieuwe gebruiker toevoegen</h3>
                            <form action="includes/signup.inc.php" method="post">
                                <input type="text" name="uid" placeholder="Username">
                                <input type="text" name="mail" placeholder="E-mail">
                                <input type="password" name="pwd" placeholder="Password">
                                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                                <button type="submit" name="signup-submit">Signup</button>
    <div>
                            <?php if($_GET){
                                $signup=$_GET['signup'];
                                if ($signup=="success"){
                                    echo '<div class="alert alert-success mt-3" role="alert">
                                            Je gegevens zijn succesvol geregistreerd!
                                            </div>'; } }?>
    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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

















    