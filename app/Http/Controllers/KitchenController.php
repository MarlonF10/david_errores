<?php

namespace App\Http\Controllers;

use App\Models\Kitchen;
use Illuminate\Http\Request;

/**
 * Class KitchenController
 * @package App\Http\Controllers
 */
class KitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kitchens = Kitchen::paginate();

        return view('kitchen.index', compact('kitchens'))
            ->with('i', (request()->input('page', 1) - 1) * $kitchens->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kitchen = new Kitchen();
        return view('kitchen.create', compact('kitchen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Kitchen::$rules);

        $kitchen = Kitchen::create($request->all());

        return redirect()->route('kitchens.index')
            ->with('success', 'Datos de cocina agregados.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kitchen = Kitchen::find($id);

        return view('kitchen.show', compact('kitchen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kitchen = Kitchen::find($id);

        return view('kitchen.edit', compact('kitchen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Kitchen $kitchen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kitchen $kitchen)
    {
        request()->validate(Kitchen::$rules);

        $kitchen->update($request->all());

        return redirect()->route('kitchens.index')
            ->with('success', 'Datos de cocina actualizados.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $kitchen = Kitchen::find($id)->delete();

        return redirect()->route('kitchens.index')
            ->with('success', 'Datos de cocina de eliminados');
    }
}
