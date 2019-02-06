<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\administratzaileak;
use Illuminate\Http\Request;
use App\User;



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

        $users = DB::table('users')
        ->whereIn('email', function($query)
        {
            $query->select(DB::raw('email'))
                  ->from('users')
                  ->where('egoera', 1)
                  ->where('rol',2);
        })
        ->get();
        

        return view('administratzaileaIkasleak', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function irakasleak()
    {
        //if(!$request->ajax())return redirect('/administratzailea/irakasleak');
        $users = DB::table('users')->where ('rol',1)-> get();
        return view('administratzaileaIrakaslea', compact('users'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function borrar(Request $email)
    {
        $administratzaileak = DB::table('Administratzaileak')->where ('email',$email)-> delete();
        return view('administratzaileaIrakaslea');
    }

    
    public function IrakasleakSortu(){
        return view('administratzaileaIrakasleaSortu');
    }
    public function insert(Request $request)
    {     
        $Administratzailea= new User();
        $Administratzailea->email= $request['email'];
        $Administratzailea->password= Hash::make($request['pasahitza']);
        $Administratzailea->rol= $request['mota'];
        $Administratzailea->egoera= $request['egoera'];
        $Administratzailea->departamentua= $request['departamentua'];

    // add other fields
    $Administratzailea->save();


        return redirect('/administratzailea/irakasleak');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function delete($email)
    {
        administratzaileak::destroy($email);
        return redirect('/administratzailea/irakasleak');
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
