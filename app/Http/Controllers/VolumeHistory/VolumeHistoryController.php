<?php

namespace App\Http\Controllers\VolumeHistory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class VolumeHistoryController extends Controller{
    public function index(Request $request){
        $associateid = $request->associateid;
        $lang = $request->lang;
        switch($lang){
            case 'UK1':
                $lang = 'en';
                break;
            case 'FR1':
                $lang = 'fre';
                break;
            case 'GE1':
                $lang = 'deu';
                break;
            case 'SW1':
                $lang = 'swe';
                break;
        }
        App::setLocale($lang);
        return view('volumehistory.index', compact('associateid', 'lang'));
    }

    public function getReportGenUKRetailPV(Request $request){
        $associateid = $request->associateid;
        $periodo = $request->periodo;
        $sqlsrvNA = \DB::connection('sqlsrvNA');
            $response = $sqlsrvNA->select("
                select   a.distributor_id,b.Name,a.period_id,a.wwpv as 'PPV',a.wwpgv AS'PGPV',a.qov_volume AS 'OPV',a.QGV_Volume AS 'RETAIL_PGPV',a.Non_Hi_Leg_Volume AS 'OPV_OPL',a.nd_Non_High_Leg_Vol AS'OPV_OP_SL'
                from [169].[INC_NIKKEN_UK_USA].[dbo].[ww_comp] a left join Distributors_inc2SBO b on a.distributor_id=b.Distributor_id
                where period_id between convert(char(6),DATEADD(month, -2, GETDATE()),112) and convert(char(6),DATEADD(month, 1, GETDATE()),112)
                AND A.DISTRIBUTOR_ID='$associateid'  AND a.period_id like '$periodo%'
                ORDER BY A.PERIOD_ID ASC
            ");
        \DB::disconnect('sqlsrvNA');

        $data = [
            'data' => $response,
        ];
        return \Response::json($data);
    }

    public function getTotalsGenUkRetailPV(Request $request){
        $associateid = $request->associateid;
        $periodo = $request->periodo;
        $sqlsrvNA = \DB::connection('sqlsrvNA');
            $totals = $sqlsrvNA->select("
                select SUM(a.wwpv) as 'PPV',SUM(a.wwpgv) AS'PGPV',SUM(a.qov_volume) AS 'OPV',SUM(a.QGV_Volume) AS 'RETAIL_PGPV',SUM(a.Non_Hi_Leg_Volume) AS 'OPV_OPL',SUM(a.nd_Non_High_Leg_Vol) AS'OPV_OP_SL'
                from [169].[INC_NIKKEN_UK_USA].[dbo].[ww_comp] a left join Distributors_inc2SBO b on a.distributor_id=b.Distributor_id
                where period_id between convert(char(6),DATEADD(month, -2, GETDATE()),112) and convert(char(6),DATEADD(month, 1, GETDATE()),112)
                AND A.DISTRIBUTOR_ID='$associateid'  AND a.period_id like '$periodo%'
            ");
        \DB::disconnect('sqlsrvNA');
        return $totals;
    }
}
