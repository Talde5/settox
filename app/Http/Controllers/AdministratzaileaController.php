<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\administratzaileak;
use Illuminate\Http\Request;

class AdministratzaileaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('administratzailea');
    }
    public function Ikasleak(){
       // $ikasleak = ikasleak::where('egoera', 1)->get();

        $ikasleak = DB::table('perfila')
        ->whereIn('email', function($query)
        {
            $query->select(DB::raw('email'))
                  ->from('ikasleak')
                  ->where('egoera', 1);
        })
        ->get();
        

        return view('administratzaileaIkasleak', compact('ikasleak'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function irakasleak()
    {
        //if(!$request->ajax())return redirect('/administratzailea/irakasleak');
        $administratzaileak = DB::table('administratzaileak')->where ('mota',1)-> get();
        return view('administratzaileaIrakaslea', compact('administratzaileak'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function borrar(Request $email)
    {
        $administratzaileak = DB::table('Administratzaileak')->where ('email','$email')-> delete();
        return view('administratzaileaIrakaslea');
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $this->validate(request(), [
            
            'email' => 'required|email',
            'pasahitza' => 'required',
          	 'mota' => 'required',
          	 'egoera' => 'required',
            'departamentua' => 'required'
        ]);
      
        
        $Administratzaileak = Administratzaileak::create(request([ 'email', 'pasahitza','mota','egoera','departamentua']));
        
        
        
        return redirect()->to('/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  




 
               
            
            






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
