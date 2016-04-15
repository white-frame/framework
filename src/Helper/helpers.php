<?php

if (!function_exists('wf')) 
{
    function wf() {
        try {
            return app()->make('white-frame.framework.helper.manager');
        }
        catch(\ReflectionException $e) {
            return null;
        }
    }
}
