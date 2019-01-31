<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\perfila;
use App\Models\eskaintzak;
use App\Models\erlazioa;

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
        $perfila = perfila::where('email', 'ikaslea@ikaslea.com') -> first();//$user -> email)
        //dd($perfila);
        return view('ikasleaPerfila', compact('perfila'));
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
        return view('ikasleaCV');
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
    public function baja($email)
    {
        
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
