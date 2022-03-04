<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Log;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logs = Log::orderBy('created_at','desc')->get();

        defaultLog(Log::class);
        return response()->json([
            'items' => $logs
        ]);
    }


}
