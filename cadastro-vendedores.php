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
                        <!--Ajuda Menu-->
                        <li class="dropdown notification-menu"><a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-question fa-lg"></i></a>
                            <ul class="dropdown-menu">
                                <li class="not-head">Ajuda</li>
                                <li>
                                    <div class="media-body">
                                        <span class="botao-ajuda"><a href="#">Sobre</a></span>
                                        <span class="botao-ajuda"><a href="#">Suporte</a></span>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
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
                        <li><a href="emitente.php"><i class="fa fa-user"></i><span>Emitente</span></a></li>
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
                    <h1> Vendedores</h1>
                    <p></p>
                </div>
                <div>
                    <ul class="button-new" style="float: left;margin-right: 15px;">
                        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal_novo_cliente"><i class="fa fa-plus visible-sm visible-xs"></i><span class="visible-md visible-lg">Novo</span></button>
                    </ul>
                    <ul class="button-new" style="float: right;">
                        <a href="auxiliares.php" class="btn btn-primary btn-block"><i class="fa fa-arrow-left visible-sm visible-xs"></i><span class="visible-md visible-lg">Voltar</span></a>
                    </ul>
                </div>
            </div>
            <div class="row mt-20">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="table-responsive tabela-prog">
                                    <table id="tabela-pag" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="">NOME COMPLETO</th>
                                                <th class="">TELEFONE</th>
                                                <th class="">CELULAR</th>
                                                <th class="">COMISSÃO PASSAGENS (%)</th>
                                                <th class="">COMISSÃO SERVIÇOS (%)</th>
                                                <th class="" style="width: 32px;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Roberto Bastos Mariano</td>
                                                <td>0000-0000</td>
                                                <td>(38) 9 9247-3752</td>
                                                <td>1200%</td>
                                                <td>500%</td>
                                                <td class="boao_ex_ed text-center" value="4">
                                                    <span class="editar_transp" data-toggle="modal" data-target="#modal_novo_cliente">
                                                        <a style="cursor: pointer;" data-toggle="tooltip" title="" data-original-title="Editar" >
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </a>
                                                    </span>
                                                    <a style="cursor:pointer" class="excluir_transp" data-toggle="tooltip" title="" data-original-title="Excluir">
                                                        <i class="fa fa-trash" aria-hidden="true" id="excluir"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                    <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_novo_cliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"> Cadastro de Vendedores</h4>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div id="demo-map">
                            <form enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="nome" class="control-label origatorio">Nome Completo</label>
                                        <input type="text" class="form-control" id="nome-completo" name="nome-completo" placeholder="Nome Completo">
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">                                        
                                        <label for="data-nascimento" class="control-label origatorio">Data de nascimento</label>
                                        <input type="text" class="form-control data-picker mask-date" id="data-nascimento" name="data-nascimento" placeholder="Data de nascimento" maxlength="10">                                        
                                    </div>
                                    <div class="form-group col-md-4">                                        
                                        <label for="data-admissao" class="control-label origatorio">Data de admissão</label>
                                        <input type="text" class="form-control data-picker mask-date" id="data-admissao" name="data-admissao" placeholder="Data de admissão" maxlength="10">                                        
                                    </div>
                                    <div class="form-group col-md-4">                                        
                                        <label for="data-demisao" class="control-label origatorio">Data de demissão</label>
                                        <input type="text" class="form-control data-picker mask-date" id="data-demisao" name="data-demisao" placeholder="Data de demissão" maxlength="10">                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3">                                        
                                        <label for="telefone" class="control-label origatorio">Telefone</label>
                                        <input type="text" class="form-control mask-telefone" id="telefone" name="telefone" placeholder="Telefone">        
                                    </div>
                                    <div class="form-group col-md-3">                                        
                                        <label for="celular" class="control-label origatorio">Celular</label>
                                        <input type="text" class="form-control mask-celular" id="celular" name="celular2" placeholder="Celular">        
                                    </div>
                                    <div class="form-group col-md-3">                                        
                                        <label for="celular2" class="control-label origatorio">Comissão passagens (%)</label>
                                        <input type="text" class="form-control" id="celular2" name="celular2" placeholder="Comissão Sobre Passagens ">        
                                    </div>  
                                    <div class="form-group col-md-3">                                        
                                        <label for="celular2" class="control-label origatorio">Comissão serviços (%)</label>
                                        <input type="text" class="form-control" id="celular2" name="celular2" placeholder="Comissão Sobre Encomendas">        
                                    </div>                 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn-enviar">Salvar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="btn-cancelar">Cancelar</button>
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