<?php

namespace App\Http\Controllers;
use App\Models\eskaintzak;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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

        return view('Add', compact('eskaintzak'));
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
                        'email' => $value->email,
                        'pasahitza' => $value->pasahitza,
                        'egoera' => $value->egoera,
                        ];
                    }
 
                    if(!empty($insert)){
 
                        $insertData = DB::table('ikasleak')->insert($insert);
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
        return view('irakasleaEskaintzak');
    }

    public function Ikasleak(){
        $ikasleak = DB::table('perfila')
        ->whereIn('email', function($query)
        {
            $query->select(DB::raw('email'))
                  ->from('ikasleak')
                  ->where('egoera', 1);
                  //and 'departamentua' $user -> departamentua
        })
        ->get();

        return view('administratzaileaIkasleak', compact('ikasleak'));
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
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function oferta()
    {
     


        return view('irakasleaEskaintzasortu');
   }
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
