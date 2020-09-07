

 


 <!-- EVENEMENTEN -->
    <section id="evenementen" name="evenementen">
        <div class="py-5">
            <div class="container">
                <div class="row">
               

                        <!-- INSCHRIJVING FORMULIER EVENEMENTEN--> 
                      
                        <h4>Vul hier je gegevens in om je in te schrijven op een van onze evenementen:</h4>
                      
                     

                       
                        <?php


//if(isset($_POST['verzenden']))
 // {
     if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sVoornaam        =    addslashes($_POST['voornaam']);
    $sAchternaam      =    addslashes($_POST['achternaam']);
    
    $query="INSERT INTO formulierEvents (voornaam, achternaam) VALUES ('".$sVoornaam."', '".$sAchternaam."');" ;
    $database->query($query);
    echo 'Je gegevens zijn succesvol in de database geplaatst';
     }
 // }
//else
//  {
?>

                        <form action=" <?$_SERVER['PHP_SELF']?> " method="POST">
                            Voornaam: <input type="text" name="voornaam"><br />
                            Achternaam: <input type="text" name="achternaam"><br />
                            <input type="submit" name="verzenden" value="verzenden">
                        </form>               
                </div>
            </div>
        </div>
    </section>
<?
 // }
?>
                     

                 


                        <!-- EINDE INSCHRIJVING FORMULIER EVENEMENTEN -->

        <?php
                $lijst=$database->query("SELECT * FROM evenementen");
                //var_dump($lijst);
                //var_dump (mysqli_fetch_assoc($lijst));
                        foreach (mysqli_fetch_all($lijst) as $rij){
                            $datum = $rij[1];
                            $titel = $rij[2];
                            $omschrijving = $rij[3];
                            $aantalplaatsen = $rij[4];
                            $deadlineinschrijving = $rij[5];
                        //var_dump ($rij);
                        
                 echo' 
                    <div class="col-md-9">
                        <h4>'.$titel.'</h4>
                        <h6>'.$datum.'</h6>

                        <p>'.$omschrijving.'</p>
                        <p>Aantal plaatsen: <b>'.$aantalplaatsen.'</b></p>
                        <p>Inschrijving mogelijk tem: <b>'.$deadlineinschrijving.'</b></p>
                        <hr>
                    </div>';
                        }

                    ?>

                </div>
            </div>
        </div>
    </section>
