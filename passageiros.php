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
                        <li class="active"><a href="passageiros.php"><i class="fa fa-users"></i><span>Passageiros</span></a></li>
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
                    <h1> Passageiros</h1>
                    <p></p>
                </div>
                <div>
                    <ul class="button-new" style="float: left;margin-right: 15px;">
                        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal_novo_cliente"><i class="fa fa-plus visible-sm visible-xs"></i><span class="visible-md visible-lg">Novo</span></button>
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
                                                <th class="">Nome Completo</th>
                                                <th class="">Conhecido por :</th>
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
                                                <td>Cesar</td>
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
            <div class="modal-content" style="width: 1102px;">
                <div class="modal-header style-modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cadastro de Passageiros</h4>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div id="demo-map">
                            <form enctype="multipart/form-data">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item active" id="ativar_tab_dados">
                                        <a class="nav-link" href="#dados" role="navigation" data-toggle="tab" aria-expanded="true">Passageiros</a>
                                    </li>
                                    <li class="nav-item" id="ativar_tab_dependentes">
                                        <a class="nav-link" href="#dependentes" role="navigation" data-toggle="tab" aria-expanded="false">Dependentes</a>
                                    </li>
                                    <li class="nav-item" id="ativar_tab_finanças">
                                        <a class="nav-link" href="#finanças" role="navigation" data-toggle="tab" aria-expanded="false">Finanças</a>
                                    </li>
                                    <li class="nav-item" id="ativar_tab_passagens">
                                        <a class="nav-link" href="#passagens" role="navigation" data-toggle="tab" aria-expanded="false">Passagens</a>
                                    </li>
                                    <li class="nav-item" id="ativar_tab_encomendas">
                                        <a class="nav-link" href="#encomendas" role="navigation" data-toggle="tab" aria-expanded="false">Encomendas</a>
                                    </li>
                                </ul>
                                <div class="tab-content tab_content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="dados">
                                        <div class="row">
                                            <div class="form-group col-sm-3">
                                                <label for="codigo" class="control-label origatorio">Codigo</label>
                                                <input type="text" class="form-control" id="codigo" name="cep" placeholder="Codigo">
                                            </div>                                        
                                            <div class="form-group col-sm-3">
                                                <label for="data-cadastro" class="control-label origatorio">Data de Cadastro</label>
                                                <input type="text" class="form-control data-picker mask-date" id="data-cadrasto" name="data-cadastro" placeholder="Data de Cadastro">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label for="data-nascimento" class="control-label origatorio">Data de Nascimento</label>
                                                <div class="input-group" id="">
                                                    <input type="text" class="form-control data-picker mask-date" id="data-nascimento" name="data-nascimento" placeholder="Data de Nascimento">
                                                    <a id="" style="width: 25%;background-color: transparent;" data-toggle="modal" data-target="#modal_captcha" class="input-group-addon input-group-addon_mod">
                                                        <span id="resultado_idade"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label for="cidade" class="control-label origatorio">Status</label>
                                                <select class="form-control" id="status">
                                                    <option value="" hidden="">Selecione</option>
                                                    <option value="">Ativo</option>
                                                    <option value="">Inativo</option>
                                                    <option value="">Em espera</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="nome_completo" class="control-label origatorio">Nome Completo</label>
                                                <input type="text" class="form-control" id="nome_completo" name="nome_completo" placeholder="Nome Completo">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="conhecido_por" class="control-label origatorio">Conhecido por :</label>
                                                <input type="text" class="form-control" id="conhecido_por" name="conhecido_por" placeholder="Conhecido por :">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-3">
                                                <label for="telefone" class="control-label origatorio">Telefone</label>
                                                <input type="text" class="form-control mask-telefone" id="telefone" name="telefone" placeholder="Telefone">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label for="celular" class="control-label origatorio">Celular</label>
                                                <input type="text" class="form-control mask-celular" id="celular" name="celular" placeholder="Celular">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label for="celular" class="control-label origatorio">Celular Wathsapp</label>
                                                <input type="text" class="form-control mask-celular" id="celular" name="celular" placeholder="Celular Watshapp">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label for="cep" class="control-label origatorio">CEP</label>
                                                <input type="text" class="form-control mask-cep" id="cep" name="cep" placeholder="CEP">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                <label for="endereco" class="control-label origatorio">Endereço</label>
                                                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="bairro" class="control-label origatorio">Bairro</label>
                                                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="complemento" class="control-label origatorio">Complemento</label>
                                                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento">
                                            </div>                                           
                                        </div>
                                        <div class="row"> 
                                            <div class="form-group col-sm-2">
                                                <label for="Numero" class="control-label origatorio">Numero</label>
                                                <input type="text" class="form-control" id="numero" name="numero" placeholder="Numero">
                                            </div>
                                            <div class="form-group col-sm-1">                                               
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
                                            <div class="form-group col-sm-3">
                                                <label for="cpf" class="control-label origatorio">CPF</label>
                                                <input type="text" class="form-control mask-cpf" id="cpf" name="cpf" placeholder="CPF">                                                
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label for="rg" class="control-label origatorio">RG</label>
                                                <input type="text" class="form-control" id="rg" name="rg" placeholder="RG"> 
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label for="email" class="control-label origatorio">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Email"> 
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label for="limite_credito" class="control-label origatorio">Limite de Credito</label>
                                                <input type="text" class="form-control" id="limite_credito" name="limite_credito" placeholder="Limite de Credito"> 
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label for="nome_completo" class="control-label origatorio">Anotaçao</label>
                                                <textarea rows="4" cols="50" class="form-control"></textarea>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="dependentes">
                                        <div>
                                            <div class="table-responsive tabela-prog">
                                                <table class="dados-os table table-bordered  table-responsive" id="tabela">
                                                    <thead style="background-color: #bae5ff;">
                                                        <tr>
                                                            <th style="border-right:solid 1px #dddddd;width: 23%;"><span class="span-table">Nome Dependente</span></th>
                                                            <th style="border-right: solid 1px #dddddd;width: 15%;"><span class="span-table2">Data Nascimento</span></th>
                                                            <th style="border-right: solid 1px #dddddd;width: 16%"><span class="span-table2">rg</span></th>
                                                            <th style="border-right: solid 1px #dddddd;width: 16%"><span class="span-table2">cpf</span></th>
                                                            <th style="border-right: solid 1px #dddddd;width: 15%"><span class="span-table2">certidão nascimento</span></th>
                                                            <th style="border-right: solid 1px #dddddd"><span class="span-table2">Grau Parentesco</span></th>
                                                            <th style="width: 30px"><i class="fa fa-plus icon-table" style="color: #0080CD" id="add3" accesskey="i" data-toggle="tooltip" data-placement="top" title="Adicionar Alt+i"></i></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tabela-contatos" style="background-color: #e0e0e0;">
                                                        <td style="border-top: none; border-right:solid 1px #bae5ff">
                                                            <input type="text" class="form-control" name="telefone" placeholder="Nome do Dependente" id="">
                                                        </td>
                                                        <td style="border-top: none; border-right:solid 1px #dddddd;">
                                                            <input type="text" class="form-control data-picker mask-data" name="telefone" placeholder="Data de Nascimento" id="telefone">
                                                        </td>
                                                        <td style="border-top: none; border-right:solid 1px #dddddd;">
                                                            <input type="text" class="form-control" name="celular" placeholder="rg" id="celular">
                                                        </td>
                                                        <td style="border-top: none; border-right:solid 1px #dddddd;">
                                                            <input type="text" class="form-control" name="celular" placeholder="cpf" id="celular">
                                                        </td>
                                                        <td style="border-top: none; border-right:solid 1px #dddddd;">
                                                            <input type="text" class="form-control" name="celular" placeholder="certidão nascimento" id="celular">
                                                        </td>
                                                        <td style="border-top: none; border-right:solid 1px #dddddd;">
                                                            <input type="text" class="form-control" name="celular" placeholder="Grau Parentesco " id="celular">
                                                        </td>
                                                        <td style="width: 30px;border-top: none;">
                                                            <i class="fa fa-times-circle icon-table" id="excluir" style="color: #0080cd;font-size: 15px;margin-top: 5px;"></i>
                                                        </td>
                                                    </tbody>
                                                </table>                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="finanças">
                                        <div>
                                            <div class="table-responsive tabela-prog">
                                                <table class="dados-os table table-striped table-bordered table-hover table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="6" class="table-programa-col-vencidas" style="text-align: center;background-color: #d0d0d0">
                                                                <span style="font-size: 20px;color: red;">Contas em Aberto</span>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th class="table-programa-col-vencimento">Data Vencimento</th>
                                                            <th class="table-programa-col-documento">Atraso</th>
                                                            <th class="table-programa-col-numerodocumento">Tipo Documento</th>
                                                            <th class="table-programa-col-cliente">N° do Documento</th>
                                                            <th class="table-programa-col-valor">Valor R$</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>000000</th>
                                                            <th>000000</th>
                                                            <th>000000</th>
                                                            <th>000000</th>
                                                            <th>000000</th>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot style="color: red">
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th>000000</th>
                                                        </tr>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th>Total</th>
                                                            <th>000000</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <table class="dados-os table table-striped table-bordered table-hover table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="11" class="table-programa-col-recebidos" style="text-align: center;background-color: #d0d0d0">
                                                                <span style="font-size: 20px;color: green;">Contas Recebidas</span>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th class="table-programa-col-vencimento">Data Vencimento</th>
                                                            <th class="table-programa-col-atraso">Data Pagamento</th>
                                                            <th class="table-programa-col-documento">Atraso</th>
                                                            <th class="table-programa-col-tipo-documento">Tipo Documento</th>
                                                            <th class="table-programa-col-numerodocumento">N° do Documento</th>
                                                            <th class="table-programa-col-valor">Valor R$</th>
                                                            <th class="table-programa-col-acrescimo">Juros R$</th>
                                                            <th class="table-programa-col-acrescimo">Desconto R$</th>
                                                            <th class="table-programa-col-acrescimo" style="color:red">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th style="color: red;">000000</th>
                                                        </tr>
                                                        <tr>
                                                            <th>000000</th>
                                                            <th>000000</th>
                                                            <th>000000</th>
                                                            <th>000000</th>
                                                            <th>000000</th>
                                                            <th>000000</th>
                                                            <th>000000</th>
                                                            <th>000000</th>
                                                            <th style="color:red">000000</th>
                                                        </tr>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th style="color:red">Total</th>
                                                            <th style="color:red">000000</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="passagens">
                                        <div>
                                            <div class="table-responsive tabela-prog">
                                                <table class="dados-os table table-striped table-bordered table-hover table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="6" class="table-programa-col-vencidas" style="text-align: center;background-color: #d0d0d0">
                                                                <span style="font-size: 20px;color: green;">Passagens</span>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th class="table-programa-col-vencimento">Data da Compra</th>
                                                            <th class="table-programa-col-atraso">Data da Viagem</th>
                                                            <th class="table-programa-col-documento">Hora da Viagem</th>
                                                            <th class="table-programa-col-numerodocumento">Origem</th>
                                                            <th class="table-programa-col-cliente">Destino</th>
                                                            <th class="table-programa-col-valor">Valor R$</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>00/00/0000</th>
                                                            <th>00/00/0000</th>
                                                            <th>00:00</th>
                                                            <th>Varzelandia</th>
                                                            <th>Sao Paulo</th>
                                                            <th>000,00</th>
                                                        </tr>
                                                        <tr style="color:red">
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th>000,00</th>
                                                        </tr>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th style="color:red">Total</th>
                                                            <th style="color:red">000,00</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="encomendas">
                                        <div>
                                            <div class="table-responsive tabela-prog">
                                                <table class="dados-os table table-striped table-bordered table-hover table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="9" class="table-programa-col-vencidas" style="text-align: center;background-color: #d0d0d0">
                                                                <span style="font-size: 20px;color: green;">Encomendas</span>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th class="table-programa-col-vencimento">Data da Coleta</th>
                                                            <th class="table-programa-col-atraso">Data da Viagem</th>
                                                            <th class="table-programa-col-numerodocumento">Origem</th>
                                                            <th class="table-programa-col-cliente">Destino</th>
                                                            <th class="table-programa-col-cliente">Descrição da Encomenda</th>
                                                            <th class="table-programa-col-valor">Valor R$</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>00/00/0000</th>
                                                            <th>00/00/0000</th>
                                                            <th>Varzelandia</th>
                                                            <th>Sao Paulo</th>
                                                            <th>Envelope</th>
                                                            <th>000,00</th>
                                                        </tr>
                                                        <tr style="color:red">
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th>000,00</th>
                                                        </tr>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th style="color:red">Total</th>
                                                            <th style="color:red">000,00</th>
                                                        </tr>
                                                    </tbody>
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