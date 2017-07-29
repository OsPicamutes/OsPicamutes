<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker3.min.css">    
    <link rel="stylesheet" type="text/css" href="css/mod.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-clockpicker.min.css">
    <title>Innove Ticket</title>
</head>

<body class="sidebar-mini fixed">
    <div class="wrapper">
        <!-- Navbar-->
        <header class="main-header hidden-print"><a href="index.html" class="logo">Innove Boss</a>
            <nav class="navbar navbar-static-top sombra">
                <!-- Sidebar toggle button-->
                <a href="#" data-toggle="offcanvas" class="sidebar-toggle"></a>
                <!-- Navbar Right Menu--><img src="images/innove.svg" height="46" class="logo-innove" alt="Innove Logo">
                <div class="navbar-custom-menu">
                    <ul class="top-nav">
                        <!--Notification Menu-->
                        <li class="dropdown notification-menu"><a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-bell-o fa-lg"></i></a>
                            <ul class="dropdown-menu">
                                <li class="not-head">Suas notificações</li>
                                <li>
                                    <a href="javascript:;" class="media">
                                        <div class="media-body">
                                            <span class="block">Novas leis</span>
                                            <span class="text-muted block">2 min atrás</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="not-footer"><a href="#">Ver todas notificações</a></li>
                            </ul>
                        </li>
                        <!-- User Menu-->
                        <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user fa-lg"></i></a>
                        </li>
                        <li class="dropdown notification-menu"><a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-question fa-lg"></i></a>
                            <ul class="dropdown-menu">
                                <li class="not-head">Ajuda</li>
                                <li>
                                    <div class="media-body">
                                        <span><a href="#">Sobre</a></span>
                                        <span><a href="#">Suporte</a></span>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print sidebar-rolagem">
            <div class="teste">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image"><img src="images/logo.svg" alt="User Image" class="img-circle"></div>
                        <div class="pull-left info">
                            <p>Usuario Tal</p>
                            <p class="designation">Empresa Tal</p>
                        </div>
                    </div>
                    <!-- Sidebar Menu-->
                    <ul class="sidebar-menu">
                        <li class="active"><a href="emitente.php"><i class="fa fa-user"></i><span>Emitente</span></a></li>
                        <li><a href="passageiros.php"><i class="fa fa-users"></i><span>Passageiros</span></a></li>
                        <li><a href="contas_a_pagar.php"><i class="fa fa-calendar-times-o"></i><span>Contas a pagar</span></a></li>
                        <li><a href="contas_a_receber.php"><i class="fa fa-calendar-plus-o"></i><span>Contas a receber</span></a></li>
                        <li>
                            <a  href="#demo4" data-toggle="collapse" data-parent="#MainMenu">
                                <i class="fa fa-cart-plus"></i>
                                <span>Vendas</span>
                                <i class="fa fa-caret-down" style="margin-left: 11px;"></i>
                                <div class="collapse" id="demo4">
                                    <a href="passagens.php" class="list-group-item style_submenu" style="color: #FFF;">Passagens</a>
                                    <a href="servico.php" class="list-group-item style_submenu" style="color: #FFF;">Serviços</a>
                                </div>
                            </a>
                        </li>
                        <li><a href="caixa.php"><i class="fa fa-shopping-basket"></i><span>Caixa</span></a></li>
                        <li><a href="auxiliares.php"><i class="fa fa-sign-out"></i><span>Auxiliares</span></a></li>
                        <li><a href="relatorios.php"><i class="fa fa-file-text-o"></i><span>Relatórios</span></a></li>
                        <li><a href="configuracoes.php"><i class="fa fa-cog"></i><span>Configurações</span></a></li>
                        <li><a href="login.html"><i class="fa fa-sign-out"></i><span>Sair</span></a></li>
                    </ul>
                </section>
                <footer class="footer-dash">
                    <p class="footer-direitos">2016 © <span>Millennium</span></p>
                </footer>
            </div>
        </aside>
        <div class="content-wrapper">
            <div class="page-title">
                <div>
                    <h1> Emitente</h1>
                    <p></p>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="demo-map">
                                <form action="" method="get" accept-charset="utf-8">
                                    <div class="row">
                                        <div class="form-group col-sm-3">
                                            <div class="container-logomarca text-center">
                                                <div class="imagem-upload" id="container-logo">
                                                    <input type="file" class="file-upload-input" id="input-upload" name="imagem" onchange="carregarImagem(this);" accept="image/*">
                                                    <div class="sub-text">
                                                        <h3>Logo marca</h3>
                                                        <span>Clique ou arraste aqui</span>
                                                    </div>
                                                </div>
                                                <div class="file-upload-content" id="container-img">
                                                    <div class="div-img">
                                                        <img class="file-upload-image" id="imagem-upload" src="#" width="100%" height="100%">
                                                    </div>
                                                    <a type="button" class="botao-remover" id="botao-remover">
                                                        <i title="Remover" class="fa fa-times-circle bota-remover-logo"></i>
                                                    </a>
                                                </div>
                                            </div> 
                                        </div>                                        
                                        <div class="form-group col-md-9">
                                            <label for="razao-social" class="control-label origatorio">Razão Social</label>
                                            <input type="text" class="form-control" id="razao-social" name="razao-socail" placeholder="Razao Social">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nome-fantasia" class="control-label origatorio">Nome/Fantasia</label>
                                            <input type="text" class="form-control" id="nome-fantasia" name="nome-fantasia" placeholder="Nome/Fantasia">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label for="cnpj" class="control-label origatorio">
                                                <span class="nome_pessoa_juridica">CNPJ</span><span class="barra">/</span><span class="nome_pessoa_fisica">CPF</span>
                                            </label>
                                            <div class="input-group" id="remove_input_group">
                                                <input type="text" class="form-control cnpj_cpf" id="cnpj_cpf" name="CNPJ" placeholder="CNPJ/CPF">
                                                <a href="#" id="bt_captcha" style="" data-toggle="modal" data-target="#modal_captcha" class="input-group-addon input-group-addon_mod">Buscar
                                                    <img src="http://nfe.innovesistemas.com/templates/innovenfe/assets/images/receita.svg" alt="" width="26px">
                                                    <i id="pulse" class="fa fa-spinner fa-pulse" aria-hidden="true" style="display: none;"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inscrição-estadual" class="control-label origatorio">Inscrição Estadual</label>
                                            <input type="text" class="form-control" id="inscrição-estadual" name="inscrição-estadual" placeholder="Inscrição Estadual">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inscrição-municipal" class="control-label origatorio">Inscrição Municipal</label>
                                            <input type="text" class="form-control" id="inscrição-municipal" name="inscrição-municipal" placeholder="Inscrição Municipal">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-2">
                                            <label for="cep" class="control-label origatorio">CEP</label>
                                            <input type="text" class="form-control mask-cep" id="cep" name="cep" placeholder="CEP">
                                        </div>
                                        <div class="form-group col-sm-5">
                                            <label for="endereco" class="control-label origatorio">Endereço</label>
                                            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label for="bairro" class="control-label origatorio">Bairro</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="Numero" class="control-label origatorio">Numero</label>
                                            <input type="text" class="form-control" id="numero" name="numero" placeholder="Numero">
                                        </div>                            
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label for="complemento" class="control-label origatorio">Complemento</label>
                                            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="estado" class="control-label origatorio">Estado</label>
                                            <select class="form-control" id="uf" name="uf" required>
                                                <option value="">Selecione</option>
                                                    <? for($i = 0; $i < count($objUf); $i++){
                                                            if($objUf[$i]->uf == $objEmitente->emp_cod_uf){ $s = "selected = selected"; echo $cod_uf = $objUf[$i]->uf; }else{ $s = ""; }
                                                    ?>
                                                            <option <?=$s?> sigla="<?=$objUf[$i]->sigla?>" value="<?=$objUf[$i]->uf?>"><?=$objUf[$i]->estado?></option>
                                                    <? } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="cidade" class="control-label origatorio">Cidade</label>
                                            <select class="form-control" id="cidade">
                                                <option value="">Selecione</option>
                                                <option value="" hidden="">Selecione</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label for="telefone" class="control-label origatorio">Telefone</label>
                                            <input type="text" class="form-control mask-telefone" id="telefone" name="telefone" placeholder="Telefone">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="celular1" class="control-label">Celular 1</label>
                                            <input type="text" class="form-control mask-celular" id="celular1" name="celular1" placeholder="Celular 1">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="Numero" class="control-label">Celular 2</label>
                                            <input type="text" class="form-control mask-celular" id="celular2" name="celular" placeholder="Celular 2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="email" class="control-label origatorio">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="web-site" class="control-label origatorio">Web Site</label>
                                            <input type="text" class="form-control" id="web-site" name="web-site" placeholder="Web-Site">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <button type="button" class="btn btn-primary" id="btn-enviar" style="float: right;">Salvar</button> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/traducao-datatable.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap-datepicker.pt-BR.js"></script>
    <script src="js/mascara-cp.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script src="js/script2.js"></script>
    <script src="js/jquery.maskmoney.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap-clockpicker.min.js"></script>
</body>

</html>