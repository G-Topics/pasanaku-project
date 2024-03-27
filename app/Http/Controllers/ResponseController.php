<?php

namespace App\Http\Controllers;

class ResponseController extends Controller
{
    public function response($status, $code = null, $data = null, $message = '', $date = null, $errorStack = null)
    {
        $response = [
                    'status' => $status,
                    'code' => $code,
                    'data' => $data,
                    'message' => $message,
                    'date' => $date,
                    'error_details' => $errorStack,
                    ];

        return response()->json($response);
    }
}