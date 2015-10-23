
<html>
    <?php
    require 'inc/head.php';
    ?>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success" role="alert" style="text-align:center " > <h1 style="color:orangered" >LIVRARIA DO ADVOGADO</h1></div>
                </div>
            </div>

            <?php
            require 'inc/menu.php';
            ?>



            <div id="form" style="background-color:#F0FFFF">
                <h2>
                    <center><b>REALIZE SEU ACESSO ABAIXO</b></center>
                </h2>
                <br>
                <form class="form-horizontal" action="faz_login.php" method="post" >
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Login:</label>
                        <div class="col-sm-10">
                            <input type="login" class="form-control" name="login" id="inputEmail3" placeholder="Login">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Senha:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="senha" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="lembrar"> Guardar acesso futuro
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Login</button>
                        </div>
                    </div>
                </form>
            </div>








        </div>
    </body>
</html>
