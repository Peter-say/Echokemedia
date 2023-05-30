<?php 

namespace App\Helpers;

use App\Constants\ApiConstants;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ApiHelper
{
    static function problemResponse(string $message = null, int $status_code, Request $request = null, Exception $trace = null)
    {
        $code = !empty($status_code) ? $status_code : null;
        $error_code = null;

        if(!empty($trace)){
            $trace_msg = $trace->getMessage();
            $error_code = $trace->getCode();
        }

        $body = [
            "message" => $message,
            "code" => $code,
            "success" => false,
            "error_code" => $error_code,
            "error_debug" => $trace_msg ?? null

        ];

        !empty($trace) ? logger($trace->getMessage(), $trace->getTrace()) : null;
        return response()->json($body)->setStatusCode($code);
    }


    /** Return error api response */
    static function inputErrorResponse(string $message = null, int $status_code = null, Request $request = null, ValidationException $trace = null)
    {
        $code = ($status_code != null) ? $status_code : "";
        $error_code = null;

        if(!empty($trace)){
            $errors = $trace->errors();
            $error_code = $trace->getCode();
        }

        $body = [
            "message" => $message,
            "code" => $code,
            "success" => false,
            "error_code" => $error_code,
            "errors" => $errors ?? null ,
        ];

        return response()->json($body)->setStatusCode($code);
    }

    /** Return valid api response */
    static function validResponse(string $message = null, $data = null, $request = null)
    {
        if (is_null($data) || empty($data)) {
            $data = null;
        }
        $body = [
            "message" => $message,
            "data" => $data,
            "success" => true,
            "code" => ApiConstants::GOOD_REQ_CODE,

        ];
        return response()->json($body);
    }

    /**Returns formatted money value
     * @param float amount
     * @param int places
     * @param string symbol
     */



    /**Returns formatted date value
     * @param string date
     * @param string format
     */
    static function format_date($date, $format = "Y-m-d")
    {
        return date($format, strtotime($date));
    }


    /**Returns the available auth instance with user
     * @param bool $getUser
     */
    static function auth($getUser = false)
    {
        return $getUser ? auth("api")->user() : auth("api");
    }

}