<header id="header">
    <div class="wrapper">
        <div class="logo">
            <a href="index.php"><img src="img/icon-book.png"></a>
        </div>
        <nav>
            <?php
            if($_SESSION["rango"] != 2 ){
            echo "<a href='dondeAdministrar.php'>Administrar</a>";
            }
            ?>
            <a href="resCerrar.php">Cerrar Sesion</a>
        </nav>
    </div>
</header>