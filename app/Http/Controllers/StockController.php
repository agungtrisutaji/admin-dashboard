<?php

namespace App\Http\Controllers;

use App\Http\Resources\Stock\StockCollection;
use App\Http\Resources\Stock\StockResource;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        DB::listen(function ($query) {
            var_dump($query->sql);
        });

        $data = Stock::with(['suplier'])->paginate(10);
        return new StockCollection($data);
        // return response()->json($data, 200);
    }

    public function apiShow($id)
    {
        $data = Stock::find($id);
        if (is_null($data)) {
            return response()->json(['message' => 'Resource not found'], 404);
        }
        return new StockResource($data);
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
