<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB' crossorigin='anonymous' />
<link href='https://use.fontawesome.com/releases/v5.1.0/css/all.css' rel='stylesheet' integrity='sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt' crossorigin='anonymous' />
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js' integrity='sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T' crossorigin='anonymous'></script>
    


<h1>Usuários</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped" style="top:40px;">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Senha</th>
                <th>Email</th>
                <th>Data Criação</th>
                <th>Data Atualização</th>
                <th>Ativo</th>

                <th><a href="?controller=UsuariosController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php

            if ($usuarios) {
                foreach ($usuarios as $user) {
                    ?>
                    <tr>
                        <td><?php echo $user->nome; ?></td>
                        <td><?php echo $user->senha; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td><?php echo $user->data_criacao; ?></td>
                        <td><?php echo $user->data_atualizacao; ?></td>
                        <td><?php echo $user->ativo; ?></td>

                        <td>
                            <a href="?controller=UsuariosController&method=editar&id=<?php echo $user->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=UsuariosController&method=excluir&id=<?php echo $user->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="7">Nenhum registro encontrado</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>