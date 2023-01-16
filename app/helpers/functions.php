<?php

function redirect($string)
{
    header('Location: ' . BASE_URL . '/' . $string);
    exit;
}
