<?php

namespace App\Http\Controllers\PreInscInfluencer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use Mail;
use DB;

date_default_timezone_set('America/Mexico_City');

class PreInscInfluencerController extends Controller{
    public function index(Request $request){
        $associateid = $request->associateid;
        return view('preInscInfluencer.home', compact('associateid'));
    }

    public function preInscInfForm(Request $request){
        $associateid = $request->associateid;
        $lang = $request->lang;
        if(empty($associateid)){
            $associateid = 0;
            $val = "";
        }
        else{
            $conection = \DB::connection('sqlsrv5');
                $response = $conection->select("SELECT CONCAT(associateid, '-', AssociateName) AS Sponsor FROM Sponsor_CHL WHERE associateid = $associateid");
            \DB::disconnect('sqlsrv5');
            $val = $response[0]->Sponsor;
        }
        App::setLocale($lang);
        return view('preInscInfluencer.form', compact('associateid', 'lang', 'val'));
    }

    public function preInscInfGetSponsors(Request $request){
        $datoabuscar = $request->datoabuscar;

        $conection = \DB::connection('sqlsrv5');
            $response = $conection->select("SELECT TOP 7 associateid, AssociateName  FROM Sponsor_CHL WHERE associateid LIKE '%$datoabuscar%' OR AssociateName LIKE '%$datoabuscar%'");
        \DB::disconnect('sqlsrv5');

        $resultado = '';
        foreach ($response as $key) {
            $resultado = $resultado . "
                <a href='javascript:void(0)' style='cursor: pointer; width: 100%;' id='" . $key->associateid . '-' . $key->AssociateName ."' onclick='clearDiv(this.id)'>" . 
                    "<label width='100%'>" . $key->associateid . '-' . $key->AssociateName . "</label>" .
                "</a'>
            ";
        }
        return $resultado;
    }

