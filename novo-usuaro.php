<?php

include "cabecalho.php";
include "menu.php"
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Cadastrar novo usuário</h1>
        </div>
        <div class="row">
            <div class="col">
                <form method="post" action="salvar-usuario.php">
                    <input name="nome" required placeholder="Nome"><br>
                    <input name="email" required placeholder="Email"><br>
                    <input name="senha" required placeholder="Senha"><br>
                    <button type="submit" class=" btn btn-sucess">Salvar usuario</button>
                </form>
            </div>

        </div>
    </div>

</div>