<?php

namespace App\Http\Controllers;
use App\Models\Bicikla;

use Illuminate\Http\Request;

class BiciklController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $r = Bicikla::all();
        return view('bicikle.index')->with('r',$r);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bicikle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'model'=>'required',
            'boja'=>'required',
            'materijal'=>'required',
            'stanje'=>'required',
            'uzrast'=>'required',
            'cena'=>'required',
     ]);
        $r = new Bicikla();
        $r->model = $request->input('model');
        $r->boja = $request->input('boja');
        $r->materijal = $request->input('materijal');
        $r->stanje = $request->input('stanje');
        $r->uzrast = $request->input('uzrast');
        $r->cena = $request->input('cena');
        $r->save();
        return redirect('/bicikle')->with('success','Nova bicikla je uspesno kreirana!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $r = Bicikla::find($id);
        return view('bicikle.show')->with('r',$r);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $r = Bicikla::find($id);
        return view('bicikle.edit')->with('r',$r);
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
        $r = Bicikla::find($id);
        $r->model = $request->input('model');
        $r->boja = $request->input('boja');
        $r->materijal = $request->input('materijal');
        $r->stanje = $request->input('stanje');
        $r->uzrast = $request->input('uzrast');
        $r->cena = $request->input('cena');
        $r->save();
        return redirect('/bicikle')->with('success','Novi bicikl je uspesno azuriran!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b = Bicikla::find($id);
        $b->delete();
        return redirect('/bicikle')->with('success','Bicikl je uspesno izbrisan!');
    }
}
