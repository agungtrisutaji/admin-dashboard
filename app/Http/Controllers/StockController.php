<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::get();
        return view(
            'stock',
            compact('stocks')
        );
    }

    public function apiGet()
    {
        $data = Stock::all();
        return response()->json($data, 200);
    }

    public function apiShow($id)
    {
        $data = Stock::find($id);
        if (is_null($data)) {
            return response()->json(['message' => 'Resource not found'], 404);
        }
        return response()->json($data, 200);
    }

    public function apiStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'min:5'],
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $data = Stock::create($request->all());

        return response()->json($data, 201);
    }

    public function apiUpdate(Request $request, Stock $stock)
    {
        $stock->update($request->all());
        return response()->json($stock, 200);
    }

    public function apiDestroy(Stock $stock)
    {
        $stock->delete();
        return response()->json('Post deleted', 204);
    }
}
