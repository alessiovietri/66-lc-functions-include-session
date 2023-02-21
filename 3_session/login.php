<?php

    session_start();

    $_SESSION['user'] = [
        'username' => 'alessio.vietri',
        'email' => 'alessio.vietri@boolean.careers',
    ];       // store.username = 'alessio.vietri';

    header('Location: ./dashboard.php');