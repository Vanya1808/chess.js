<?php

session_start();
if (strlen($_SESSION['map']) != 64)
    $_SESSION['map'] = '
    rnbqkbnrpppppppp11111111111111111111111111111111PPPPPPPPRNBQKBNR';

if (isset($_GET['getFigures']))
    echo $_SESSION['map'];

if (isset($_GET['moveFigure'])) {
    $frCoord = $_GET['frCoord'];
}