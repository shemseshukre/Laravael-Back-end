<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return response()->json(['data' => 'list of todos']);
    }
    public function store(Request $request)
    {
        return response()->json(['data' => 'store todos']);
    }
    public function update(Request $request, $id)
    {
        return response()->json(['data' => 'update todos']);
    }
    public function destroy($id)
    {
        return response()->json(['data' => 'delete todos']);
    }
}
