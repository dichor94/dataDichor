<?php

    function autocargador($clase){
        require_once 'ap71/class/' . $clase . '.php';
    }

    spl_autoload_register('autocargador');

?>