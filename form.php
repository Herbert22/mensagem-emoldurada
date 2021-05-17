<?php
$msg = $_POST['msg'];
?>

<link rel="stylesheet" href="style.css">
<div class="container">
    <div class="texto-principal">
        <p id="borderimg" class="indicacoes">
            <?php echo "$msg" ?>
        </p>
    </div>
</div>

<a href="index.php">
    <button>Voltar</button>
</a>