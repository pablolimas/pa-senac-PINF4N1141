
<html
<?php
require 'inc/head.php';
?>

    <body>
        <div class="container">

            <?php
            require 'inc/menu.php';
            ?>
            <div class="container" id="perfil">
                <form class="form-horizontal">
                    <fieldset>


                        <legend style="text-align:center ">CADASTRE-SE</legend>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">NOME</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" placeholder="NOME" class="form-control input-md">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">ESCRITÓRIO</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" placeholder="ESCRITÓRIO" class="form-control input-md">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">ENDEREÇO DE EMAIL</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" placeholder="ENDEREÇO DE EMAIL" class="form-control input-md">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">TELEFONE</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" placeholder="TELEFONE" class="form-control input-md">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">LIMPAR FORMULÁRIO</label>
                            <div class="col-md-4">
                                <button type="reset" class="btn btn-default btn-sm" > LIMPAR </button>
                            </div>
                        </div>
                        </div>
                        </div>
                        <?php
                        require 'inc/foot.php';
                        ?>
                        </html>