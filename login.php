<!doctype html>
<html lang="en">
  <head>

      <?php 
include("connexion.php");
include("controlleri.php")
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

<style>
  .erreur{
    color: red;
    font-weight: bold;
  }

</style>
  <body> 

    <img src="bootstrap-5.3.2-dist/images/img2.JPG" alt="">


<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
             <img src="bootstrap-5.3.2-dist/images/img2.PNG"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />

            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form  action='<?php echo $_SERVER["PHP_SELF"]; ?>'method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">BNH</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" name="pseudoL" class="form-control form-control-lg"  />
                    <label class="form-label" for="form2Example17">Pseudo</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" name="passwordL" class="form-control form-control-lg"  />
                    <label class="form-label"  for="form2Example27">Password</label>
                  </div>

                     <?php 
                if (isset($erreur)) {
                  
                  echo "<div class='erreur'>$erreur</div>";
                }
                 ?>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" name="SendLogin" type="submit">Login</button>
                  </div>
                  </form>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php"
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <!-- <a href="#!" class="small text-muted">Privacy policy</a> -->
               
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




















    <script src="bootstrap-5.3.2-dist/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>