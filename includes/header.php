<?php
if (isset ($_GET['link'])){
}
$keuze = $_GET['link'];

?>




<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../index.html">
                <img src="img/logo_fan.jpg" width="30" height="30" class="d-inline-block align-top"
                    alt="Nathalie jochems" loading="lazy">
                Nathalie jochems
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <ul class="navbar-nav ml-auto">
               


                    <li class="nav-item">
                        <a href="index.php?link=overmij" class="nav-link"> OVER MIJ</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?link=hoehelpenwejou" class="nav-link"> HOE HELPEN WE JOU?</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?link=evenementen" class="nav-link"> EVENEMENTEN</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?link=blog" class="nav-link"> BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?link=galerij" class="nav-link"> GALERIJ</a>
                    </li>
                  
                    <li class="nav-item <?php if($keuze=="boeken"){echo ' active"';}?>"><a class="nav-link" href="index.php?link=boeken" class="nav-link">BOEKEN</a></li>


                    <li class="nav-item">
                        <a href="#contact" class="nav-link"> CONTACT</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav ml-auto">
                    <a href="https://www.linkedin.com/in/fancoach/" class="nav-link"><i
                            class="fa fa-linkedin fa-lg"></i></a>
                    <li>
                        <a href="https://www.facebook.com/fancoach.org/" class="nav-link"><i
                                class="fa fa-facebook fa-lg"></i></a>
                    <li>
                        <a href="https://www.instagram.com/nathaliejochems" class="nav-link"><i
                                class="fa fa-instagram  fa-lg"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>