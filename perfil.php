
<html
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
            <div id ='form'>
                <h1>
                    <center><b style="background-color:#F0FFFF"> CADASTRO E PERFIL DO CLIENTE</b ></center>
                </h1>
                <form class="form-horizontal" method="post" action="cadastrar_cliente.php" style="background-color:#F0FFFF">
                    <div class="form-group">
                        <label for="inputNome" class="col-sm-2 control-label">Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputNome" class="col-sm-2 control-label">Sobre nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNome" name="sobre nome" placeholder="Sobre nome">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Senha:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Senha" name="senha">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>

</html>