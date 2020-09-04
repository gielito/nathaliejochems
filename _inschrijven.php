 
               
<?php
  if (isset($_POST['naam'])) {	// zijn er reeds gegevens?
    $naam = $_POST['naam'];
    $naam = $_POST['achternaam'];
    $wachtwoord = $_POST['wachtwoord'];
    $geslacht = $_POST['geslacht'];
    $kinderen = $_POST['kinderen'];
    $ouders = $_POST['ouders'];
    $evenement = $_POST['evenement'];
    $opmerking = $_POST['opmerking'];
    $actie = $_POST['actie'];
  }
?>

    
<!-- EVENEMENTEN -->
    <section id="inschrijvingEvents" name="inschrijvingEvents">
        <div class="py-5">
            <div class="container">
                <div class="row">
<h1>Vul hier je gegevens in om je in te schrijven op een van onze evenementen:</h1>
<?php
  if (isset($_POST['naam'])) {	// zijn er reeds gegevens?
    print "<h2>Deze gegevens heeft u doorgestuurd</h2>";
    print "<p>Naam: $naam<br />";
    print "<p>Achternaam: $achternaam<br />";
    print "Geslacht: $geslacht<br />";
    print "Rijbewijs: $evenement<br />";
    print "Opmerking: $opmerking<br />";
    print "Verborgen veld: $actie</p>";
  }
?>
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
      <td><label><input name="geslacht" type="radio" value="m" <?php if ($geslacht == "m") print "checked=\"checked\""; ?> />Man</label>
        <label><input type="radio" name="geslacht" value="f" <?php if ($geslacht == "f") print "checked=\"checked\""; ?> />Vrouw</label>
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

                </div>
            </div>
        </div>
    </section>
