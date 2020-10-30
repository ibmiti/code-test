<?php 

namespace App\Helpers;

class APIHelpers {

    public static function createAPIResponse($is_error, $http_code, $message, $content) 
    {
        $result = [];

        if($is_error){
            $result['success'] = false;
            $result['http_code'] = $http_code;
            $result['message'] = $message;
        } else {
            $result['success'] = true;
            $result['http_code'] = $http_code;
            if ($content == null){
                $result['message'] = $message;
            } else {
                $result['data'] = $content;
            }
        }
    }

}