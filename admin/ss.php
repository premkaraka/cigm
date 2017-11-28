<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("Location:index.php?s=2");
}