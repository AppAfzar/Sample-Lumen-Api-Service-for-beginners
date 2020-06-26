<?php
/*
|--------------------------------------------------------------------------
| Custom Helper Function
|--------------------------------------------------------------------------
|
| create all custom helper function in this php file.
|
*/
if (!function_exists('bcrypt')) {
    function bcrypt($input)
    {
        return app('hash')->make($input);
    }
}
