<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mod.css">
    <link rel="stylesheet" type="text/css" href="css/ticket.css">
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
                </div>
            </nav>
        </header>
        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print sidebar-rolagem">
            <div class="teste">
                <section class="sidebar sidebar-nav" style="overflow: visible;">
                    <div class="user-panel">
                        <div class="pull-left image"><img src="images/logo.svg" alt="User Image" class="img-circle"></div>
                        <div class="pull-left info">
                            <p>Usuario Tal</p>
                            <p class="designation">Empresa Tal</p>
                        </div>
                    </div>
                    <!-- Sidebar Menu-->
                    <ul class="sidebar-menu ul-menu">
                        <li>
                            <a class="button-flyout">
                                <i class="fa fa-cart-plus"></i>
                                <span>Vendas</span>
                            </a>
                        </li>
                        <li><a href="caixa.php"><i class="fa fa-shopping-basket"></i><span>Caixa</span></a></li>
                    </ul>
                    <ul id="lista" class="nav-flyout sidebar-menu">
                        <li>
                            <a href="">
                                <i class="fa fa-clipboard"></i>
                                <span>Casa</span>
                            </a>
                        </li>
                        <button class="button-flyout" id="voltar">
                            <i class="fa fa-chevron-left" aria-hidden="true" style="float: left;padding: 4px;padding-left: 11px;margin-right:11px"></i>
                            <span>Voltar</span>
                        </button>
                    </ul>
                </section>
                <footer class="footer-dash">
                    <p class="footer-direitos">2016 © <span>Millennium</span></p>
                </footer>
            </div>
        </aside>
        <div class="content-wrapper">
            <div class="row mt-20">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="user_info">
                                            <p>0025, Paulo Cesar Mariano Neto, 22/07/2017 as 11:28</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <figure>
                                            <img src="images/onibus.jpg" class="img-responsive" id="mapa" alt="onibus" usemap="#mapa_onibus" style="">
                                            <map name="mapa_onibus">
                                                <area data-key ="CO"  alt="" title="" href="#" shape="poly" coords="324,508,418,510,421,606,322,606" id="poltrona_01"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="322,387,417,387,420,481,324,481" id="poltrona_02" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="324,146,416,149,421,244,320,246" id="poltrona_03" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="324,25,418,25,420,121,323,121"   id="poltrona_04" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="444,510,541,510,538,606,442,604" id="poltrona_05" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="442,387,540,385,537,481,444,481" id="poltrona_06" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="444,147,541,147,541,244,444,245" id="poltrona_07" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="444,24,539,26,542,122,443,121"   id="poltrona_08" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="567,508,664,508,663,604,567,606" id="poltrona_09" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="567,387,661,387,663,481,565,481" id="poltrona_10" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="565,147,663,147,662,245,568,244" id="poltrona_11" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="565,26,663,26,663,122,568,122"   id="poltrona_12" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="690,507,786,508,786,603,690,604" id="poltrona_13" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="688,387,786,385,784,480,690,480" id="poltrona_14" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="689,145,784,147,786,245,687,246" id="poltrona_15" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="689,24,786,24,783,119,689,120"   id="poltrona_16" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="811,508,909,510,909,606,810,606" id="poltrona_17" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="811,385,907,387,907,481,813,481" id="poltrona_18" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="810,147,907,147,909,246,808,245" id="poltrona_19" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="811,26,907,25,908,121,811,121"   id="poltrona_20" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="930,510,1029,510,1030,607,933,606" id="poltrona_21" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="933,385,1027,387,1027,481,931,480" id="poltrona_22" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="931,148,1028,148,1030,246,929,244" id="poltrona_23" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="931,25,1026,25,1028,122,929,121"   id="poltrona_24" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1054,510,1153,510,1152,606,1057,607" id="poltrona_25" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1056,390,1149,388,1152,483,1057,480" id="poltrona_26" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1054,148,1151,147,1152,246,1054,244" id="poltrona_27" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1056,26,1150,24,1153,121,1056,122"   id="poltrona_28" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1176,508,1275,510,1273,606,1177,607" id="poltrona_29" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1176,388,1272,387,1273,483,1177,481" id="poltrona_30" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1174,148,1271,147,1274,247,1174,243" id="poltrona_31" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1176,25,1272,24,1276,123,1174,123"   id="poltrona_32" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1299,508,1399,508,1396,604,1299,607" id="poltrona_33" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1297,387,1393,387,1395,481,1297,480" id="poltrona_34" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1298,147,1394,148,1398,244,1298,246" id="poltrona_35" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1298,25,1396,25,1394,122,1297,123"   id="poltrona_36" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1419,508,1518,508,1519,606,1420,607" id="poltrona_37" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1420,387,1516,387,1518,483,1422,484" id="poltrona_38" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1420,146,1516,147,1519,244,1419,244" id="poltrona_39" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1420,24,1518,25,1519,122,1420,121"   id="poltrona_40" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1543,508,1642,510,1642,606,1543,604" id="poltrona_41" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1542,385,1639,387,1639,483,1543,484" id="poltrona_42" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1543,147,1640,148,1641,245,1542,244" id="poltrona_43" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1541,23,1640,24,1642,121,1543,121"   id="poltrona_44" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1666,508,1761,510,1762,603,1665,604" id="poltrona_45" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1665,385,1759,387,1761,484,1663,484" id="poltrona_46" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1664,147,1763,148,1765,246,1665,245" id="poltrona_47" data-toggle="modal" data-target="#modal_poltrona"/>
                                                <area  alt="" title="" href="#" shape="poly" coords="1662,22,1761,25,1760,123,1663,121"   id="poltrona_48" data-toggle="modal" data-target="#modal_poltrona"/>
                                            </map>
                                        </figure>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="rw col-sm-9">
                                        <div class="form-group col-sm-6">
                                            <label for="" class="control-label">Linha</label>
                                            <select class="form-control">
                                                <option>Selecione</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="" class="control-label">Veículo</label>
                                            <select class="form-control">
                                                <option>Selecione</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="" class="control-label">Motorista</label>
                                            <select class="form-control">
                                                <option>Selecione</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label for="" class="control-label origatorio">Data</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="">
                                        </div> 
                                        <div class="form-group col-sm-3">
                                            <label for="" class="control-label origatorio">Valor da Passagem</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="">
                                        </div>                                        
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="table-legenda">
                                            <div>
                                                <table class="dados-os">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <span>Legenda</span>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="button" class="btn-success" disabled name="">
                                                                <span>Livre</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="button" class="btn-danger" disabled name="">
                                                                <span>Ocupado</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="button" class="btn-warning" disabled name="">
                                                                <span>Reservado</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>                                   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
            </div>
            <div class="clearfix"></div>        
        </div>
    </div>    
    <div class="modal fade in" id="modal_poltrona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"> Abrir Caixa</h4>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div id="demo-map">
                            <form enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="" class="control-label origatorio">Caixa</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Caixa">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="" class="control-label origatorio">Data/Hora</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Data/Hora">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="" class="control-label origatorio">Saldo Inicial</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Saldo Inicial">
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
    <script src="js/sweetalert.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.rwdImageMaps.min.js"></script>
    <script src="js/jquery.imagemapster.js"></script>
    <script type="text/javascript">
        $('img[usemap]').rwdImageMaps();
        $('#mapa').mapster ();
    </script>


</body>

</html>