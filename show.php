<?php

    include_once("header.php");
?>

<h1>clientes</h1>
<?php if(count($clientes) > 0): ?>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>idade</th>
                <th>cidade</th>
                <th>nickname</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clientes as $cliente):?>
                <tr>
                    <td><?=$cliente["id"]?></td>
                    <td><?=$cliente["nome"]?></td>
                    <td><?=$cliente["idade"]?></td>
                    <td><?=$cliente["cidade"]?></td>
                    <td><?=$cliente["nickname"]?></td>
                    <td>
                    <a href="<?= $BASE_URL ?>update.php?id=<?= $cliente["id"]?>"><input type="button" value="atualizar dados"></a>
                    <form  action="<?= $BASE_URL?>" method="POST">
                                <input type="hidden" name="type" value="delete" >
                                <input type="hidden" name="id" value="<?=$cliente["id"]?>">
                                <button type="submit">Deletar</button>
                               </form>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
        <?php else: ?>
            <p>ainda não há clientes</p>
        <?php endif; ?>
    </table>
<?php

    include_once("footer.php");
?>
    