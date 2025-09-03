<?php

if(!auth()) {    
    header('location: /lockbox/login');
    exit();
}

echo 'estou logado ' . auth()->nome;