<?php 

//newsletter
if(isset($_POST['ok'])){


    $email= $_POST['email'];
    $em = "SELECT * FROM newspaper WHERE email LIKE '$email' ";
    $rslta = mysqli_query($link,$em);
    $sq = "INSERT INTO newspaper (email) VALUES ('$email')";


    if($email == ""){
        
    }
    else if(mysqli_num_rows($rslta)>0){
        echo '<script> 
        alert("Email exist déja!");
      </script>';
    }
    else{
        if(mysqli_query($link,$sq)){
            echo '<script> 
                    alert("Merci pour votre inscription à notre boite email");
                  </script>';
        }
        else {
            echo '<script> 
                    alert("Oops! L operation n a pas réussi");
                  </script>'; }
    }




    

    
}
?>

<footer class="">
        <div class="container">
            <div class="row f-row" style="">
                <div class="col-md-5">
                    <div class="row ">
                        <div class="col-md-7 f-logo">
                            <img src="img/logo-white.png" alt=""><br>
                            <p>L'ANNUAIRE GRATUIT DES ARTISANS EN MAROC</p>
                        </div>
                        <div class="col-md-5 f-menu">
                            <a href="about.php">Qui somes-nous?</a><br>
                            <a href="contact-us.php">Contact</a><br>
                          
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="row">
                    <div class="col-md-1 f-menu">
                            

                    </div>

                    <div class="col-md-12 f-wrap-mail">
                        <div><p>Abonnez-vous à notre newsletter</p></div>
                        <div class="f-mail">
                            <form action="" method="POST">
                            <input type="email" name="email" class="f-mail-term">
                            <input type="submit" name="ok" class="f-mail-button" value="Envoyer">
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-3 f-logo f-menu">
                  <a href="https://www.google.com/maps/@31.6400947,-8.0784167,21z">Marrakech, Maroc</a><br>
                    <a href="tel:+212 6 39 65 31 87">+212 6 39 65 31 87</a><br>
                    <a href="mailto:contact@mou9ef.com">contact@mou9ef.com</a>
                </div>
            </div>
        </div>
    </footer>
    
   	<div class="container-fluid golden-footer">
	<div class="container ">
			<div class="row ">
				<span class="text-left col-6">&copy; <a href="www.mou9ef.com" style="text-decoration:none; color:white;">mou9ef.com</a> 2019</span>
				<span class="text-right col-6">
					
							<span><a href="https://www.facebook.com/Mou9ef"><img src="img/f-instg.svg" alt=""></a></span>
							<span><a href="https://twitter.com/mou9ef"><img src="img/f-twiter.svg" alt=""></a></span>
							<span><a href="#"><img src="img/f-facebook.svg" alt=""></a></span>
						
				</span>
			</div>
		</div>
	</div>
	

