<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index()
    {

        // chunkメソッドを試す
        // $collection = collect([1, 2, 3, 4, 5, 6, 7]);

        // $chunks = $collection->chunk(4);

        // $chunks->all();
        
        $values = Test::all();

        // クエリビルダ
        $tests = DB::table('tests')
        ->select('id')
        ->get();

        // データの中身を表示してくれる
        dd($tests);

        return view('tests.test', compact('values'));
    }
}