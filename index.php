<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/mod.css">
    <title>Innove Ticket</title>
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="row">
            <div class="col-md-6 content-logos">
                <div class="login-box imagens-cont">
                    <div class="row">
                        <div class="col-md-12" style="margin-bottom: 30px;">
                            <img src="images/ticket-logo.jpeg" class="img-responsive">
                        </div>
                        <div class="col-md-12">
                            <img src="images/logo.svg" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="login-box ">
                    <form action="index.html" class="login-form">
                        <h3 class="login-head">Conectar</h3>
                        <div class="form-group" style="margin-bottom: 10px;">
                            <label class="control-label">Usuário</label>
                            <input type="text" placeholder="Usuário" autofocus class="form-control" required>
                        </div>
                        <div class="form-group" style="margin-bottom: 10px;">
                            <label class="control-label">Senha</label>
                            <input type="password" placeholder="Senha" class="form-control" required>
                        </div>
                        <div class="form-group" style="margin-bottom: 10px;">
                            <div class="utility">
                                <div class="animated-checkbox">
                                    <label class="semibold-text">
                                        <input type="checkbox"><span class="label-text">Lembrar senha</span>
                                    </label>
                                </div>
                                <p class="semibold-text mb-0"><a id="toFlip" href="#">Esqueceu a senha?</a></p>
                            </div>
                        </div>
                        <div class="form-group btn-container">
                            <a href="emitente.php" class="btn btn-primary btn-block">Entrar<i class="fa fa-sign-in fa-lg icon-entrar"></i></a>
                        </div>
                    </form>
                    <form action="index.html" class="forget-form">
                        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Esqueceu a senha?</h3>
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="text" placeholder="Email" class="form-control" required>
                        </div>
                        <div class="form-group btn-container">
                            <button class="btn btn-primary btn-block">Enviar <i class="fa fa-unlock fa-lg"></i></button>
                        </div>
                        <div class="form-group mt-20">
                            <p class="semibold-text mb-0"><a id="noFlip" href="#"><i class="fa fa-angle-left fa-fw"></i> Voltar</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer>
            <p>© <span>Millennium</span> 2016, todos direitos reservados</p>
        </footer>

    </section>

</body>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</html>
