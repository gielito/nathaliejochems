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
                            $registratie=false;
                            if($_SERVER["REQUEST_METHOD"] == "POST"){
                            $sVoornaam        =    ($_POST['voornaam']);
                            $sAchternaam      =    ($_POST['achternaam']);
                            $sEvenement       =    ($_POST['evenement']);
                            
                            $query="INSERT INTO formulierEvents (voornaam, achternaam, evenement) VALUES ('".$sVoornaam."', '".$sAchternaam."', '".$sEvenement."');" ;
                            if($database->query($query)){$registratie=true;}
           
                            }
                        // }
                        //else
                        //  {
                        ?>


                        
            <div class="container">
                        <form action=" <?$_SERVER['PHP_SELF']?> " method="POST">
                            <div class="form-group">
                                <div class="row"><label for="voornaam"> Voornaam: </label><input type="text" name="voornaam"></div>
                                <div class="row"><label for="achternaam">Achternaam:</label> <input type="text" name="achternaam"></div>
                                <div class="row"><label for="evenement"> Evenement:</label> 
                                
                                <select name="evenement">
                                    <?php   
                                        $lijst=$database->query("SELECT * FROM evenementen WHERE actief=1");
                                    ?>
                                                    <option value="">--Kies een evenement--</option>
                                                    <?php foreach (mysqli_fetch_all($lijst) as $rij){
                                                        echo '<option value="'. $rij[0].'">'.$rij[2].'</option>';}?>
                                                    
                                </select>
                                </div>
                                <div class="row"><button class="btn btn-primary"  type="submit" name="verzenden" value="verzenden">Verzenden</button>

                             <?php  if ($registratie==true){echo '<div class="alert alert-success" role="alert">
                            Je gegevens zijn succesvol geregistreerd!
                        </div>'; } ?>
                               </div>
                            </div>
                        </form>  
                        
                </div>
            </div>
            </div>
        </div>
    </section>
<?
 // }
?>
                     

                        <!-- EINDE INSCHRIJVING FORMULIER EVENEMENTEN -->

        <?php
                $lijst=$database->query("SELECT * FROM evenementen WHERE actief=1");
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
