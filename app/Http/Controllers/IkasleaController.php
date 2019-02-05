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

        $email = Auth::user()->email;        
        $perfila = perfila::where('email', '$email') -> first();//$user -> email)
        //dd($email);
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

        /*dd($eskaintzak);
        $erlazioak = erlazioa::where('email', 'ikaslea@ikaslea.com') -> get();//$user -> email)
        //dd($erlazioa);// ->get('idEskaintzak'));
        foreach ($erlazioak as $erlazioa) {
            $idEsk = $erlazioa -> idEskaintzak;
        }
        dd($idEsk);

        $eskaintzak = eskaintzak::whereIn('idEskaintzak', $erlazioa -> idEskaintzak) -> get();*/

        return view('ikasleaInteresa', compact('eskaintzak'));
    }

    public function CV(){
        $email = Auth::user()->email;        
        $perfila = perfila::where('email', '$email') -> first();

        $titulazioak = titulazioa::where('email', '$email') ->get();
        $hizkuntzak = hizkuntza::where('email', '$email')->get();
        $interesak = interesko_Datuak::where('email', '$email')->first();

        if(isset($perfila) && isset($titulazioak) && isset($hizkuntzak) && isset($interesak)){
            return view('ikasleaCVUpdate', compact('perfila', 'titulazioak', 'hizkuntzak', 'interesak'));
        } else {
          return view('ikasleaCVCreate');  
        }

        
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
