<?
include "conf/config.inc.php";

$controladorPublic = Factory::getControlador('Public');
$objUf = $controladorPublic->consultarUf();
?>
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
    <title>Innove Ticket </title>
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
                                    <a href="servicos.php" class="list-group-item style_submenu" style="color: #FFF;">Serviços</a>
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
                    <h1> Fornecedor</h1>
                    <p></p>
                </div>
                <div>
                    <ul class="button-new" style="float: left;margin-right: 15px;">
                        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal_novo_cliente"><i class="fa fa-plus visible-sm visible-xs"></i><span class="visible-md visible-lg">Novo</span></button>
                    </ul>
                    <ul class="button-new" style="float: right;">
                        <a href="contas_a_pagar.php" class="btn btn-primary btn-block"><i class="fa fa-arrow-left visible-sm visible-xs"></i><span class="visible-md visible-lg">Voltar</span></a>
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
                                                <th class="">Razão Social/Nome Completo</th>
                                                <th class="">Estado</th>
                                                <th class="">Cidade</th>
                                                <th class="">Telefone</th>
                                                <th class="">Celular</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Paulo Cesar Mariano Neto</td>
                                                <td>Minas Gerais</td>
                                                <td>Varzelandia</td>
                                                <td>(38) 9 9923-2323</td>
                                                <td>(77) 3473-2514</td>
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
    <div class="modal fade in" id="modal_novo_cliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header style-modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cadastro de Fornecedores</h4>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div id="demo-map">
                            <form enctype="multipart/form-data">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item active" id="ativar_tab_dados">
                                        <a class="nav-link" href="#dados" role="navigation" data-toggle="tab" aria-expanded="true">Dados</a>
                                    </li>
                                    <li class="nav-item" id="ativar_tab_representante">
                                        <a class="nav-link" href="#representante" role="navigation" data-toggle="tab" aria-expanded="false">Representante</a>
                                    </li>
                                    <li class="nav-item" id="ativar_tab_finanças">
                                        <a class="nav-link" href="#finanças" role="navigation" data-toggle="tab" aria-expanded="false">Finanças</a>
                                    </li>
                                </ul>
                                <div class="tab-content tab_content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="dados">
                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                <label for="tipo_pessoa" class="control-label origatorio">Tipo Pessoa</label>
                                                <select class="form-control" name="tipo-pessoa" id="tipo_pessoa">
                                                    <option value="">Selecione</option>
                                                    <option value="1">Pessoa Física</option>
                                                    <option value="2">Pessoa Jurídica </option>
                                                </select> 
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label for="data-cadastro" class="control-label origatorio">Data de Cadastro</label>
                                                <input type="text" class="form-control data-picker mask-date" id="data-cadrasto" name="data-cadastro" placeholder="Data de Cadastro">
                                            </div>
                                            <div class="form-group col-sm-5">
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
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-5">
                                                <label for="razão-nome" class="control-label origatorio">
                                                    <span class="nome_pessoa_juridica">Razão Social</span><span class="barra">/</span><span class="nome_pessoa_fisica">Nome Completo</span>
                                                </label>
                                                <input type="text" class="form-control" id="razao-nome" name="razao-nome" placeholder="Razao Social/Nome Completo">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="fantasia-conhecido" class="control-label origatorio">
                                                    <span class="nome_pessoa_juridica">Fantasia</span><span class="barra">/</span><span class="nome_pessoa_fisica">Conhecido por :</span>
                                                </label>
                                                <input type="text" class="form-control" id="fantasia-conhecido" name="fantasia-conhecido" placeholder="Fantasia/Conhecido por :">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label for="inscriçao-rg" class="control-label origatorio">
                                                    <span class="nome_pessoa_juridica">Inscrição Estadual</span><span class="barra">/</span><span class="nome_pessoa_fisica">RG</span>
                                                </label>
                                                <input type="text" class="form-control" id="inscriçao-rg" name="inscriçao-rg" placeholder="Inscriçao Estadual/RG">
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-3">
                                                <label for="cep" class="control-label origatorio">CEP</label>
                                                <input type="text" class="form-control mask-cep" id="cep" name="cep" placeholder="CEP">
                                            </div>
                                            <div class="form-group col-sm-4">
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
                                            <div class="form-group col-sm-5">
                                                <label for="complemento" class="control-label origatorio">Complemento</label>
                                                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento">
                                            </div>  
                                            <div class="form-group col-sm-3">
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
                                            <div class="form-group col-sm-2">
                                                <label for="telefone" class="control-label origatorio">Telefone</label>
                                                <input type="text" class="form-control mask-telefone" id="telefone" name="telefone" placeholder="Telefone">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label for="celular" class="control-label">Celular</label>
                                                <input type="text" class="form-control mask-celular" id="celular1" name="celular" placeholder="Celular 1">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="email" class="control-label origatorio">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                            </div> 
                                            <div class="form-group col-md-4">
                                                <label for="web-site" class="control-label origatorio">Web Site</label>
                                                <input type="text" class="form-control" id="web-site" name="web-site" placeholder="Web-Site">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label for="nome_completo" class="control-label origatorio">Anotaçao</label>
                                                <textarea rows="4" cols="50" class="form-control"></textarea>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="representante">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label for="nome-representante" class="control-label">Nome do Representante</label>
                                                <input type="text" class="form-control" id="nome-representante" name="nome-representante" placeholder="Nome do Representante">
                                            </div>                                  
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-3">
                                                <label for="cep" class="control-label origatorio">CEP</label>
                                                <input type="text" class="form-control mask-cep" id="cep" name="cep" placeholder="CEP">
                                            </div>
                                            <div class="form-group col-sm-4">
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
                                            <div class="form-group col-sm-5">
                                                <label for="complemento" class="control-label origatorio">Complemento</label>
                                                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento">
                                            </div>  
                                            <div class="form-group col-sm-3">
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
                                            <div class="form-group col-sm-2">
                                                <label for="telefone" class="control-label origatorio">Telefone</label>
                                                <input type="text" class="form-control mask-telefone" id="telefone" name="telefone" placeholder="Telefone">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label for="celular" class="control-label">Celular</label>
                                                <input type="text" class="form-control mask-celular" id="celular1" name="celular" placeholder="Celular 1">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="email" class="control-label origatorio">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                            </div> 
                                            <div class="form-group col-md-4">
                                                <label for="web-site" class="control-label origatorio">Web Site</label>
                                                <input type="text" class="form-control" id="web-site" name="web-site" placeholder="Web-Site">
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="finanças">
                                        <div>
                                            <div class="table-responsive tabela-prog">
                                                <table class="dados-os table table-striped table-bordered table-hover table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="9" class="table-programa-col-vencidas" style="text-align: center;background-color: #d0d0d0">
                                                                <span style="font-size: 20px;color: red;">Contas a Pagar</span>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th class="table-programa-col-vencimento">Data Cadastro</th>
                                                            <th class="table-programa-col-atraso">Data de Vencimento</th>
                                                            <th class="table-programa-col-documento">Dias de Atraso</th>
                                                            <th class="table-programa-col-numerodocumento">Tipo Documento</th>
                                                            <th class="table-programa-col-cliente">N° do Documento</th>
                                                            <th class="table-programa-col-valor">Valor R$</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
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
                                                <table class="dados-os table table-striped table-bordered table-hover table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="11" class="table-programa-col-recebidos" style="text-align: center;background-color: #d0d0d0">
                                                                <span style="font-size: 20px;color: orange;">Contas Quitadas</span>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th class="table-programa-col-vencimento">Vencimento</th>
                                                            <th class="table-programa-col-atraso">Pagamentos</th>
                                                            <th class="table-programa-col-documento">Atraso</th>
                                                            <th class="table-programa-col-tipo-documento">Tipo Documento</th>
                                                            <th class="table-programa-col-numerodocumento">N° do Documento</th>
                                                            <th class="table-programa-col-valor">Valor R$</th>
                                                            <th class="table-programa-col-acrescimo">Juros R$</th>
                                                            <th class="table-programa-col-acrescimo">Desconto R$</th>
                                                            <th class="table-programa-col-acrescimo">Valor Pago R$</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>000000</th>
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
                                                            <th>000000</th>
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
                                            </div>
                                        </div>
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