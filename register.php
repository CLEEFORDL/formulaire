<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>register</title>
	<link rel="stylesheet" href="">

	 <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

      <?php 
include("connexion.php");
include("controlleri.php")
    ?>

</head>
<body>
	<style>
  .erreur{
    color: red;
    font-weight: bold;
    font-size: 22px;
    text-align: center;
  }
</style>

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

                 <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h3 fw-bold mb-0">Inscrivez vous pour devenir menbre</span>
                  </div>


    <?php 
                if (isset($erreur)) {
                  
                 echo "<div class='erreur'>$erreur</div>";

          }

             ?>
  </br>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="row g-3">

  <div class="form-check col-md-5">
    <span class="h6 fw-bold mb-0">Type de menbres</span>
  </div>

   <div class="form-check col-md-3">
    <input type="radio" class="form-check-input" id="validationFormCheck2" value="Lecteurs" name="type_m" spellcked>
    <label class="form-check-label" for="validationFormCheck2">Lecteurs</label>
  </div>
  <div class="form-check col-md-4">
    <input type="radio" class="form-check-input" id="validationFormCheck3" value="Auteurs" name="type_m" spellcked>
    <label class="form-check-label" for="validationFormCheck3">Auteurs</label>
     </div>

     <div class="col-md-6">
    <label for="validationServer01" class="form-label">Pseudo</label>
    <input type="text" class="form-control" id="validationServer01" name="pseudoi" value="<?php if(isset($pseudoi)) {
     echo $pseudoi;
    } ?>"  spellcked = "true">
      </div>
 <div class="col-md-6">
    <label for="validationServer01" class="form-label">Nom</label>
    <input type="text" class="form-control" id="validationServer01" name="nomi" value="<?php if(isset($nomi)) {
     echo $nomi;
    } ?>" spellcked>
      </div>

  <div class="col-md-6">
    <label for="validationServer01" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="validationServer01" name="prenomi" value="<?php if(isset($prenomi)) {
     echo $prenomi;
    } ?>"  spellcked>
      </div>

  <div class="col-md-6">
    <label for="validationServer02" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="validationServer02" name="adressei" value="<?php if(isset($adressei)) {
     echo $adressei;
    } ?>" spellcked>
      </div>

       <div class="col-md-6">
    <label for="validationServer01" class="form-label">Telephone</label>
    <input value="<?php if(isset($telephonei)) {
     echo $telephonei;
    } ?>" type="number" class="form-control" id="validationServer01" name="telephonei"  spellcked>
      </div>

  <div class="col-md-6">
    <label for="validationServer02" class="form-label">Email</label>
    <input type="text" class="form-control" id="validationServer02" name="emaili" value="<?php if(isset($emaili)) {
     echo $emaili;
    } ?>" emaili spellcked>
      </div>

       <div class="col-md-6">
    <label for="validationServer01" class="form-label">mot de passe</label>
    <input type="password" class="form-control" id="validationServer01" name="passwordi" spellcked>
      </div>

  <div class="col-md-6">
    <label for="validationServer02" class="form-label">Confirme mot de Passe</label>
    <input type="password" class="form-control" id="validationServer02" name="confirmpasswordi" spellcked>
      </div>

   <div class="form-check col-md-3">
    <span>Sexe</span>
  </div>

  <div class="form-check col-md-5">
    <input class="form-check-input" type="radio" name="radios" value="Masculin" id="flexRadioDefault1" checked>
    <label class="form-check-label" for="flexRadioDefault1">Masculin</label>
  </div>
  <div class="form-check col-md-4">
    <input class="form-check-input" type="radio" name="radios" value="Feminin" id="flexRadioDefault2">
    <label class="form-check-label" for="flexRadioDefault2">Féminin</label>
  </div> 
  
    <div class="form-outline mb-4">
                    <input type="file" id="imageInput" class="form-control form-control-lg" accept="image/*" name="imagei"  />
                    <img id="imagePreview" src="#" alt="Image Preview">
                  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit" name ="SendInscrit" >Submit form</button>
  </div>
              


</form>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;"> Do You have an account? <a href="login.php"
                      style="color: #393f81;">Login here</a></p>
                  <!-- <a href="#!" class="small text-muted">Terms of use.</a> -->
                  <!-- <a href="#!" class="small text-muted">Privacy policy</a> -->       


 <style>
 	#imagePreview {
      max-width: 50%;
      max-height: 100px;
      margin-top: 20px;
      display: flex;
     /* flex-direction: column;
      align-items: center;
      height: 100vh;
      margin-right: 90;*/
  }
 </style>

 <script>
    document.getElementById('imageInput').addEventListener('change', function(e) {
      var fileReader = new FileReader();
      
      fileReader.onload = function(e) {
        document.getElementById('imagePreview').src = e.target.result;
      };
      
      fileReader.readAsDataURL(e.target.files[0]);
    });
  </script>

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