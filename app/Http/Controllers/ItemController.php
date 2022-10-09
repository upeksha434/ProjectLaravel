<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function AddItem(Request $request):JsonResponse
    {
        Items::create([
            'name'=>$request->get('name'),
            'user_id'=> $request->get('user_id'),
        ]);



        return response()->json([
            'dev'=>'upeksha'
        ]);
    }
}
