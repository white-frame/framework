<?php

if (!function_exists('wf')) 
{
    function wf() {
        $manager = app('white-frame.white-frame.helper.manager');

        return $manager;
    }
}
