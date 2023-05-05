<?php
include "cabecalho.php";
include "menu-sistema.php";
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Lista Jogos</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">

                    <table>
                        <tr>
                            <td>Código</td>
                            <td>Título</td>
                            <td>Categoria</td>
                            <td>Ações</td>

                        </tr>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <?php
                include "conexao.php";
                $sql_buscar = "select * from jogos";
                $todos_os_jogos = mysqli_query($conexao, $sql_buscar);
                while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)):
                ?>
                <tr>
                    <td> <?php echo $um_jogo["id"]; ?></td>
                    <td> <?php echo $um_jogo["Título"]; ?></td>
                    <td> <?php echo $um_jogo["Categoria"]; ?></td>
                    <td>
                        <a href="excluir-jogos.php?id=<?php echo $um_jogo["id"]; ?>"></a>
                    <img src="deleteimg.png" width="20"></td>;
                </tr>
                <?php
                endwhile;
                mysqli_close($conexao)

                ?>
                </table>
            </div>
        </div>
    </div>
</div>