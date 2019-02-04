<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\perfila;
use App\Models\eskaintzak;
use App\Models\erlazioa;
use App\Models\hizkuntza;
use App\Models\titulazioa;
use App\Models\interesko_Datuak;


class IkasleaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //$user = Auth::user();
        $eskaintzak = eskaintzak::all() ;//-> where('departamentua', 'informatika'//$user -> departamentua);

        return view('ikaslea', compact('eskaintzak'));
    }
    public function Perfila(){

        //$user = Auth::user();
        $perfila = perfila::where('email', 'ikasl@ikaslea.com') -> first();//$user -> email)
        //dd($perfila);
        if (is_null($perfila)){
            return view('ikasleaPerfilaCreate');
        }else {
           return view('ikasleaPerfilaUpdate', compact('perfila')); 
        }

    }

    public function Interesa(){
        //$user = Auth::user();
      $eskaintzak = DB::table('eskaintzak')
        ->whereIn('idEskaintzak', function($query)
        {
            $query->select(DB::raw('idEskaintzak'))
                  ->from('erlazioa')
                  ->where('email', 'ikaslea@ikaslea.com');
        })
        ->get();

        

        return view('ikasleaInteresa', compact('eskaintzak'));
    }

    public function CV(){
        //$user = Auth::user();
        $perfila = perfila::where('email', 'ikaslea@ikaslea.com') -> first();

        $titulazioak = titulazioa::where('email', 'ikaslea@ikaslea.com') ->get();
        $hizkuntzak = hizkuntza::where('email', 'ikaslea@ikaslea.com')->get();
        $interesak = interesko_Datuak::where('email', 'ikaslea@ikaslea.com')->first();

        if(isset($perfila) && isset($titulazioak) && isset($hizkuntzak) && isset($interesak)){
            return view('ikasleaCVUpdate', compact('perfila', 'titulazioak', 'hizkuntzak', 'interesak'));
        } else {
          return view('ikasleaCVCreate');  
        }

        
    }
    public function CVSortu(Request $request){
        dd($request);
        $perfila= new perfila();
        $perfila->email= $request['email'];
        $perfila->dni= $request['dni'];
        $perfila->izena= $request['izena'];
        $perfila->apellidos= $request['abizena'];
        $perfila->jaiotze_Data= $request['jaiotze_Data'];
        $perfila->helbidea= $request['helbidea'];
        $perfila->kontaktua= $request['kontaktua'];

        // add other fields
        $perfila->save();
        foreach (Request::get('titulazioa') as $titulazioa) {
            $titulazioa= new titulazioa();
            $titulazioa->email= $request['email'];
            $titulazioa->titulazio_Izena= $request['titulazioa'];
            //dd($titulazioa);
            $titulazioa->save();
        }

        foreach (Request::get('hizkuntza') as $hizkuntza) {
            $hizkuntza= new hizkuntza();
            $hizkuntza->email= $request['email'];
            $hizkuntza->hizkuntza= $request['hizkuntza'];
            $hizkuntza->maila= $request['maila'];

           $hizkuntza->save();
        }
        $interesa= new interesko_Datuak();
        $interesa->email= $request['email'];
        $interesa->lan_Esperientzia= $request['lan_Esperientzia'];
        $interesa->gida_Baimena= $request['gida_Baimena'];
        $interesa->kotxea= $request['kotxea'];
        $interesa->erabilgarritasuna= $request['erabilgarritasuna'];
        $interesa->zure_Deskripzioa= $request['deskribapena'];

        $interesa->save();

        return redirect('/ikaslea/CV');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        Auth::user();


        return view('ikasleaPerfila', compact('users'));
    }
    public function baja(Request $request)
    {
    	$egoera= '0';
        $user =  Auth()->user();

     $user->egoera=$egoera;
     $user->save();

         return redirect('/');
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
    public function show($email)
    {
       $user = DB::table('ikasleak');

		echo $user->email;

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
