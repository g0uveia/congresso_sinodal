<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presbiterio;
use App\Igreja;

class GetIgrejasByPresbiterio extends Controller
{
    public function __invoke(Request $request)
    {
        return json_encode(Presbiterio::find($request->presbiterio_id)->igrejas);
    }
}
