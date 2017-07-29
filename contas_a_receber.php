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
    <link rel="stylesheet" type="text/css" href="css/mod.css">
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
                                        <span><a href="#">Sobre</a></span>
                                        <span><a href="#">Suporte</a></span>
                                    </div>
                                </li>
                            </ul>
                        </li>
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
                        <li class="active"><a href="contas_a_receber.php"><i class="fa fa-calendar-plus-o"></i><span>Contas a receber</span></a></li>
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
            <!-- /.row -->
            <div class="row linha-opcao">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-share fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="nome-botao block">Lançar</div>
                                </div>
                            </div>
                        </div>
                        <a class="links" href="#" data-toggle="modal" data-target="#modal_novo_cliente">
                            <div class="panel-footer">
                                <span class="pull-left">Visualizar</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-credit-card fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="nome-botao block">Receber</div>
                                </div>
                            </div>
                        </div>
                        <a href="receber.php">
                            <div class="panel-footer">
                                <span class="pull-left">Visualizar</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
 
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="table-responsive tabela-prog">
                                    <table class="dados-os table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th colspan="9" class="table-programa-col-vencidas" style="text-align: center;background-color: #d0d0d0">
                                                    <span style="font-size: 20px;color: red;">Vencidas</span>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th class="table-programa-col-vencimento">Vencimento</th>
                                                <th class="table-programa-col-atraso">Atraso</th>
                                                <th class="table-programa-col-documento">Documento</th>
                                                <th class="table-programa-col-numerodocumento">N° do documento</th>
                                                <th class="table-programa-col-cliente">Cliente</th>
                                                <th class="table-programa-col-valor">Valor</th>
                                                <th class="table-programa-col-acrescimo">Acrescimo</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th></th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th style="text-align: center;">
                                                    <a href data-toggle="tooltip" title data-original-title="Editar">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a href data-toggle="tooltip" title data-original-title="Receber">
                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th style="text-align: center;">
                                                    <a href data-toggle="tooltip" title data-original-title="Editar">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a href data-toggle="tooltip" title data-original-title="Receber">
                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th style="text-align: center;">
                                                    <a href data-toggle="tooltip" title data-original-title="Editar">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a href data-toggle="tooltip" title data-original-title="Receber">
                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th style="text-align: center;">
                                                    <a href data-toggle="tooltip" title data-original-title="Editar">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a href data-toggle="tooltip" title data-original-title="Receber">
                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th style="text-align: center;">
                                                    <a href data-toggle="tooltip" title data-original-title="Editar">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a href data-toggle="tooltip" title data-original-title="Receber">
                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                        </tbody>
                                        <tfoot style="color: red">
                                            <tr>
                                                <th>Total :</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <table class="dados-os table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th colspan="10" class="table-programa-col-recebidos" style="text-align: center;background-color: #d0d0d0">
                                                    <span style="font-size: 20px;color: orange;">Recebidos</span>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th class="table-programa-col-vencimento">Vencimento</th>
                                                <th class="table-programa-col-atraso">Atraso</th>
                                                <th class="table-programa-col-documento">Documento</th>
                                                <th class="table-programa-col-numerodocumento">N° do documento</th>
                                                <th class="table-programa-col-cliente">Cliente</th>
                                                <th class="table-programa-col-valor">Valor</th>
                                                <th class="table-programa-col-acrescimo">Juros</th>
                                                <th class="table-programa-col-acrescimo">Descontos</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th></th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th style="text-align: center;">
                                                    <a href data-toggle="tooltip" title data-original-title="Editar">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a href data-toggle="tooltip" title data-original-title="Receber">
                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th style="text-align: center;">
                                                    <a href data-toggle="tooltip" title data-original-title="Editar">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a href data-toggle="tooltip" title data-original-title="Receber">
                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th style="text-align: center;">
                                                    <a href data-toggle="tooltip" title data-original-title="Editar">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a href data-toggle="tooltip" title data-original-title="Receber">
                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th style="text-align: center;">
                                                    <a href data-toggle="tooltip" title data-original-title="Editar">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a href data-toggle="tooltip" title data-original-title="Receber">
                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th style="text-align: center;">
                                                    <a href data-toggle="tooltip" title data-original-title="Editar">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a href data-toggle="tooltip" title data-original-title="Receber">
                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                        </tbody>
                                        <tfoot style="color: red">
                                            <tr>
                                                <th>Total :</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <table class="dados-os table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th colspan="10" class="table-programa-col-recebidos" style="text-align: center;background-color: #d0d0d0">
                                                    <span style="font-size: 20px;color: green;">Pagos Hoje</span>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th class="table-programa-col-documento">Documento</th>
                                                <th class="table-programa-col-numerodocumento">N° do documento</th>
                                                <th class="table-programa-col-cliente">Cliente</th>
                                                <th class="table-programa-col-valor">Valor</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th></th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th style="text-align: center;">
                                                    <a href data-toggle="tooltip" title data-original-title="Editar">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a href data-toggle="tooltip" title data-original-title="Receber">
                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th style="text-align: center;">
                                                    <a href data-toggle="tooltip" title data-original-title="Editar">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a href data-toggle="tooltip" title data-original-title="Receber">
                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                    </a>
                                                </th>
                                            </tr>  
                                            <tr>
                                                <th></th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th style="text-align: center;">
                                                    <a href data-toggle="tooltip" title data-original-title="Editar">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a href data-toggle="tooltip" title data-original-title="Receber">
                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                    </a>
                                                </th>
                                            </tr>  
                                            <tr>
                                                <th></th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th style="text-align: center;">
                                                    <a href data-toggle="tooltip" title data-original-title="Editar">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a href data-toggle="tooltip" title data-original-title="Receber">
                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                    </a>
                                                </th>
                                            </tr>  
                                            <tr>
                                                <th></th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th style="text-align: center;">
                                                    <a href data-toggle="tooltip" title data-original-title="Editar">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                    <a href data-toggle="tooltip" title data-original-title="Receber">
                                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                                    </a>
                                                </th>
                                            </tr>                                            
                                        </tbody>
                                        <tfoot style="color: red">
                                            <tr>
                                                <th>Total :</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th>000000</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_novo_cliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"> Lançar</h4>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div id="demo-map">
                            <form enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="data-cadastro" class="control-label origatorio">Data de Cadastro</label>
                                        <input type="text" class="form-control mask-date data-picker" id="data-cadastro" name="data-cadastro" placeholder="Data de Cadastro">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="data-vencimento" class="control-label origatorio">Data de Vencimento</label>
                                        <input type="text" class="form-control mask-date data-picker" id="data-vencimento" name="data-vencimento" placeholder="Data de Vencimento">
                                    </div>  
                                    <div class="form-group col-md-4">
                                        <label for="tipo_documento" class="control-label origatorio">Tipo de Documento</label>
                                        <input type="text" class="form-control" id="tipo_documento" name="tipo_documento" placeholder="Tipo de Documento">
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="form-group col-md-4">
                                        <label for="numero_documento" class="control-label origatorio">N° do Documento</label>
                                        <input type="text" class="form-control" id="numero_documento" name="numero_documento" placeholder="Numero do Documento">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="valor" class="control-label origatorio">Valor R$</label>
                                        <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor R$">
                                    </div>                                   
                                    <div class="form-group col-md-4">
                                        <label for="tipo-serviço" class="control-label origatorio">Passageiros</label>
                                        <select class="form-control" id="">
                                            <option value="" hidden="">Selecione</option>
                                            <option value="">Jose</option>
                                            <option value="">Carlos</option>
                                            <option value="">Joao</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="nome_completo" class="control-label origatorio">Anotaçao</label>
                                        <textarea rows="4" cols="50" class="form-control"></textarea>
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
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap-datepicker.pt-BR.js" charset="UTF-8"></script>
    <script>
        $('#Calendar').datepicker({
            language: 'pt-BR'
        });
    </script>
</body>

</html>