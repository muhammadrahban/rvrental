<?php

function getdestination()
{
    $result = App\Models\destination::all();
    return $result;
}

function getrvs()
{
    $getrvs = App\Models\rvs::all();
    return $getrvs;
}


