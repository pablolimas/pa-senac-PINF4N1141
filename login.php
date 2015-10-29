
<html>
    <?php
    require 'inc/head.php';
    ?>

    <body>
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
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">
                                            EMAIL</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="EMAIL" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">
                                            SENHA</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="SENHA" required>
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
    </body>
</html>
