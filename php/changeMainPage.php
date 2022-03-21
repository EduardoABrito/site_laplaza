<?php
    session_start();
    unset($_SESSION["currentPage"]);
    $_SESSION["currentPage"] = $_REQUEST["page"];
?>