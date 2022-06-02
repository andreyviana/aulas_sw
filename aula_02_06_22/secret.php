<?php
    session_start();
    if($_SESSION['acess'] != 1){
        header("Location: index.html");
    }

    echo "voce esta em uma pagina restrita";


    ?>

<a href="logout.php">Logout</a>