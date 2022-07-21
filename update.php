<?php

    include_once("header.php");
?>

<h1>Atualizar dados</h1>
<div>
<form  action="<?= $BASE_URL ?>config/process.php" method='POST'>
<input type="hidden" name="type" value="edit">
<input type="hidden" name="id" value="<?= $cliente["id"]?>">
<div>
    <label for="nome">Nome</label>
    <input type="text" name="nome" placeholder="insira seu nome" value="<?= $cliente["nome"] ?>" required>
</div>
<div>
    <label for="idade">Idade</label>
    <input type="text" name="idade" placeholder="insira sua idade" value="<?= $cliente["idade"] ?>" required >
</div>
<div>
    <label for="nome">Cidade</label>
    <input type="text" name="cidade" placeholder="insira sua cidade" value="<?= $cliente["cidade"] ?>" required >
</div>
<div>
    <label for="nome">Nickname</label>
    <input type="text" name="nickname" placeholder="insira seu Nickname" value="<?= $cliente["nickname"] ?>" required>
</div>
<div>
    <label for="nome">Senha</label>
    <input type="password" name="password" placeholder="insira sua senha" value="<?= $cliente["password"] ?>" required >
</div>

<button type="submit">Atualizar</button>
</div>

<?php

    include_once("footer.php");
?>
    