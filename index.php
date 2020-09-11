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

<main>
    <section id="signup" name="signup">
            <div class="py-5">
                <div class="container mt-5">
                    <div class="row">
                        <h3>Signup</h3>
                        <form action="includes/signup.inc.php" method="post">
                            <input type="text" name="uid" placeholder="Username">
                            <input type="text" name="mail" placeholder="E-mail">
                            <input type="password" name="pwd" placeholder="Password">
                            <input type="password" name="pwd-repeat" placeholder="Repeat password">
                            <button type="submit" name="signup-submit">Signup</button>
                        </form>

                    </div>
                </div>
            </div>
    </section>
</main>

<?php include('includes/footer.php'); ?>













    