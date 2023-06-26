<?php

namespace App\Http\Controllers;

use App\Models\Utencil;
use Illuminate\Http\Request;

/**
 * Class UtencilController
 * @package App\Http\Controllers
 */
class UtencilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utencils = Utencil::paginate();

        return view('utencil.index', compact('utencils'))
            ->with('i', (request()->input('page', 1) - 1) * $utencils->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $utencil = new Utencil();
        return view('utencil.create', compact('utencil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Utencil::$rules);

        $utencil = Utencil::create($request->all());

        return redirect()->route('utencils.index')
            ->with('success', 'Utencilio agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $utencil = Utencil::find($id);

        return view('utencil.show', compact('utencil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $utencil = Utencil::find($id);

        return view('utencil.edit', compact('utencil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Utencil $utencil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utencil $utencil)
    {
        request()->validate(Utencil::$rules);

        $utencil->update($request->all());

        return redirect()->route('utencils.index')
            ->with('success', 'Utencilio actualizdo');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $utencil = Utencil::find($id)->delete();

        return redirect()->route('utencils.index')
            ->with('success', 'Utencilio eliminado');
    }
}
