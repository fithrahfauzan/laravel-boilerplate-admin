<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Get value from existing array, return default if not defined
     * 
     * @param array $arr data array
     * @param string $value value within array
     * @param type $default default value if value not defined
     * @return string;
     */
    public function getValueFromArray($arr, $value, $default = "")
    {
        return isset($arr[$value]) && $arr[$value] != "" ? $arr[$value] : $default;
    }
}
