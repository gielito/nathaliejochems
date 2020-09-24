
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
 <!-- juiste login inc code -->
<?php 
//if(isset($_POST['login-submit']))
//{

    require'dhb.inc.php';
    $mailuid = $_POST['mailuid'];
    $password= $_POST['pwd'];
    var_dump($_POST);

    if(empty($mailuid) || empty($password)){
        header("Location: ../index.php?link=overmij");
        exit();
          }

    else {
                $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../index.php?error=sqlerror");
                    exit();
                }
                    
                else {
                        mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);}

                        if ($row = mysqli_fetch_assoc($result))
                        {
                            $pwdCheck = password_verify($password, $row['pwdUsers']);
                            if ($pwdCheck == false)
                            {
                                header("Location: ../index.php?error=wrongpwd");
                                exit();
                            }
                            else if($pwdCheck == true) 
                            {
                                session_start();
                                $_SESSION['userId'] = $row['idUsers'];
                                $_SESSION['userId'] = $row['uidUsers'];

                                header("Location: ../index.php?login=success");
                                exit();
                            }
                            else
                            {
                                header("Location: ../index.php?error=wrongpwd");
                                exit();
                            }
                        }  
                            else {
                            header("Location: ../index.php?link=overmij");
                            exit();
                            }
                    

          }

//  }




?>












<body>



 <!-- ADMIN -->
    <!-- <a name="over-mij"></a> -->

    <section id="overmij" name="overmij">
        <div class="py-5">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-3 col-lg-offset-1">
                        <img src="../img/coach_nathalie2.jpg" class="img-fluid mt-2" alt="Nathalie Jochems">
                    </div>
                    <div class="col-md-9">
                        
                        <h5>Welkom op de admin pagina</h5>
                       

                        <div class="row mt-5"> 
                        
                        <div class="row mx-2">
                            <button class="btn btn-outline-primary btn-sm" type="button">
                            <a href="http://localhost/nathaliejochems/index.php?link=overmij" target="_parent ">Terug naar de website >></a></button>
                        </div>
                                    <form action="includes/logout.inc.php" method="post">
                                 
                                    <button  class="btn btn-secondary btn-sm" type="submit" name="logout-submit">
                                    <a href="http://localhost/nathaliejochems/index.php?link=overmij" target="_parent ">Logout
                                                                                
                                 
                                            </a>
                                    </button>
                                    </form>
                            </div>



                        <hr>
                        <h6>Wat wil je doen?</h6>
                        <div class="row my-2">
                            <button class="btn btn-outline-primary btn-sm" type="button">
                            <a href="../signup.php" target="_parent ">Gebruiker toevoegen >></a></button>
                        </div>

                        <div class="row my-2">
                            <button class="btn btn-outline-primary btn-sm" type="button">
                            <a href="../evenementen_signup.php" target="_parent ">Evenementen toevoegen >></a></button>
                        </div>
                        <div class="row my-2">
                            <button class="btn btn-outline-primary btn-sm" type="button">
                            <a href="../evenementen_lijst.php" target="_parent ">Evenementen overzicht >></a></button>
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