 <!-- CONTACT PAGINA-->


    <section id="contactpagina" name="contactpagina">
        <div class="py-5">
             <div class="container mt-5">
                <div class="row">
                    <div class="col-md-3 col-lg-offset-1">
                        <img src="img/coach_nathalie2.jpg" class="img-fluid mt-2" alt="Nathalie Jochems">

                       
                            <h2>Contact</h2>
                            <h5>Nathalie Jochems</h5>
                            <p>Driedostraat 9 </br>
                            2300 Turnhout</p>
                            <p>Tel +32 497/54 36 66</p>
                           
                                <p>
                                        <a style="color: #555; padding-right:0.5em;" href="https://www.linkedin.com/in/fancoach/"><i
                                                    class="fa fa-linkedin fa-lg"></i></a>

                                        <a style="color: #555; padding-right:0.5em;" href="https://www.facebook.com/fancoach.org/"><i
                                                class="fa fa-facebook fa-lg"></i></a>

                                        <a style="color: #555; padding-right:0.5em;" href="https://www.instagram.com/nathaliejochems"><i
                                                class="fa fa-instagram  fa-lg"></i></a>
                                </p>
                    </div>
                    <div class="col-md-9">
                        <form id="contactForm">


                            <div class="row mt-4">
                                <h3>Nieuwe gebruiker toevoegen</h3>
                                <form action="includes/signup.inc.php" method="post">
                                    <input type="text" name="uid" placeholder="Username">
                                    <input type="text" name="mail" placeholder="E-mail">
                                    <input type="password" name="pwd" placeholder="Password">
                                    <input type="password" name="pwd-repeat" placeholder="Repeat password">
                                    <button type="submit" name="signup-submit">signup</button>
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

 <!-- start nieuwe contact form -->

                        <div class="row mt-4">
                            <h3>Contact</h3>
                                <form action="includes/signup.inc.php" method="post">
                                    <input type="text" name="voornaam" placeholder="voornaam">
                                    <input type="text" name="achternaam" placeholder="achternaam">
                                    <input type="text" name="email" placeholder="email">
                                    <input type="text" name="boodschap" placeholder="boodschap">
                                   
                                    <button type="submit" name="signup-submit">signup</button>
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
<!-- einde nieuwe contact form -->











                                <!-- originele contact form -->
                                    <div class="row">

                                        <div class="col-md-9">
                                            <div class="form-group">
                    
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                                <div class="help-block with-errors"></div>
                                            </div>                                 
                                        </div>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                                <div class="help-block with-errors"></div>
                                            </div> 
                                        </div>
                            
                                        <div class="col-md-9">
                                            <div class="form-group"> 
                                                <textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="submit-button text-center">
                                                <button class="btn btn-success btn-sm" id="submit" type="submit">Send Message</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                                <div class="clearfix"></div> 
                                            </div>
                                        </div>
                                    </div>            
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






 <!--

    <section id="contact" name="contact">
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 ">
                        <h2>Contact</h2>
                        <h5>Nathalie Jochems</h5>
                        <p>Driedostraat 9 </br>
                           2300 Turnhout</p>
                        <p>Tel +32 497/54 36 66</p>
                        <a href="https://www.linkedin.com/in/fancoach/" class="nav-link"><i
                                    class="fa fa-linkedin fa-lg"></i></a>

                        <a href="https://www.facebook.com/fancoach.org/" class="nav-link"><i
                                class="fa fa-facebook fa-lg"></i></a>

                        <a href="https://www.instagram.com/nathaliejochems" class="nav-link"><i
                                class="fa fa-instagram  fa-lg"></i></a>
                    </div>      
               



                    <div class="col-md-9">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>                                 
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div> 
                                </div>
                                
                                <div class="col-md-9">
                                    <div class="form-group"> 
                                        <textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                        <div class="clearfix"></div> 
                                    </div>
                                </div>
                            </div>            
                        </form>
                    </div>
			
			
        
		
			
				

 End Contact 


    <script src="js/jquery.mapify.js"></script>
	
	<script>
		$('.map-full').mapify({
			points: [
				{
					lat: 50.789250,
					lng: 4.583180,
					marker: true,
					title: 'Ons restaurant',
					infoWindow: 'Yamifood Restaurant'
				}
			]
		});	
	</script>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
