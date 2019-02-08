<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Request;
use Illuminate\Support\Facades\DB;
use App\Models\perfila;
use App\Models\eskaintzak;
use App\Models\erlazioa;
use App\Models\hizkuntza;
use App\Models\titulazioa;
use App\Models\interesko_Datuak;
use App\User;



class IkasleaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = Auth::user();
        $eskaintzak = eskaintzak::where('departamentua', $user -> departamentua)->get();

        return view('ikaslea', compact('eskaintzak'));
    }
    public function Perfila(){


        $email = Auth::user()->email;        
        $perfila = perfila::where('email', $email) -> first();
        //dd($email);

       
        if (is_null($perfila)){
            return view('ikasleaPerfilaCreate');
        }else {
           return view('ikasleaPerfilaUpdate', compact('perfila')); 
        }

    }

    public function perfilaSortu(Request $request){

        $input = Request::post();

        $perfila= new perfila();
        $perfila->email= $input['email'];;
        $perfila->dni= $input['dni'];
        $perfila->izena= $input['izena'];
        $perfila->apellidos= $input['abizena'];
        $perfila->jaiotze_Data= $input['jaiotze_Data'];
        $perfila->helbidea= $input['helbidea'];
        $perfila->kontaktua= $input['kontaktua'];

        // add other fields
        $perfila->save();

        return redirect('/ikaslea/perfila');
    }

    public function perfilaAldatu(Request $request){

        $input = Request::all();
        //dd($input);
        $perfila= perfila::find($input['email']);
        $perfila->dni= $input['dni'];
        $perfila->izena= $input['izena'];
        $perfila->apellidos= $input['abizena'];
        $perfila->jaiotze_Data= $input['jaiotze_Data'];
        $perfila->helbidea= $input['helbidea'];
        $perfila->kontaktua= $input['kontaktua'];
        
        // add other fields
        $perfila->save();

        return redirect('/ikaslea/perfila');
    }

    public function Interesa(){
        $user = Auth::user()->email;
        

        $eskaintzak = DB::table('eskaintzak')
                    ->select('erlazioa.*','eskaintzak.*')
                    ->join('erlazioa', 'erlazioa.idEskaintzak', '=', 'eskaintzak.idEskaintzak')
                    ->where('erlazioa.email', $user)
                    ->get();

        

        return view('ikasleaInteresa', compact('eskaintzak'));
    }

    public function CV(){
        $email = Auth::user()->email;        
        $perfila = perfila::where('email', $email) -> first();

        $titulazioak = titulazioa::where('email', $email) ->get();
        $hizkuntzak = hizkuntza::where('email', $email)->get();
        $interesak = interesko_Datuak::where('email', $email)->first();

        if(isset($perfila) && isset($titulazioak) && isset($hizkuntzak) && isset($interesak)){
            return view('ikasleaCVUpdate', compact('perfila', 'titulazioak', 'hizkuntzak', 'interesak'));
        } else {
          return view('ikasleaCVCreate');  
        }

        
    }
    public function CVSortu(Request $request){
        //dd($request);
        $input = Request::post();
        $mailak = $input['maila'];
        $hizkuntzak = $input['hizkuntza'];
       
        $perfila= new perfila();
        $perfila->email= $input['email'];;
        $perfila->dni= $input['dni'];
        $perfila->izena= $input['izena'];
        $perfila->apellidos= $input['abizena'];
        $perfila->jaiotze_Data= $input['jaiotze_Data'];
        $perfila->helbidea= $input['helbidea'];
        $perfila->kontaktua= $input['kontaktua'];

        // add other fields
        $perfila->save();
        foreach ($input['titulazioa'] as $titulazioa1) {
            $titulazioa= new titulazioa();
            $titulazioa->email= $input['email'];
            $titulazioa->titulazio_Izena= $titulazioa1;
            //dd($titulazioa);
            $titulazioa->save();
        }

        foreach ($hizkuntzak as $index => $hizkuntza1) {
            $hizkuntza= new hizkuntza();
            $hizkuntza->email= $input['email'];
            $hizkuntza->hizkuntza= $hizkuntza1;
            $hizkuntza->maila= $mailak[$index];

           $hizkuntza->save();
        }
        $interesa= new interesko_Datuak();
        $interesa->email= $input['email'];
        $interesa->lan_Esperientzia= $input['lan_Esperientzia'];
        $interesa->gida_Baimena= $input['gida_Baimena'];
        $interesa->kotxea= $input['kotxea'];
        $interesa->erabilgarritasuna= $input['erabilgarritasuna'];
        $interesa->zure_Deskripzioa= $input['deskribapena'];

        $interesa->save();

        return redirect('/ikaslea/CV');
    }

    public function CVAldatu(Request $request){
        $input = Request::all();
        $mailak = $input['maila'];
        $hizkuntzak = $input['hizkuntza'];
        
        //dd($input);
        $perfila= perfila::find($input['email']);
        $perfila->dni= $input['dni'];
        $perfila->izena= $input['izena'];
        $perfila->apellidos= $input['abizena'];
        $perfila->jaiotze_Data= $input['jaiotze_Data'];
        $perfila->helbidea= $input['helbidea'];
        $perfila->kontaktua= $input['kontaktua'];
        
        // add other fields
        $perfila->save();
        foreach ($input['titulazioa'] as $titulazioa1) {
            $do = titulazioa::where('email', '=', $input['email'])
                ->where('titulazio_Izena', '=', $titulazioa1)
                ->count();

            if ($do == 0){
                $titulazioa= new titulazioa();
                $titulazioa->email= $input['email'];
                $titulazioa->titulazio_Izena= $titulazioa1;
                //dd($titulazioa);
                $titulazioa->save();
            }
            
        }

        foreach ($hizkuntzak as $index => $hizkuntza1) {
            $do = hizkuntza::where('email', '=', $input['email'])
                ->where('hizkuntza', '=', $hizkuntza1)
                ->count();
            if ($do == 0){    
                $hizkuntza= new hizkuntza();
                $hizkuntza->email= $input['email'];
                $hizkuntza->hizkuntza= $hizkuntza1;
                $hizkuntza->maila= $mailak[$index];

                $hizkuntza->save();
            }
        }
        
        $interesa = interesko_Datuak::find($input['email']);
        $interesa->lan_Esperientzia= $input['lan_Esperientzia'];
        $interesa->gida_Baimena= $input['gida_baimena'];
        $interesa->kotxea= $input['kotxea'];
        $interesa->erabilgarritasuna= $input['erabilgarritasuna'];
        $interesa->zure_Deskripzioa= $input['deskribapena'];

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
