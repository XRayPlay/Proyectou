<?php
    session_start();
    unset($_SESSION['votos']);
    header("location: ../vista/votante.php");
?>