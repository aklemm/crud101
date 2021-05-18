<?php

namespace App\Http\Controllers\UserProfiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Queries\UserProfiles\IndexQuery;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, IndexQuery $query)
    {
        return $query->getData();
    }
}
