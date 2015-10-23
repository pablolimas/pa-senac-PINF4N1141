
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


            <div id="form" style="background-color:#F0FFFF">
                <h2>
                    <center><b>REALIZE SEU ACESSO ABAIXO</b></center>
                    <center><b></b></center>
                </h2>
                <br>
                <center>
                    <form   action="" method="post">

                        <input type="Hidden" name="AnyFormSubject" value="Dados do Formulário de HTML">
                        <br> INFORME O NOME?<input type="Text" name="Nome" size="40"><br><br>
                        <br>INFORME O E-MAIL PARA CONTATO?<input type="Text" name="E-mail" size="40"><p><br>
                            <br>A LOJA ATENDEU SUA NECESSIDADE?<br>
                            <br><input type="Radio" name="SIM" value="SIM"> SIM <br>
                            <br><input type="Radio" name="NÃO" value="NÃO"CHECKED>NÃO<br>

                            <br><input type="Submit" value="Enviar "><br>
                            <br><input type="Reset" value="Limpar Dados"><br>

                    </form>
                </center>
            </div>



</html>