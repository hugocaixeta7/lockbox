<?php

if(!auth()) {    
    header('location: /login');
    exit();
}

echo 'estou logado ' . auth()->nome;