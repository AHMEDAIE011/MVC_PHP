<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Form</title>

    <!-- STYLE LINK -->
    <link rel="stylesheet" href="<?= PATH; ?>/site/css/login.css">
    <!-- STYLE LINK -->

    <!-- FONT AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- FONT AWESOME CDN -->
</head>
<body>


    <div class="signup" style="background-image: url(<?= PATH; ?>/site/images/bac.png);">
        <div class="signup-box">
            <div class="image">
                <img src="  <?= PATH; ?>/site/images/signup-img.png" alt="">
            </div>

            <form action="postlogin" method="post">
                <h3>Sign up</h3>
                <p>Sign up now and access to exclusive content!</p>

                

                <div class="inp">
                    <input type="email"  name="email" placeholder="Email" class="form-control" required>
                </div>

                <div class="inp">
                    <input type="password" name="password"  placeholder="Password" class="form-control" required>
                </div>

                <button type="submit" >Sign up</button>
                <p id="p">By clicking on sign up, you agree to our terms and services and privacy policy.</p>
               <h3 id="h3">Sign up With!</h3>

               <div class="icons">
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-solid fa-envelope"></i>
                <i class="fa-brands fa-instagram"></i>
               </div>

               
            </form>

        </div>
    </div>

    
</body>
</html>