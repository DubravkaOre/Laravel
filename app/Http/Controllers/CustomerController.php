<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dvorana;
use App\Pred;
use App\Rezervacija;
use DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$users = DB::table('ispit')
          ->join('pred', 'ispit.sifPred', '=', 'pred.sifPred')
          ->select('ispit.sifPred', 'ispit.ocjena', 'pred.nazPred')
		  ->paginate(15)
       //->get() 
		;
		return view('shares.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shares.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'oznDvorana'=>'required|max:4|regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/',
        'kapacitet'=> 'required',
		'sifPred'=> 'required',
		'kratPred'=> 'required',
		'nazPred'=> 'required',
		'sifOrgjed'=> 'required',
		'upisanoStud'=> 'required',
		'brojSatiTjedno'=> 'required',
      ], [
                'oznDvorana.required' => 'Naziv je potreban i treba sadržavati najviše 4 slova'
            ]
	  );
      $share = new Dvorana([
        'oznDvorana' => $request->get('oznDvorana'),
        'kapacitet'=> $request->get('kapacitet')
      ]);
      $share->save();
	  $share1 = new Pred([
        'sifPred' => $request->get('sifPred'),
		'kratPred' => $request->get('kratPred'),
		'nazPred' => $request->get('nazPred'),
		'sifOrgjed' => $request->get('sifOrgjed'),
		'upisanoStud' => $request->get('upisanoStud'),
        'brojSatiTjedno'=> $request->get('brojSatiTjedno')
      ]);
      $share1->save();
	  
	  
      return redirect('/shares')->with('success', 'Stock has been added');
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
    public function edit($sifPred)
    {
        $user = Pred::find($sifPred);

        return view('shares.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sifPred)
{
      $request->validate([
        'sifPred'=>'required',
        'nazPred'=> 'required'
      ]);

      $user = Pred::find($sifPred);
      $user->sifPred = $request->get('sifPred');
      $user->nazPred = $request->get('nazPred');
      $user->save();

      return redirect('/shares')->with('success', 'Stock has been updated');
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
