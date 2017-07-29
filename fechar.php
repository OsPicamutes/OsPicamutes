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
            <!-- /.row -->
            <div class="page-title">
                <div>
                    <h1> Fechamento de Caixa</h1>
                    <p></p>
                </div>
                <div>
                    <ul class="button-new" style="float: right;">
                        <a href="caixa.php" class="btn btn-primary btn-block"><i class="fa fa-arrow-left visible-sm visible-xs"></i><span class="visible-md visible-lg">Voltar</span></a>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
 
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="table-responsive tabela-prog">
                                    <table id="tabela-pag" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="">Data</th>
                                                <th class="">Hístorico</th>
                                                <th class="">Conta</th>
                                                <th class="">Débito/Crédito</th>
                                                <th class="">Valor R$</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01/08/2000<td>
                                                <td>**********</td>
                                                <td>Debito</td>
                                                <td>250,00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive tabela-prog">
                                    <div class="col-md-8">
                                        <table id="tabela-pag" class="table table-striped table-bordered table-hover" style="margin-top: 10px;">
                                            <thead>
                                                <tr>
                                                    <th colspan="9" class="table-programa-col-vencidas" style="text-align: center;background-color: #d0d0d0">
                                                            <span style="font-size: 20px;color: black;">Outras Movimentações</span>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th class="">Dia hoje foi otimo</th>
                                                    <th class="">Conta</th>
                                                    <th class="">Valor R$</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>01/08/2000</td>
                                                    <td>**********</td>
                                                    <td>250,00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-4">
                                        <table class="dados-os table table-bordered table-hover" style="font-size: larger;margin-top: 10px;">
                                            <thead>
                                                <tr>
                                                    <th colspan="9" class="table-programa-col-vencidas" style="text-align: center;background-color: #d0d0d0">
                                                        <span style="font-size: 20px;color: black;">Apuração de Caixa</span>
                                                    </th>
                                                </tr>
                                                <tr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Saldo Inicial :</th>
                                                    <th class="font_secundaria">R$ 150,00</th>
                                                </tr>
                                                <tr>
                                                    <th>Debito :</th>
                                                    <th class="font_secundaria">R$ 150,00</th>
                                                </tr>
                                                <tr>
                                                    <th>Credito</th>
                                                    <th class="font_secundaria">R$ 150,00</th>
                                                </tr>
                                                <tr>
                                                    <th>Saldo Calculado :</th>
                                                    <th class="font_secundaria">R$ 500,00</th>
                                                </tr>
                                                <tr>
                                                    <th>Saldo Final :</th>
                                                    <th><input type="text" class="form-control" id="complemento" name="complemento" placeholder="Saldo Final" style="width: 128px;"></th>
                                                </tr>
                                                <tr>
                                                    <th>Resultado :</th>
                                                    <th class="font_secundaria" style="color:green;">R$ 1000,00</th>
                                                </tr>
                                            </tbody>
                                        </table>                                        
                                        <ul class="button-new" style="float: left;margin-left: 79px;width: 161px;">
                                            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal_novo_cliente"><i class="fa fa-plus visible-sm visible-xs"></i><span class="visible-md visible-lg">Fechar Caixa</span></button>
                                        </ul>
                                    </div>                                    
                                </div>
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