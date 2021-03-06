<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $BrandData = DB::table('facebook clicks')->select('Posted','clicks')->get();

        echo json_encode($BrandData,JSON_NUMERIC_CHECK);
    }

    public function channel()
    {
        $BrandData = DB::table('Aff Clicks')->select('no_of_Clicks','Transaction_Date')->get();

        echo json_encode($BrandData,JSON_NUMERIC_CHECK);
    }

    public function Dashboard_Clicks()
    {
        $DBClicks = DB::table('TotalClicks')->select('Total_Clicks')->get();
                    $data= json_encode($DBClicks,JSON_NUMERIC_CHECK);

    return view('dashboard.pages')->with('$data', Total_Clicks);
    }


    public function Dashboard_Clicks_api()
    {
        $DBClicksAPI = DB::table('TotalClicks')->select('Total_Clicks')->get();
            echo json_encode($DBClicksAPI,JSON_NUMERIC_CHECK);
    }

    public function Dashboard_impression_api()
    {
        $DBimpressionAPI = DB::table('Totalimpression')->select('Total_Impression')->get();
            echo json_encode($DBimpressionAPI,JSON_NUMERIC_CHECK);
    }



    public function SPTD()
    {
        $SPTD_Value = DB::table('CustomerBudget') ->select(DB::raw('sum(Jan + Feb) AS SPTD'))->get();
            echo json_encode($SPTD_Value,JSON_NUMERIC_CHECK);
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
        echo "store";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "show message id";
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