    public function preInscInfSave(Request $request){
        date_default_timezone_set('America/Mexico_City');

        $conection = \DB::connection('sqlsrv5');

        $product = \App\consecutiveCodesTest::select(
            'consecutive_codes.code'
        )
        ->orderBy('code','desc')
        ->first();

        $language = $request->language;
        $country = $request->country;
    
        $newCode = $product->code + 2;
    
        $associateid = $newCode . '03';
        $associateType = '100';
        $signupdate = Date('Y-m-d 00:00:00');

        $apFirstName = $request->firstName . ' ' . $request->secondName . ', ' . $request->name;
        $apFirstName = preg_replace('/[0-9]+/', '', $apFirstName);
        $apFirstName = str_replace("/", "", $apFirstName);
        
        $countryShort = ['ECU' => 'EC', 'PAN' => 'PA', 'PER' => 'PE'];

        $apLastName = $request->firstNameCoTitular . ' ' . $request->secondNameCoTitular . ', ' . $request->nameCoTitular;
        $apTaxId = '';
        $address1 = $request->dirRecidencia;
        $city = ''; 
        $State = '';
        $PostalCode = '';
        $Country = $countryShort[$request->slctPais];

        $SponsorId = $request->sponsorId;

        if($SponsorId == "sin_sponsor"){
            $sponsorDefault = "6267203-9571503-9494103-10809403-8757303-11730103-9637503-8701603-5731603-470803-10567703-477303-2231703-227703-478903-4936003-7982203-2919703-13158703-8503703-1450503-2063403-17532303-1536403-5125003-6531303-6511903-7888103-6657503-3245503-8006703-8569803-10276603-13417903-13304203-9709003-12463203-12554703-9822003-11194603-11878103-9594803-3706503-2056103-2099603-2053003-10701003-2105403-4292703-12642803-11233703-4580203-12728303-2056703-12634003-2186803";
            $sponsorDefault = explode('-', $sponsorDefault);
            $randoom = rand(0, 55);
            $SponsorId = $sponsorDefault[$randoom];
            $apLastName = 'ALEATORIO';
        }
        
        $Usr = '0';
        $pais = $request->slctPais;
        $status = 'N';
        $phone1 = $request->celPhone;
        $phone2 = $request->phone;
        $email = $request->email;
        $email = str_replace(' ', '', $email);
        $LicTradNum = $request->numDocto;
        $Entered = Date('Y-m-d 00:00:00');
        $AssociateRank = '';
        $PVPeriod = '0';
        $slctItemKit = $request->slctItemKit;

        $departamento = $request->slctDepto;
        $provincia = $request->inpProv . $request->slctProv . " ";
        $ciudad = $request->slctCiudad . $request->inpCiudad . " ";
        $distrito = $request->slctDist;

        $city = $ciudad;
        $State = $departamento;

        $titularTipDoc = $request->slctTipDoc;
        $coTitularTipDoc = $request->slctTipDocCoTitular;
        $coTitularNumDoc = $request->numDoctoCoTitular;
    
        $dataRegist = "$associateid;$associateType;$signupdate;$apFirstName;$apLastName;$apTaxId;$address1;$city;$State;$PostalCode;$Country;$SponsorId;$Usr;$pais;$status;$phone1;$phone2;$email;$LicTradNum;$Entered;$AssociateRank;$PVPeriod;$slctItemKit;$provincia;$distrito;$titularTipDoc;$coTitularNumDoc;$coTitularTipDoc;";
        
        $response = $conection->insert("EXEC [dbo].[Datos_Influencer] '$dataRegist'");
        $datainserted = $conection->select("SELECT * FROM  Associates_Influencer WHERE Associateid = $associateid");
        \DB::disconnect('sqlsrv5');

        $existLogin = $conection->select("SELECT * FROM Login_Influencer WHERE Associateid = $associateid;");
        \DB::disconnect('sqlsrv5');

        if(sizeof($existLogin) <= 0){

            $existAsesor = $conection->select("SELECT * FROM Associates_Influencer WHERE Associateid = associateid;");
            \DB::disconnect('sqlsrv5');

            if(sizeof($existAsesor) >= 1){
                $psswd = substr( md5(microtime()), 1, 8);
                $login = $conection->insert("EXEC [dbo].[Sp_LoginInfluencer] '$associateid;$psswd'");
                \DB::disconnect('sqlsrv5');
                
                $personal_data = $conection->table('Sponsor_CHL')
                ->select('associateid as associateid','associateName as name','Email as email')
                ->where('associateid','=', $SponsorId)
                ->first();
                \DB::disconnect('sqlsrv5');
            
                $correoSponsor = '';
                $Email = $personal_data->email;
                $correoSponsor = $Email;
                $cadena = str_replace(' ', '', $correoSponsor);

                $data = array(
                    'name' => "$apFirstName",
                    'user' => "$associateid",
                    'pass' => "$psswd",
                    'lang' => "$language",
                    'sponsor' => "$personal_data->associateid - $personal_data->name",
                );

                Mail::send('preInscInfluencer.email', $data, function ($message) use ($email) {
                    $message->from('servicio.mex@nikkenlatam.com', 'Pre-Registro Influencers');
                    $message->to($email)->subject('Pre-Registro Influencers');
                });

                /*if (!empty($cadena)) {
                    $datasponsor = array(
                        'name' => "$associateid - $apFirstName",
                        'lang' => "$language"
                    );

                    Mail::send('preInscInfluencer.sponsormail', $datasponsor, function ($message) use ($cadena) {
                        $message->from('servicio.mex@nikkenlatam.com', 'Pre-Registro Influencers');
                        $message->to($cadena)->subject('Pre-Registro Chile');
                    });
                }*/
                
                $datasponsor = array(
                    'name' => "$associateid - $apFirstName",
                    'lang' => "$language"
                );

                Mail::send('preInscInfluencer.sponsormail', $datasponsor, function ($message) use ($cadena, $email) {
                    $message->from('servicio.mex@nikkenlatam.com', 'Pre-Registro Influencers');
                    $message->to($email)->subject('Pre-Registro Influencers Sponsor');
                    /*$message->bcc('fmelchor@nikkenlatam.com', 'Pre-Registro Influencers Sponsor');
                    $message->bcc('aescobar@nikkenlatam.com', 'Pre-Registro Influencers Sponsor');*/
                });

                $codeconsecutive = new \App\consecutiveCodesTest();
                $codeconsecutive->code = $newCode;
                $codeconsecutive->create_at = date('Y-m-d h:m:i');
                $codeconsecutive->save();
            }
        }

        $dataRegist = "";
        return \Response::json($datainserted);
    }

