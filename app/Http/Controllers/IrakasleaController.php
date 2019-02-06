<?php

namespace App\Http\Controllers;
use App\Models\eskaintzak;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use Excel;
use File;
use Auth;

class IrakasleaController extends Controller
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

        return view('irakaslea', compact('eskaintzak'));
    }

    public function import(Request $request){
        //validate the xls file
        $this->validate($request, array(
            'file'      => 'required'
        ));
 
        if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
 
                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
 
                    foreach ($data as $key => $value) {
                        $insert[] = [
                        'name'  => $value->izena,  
                        'email' => $value->email,
                        'password' => Hash::make($value->pasahitza),
                        'departamentua' => $value->departamentua,
                        ];
                        /*$obj = new \stdClass();
                        $obj->email = $value->email;
                        $obj->pasahitza = $value->pasahitza;
                        $obj->sender = 'CIFP Txurdinaga LHII';
                        $obj->receiver = $value->izena;
                        dd(env('MAIL_HOST'));
                        Mail::to($value->email)->send(new DemoEmail($obj));*/
                    }
 
                    if(!empty($insert)){
 
                        $insertData = DB::table('users')->insert($insert);
                        if ($insertData) {
                            Session::flash('success', 'Your Data has successfully imported');
                        }else {                        
                            Session::flash('error', 'Error inserting the data..');
                            return back();
                        }
                    }
                }
 
                return back();
 
            }else {
                Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
                return back();
            }
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function eskaintzak()
    {
        //
        return view('irakasleaEskaintzaSortu');
    }

    public function Ikasleak(){
      $departamentua = Auth::user()->departamentua;

      $users = DB::table('users')
                    ->select('users.*','perfila.*')
                    ->join('perfila', 'perfila.email', '=', 'users.email')
                    ->where('users.departamentua', $departamentua)
                    ->where('users.rol', '2')
                    //$user->departamentua
                    ->get();


        return view('administratzaileaIkasleak', compact('users'));


    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Interesa(){
        //$user = Auth::user();
        
        $interesak = DB::table('erlazioa')
                    ->select('perfila.izena', 'perfila.apellidos', 'perfila.dni', 'perfila.email', 'eskaintzak.enpresa_Izena', 'eskaintzak.lan_Postua', 'eskaintzak.deskripzioa')
                    ->join('eskaintzak', 'eskaintzak.idEskaintzak', '=', 'erlazioa.idEskaintzak')
                    ->join('perfila', 'perfila.email', '=', 'erlazioa.email')
                    ->where('eskaintzak.departamentua', 'informatika')//$user->departamentua
                    ->get();

       


        
        

        return view('irakasleaInteresaIkusi', compact('interesak'));
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
    public function sortu(Request $request)
    {
        $eskaintzak= new eskaintzak();
        $eskaintzak->enpresa_Izena= $request['enpresa_Izena'];
        $eskaintzak->lan_Postua= $request['lan_Postua'];
      
        $eskaintzak->deskripzioa= $request['deskripzioa'];
         $eskaintzak->plaza_Hutsak= $request['plaza_Hutsak'];
          $eskaintzak->departamentua= $request['departamentua'];

    // add other fields
    $eskaintzak->save();


        return redirect('irakaslea');
   
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
