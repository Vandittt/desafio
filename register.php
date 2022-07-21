<?php

    include_once("header.php");
?>

<h1>Registre-se</h1>
<form action="<?= $BASE_URL ?>config/process.php" method='POST'>
<input type="hidden" name="type" value="register">
<div>
    <label for="nome">Nome</label>
    <input type="text" name="nome" placeholder="insira seu nome" required>
</div>
<div>
    <label for="idade">Idade</label>
    <input type="text" name="idade" placeholder="insira sua idade" required>
</div>
<div>
    <label for="nome">Cidade</label>
    <input type="text" name="cidade" placeholder="insira sua cidade" required>
</div>
<div>
    <label for="nome">Nickname</label>
    <input type="text" name="nickname" placeholder="insira seu Nickname" required>
</div>
<div>
    <label for="nome">Senha</label>
    <input type="password" name="password" placeholder="insira sua senha" required>
</div>

<button type="submit">Cadastrar</button>


<?php

    include_once("footer.php");
?>
    