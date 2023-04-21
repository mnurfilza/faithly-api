<?php

namespace App\Helper;

class ApiResponse
{

    public static function successResponse($data, $message = null, $code = 200)
    {
        return response()->json([
            'meta' => [
                'response_code' => $code,
                'response_message' => $message,
            ],
            'data' => $data
        ], $code);
    }

    public static function errorResponse($message = null, $debug_param = null, $code = 200)
    {


        return response()->json([
            'meta' => [
                'response_code' => $code,
                'response_message' => $message,
                'response_debug_param' => $debug_param
            ],
            'data' => null
        ], $code);
    }

    public static function ResponsePaginate($data, $per_page, $page, $total, $debug_param = null, $message = null, $code = 200)
    {
        $hasNexPage = false;
        $page_count = ceil($total / $per_page);
        if ($page < $page_count) {
            $hasNexPage = true;
        }
        return response()->json([
            'meta' => [
                'response_code' => $code,
                'response_message' => $message,
                'response_debug_param' => $debug_param
            ],
            'paginate' => [
                'current_page' => $page,
                'total' => $total,
                'per_page' => $per_page,
                'page_count' => $page_count,
                'next_page' => $hasNexPage,
                'prev_page' => $page > 1,
            ],
            'data' => $data
        ], $code);
    }
}
