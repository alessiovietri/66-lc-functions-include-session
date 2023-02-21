<?php

    session_start(); // import { store } from 'store.js';

    if (isset($_SESSION['user'])) {
        echo '<h1>Sei loggato!</h1>';
    }
    else {
        // Reindirizza al login
        // header('Location: ./login.php');
        echo '<h1>NON sei loggato!</h1>';
    }
    