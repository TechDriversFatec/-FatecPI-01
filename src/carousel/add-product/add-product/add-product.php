<!DOCTYPE html>
<html lang="pt-br">

<head>

	<link rel="shortcut icon" href="../../imagens/fav.ico">
	<meta charset="UTF-8">
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Cadastro de conteúdo</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
     <link href="css/header.css" rel="stylesheet" media="all">
</head>


<header class="header">
  <a href="" class="logo"><img src="../../imagens/logo.png" width="120px"></a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <li><a href="../../produtos.php">Inicio</a></li>
    <li><a href="#">Editar Perfil</a></li>
    <li><a href="#add-product.php">Cadastrar Material</a></li>
    <li><a href="#">Relatório de Vendas</a></li>
  </ul>
</header>

<body>
<style>
body {
  background-image: url('Kashmir.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Cadastro de produto</h2>
                </div>
                <div class="card-body">
                <form  id="envio" enctype="multipart/form-data" action="upload.php" method="POST">
                        <div class="form-row">
                            <div class="name">Título</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="titulo_produto">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Disciplina</div>
                            <div class="value">
                                <div class="input-group">
                                <select class="selectpicker" name="disciplina" style="height: 38px;">
                                        <option value="Português">Português</option>
                                        <option value="Inglês">Inglês</option>
                                        <option value="Matemática Discreta">Matemática Discreta</option>
                                        <option value="Laboratório de Hardware">Laboratório de Hardware</option>
                                        <option value="Administração Geral">Administração Geral</option>
                                        <option value="Algoritmos e Lógica de Programação">Algoritmos e Lógica de Programação</option>
                                        <option value="Arquitetura e Organização de Computadores">Arquitetura e Organização de Computadores</option>
                                </select>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Descrição do produto</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="descricao" placeholder="Faça uma breve descrição do seu produto, dizendo o que ele contém."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload do material</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input type="file" name="file_cv[]" multiple>
                                </div>
                                <div class="label--desc">Faça o upload do material didático. As extensões permitidas são: <b><i>pdf, doc e docx</i></b></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Preço</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="preco">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button form="envio" class="btn btn--radius-2 btn--blue-2" name="enviar" type="submit">Finalizar cadastro de produto</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->