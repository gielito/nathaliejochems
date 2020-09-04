
 
 


 <!-- EVENEMENTEN -->
    <section id="evenementen" name="evenementen">
        <div class="py-5">
            <div class="container">
                <div class="row">
               

                        <!-- INSCHRIJVING FORMULIER EVENEMENTEN -->
                      
                        <h1>Vul hier je gegevens in om je in te schrijven op een van onze evenementen:</h1>
                
                    
                        <h2>Vul hier uw gegevens in</h2>
                        <form action="persoonlijk.php" method="post">
                        <table>
                            <tr>
                            <td>Naam:</td>
                            <td><input name="naam" type="text" value="<?php print $naam; ?>" /></td>
                            </tr>

                            <tr>
                            <td>Achternaam:</td>
                            <td><input name="naam" type="text" value="<?php print $achternaam; ?>" /></td>
                            </tr>
                        
                            <tr>
                            <td>Geslacht:</td>
                            <td><label><input name="geslacht" type="radio" value="m" <?php if ($Geslacht == "m") print "checked=\"checked\""; ?> />Man</label>
                                <label><input type="radio" name="geslacht" value="f" <?php if ($Geslacht == "f") print "checked=\"checked\""; ?> />Vrouw</label>
                            </td>
                            </tr>

                            <tr>
                            <td>Ik wil me inschrijven voor dit evenement:</td>
                            <td>
                                <select name="evenement">
                                <option value="Geen" <?php if ($evenement == "Geen") print "selected=\"selected\""; ?>>Geen</option>
                                <option value="event1" <?php if ($evenement == "event1") print "selected=\"selected\""; ?>>event1</option>
                                <option value="event2" <?php if ($evenement == "event2") print "selected=\"selected\""; ?>>event2</option>
                                <option value="event3" <?php if ($evenement == "event3") print "selected=\"selected\""; ?>>event3</option>
                                </select>
                            </td>
                            </tr>
                            <tr>
                            <td valign="top">Opmerking:</td>
                            <td><textarea name="opmerking"><?php print $opmerking; ?></textarea></td>
                            </tr>
                            <tr>
                            <td><input name="actie" type="hidden" value="controle" /></td>
                            <td><input name="" type="submit" value="Verzenden" /></td>
                            </tr>
                        </table>
                        </form>

                 


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
