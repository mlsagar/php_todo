<?php

function dump_and_die($query) {
    echo "<pre>";
    var_dump($query);
    echo "</pre>";
    die();
}