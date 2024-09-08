<?php
    function debug($allsliders){
        echo "<pre>";
        print_r($allsliders);
        echo "</pre>";
    }

    function dd($allsliders){
        debug($allsliders);
        die();
    }