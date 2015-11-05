
<html>
    <?php
    require 'inc/head.php';
    ?>

    <body background="img/f2.jpg">
        <div class="container">

            <?php
            require 'inc/menu.php';
            ?>


            <div class="container">

                <div class="row toppad">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-lock"></span> LOGIN</div>

                            <div class="panel-body">
                                <form class="form-horizontal" action="faz_login.php" method="post" >

                                    <div class="form-group">
                                        <label for="email" class="col-sm-3 control-label">
                                            EMAIL</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="EMAIL" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">
                                            SENHA</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="senha" class="form-control" id="senha" placeholder="SENHA" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"/>
                                                    LEMBRAR
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group last">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-success btn-sm">
                                                LOGIN</button>
                                            <button type="reset" class="btn btn-default btn-sm">
                                                LIMPAR</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php
        require 'inc/foot.php';
        ?>
    </body>
</html>
