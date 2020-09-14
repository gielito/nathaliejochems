<?php include('includes/head.php'); ?>




<?php include('includes/header.php'); ?>
<?php include('includes/Database.php'); ?>
    
<?php if (isset ($_GET['link'])){if($keuze=='overmij'){include('overmij.php');}}?>
<?php if (isset ($_GET['link'])){if($keuze=='hoehelpenwejou'){include('hoehelpenwejou.php');}}?>
<?php if (isset ($_GET['link'])){if($keuze=='evenementen'){include('evenementen.php');}}?>
<?php if (isset ($_GET['link'])){if($keuze=='blog'){include('blog.php');}}?>
<?php if (isset ($_GET['link'])){if($keuze=='galerij'){include('galerij.php');}}?>
<?php if (isset ($_GET['link'])){if($keuze=='boeken'){include('boeken.php');}}?>
<?php if (isset ($_GET['link'])){if($keuze=='contact'){include('contact.php');}}?>
<?php if (isset ($_GET['link'])){if($keuze=='signup'){include('signup.php');}}?>




<?php include('includes/footer.php'); ?>













    