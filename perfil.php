
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
            <div class="container">
                <form class="form-horizontal">
                    <fieldset>


                        <legend style="text-align:center ">CRIE SEU PERFIL AQUI</legend>


                        <div class="form-group">
                            <label class="col-md-4 control-label" for="radios"></label>
                            <div class="col-md-4">
                                <label class="col-md-4 control-label" for="textinput">TRATAMENTO </label>
                                <label class="radio-inline" for="radios-0">
                                    <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                    SR.
                                </label>
                                <label class="radio-inline" for="radios-1">
                                    <input type="radio" name="radios" id="radios-1" value="2">
                                    SRA.
                                </label>
                                <label class="radio-inline" for="radios-2">
                                    <input type="radio" name="radios" id="radios-2" value="3">
                                    DR.
                                </label>
                                <label class="radio-inline" for="radios-2">
                                    <input type="radio" name="radios" id="radios-2" value="3">
                                    DRA.
                                </label>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">PRIMEIRO NOME</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" placeholder="PRIMEIRO NOME" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">ÚLTIMO NOME</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" placeholder="ÚLTIMO NOME" class="form-control input-md">

                            </div>
                        </div>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">FOTO</label>
                            <div class="col-md-4">
                                <input id="filebutton" name="filebutton" class="input-file" type="file">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">ANIVERSÁRIO</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" placeholder="ANIVERSÁRIO" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">NOME DO PAI</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" placeholder="NOME DO PAI" class="form-control input-md">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">NOME DA MÃE</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" placeholder="NOME DA MÃE" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">NÚMERO DE OAB</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" placeholder="NÚMERO DE OAB" class="form-control input-md">

                            </div>
                        </div>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">DOC</label>
                            <div class="col-md-4">
                                <input id="filebutton" name="filebutton" class="input-file" type="file">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">FORMAÇÃO ESCOLAR</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" placeholder="FORMAÇÃO ESCOLAR" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">DEPARTAMENTO</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" placeholder="DEPARTAMENTO" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">ESCRITÓRIO</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" placeholder="ESCRITÓRIO" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">ENDEREÇO DE EMAIL</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" placeholder="ENDEREÇO DE EMAIL" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">TELEFONE</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" placeholder="TELEFONE" class="form-control input-md">

                            </div>
                        </div>



                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">PAIS</label>
                            <div class="col-md-4">
                                <select id="selectbasic" name="selectbasic" class="form-control">
                                    <option value="1">BRASIL</option>
                                    <option value="2">OUTRO</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">gender</label>
                            <div class="col-md-4">
                                <select id="selectbasic" name="selectbasic" class="form-control">
                                    <option value="1">FEMININO</option>
                                    <option value="2">MASCULINO</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textarea">ENDEREÇO</label>
                            <div class="col-md-4">
                                <textarea class="form-control" id="textarea" name="textarea">ENDEREÇO</textarea>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">LIMPAR FORMULÁRIO</label>
                            <div class="col-md-4">
                                <button type="reset" class="btn btn-default btn-sm" > LIMPAR </button>
                            </div>
                        </div>


                        </html>