    public function preInscInfvalidateEmail(Request $request){
        $email = $request->input('email');
        $conection = \DB::connection('sqlsrv5');
            $response = $conection->select("SELECT E_Mail FROM Associates_Influencer WHERE E_Mail = '$email'");
        \DB::disconnect('sqlsrv5');
        return $response;
    }

    public function preInscInfGenealogy(Request $request){
        $associateid = $request->input('associateid');
        $language = $request->language;

        App::setLocale($language);

        $conection = \DB::connection('sqlsrv5');
            $response = $conection->select("exec GenTree_Influencer '$associateid';");
        \DB::disconnect('sqlsrv5');

        $sponsorPaisCHL = "otro";
        $statusGen = "";
        $status = "";
        $patStatus = 1;
        $stRetomer = 0;

        foreach ($response as $curassoc) {
            $getSponsor = $conection->select("SELECT SponsorId FROM Associates_Influencer WHERE AssociateId = $curassoc->sponsorid");
            \DB::disconnect('sqlsrv5');

            if(!empty($getSponsor)){
                $sponsorPaisCHL = "CHL";

                foreach($getSponsor as $sponsorId){
                    $sponsorstatus = \App\control_ci::select(
                        'control_ci.b4'
                    )
                    ->where('codigo', '=', $sponsorId->SponsorId)
                    ->first();
            
                    if(!empty($sponsorstatus)){
                        $patStatus = $sponsorstatus->b4;
                    }
                }
            }

            $product = \App\control_ci::select(
                'control_ci.b4'
            )
            ->where('codigo', '=', $curassoc->associateid)
            ->first();
            
            if(!empty($product)){
                $status = $product->b4;
            }
            else{
                $status = 0;
            }

            $getretomar = \App\control_ci::select(
                'control_ci.b4'
            )
            ->where('codigo', '=', $curassoc->associateid)
            ->first();
    
            if (!empty($getretomar)) {
                $stRetomer = 1;
            }
            else{
                $stRetomer = 0;
            }

            $statusGen = $statusGen . $curassoc->associateid . '-' . $status . '-' . $curassoc->sponsorid . '-' . $sponsorPaisCHL . '-' . $stRetomer . ';';
        }

        return view('preInscInfluencer.hijos',compact('language', 'response', 'associateid', 'patStatus', 'statusGen', 'stRetomer'));
        //return view('preInscInfluencer.hijos',compact('language', 'response', 'associateid'));
    }

    public function preInscInfLoginprocess(Request $request){
        $userName = $request->input('userName');
        $userPass = $request->input('userPass');

        $conection = \DB::connection('sqlsrv5');
            $login = $conection->select("SELECT * FROM Login_Influencer WHERE Associateid = $userName AND password_Infl = '$userPass';");
        \DB::disconnect('sqlsrv5');

        return $login;
    }

    public function preInscInfpdf(Request $request){
        $associateid = $request->associateid;
        $sponsorid = $request->sponsorid;

        $language = $request->language;

        App::setLocale($language);

        $conection = \DB::connection('sqlsrv5');
            $datainserted = $conection->select("SELECT * FROM  Associates_Influencer WITH (NOLOCK) WHERE Associateid = $associateid");
            $sponsor = $conection->select("SELECT * FROM Sponsor_CHL WITH (NOLOCK) WHERE associateid = $sponsorid");
        \DB::disconnect('sqlsrv5');

        //return view('pdf', compact('datainserted', 'sponsor'));
        $pdf = \PDF::loadView('preInscInfluencer.pdf', compact('datainserted', 'sponsor', 'flag', 'language'));
        return $pdf->download('NIKKEN CHile.pdf');
    }

