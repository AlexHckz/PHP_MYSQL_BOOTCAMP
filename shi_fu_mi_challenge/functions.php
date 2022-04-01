<?php 

function verifyEntry($param) {
    $param_lower = strtolower($param);
    if ($param_lower !=="pierre" && $param_lower !== "feuille" && $param_lower !== "ciseaux") {
        return false;
    }
    else {
        return true;
    }
};