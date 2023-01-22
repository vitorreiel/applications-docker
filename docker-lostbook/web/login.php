<?php
   require_once("php/funcoes.php"); 
   if (!empty($_SESSION['user'])) {
      redirect('index.php');
   }
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/login.css" media="screen">
    <link rel="stylesheet" href="css/pag_inicial.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="images/icon/1.gif" type="image/gif">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.10.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i">
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/default-logo.png"
}</script>
    <meta property="og:title" content="Login">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body>
    <header>
      <video autoplay muted loop class="f1">
        <source src="images/fundo/a2.mp4" type="video/mp4">

      </video>
      <video autoplay muted loop class="f2">
        <source src="images/fundo/a7.mp4" type="video/mp4">
      </video>
      <section class="u-clearfix u-image u-section-1" src="" id="carousel_0a0b" data-image-width="4096" data-image-height="4096">
        <div class="u-clearfix u-sheet-cs u-valign-middle-lg u-valign-middle-xl u-sheet-1">
          <div class="u-align-left u-container-style u-group u-white u-group-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
              <h3 style="font-weight: bold">Hora de fazer login</h3>
              <div class="u-expanded-width u-form u-form-1">
                <form method="POST" class="u-clearfix u-form-spacing-27 u-inner-form" style="padding: 0px;">

                  <div class="u-form-group u-form-name u-form-group-1">
                    <label for="login" class="u-form-control-hidden u-label">Login</label>
                    <input type="text" placeholder="Login" id="login" name="login" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
                  </div>
                  <p></p> 

                  <div class="u-form-group u-form-name u-form-group-1">
                    <label for="senha" class="u-form-control-hidden u-label">Senha</label>
                    <input type="password" placeholder="Senha" id="senha" name="senha" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
                  </div>

                  <div class="modal-footer">
                    <label class="u-border-2 u-border-grey-90 u-btn u-btn-submit u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">
                      <input type="submit" name="f_login" style="display: none" value="ok">SUBMIT
                    </label>
                  </div>
                  <input type="hidden" value="" name="recaptchaResponse">
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
  </body>
</html>
