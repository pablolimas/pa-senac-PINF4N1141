
<html
<?php
require 'inc/head.php';
?>

    <body background="img/f2.jpg">
        <div class="container">

            <?php
            require 'inc/menu.php';
            ?>
            <div class="container" id="perfil">

                <form class="form-horizontal" method="post" action="cadastro_pessoas.php">
                    <fieldset></fieldset>
                    <legend style="text-align:center ">Cadastro de Pessoas</legend>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">NOME</label>
                        <div class="col-md-4">
                            <input id="textinput" name="nome" type="text" placeholder="NOME" class="form-control input-md">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">ESCRITÓRIO</label>
                        <div class="col-md-4">
                            <input id="textinput" name="escritorio" type="text" placeholder="ESCRITÓRIO" class="form-control input-md">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">ENDEREÇO DE EMAIL</label>
                        <div class="col-md-4">
                            <input id="textinput" name="email" type="text" placeholder="ENDEREÇO DE EMAIL" class="form-control input-md">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">TELEFONE</label>
                        <div class="col-md-4">
                            <input id="textinput" name="telefone" type="text" placeholder="TELEFONE" class="form-control input-md">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectbasic">LIMPAR FORMULÁRIO</label>
                        <div class="col-md-4">
                            <button type="reset" class="btn btn-default btn-sm" > LIMPAR </button>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectbasic">CADASTRAR</label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-default">Cadastrar</button>
                        </div>

                    </div>

            </div>

        </form>
    </div>

    <?php
    require 'inc/foot.php';
    ?>
</body>
</html>