    public function getSponsors(Request $request){
        $datoabuscar = $request->datoabuscar;

        $conection = \DB::connection('sqlsrv5');
            $response = $conection->select("SELECT TOP 7 associateid, AssociateName FROM Sponsor_CHL WHERE associateid LIKE '%$datoabuscar%' OR AssociateName LIKE '%$datoabuscar%'");
        \DB::disconnect('sqlsrv5');

        $resultado = '';
        foreach ($response as $key) {
            $resultado = $resultado . "
                <a href='javascript:void(0)' style='cursor: pointer; width: 100%;' id='" . $key->associateid . '-' . $key->AssociateName ."' onclick='clearDiv(this.id)'>" . 
                    "<label width='100%'>" . $key->associateid . '-' . $key->AssociateName . "</label>" .
                "</a'>
            ";
        }
        return $resultado;
    }

    public function preInscInfValidaSponsor(Request $request){
        $datoabuscar = $request->sponsorId;
        $conection = \DB::connection('sqlsrv5');
            $response = $conection->select("SELECT * FROM Sponsor_CHL WHERE associateid = $datoabuscar");
        \DB::disconnect('sqlsrv5');

        return \Response::json($response);
    }

    public function preInscInfRecoveracount(Request $request){
        $email = str_replace(" ", "", $request->email);
        $lang = $request->language;
        $status = 0;
        $apFirstName = '';
        $user = '';
        $psswd = '';

        $conection = \DB::connection('sqlsrv5');
            $existMail = $conection->select("SELECT ApFirstName, AssociateId, E_Mail FROM Associates_Influencer WHERE E_Mail = '$email';");
            if(!empty($existMail)){
                $status = 1;
                foreach($existMail as $row){
                    $apFirstName = $row->ApFirstName;
                    $getLogin = $conection->select("SELECT * FROM Login_Influencer WHERE Associateid = $row->AssociateId;");
                }
            }
            else{
                $status = 0;
            }
        \DB::disconnect('sqlsrv5');

        if($status == 1){
            foreach($getLogin as $login){
                $user = $login->Associateid;
                $psswd = $login->password_Infl;
                $data = array(
                    'name' => "$apFirstName",
                    'user' => "$user",
                    'pass' => "$psswd",
                    'lang' => "$lang",
                );
                Mail::send('preInscInfluencer.emailRecover', $data, function ($message) use ($email) {
                    $message->from('servicio.mex@nikkenlatam.com', 'Recuperación Cuenta de Pre-Inscripción');
                    $message->to($email)->subject('Recuperación Cuenta de Pre-Inscripción');
                });
            }
            return "success"; exit;
        }
        return "fail"; exit;
    }

