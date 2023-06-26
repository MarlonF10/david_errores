<?php

namespace App\Http\Controllers;

use App\Models\Saurcer;
use Illuminate\Http\Request;

/**
 * Class SaurcerController
 * @package App\Http\Controllers
 */
class SaurcerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saurcers = Saurcer::paginate();

        return view('saurcer.index', compact('saurcers'))
            ->with('i', (request()->input('page', 1) - 1) * $saurcers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saurcer = new Saurcer();
        return view('saurcer.create', compact('saurcer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Saurcer::$rules);

        $saurcer = Saurcer::create($request->all());

        return redirect()->route('saurcers.index')
            ->with('success', 'El platillo ha sido guardado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saurcer = Saurcer::find($id);

        return view('saurcer.show', compact('saurcer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saurcer = Saurcer::find($id);

        return view('saurcer.edit', compact('saurcer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Saurcer $saurcer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saurcer $saurcer)
    {
        request()->validate(Saurcer::$rules);

        $saurcer->update($request->all());

        return redirect()->route('saurcers.index')
            ->with('success', 'El platillo ha sido actualizado.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $saurcer = Saurcer::find($id)->delete();

        return redirect()->route('saurcers.index')
            ->with('success', 'El platillo ha sido eliminado');
    }
}
