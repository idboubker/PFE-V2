<?php 

//newsletter
if(isset($_POST['ok'])){
    $email= $_POST['email'];
    $sq = "INSERT INTO newspaper (email) VALUES ('$email')";

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
?>

<footer class="">
        <div class="container">
            <div class="row f-row" style="">
                <div class="col-md-5">
                    <div class="row ">
                        <div class="col-md-7 f-logo">
                            <img src="img/logo-white.png" alt=""><br>
                            <p>the biggest Moroccan craftsman's network</p>
                        </div>
                        <div class="col-md-5 f-menu">
                            <a href="">About Us</a><br>
                            <a href="">Contact</a><br>
                            <a href="">Terms & Conditions</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="row">
                    <div class="col-md-1 f-menu">
                            

                    </div>

                    <div class="col-md-12 f-wrap-mail">
                        <div><p>Subscribe to our newsletter</p></div>
                        <div class="f-mail">
                            <form action="" method="POST">
                            <input type="email" name="email" class="f-mail-term">
                            <input type="submit" name="ok" class="f-mail-button" value="Send">
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-3 f-logo f-menu">
                    <a href="">497 Evergreen Rd. Roseville, CA 95673</a><br>
                    <a href="">+44 345 678 903</a><br>
                    <a href="">adobexd@mail.com</a>
                </div>
            </div>
        </div>
    </footer>
    
   	<div class="container-fluid golden-footer">
	<div class="container ">
			<div class="row ">
				<span class="text-left col-6">&copy; Mou9ef.com 2019</span>
				<span class="text-right col-6">
					
							<span><a href=""><img src="img/f-instg.svg" alt=""></a></span>
							<span><a href=""><img src="img/f-twiter.svg" alt=""></a></span>
							<span><a href=""><img src="img/f-facebook.svg" alt=""></a></span>
						
				</span>
			</div>
		</div>
	</div>