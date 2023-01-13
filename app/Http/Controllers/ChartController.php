<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Charts\SampleChart;



class chartController extends Controller
{
    function hours_float($val){
        if(empty($val)){
            return 0;
        }
        $parts = explode(':', $val);
        return $parts[0]+floor(($parts[1]/60)*100)/100;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $month = ['Jan', 'Feb', 'Mar', 'Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];
        $response = Http::get('http://localhost:3000/api/time_access');
        $time = $response->json()['total_time'];
        $data=[];
        for ($i=0; $i < 1; $i++) { 
            array_push($data,$time[$i]['total_in_minutes']);
        }
        $chart = new SampleChart;
        $chart->labels($month);
        $chart->dataset('Waktu Akses/Minutes', 'bar', [$data[0]]);
        return view('chart', ['chart' => $chart]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
