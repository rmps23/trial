<?php
  
namespace App\Http\Controllers;
    
use App\Models\Movie;
use Illuminate\Support\Facades\DB;
    
class ChartJSController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $data = Movie::select(DB::raw('year, COUNT(*) as count'))
        ->groupBy('year')
        ->get()
        ->toArray();
             
        return view('chart', compact('data'));
    }
}