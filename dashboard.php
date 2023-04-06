<?php
    session_start();

    if(empty($_SESSION)) {
        print "<script> location.href='index.php'; </script>";
    }
?>

<div class="navbar navbar-light">
    <div class="container-fluid">
        <div class="navbar-brand">Sistema Online</div>
        <?php
            print "Olá, " . $_SESSION['nome'];
            print "<a href='logout.php' class='btn btn-danger'> Sair </a>";
        ?>
    </div>
</div>