<?php

   include("../include_dao.php");
   $dao = new AnimeDAO();

  if (isset($_GET['listar'])) {
    if (isset($_GET['busca'])) {
      $animes = $dao->buscar($_GET['busca']);
    }else{
      $animes = $dao->listarTodosOrgenandoPor();    
    }

  if (empty($animes)) {
    echo "<div class='u-container-style'><h6 class='u-text u-text-2'>Não foi encontrado nada com esse nome </h6><p></p><h1>:/</h1></div>";
  }else{

?>

<?php foreach ($animes as $anime) { ?>
<div class="u-container-style u-list-item u-repeater-item u-list-item-1 col-sm-12">
   <div class="u-container-layout u-similar-container u-valign-top-sm u-container-layout-1">
      <img src="images/<?=$anime['img']?>" alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="2250" data-image-height="1500"> 
      <div class="u-align-center u-container-style u-group u-white u-group-1">
         <div class="u-container-layout u-container-layout-2">
            <center>
               <h4 class="u-text u-text-1"><?=$anime['nome']?></h4>
            </center>
            <input type="hidden" name="idUsuario2" value="<?=$allUsuarios['0']['id']?>">
            <h6 class="u-text u-text-2">Tipo: <?=stripslashes($anime['tipo'])?></h6>
            <h6 class="u-text u-text-2">Categoria: <?=$anime['categoria']?></h6>
            <h6 class="u-text u-text-2">Status: <?=stripslashes($anime['status'])?></h6>
            <h6 class="u-text u-text-2">Avaliação: <?=$anime['avaliacao']?></h6>
            <h6 class="u-text u-text-2">Temporada: <?=$anime['tamanho']?></h6>
            <a style="color: inherit;" onclick="preencher('<?=$anime['id']?>','<?=$anime['nome']?>','<?=$anime['tipo']?>','<?=$anime['categoria']?>','<?=$anime['status']?>','<?=$anime['avaliacao']?>','<?=$anime['tamanho']?>','<?=$anime['img']?>')" data-toggle="modal" data-target="#modalEditar"><i class="fa fa-pencil fa-2x"></a></i>

            <script type="text/javascript">
               function preencher(id, nome, tipo, categoria, status, avaliacao, tamanho, img){
                   $('#id').val(id);
                   $('#nomeAnime').val(nome);
                   $('#tipoAnime').val(tipo);
                   $('#categoriaAnime').val(categoria);
                   $('#statusAnime').val(status);
                   $('#avaliacaoAnime').val(avaliacao);
                   $('#tamanhoAnime').val(tamanho);
                   $('#img_editar').attr('src', 'images/' + img);
               }
            </script>
         </div>
      </div>
   </div>
</div>
<?php } 
   } ?>
<?php
   }
   if (isset($_GET['tipo']) || isset($_GET['categoria']) || isset($_GET['status']) ) {
    $animes=$dao->buscar_filtros($_GET['tipo'],$_GET['categoria'],$_GET['status']);
    if (empty($animes)) {
      echo "<div class='u-container-style'><h6 class='u-text u-text-2'>Não foi encontrado nenhum resultado </h6><p></p><h1>:/</h1></div>";
    }else{
    ?>
<?php foreach ($animes as $anime) { ?>     
<div class="u-container-style u-list-item u-repeater-item u-list-item-1">
   <div class="u-container-layout u-similar-container u-valign-top-sm u-container-layout-1">
      <img src="images/<?=$anime['img']?>" alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="2250" data-image-height="1500"> 
      <div class="u-align-center u-container-style u-group u-white u-group-1">
         <div class="u-container-layout u-container-layout-2">
            <center>
               <h4 class="u-text u-text-1"><?=$anime['nome']?></h4>
            </center>
            <h6 class="u-text u-text-2">Tipo: <?=stripslashes($anime['tipo'])?></h6>
            <h6 class="u-text u-text-2">Categoria: <?=$anime['categoria']?></h6>
            <h6 class="u-text u-text-2">Status: <?=stripslashes($anime['status'])?></h6>
            <h6 class="u-text u-text-2">Avaliação: <?=$anime['avaliacao']?></h6>
            <h6 class="u-text u-text-2">Tamanho: <?=$anime['tamanho']?></h6>
            <a style="color: inherit;" onclick="preencher('<?=$anime['id']?>','<?=$anime['nome']?>','<?=$anime['tipo']?>','<?=$anime['categoria']?>','<?=$anime['status']?>','<?=$anime['avaliacao']?>','<?=$anime['tamanho']?>','<?=$anime['img']?>')" data-toggle="modal" data-target="#modalEditar"><i class="fa fa-pencil fa-2x"></a></i>
            <script type="text/javascript">
               function preencher(id, nome, tipo, categoria, status, avaliacao, tamanho, img){
                   $('#id').val(id);
                   $('#nomeAnime').val(nome);
                   $('#tipoAnime').val(tipo);
                   $('#categoriaAnime').val(categoria);
                   $('#statusAnime').val(status);
                   $('#avaliacaoAnime').val(avaliacao);
                   $('#tamanhoAnime').val(tamanho);
                   $('#img_editar').attr('src', 'images/' + img);
               }
            </script>
         </div>
      </div>
   </div>
</div>
<?php }   }    ?>
<?php   }   ?>