    public function updatePreInsc(Request $request){
        $pais = $request->pais;
        $nombre = $request->nombre;
        $celPhone = $request->celPhone;
        $itemKit = $request->itemKit;
        $sponsor = $request->sponsor;
        $email = $request->email;
        $phone2 = $request->phone2;
        $associateid = $request->associateid;
        $lang = $request->language;

        $conection = \DB::connection('sqlsrv5');
            $update = $conection->update("UPDATE Associates_Influencer
                                        SET ApFirstName = '$nombre',
                                            Pais = '$pais',
                                            Phone1 = '$celPhone',
                                            Phone2 = '$phone2',
                                            E_Mail = '$email',
                                            Itemkit = '$itemKit'
                                        WHERE AssociateId = $associateid;");
            if($update){
                $preinscInfo = $conection->select("SELECT A.AssociateId, A.ApFirstName, A.SponsorId, A.Pais, A.E_Mail, A.Phone1, A.Phone2, A.Itemkit, CONCAT(B.associateid, '-', B.associateName) AS Sponsor, C.password_Infl
                                                FROM Associates_Influencer A WITH (NOLOCK)
                                                INNER JOIN Sponsor_CHL B ON A.SponsorId = B.associateid
                                                INNER JOIN Login_Influencer C ON A.AssociateId = C.AssociateId
                                                WHERE A.AssociateId = $associateid;");
            }
        \DB::disconnect('sqlsrv5');

        try{
            foreach($preinscInfo as $row){
                $data = array(
                    'name' => $row->ApFirstName,
                    'user' => $row->AssociateId,
                    'pass' => $row->password_Infl,
                    'lang' => $lang,
                    'sponsor' => $row->Sponsor,
                );
            }
    
            Mail::send('preInscInfluencer.email', $data, function ($message) use ($email) {
                $message->from('servicio.mex@nikkenlatam.com', 'Pre-Registro Influencers');
                $message->to($email)->subject('Pre-Registro Influencers');
            });
        }
        catch (Exception $e){
            echo $e;
        }
        
        return $preinscInfo;
    }

    public function preInscInfReturnInc(Request $request){
        $email = $request->mail;
        $conection = \DB::connection('sqlsrv5');
            $preinscInfo = $conection->select("SELECT A.AssociateId, A.ApFirstName, A.SponsorId, A.Pais, A.E_Mail, A.Phone1, A.Phone2, A.Itemkit, CONCAT(B.associateid, '-', B.associateName) AS Sponsor
                                                FROM Associates_Influencer A
                                                INNER JOIN Sponsor_CHL B
                                                ON A.SponsorId = B.associateid
                                                WHERE A.E_Mail = '$email'");
        \DB::disconnect('sqlsrv5');
        if(sizeof($preinscInfo) > 0){
            return $preinscInfo;
        }
        else{
            return 0;
        }
    }

    public function preInscInfSponsorGen(Request $request){
        $associateid = $request->associateid;
        $language  = $request->lang;
        App::setLocale($language);

        $conection = \DB::connection('sqlsrv5');
            $response = $conection->select('EXEC GenTree_Influencer_OV ' . $associateid);
        \DB::disconnect('sqlsrv5');

        $statusGen = "";
        $status = "";
        foreach($response as $row){
            $statusPreInsc = \App\control_ci::select(
                'control_ci.b4'
            )
            ->where('codigo', '=', $row->associateid)
            ->first();

            if(!empty($statusPreInsc)){
                $status = $statusPreInsc->b4;
            }
            else{
                $status = 0;
            }

            $statusGen .= $row->associateid . ";" . $status . ":";
        }
        return view('preInscInfluencer.sponsorGen', compact('response', 'language', 'statusGen'));
    }

    public function preInscInfGetDepartamento(Request $request){
        $paisNum = $request->paisNum;
        $departamentos = \App\departamentos::select(
            'control_states.state_code'
        )
        ->distinct()
        ->where('pais', '=', $paisNum)
        ->orderBy('state_code','asc')
        ->get();
        
        return \Response::json($departamentos);
    }

    public function preInscInfGetProvincias(Request $request){
        $paisNum = $request->paisNum;
        $provincias = \App\provincias::select(
            'citys.code','citys.name'
        )
        ->distinct()
        ->where('country', '=', $paisNum)
        ->orderBy('name','asc')
        ->get();
        
        return \Response::json($provincias);
    }

    public function preInscInfGetResindeceOne(Request $request){
        $NumPais = $request->NumPais;
        $state_code = $request->depto;
        $departamentos = \App\departamentos::select(
            'control_states.province_code', 'control_states.province_name'
        )
        ->distinct()
        ->where('pais', '=', $NumPais)
        ->where('state_code', '=', $state_code)
        ->orderBy('province_name','asc')
        ->get();
        
        return \Response::json($departamentos);
    }

    public function preInscInfGetResindeceTwo(Request $request){
        $NumPais = $request->NumPais;
        $state_code = $request->depto;
        $provincia = $request->provincia;
        $departamentos = \App\departamentos::select(
            'control_states.colony_code', 'control_states.colony_name'
        )
        ->distinct()
        ->where('pais', '=', $NumPais)
        ->where('state_code', '=', $state_code)
        ->where('province_code', '=', $provincia)
        ->orderBy('province_name','asc')
        ->get();
        
        return \Response::json($departamentos);
    }
}
