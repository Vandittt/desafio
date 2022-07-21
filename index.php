<?php

    include_once("header.php");
?>

<h1>Acesse sua conta</h1>
    <form action="<?= $BASE_URL?>config/process.php" method="POST">
    <input type="hidden" name="type" value="login">
        <P>
            <label for="">Usuário:</label>
            <input type="text" name="nickname" placeholder="insira seu Usuário">
        </P>
        <P>
            <label for="">Senha:</label>
            <input type="password" name="password" placeholder="insira sua senha">
        </P>
        <p>
            <button type="submit">Entrar</button>
            <a href="<?= $BASE_URL ?>show.php"><input type="button" value="analisar"></a> 
           <a href="<?= $BASE_URL ?>register.php"><input type="button" value="registre-se"></a> 
        </p>
    </form>




<?php

    include_once("footer.php");
?>
    
