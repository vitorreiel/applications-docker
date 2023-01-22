<?php
   require_once("php/funcoes.php");    
   if (empty($_SESSION['user'])) {
      redirect('login.php');
   }
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/pag_inicial.css" media="screen">
    <link rel="icon" href="images/icon/1.gif" type="image/gif">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <script type="text/javascript" src="js/style.js"></script>
    <meta name="generator" content="Nicepage 3.10.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <script type="application/ld+json">{
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "url": "index.html",
      "logo": "images/default-logo.png"
      }
    </script>
    <meta property="og:title" content="Página Inicial">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body data-home-page="Página-Inicial.html" data-home-page-title="Página Inicial" class="u-body">
    <header class="u-clearfix u-header u-header" id="sec-579d">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p></p>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            </a>
          </div>
          <form method="GET">
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
              <input type="submit" name="sair" id="btn_sair" style="display: none">
              <li class="u-nav-item"><label for="btn_sair"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 20px;">Sair</a></label></li>
            </ul>
          </div>    
          </form>  
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                  <li class="u-nav-item"><a class="u-button-style u-nav-link">Sair</a></li>
                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>       
        </nav>
      </div>
    </header>   
    <section class="u-clearfix u-section-1" id="sec-f9ee">
      <div style="position: absolute; padding-left: 80%;" class="f3">
        <input type="submit" name="sair" id="btn_sair" style="display: none">
        <li class="u-nav-item"><label for="btn_sair"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base">Sair</a></label></li>
      </div>     
      <p></p>
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-text u-text-1">Meu lugar Geek.</h2>
        <p></p>
        
      <div class="">
        <div class="u-form-group u-form-submit u-form-group-2 rlx">
          <a data-toggle="modal" data-target="#exampleModal" class="u-border-2 u-border-grey-90 u-btn u-btn-submit u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">Criar</a>
        </div>
      <div>


        <div class="u-form u-form-1">
          <form  method="GET" class="u-clearfix u-form-horizontal-123 u-form-spacing-15 u-inner-form" style="padding: 15px" source="custom">
            <div class="u-form-group u-form-name u-form-group-1">
              <label for="name-558c" class="u-form-control-hidden u-label">Name</label>
              <input type="text" placeholder="Pesquisar por nome" id="pesquisar" name="pesquisa"class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-group u-form-submit u-form-group-2">
              <a href="#" class="u-border-2 u-border-grey-90 u-btn u-btn-submit u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">Procurar</a>
              <input type="submit" disabled="true" name="btn_pesq" value="submit" class="u-form-control-hidden">
            </div>
          </form>
        </div>
        <select class="u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-2 filtro" id='status' onChange="console.log(this.value)">
          <option disabled selected>Status</option>
          <option value="assistindo">Assistindo</option>
          <option value="assistiu">Assistiu</option>
          <option value="em Lobby">em Lobby</option>
          <option value="abandonou">Abandonou</option>
          Status&nbsp;
          <span class="u-icon u-text-palette-1-dark-2 u-icon-1" data-animation-name="swing" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
            <svg class="u-svg-content" viewBox="0 0 490.677 490.677" x="0px" y="0px" style="width: 1em; height: 1em;">
              <path d="M489.272,37.339c-1.92-3.307-5.44-5.333-9.259-5.333H10.68c-3.819,0-7.339,2.027-9.259,5.333    c-1.899,3.307-1.899,7.36,0.021,10.667l234.667,405.333c1.899,3.307,5.419,5.333,9.237,5.333s7.339-2.027,9.237-5.333 L489.251,48.005C491.149,44.72,491.149,40.645,489.272,37.339z"></path>
            </svg>
            <img>
          </span>
        </select>
        <select class="u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-3 filtro"  id ='categoria'onChange="console.log(this.value)">
          <option disabled selected>Categoria</option>
          <option value="aventura">Aventura</option>
          <option value="ação">Ação</option>
          <option value="comedia">Comédia</option>
          <option value="drama">Drama</option>
          <option value="ecchi">Ecchi</option>
          <option value="escolar">Escolar</option>
          <option value="esporte">Esporte</option>
          <option value="fantasia">Fantasia</option>
          <option value="harém">Harém</option>
          <option value="isekai">Isekai</option>
          <option value="josei">Josei</option>
          <option value="mistério">Mistério</option>
          <option value="policial">Policial</option>
          <option value="romance">Romance</option>
          <option value="scifi">Sci-fi</option>
          <option value="seinen">Seinen</option>
          <option value="shojo">Shōjo</option>
          <option value="shounen">Shounen</option>
          <option value="sobrenatural">Sobrenatural</option>
          <option value="Terror">Terror</option>
          Categoria&nbsp;
          <span class="u-icon u-text-palette-1-dark-2 u-icon-2">
            <svg class="u-svg-content" viewBox="0 0 490.677 490.677" x="0px" y="0px" style="width: 1em; height: 1em;">
              <path d="M489.272,37.339c-1.92-3.307-5.44-5.333-9.259-5.333H10.68c-3.819,0-7.339,2.027-9.259,5.333    c-1.899,3.307-1.899,7.36,0.021,10.667l234.667,405.333c1.899,3.307,5.419,5.333,9.237,5.333s7.339-2.027,9.237-5.333 L489.251,48.005C491.149,44.72,491.149,40.645,489.272,37.339z"></path>
            </svg>
            <img>
          </span>
        </select>
        <select class="u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-4 filtro" id='tipo' onChange="console.log(this.value)">
          <option disabled selected>Tipo</option>
          <option value="<i>Anime</i>">Anime</option>
          <option value="<i>Mangá</i>">Mangá</option>
          <option value="<i>HQ</i>">HQ</option>
          <option value="<i>Livro</i>">Livro</option>
          <option value="<i>Série</i>">Série</option>
          <option value="<i>Filme</i>">Filme</option>
          Tipo&nbsp;
          <span class="u-icon u-text-palette-1-dark-2 u-icon-3">
            <svg class="u-svg-content" viewBox="0 0 490.677 490.677" x="0px" y="0px" style="width: 1em; height: 1em;">
              <path d="M489.272,37.339c-1.92-3.307-5.44-5.333-9.259-5.333H10.68c-3.819,0-7.339,2.027-9.259,5.333    c-1.899,3.307-1.899,7.36,0.021,10.667l234.667,405.333c1.899,3.307,5.419,5.333,9.237,5.333s7.339-2.027,9.237-5.333 L489.251,48.005C491.149,44.72,491.149,40.645,489.272,37.339z"></path>
            </svg>
            <img>
          </span>
        </select>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="carousel_c29d">
         <div class="u-clearfix u-sheet u-sheet-1">
            <!-- div que vai receber a tabela dos dados automaticamente -->
            <div class="u-expanded-width u-list u-repeater u-list-1" id="tabela">
            </div>
            <p style="padding-top: 100px"></p>
         </div>
      </section>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-fd72">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Editado e aprimorado com a ajuda de amigos, para ser utilizado como forma de organização. Todos os Direitos autorais aos devidos criadores.</p>
      </div>
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
      <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/" target="_blank">
      <span>Website Builder Software</span>
      </a>. 
    </section>




    <!-- CADASTRANDOOO !-->
    <?php if (!empty($allUsuarios)) { ?>
    <div class="modal fade quente2" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="u-text u-text-1" style="font-weight: bold" id="">Cadastrando...</h4>
          <i class="fechar" title="Fechar" data-dismiss="modal" aria-label="Close">x</i>
        </div>
        
        <div class="modal-body">
          <div class="u-form-group u-form-name u-form-group-1">
            <input type="hidden" name="idUsuario" value="<?=$allUsuarios['0']['id']?>">
            <label for="name-558c" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Nome da obra" id="" name="nomeAnime" class="u-border-1 u-border-grey-30 u-input-cof u-input-rectangle" required="">

            <p></p>

            <select class="u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-4" onChange="console.log(this.value)" name="tipoAnime" style="margin-left: 14.5%">
              <option disabled selected>Tipo</option>
              <option value="<i>Anime</i>">Anime</option>
              <option value="<i>Mangá</i>">Mangá</option>
              <option value="<i>HQ</i>">HQ</option>
              <option value="<i>Livro</i>">Livro</option>
              <option value="<i>Série</i>">Série</option>
              <option value="<i>Filme</i>">Filme</option>
              Tipo&nbsp;
              <span class="u-icon u-text-palette-1-dark-2 u-icon-3">
                <svg class="u-svg-content" viewBox="0 0 490.677 490.677" x="0px" y="0px" style="width: 1em; height: 1em;">
                  <path d="M489.272,37.339c-1.92-3.307-5.44-5.333-9.259-5.333H10.68c-3.819,0-7.339,2.027-9.259,5.333    c-1.899,3.307-1.899,7.36,0.021,10.667l234.667,405.333c1.899,3.307,5.419,5.333,9.237,5.333s7.339-2.027,9.237-5.333 L489.251,48.005C491.149,44.72,491.149,40.645,489.272,37.339z"></path>
                </svg>
                <img>
              </span>
            </select>

            <p></p>

            <select class="u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-3" onChange="console.log(this.value)" name="categoriaAnime" style="margin-left: 14.5%">
              <option disabled selected>Categoria</option>
              <option value="aventura">Aventura</option>
              <option value="ação">Ação</option>
              <option value="comedia">Comédia</option>
              <option value="drama">Drama</option>
              <option value="ecchi">Ecchi</option>
              <option value="escolar">Escolar</option>
              <option value="esporte">Esporte</option>
              <option value="fantasia">Fantasia</option>
              <option value="harém">Harém</option>
              <option value="isekai">Isekai</option>
              <option value="josei">Josei</option>
              <option value="mistério">Mistério</option>
              <option value="policial">Policial</option>
              <option value="romance">Romance</option>
              <option value="scifi">Sci-fi</option>
              <option value="seinen">Seinen</option>
              <option value="shojo">Shōjo</option>
              <option value="shounen">Shounen</option>
              <option value="sobrenatural">Sobrenatural</option>
              <option value="Terror">Terror</option>
              Categoria&nbsp;
              <span class="u-icon u-text-palette-1-dark-2 u-icon-2">
                <svg class="u-svg-content" viewBox="0 0 490.677 490.677" x="0px" y="0px" style="width: 1em; height: 1em;">
                  <path d="M489.272,37.339c-1.92-3.307-5.44-5.333-9.259-5.333H10.68c-3.819,0-7.339,2.027-9.259,5.333    c-1.899,3.307-1.899,7.36,0.021,10.667l234.667,405.333c1.899,3.307,5.419,5.333,9.237,5.333s7.339-2.027,9.237-5.333 L489.251,48.005C491.149,44.72,491.149,40.645,489.272,37.339z"></path>
                </svg>
                <img>
              </span>
            </select>

            <p></p>

            <select class="u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-2" onChange="console.log(this.value)" name="statusAnime" style="margin-left: 14.5%;">
              <option disabled selected>Status</option>
              <option value="<b style='color: #33cc33'>assistindo</b>">Assistindo</option>
              <option value="<b style='color: #ffaf00'>assistiu</b>">Assistiu</option>
              <option value="<b style='color: #b30059'>em Lobby</b>">em Lobby</option>
              <option value="<b style='color: #cc0000'>abandonou</b>">Abandonou</option>
              Status&nbsp;
              <span class="u-icon u-text-palette-1-dark-2 u-icon-1" data-animation-name="swing" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
                <svg class="u-svg-content" viewBox="0 0 490.677 490.677" x="0px" y="0px" style="width: 1em; height: 1em;">
                  <path d="M489.272,37.339c-1.92-3.307-5.44-5.333-9.259-5.333H10.68c-3.819,0-7.339,2.027-9.259,5.333    c-1.899,3.307-1.899,7.36,0.021,10.667l234.667,405.333c1.899,3.307,5.419,5.333,9.237,5.333s7.339-2.027,9.237-5.333 L489.251,48.005C491.149,44.72,491.149,40.645,489.272,37.339z"></path>
                </svg>
                <img>
              </span>
            </select>

            <p></p>

            <label for="name-558c" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Avaliação" name="avaliacaoAnime" class="u-border-1 u-border-grey-30 u-input-cof u-input-rectangle">

            <p></p>

            <label for="name-558c" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Temporada" name="tamanhoAnime" class="u-border-1 u-border-grey-30 u-input-cof u-input-rectangle">

            <p></p>

            <input type="file" name="upload_file" id="upload_file" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" onclick="$('.file-upload-input').trigger( 'click' )">
            <label id="upload_btn" for="upload_file" style="padding-left: 125px" class="file-upload-btn"> <img src="images/padrao/add.png" class="file-upload-image quente" src="#" alt="your image" width="200px" height="200px" title="Selecione uma Imagem" /></label>

          </div>
        </div>        
        <div class="modal-footer">
          <label class="u-border-2 u-border-grey-90 u-btn u-btn-submit u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">
            <input type="submit" name="cadastrarAnime" style="display: none" value="oi">Cadastrar
          </label>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>



    <!-- EDITANDOOOOO !-->
  <div class="modal fade quente2" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h4  style="font-weight: bold" id="">Editando...</h4>
          <i class="fechar" title="Fechar" data-dismiss="modal" aria-label="Close">x</i>
        </div>
        
        <div class="modal-body">
          <div class="u-form-group u-form-name u-form-group-1">
            <input type="text" style="width: 100px; text-align: center; display: none;" name="id" id="id">
            <label for="name-558c" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Nome da obra" id="nomeAnime" name="nomeAnime" class="u-border-1 u-border-grey-30 u-input-cof u-input-rectangle" required="">

            <p></p>

            <select class="u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-4" onChange="console.log(this.value)" name="tipoAnime" id="tipoAnime" style="margin-left: 14.5%">
              <option disabled selected>Tipo</option>
              <option value="<i>Anime</i>">Anime</option>
              <option value="<i>Mangá</i>">Mangá</option>
              <option value="<i>HQ</i>">HQ</option>
              <option value="<i>Livro</i>">Livro</option>
              <option value="<i>Série</i>">Série</option>
              <option value="<i>Filme</i>">Filme</option>
              Tipo&nbsp;
              <span class="u-icon u-text-palette-1-dark-2 u-icon-3">
                <svg class="u-svg-content" viewBox="0 0 490.677 490.677" x="0px" y="0px" style="width: 1em; height: 1em;">
                  <path d="M489.272,37.339c-1.92-3.307-5.44-5.333-9.259-5.333H10.68c-3.819,0-7.339,2.027-9.259,5.333    c-1.899,3.307-1.899,7.36,0.021,10.667l234.667,405.333c1.899,3.307,5.419,5.333,9.237,5.333s7.339-2.027,9.237-5.333 L489.251,48.005C491.149,44.72,491.149,40.645,489.272,37.339z"></path>
                </svg>
                <img>
              </span>
            </select>

            <p></p>

            <select class="u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-3" onChange="console.log(this.value)" name="categoriaAnime" id="categoriaAnime" style="margin-left: 14.5%">
              <option disabled selected>Categoria</option>
              <option value="aventura">Aventura</option>
              <option value="ação">Ação</option>
              <option value="comedia">Comédia</option>
              <option value="drama">Drama</option>
              <option value="ecchi">Ecchi</option>
              <option value="escolar">Escolar</option>
              <option value="esporte">Esporte</option>
              <option value="fantasia">Fantasia</option>
              <option value="harém">Harém</option>
              <option value="isekai">Isekai</option>
              <option value="josei">Josei</option>
              <option value="mistério">Mistério</option>
              <option value="policial">Policial</option>
              <option value="romance">Romance</option>
              <option value="scifi">Sci-fi</option>
              <option value="seinen">Seinen</option>
              <option value="shojo">Shōjo</option>
              <option value="shounen">Shounen</option>
              <option value="sobrenatural">Sobrenatural</option>
              <option value="Terror">Terror</option>
              Categoria&nbsp;
              <span class="u-icon u-text-palette-1-dark-2 u-icon-2">
                <svg class="u-svg-content" viewBox="0 0 490.677 490.677" x="0px" y="0px" style="width: 1em; height: 1em;">
                  <path d="M489.272,37.339c-1.92-3.307-5.44-5.333-9.259-5.333H10.68c-3.819,0-7.339,2.027-9.259,5.333    c-1.899,3.307-1.899,7.36,0.021,10.667l234.667,405.333c1.899,3.307,5.419,5.333,9.237,5.333s7.339-2.027,9.237-5.333 L489.251,48.005C491.149,44.72,491.149,40.645,489.272,37.339z"></path>
                </svg>
                <img>
              </span>
            </select>

            <p></p>

            <select class="u-border-1 u-border-palette-1-light-1 u-btn u-btn-round u-button-style u-palette-1-light-3 u-radius-3 u-text-palette-1-dark-2 u-btn-2" onChange="console.log(this.value)" name="statusAnime" id="statusAnime" style="margin-left: 14.5%;">
              <option disabled selected>Status</option>
              <option value="<b style='color: #33cc33'>assistindo</b>">Assistindo</option>
              <option value="<b style='color: #ffaf00'>assistiu</b>">Assistiu</option>
              <option value="<b style='color: #b30059'>em Lobby</b>">em Lobby</option>
              <option value="<b style='color: #cc0000'>abandonou</b>">Abandonou</option>
              Status&nbsp;
              <span class="u-icon u-text-palette-1-dark-2 u-icon-1" data-animation-name="swing" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
                <svg class="u-svg-content" viewBox="0 0 490.677 490.677" x="0px" y="0px" style="width: 1em; height: 1em;">
                  <path d="M489.272,37.339c-1.92-3.307-5.44-5.333-9.259-5.333H10.68c-3.819,0-7.339,2.027-9.259,5.333    c-1.899,3.307-1.899,7.36,0.021,10.667l234.667,405.333c1.899,3.307,5.419,5.333,9.237,5.333s7.339-2.027,9.237-5.333 L489.251,48.005C491.149,44.72,491.149,40.645,489.272,37.339z"></path>
                </svg>
                <img>
              </span>
            </select>

            <p></p>

            <label for="name-558c" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Avaliação" id="avaliacaoAnime" name="avaliacaoAnime" class="u-border-1 u-border-grey-30 u-input-cof u-input-rectangle">

            <p></p>

            <label for="name-558c" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Temporada" id="tamanhoAnime" name="tamanhoAnime" class="u-border-1 u-border-grey-30 u-input-cof u-input-rectangle">
            <p></p>
            <input type="file" name="img" id="img" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" onclick="$('.file-upload-input').trigger( 'click' )">
            <label id="upload_btn" for="img" class="file-upload-btn" style="padding-left: 125px"> <img src="" id="img_editar" name="img_editar" class="file-upload-image quente" src="#" alt="your image" width="200px" height="200px" title="Selecione uma Imagem" /></label>

          </div>
        </div>        
        <div class="modal-footer">
          <div class="u-form-group u-form-submit u-form-group-2">
            <label class="u-border-2 u-border-grey-90 u-btn u-btn-submit" id="excluir"> 
            <input type="submit" name="excluir_anime" style="display: none" value="ex" >Excluir
            </label>
            <label class="u-border-2 u-border-grey-90 u-btn u-btn-submit" id="salvar">
            <input type="submit" name="editar_anime" style="display: none" value="ok" >Salvar
            </label>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>

  </body>
</html>
<script type="text/javascript">
  //funçao que vai listar automaticamente a tabela dos animes/obras sem precisar de refresh
  function listar(){

    $.ajax({
      url: "php/list.php",
      type: 'GET',
      data: {
        'listar':1, 
      },
      success: function (data) {
        $("#tabela").html(data);
      }
    });

  }
  function buscar() {
 
    if ($("#pesquisar").val()==""||$("#pesquisar").val()==null) {
     listar();
    }else{
      var filtro =$("input[name=filtro]:checked").val();
      var busca=$("#pesquisar").val();
      $.ajax({
        url: "php/list.php",
        type: 'GET',
        data: {
          'listar':1,
          'busca':busca,
        },
        success: function (data) {
          $("#tabela").html(data);
        } 
      });
    }
  }
  listar();
  $(document).ready(function(){
    //a cada telca digitada chama a funçao de busca
    $("#pesquisar").keyup(function() {
      buscar();
    });
    $(".filtro").change(function(){
      var tipo=$("#tipo").val();
      var categoria=$("#categoria").val();
      var status=$("#status").val();
       $.ajax({
        url: "php/list.php",
        type: 'GET',
        data: {
          'tipo':tipo,
          'categoria':categoria,
          'status':status,
     
        },
        success: function (data) {
          $("#tabela").html(data);
        } 
      });
    });
  });
</script>