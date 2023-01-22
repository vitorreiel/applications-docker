<?php 

session_start();
include("include_dao.php");

$dao = new AnimeDAO();
$daoUser = new UsuarioDAO();

$dto = new Anime();
$dtoUser = new Usuario();

$animes = $dao->listarTodosOrgenandoPor();
$allUsuarios = $daoUser->listarTodos();

$cadastrarAnime = isset($_POST['cadastrarAnime'])?$_POST['cadastrarAnime']:"";
$editar_anime = isset($_POST['editar_anime'])?$_POST['editar_anime']:"";
$excluir_anime = isset($_POST['excluir_anime'])?$_POST['excluir_anime']:"";
$f_login = isset($_POST['f_login'])?$_POST['f_login']:"";
$btn_pesq = isset($_GET['btn_pesq'])?$_GET['btn_pesq']:"";
$pesquisa = isset($_GET['pesquisa'])?$_GET['pesquisa']:"";
$sair = isset($_GET['sair'])?$_GET['sair']:"";

function redirect ($page) {
    echo '<script>window.location = "./'.$page.'"</script>';
}

if(!empty($cadastrarAnime)){

    $idUsuario = isset($_POST['idUsuario'])?$_POST['idUsuario']:"";
    $nomeAnime = isset($_POST['nomeAnime'])?$_POST['nomeAnime']:"";
    $tipoAnime = isset($_POST['tipoAnime'])?$_POST['tipoAnime']:"";
    $categoriaAnime = isset($_POST['categoriaAnime'])?$_POST['categoriaAnime']:"";
    $statusAnime = isset($_POST['statusAnime'])?$_POST['statusAnime']:"";
    $avaliacaoAnime = isset($_POST['avaliacaoAnime'])?$_POST['avaliacaoAnime']:"";
    $tamanhoAnime = isset($_POST['tamanhoAnime'])?$_POST['tamanhoAnime']:"";

    if ($_FILES['upload_file']['error']==4) {
        $dto->setImg("padrao/add.png");
    }else{
        $extensao =strtolower(pathinfo($_FILES['upload_file']['name'], PATHINFO_EXTENSION));
        $imagem = sha1(uniqid($_FILES['upload_file']['name'])).".".$extensao;
        print_r($imagem);
        $diretorio='images/';
        move_uploaded_file($_FILES['upload_file']['tmp_name'], $diretorio.$imagem);
        $dto->setImg($imagem);
    }

    $nomeAnime = addslashes($nomeAnime);
    $statusAnime = addslashes($statusAnime);

    $dto->setId_usuario($idUsuario);
    $dto->setNome($nomeAnime);
    $dto->setTipo($tipoAnime);
    $dto->setCategoria($categoriaAnime);
    $dto->setStatus($statusAnime);
    $dto->setAvaliacao($avaliacaoAnime);
    $dto->setTamanho($tamanhoAnime);
    

    $resultado = $dao->inserir($dto);

    if($resultado == true){
        redirect("index.php");
    }else{
        echo "<script>alert('ERRO AO CADASTRAR!')</script>";
    }

}

if(!empty($editar_anime)) {

    $id = isset($_POST['id'])?$_POST['id']:"";
    $nomeAnime = isset($_POST['nomeAnime'])?$_POST['nomeAnime']:"";
    $tipoAnime = isset($_POST['tipoAnime'])?$_POST['tipoAnime']:"";
    $categoriaAnime = isset($_POST['categoriaAnime'])?$_POST['categoriaAnime']:"";
    $statusAnime = isset($_POST['statusAnime'])?$_POST['statusAnime']:"";
    $avaliacaoAnime = isset($_POST['avaliacaoAnime'])?$_POST['avaliacaoAnime']:"";
    $tamanhoAnime = isset($_POST['tamanhoAnime'])?$_POST['tamanhoAnime']:"";
    //echo "<script>alert($img_editar)</script>";

    if ($_FILES['img']['error']==4) {
        $dto->setImg(null);
    }else{
        $extensao =strtolower(pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION));
        $imagem = sha1(uniqid($_FILES['img']['name'])).".".$extensao;
        print_r($imagem);
        $diretorio='images/';
        move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$imagem);
        $dto->setImg($imagem);
    }

    $nomeAnime = addslashes($nomeAnime);  
    $statusAnime = addslashes($statusAnime);   

    $dto->setId($id);
    $dto->setNome($nomeAnime);
    $dto->setTipo($tipoAnime);
    $dto->setCategoria($categoriaAnime);
    $dto->setStatus($statusAnime);
    $dto->setAvaliacao($avaliacaoAnime);
    $dto->setTamanho($tamanhoAnime);

    $resultado = $dao->atualizar($dto);

    if($resultado == true){
        redirect("index.php");
    }else{
        echo "<script>alert('ERRO AO EDITAR!')</script>";
    }
}

if(!empty($f_login)) {
    
    $login = isset($_POST['login'])?$_POST['login']:"";
    $senha = isset($_POST['senha'])?$_POST['senha']:"";

    $dtoUser->setLogin($login);
    $dtoUser->setSenha(md5(sha1($senha)));

    $resultado = $daoUser->carregar($dtoUser);

    if(!empty($resultado)) {
        $_SESSION['user'] = $resultado[0]['id'];
        redirect('index.php');
    } else {
        echo "<script>document.getElementById('vapo').style.display = 'block'</script>";
    }

}

if(!empty($btn_pesq)){
    $pesquisar = $dao->listarTodosPor($btn_pesq);
}

if(!empty($sair)){
    session_destroy();
    redirect("login.php");
}

if(!empty($excluir_anime)){
    $id = isset($_POST['id'])?$_POST['id']:"";
    $dto->setId($id);
    $resultado = $dao->deletar($dto);

    if($resultado == true){
        redirect("index.php");
    }else{
        echo "<script>alert('ERRO AO EXCLUIR!')</script>";
    }
}
?>