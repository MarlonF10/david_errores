<?php

namespace App\Http\Controllers;

use App\Models\Orderne;
use Illuminate\Http\Request;

/**
 * Class OrderneController
 * @package App\Http\Controllers
 */
class OrderneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordernes = Orderne::paginate();

        return view('orderne.index', compact('ordernes'))
            ->with('i', (request()->input('page', 1) - 1) * $ordernes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orderne = new Orderne();
        return view('orderne.create', compact('orderne'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Orderne::$rules);

        $orderne = Orderne::create($request->all());

        return redirect()->route('ordernes.index')
            ->with('success', 'Orden añadida.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orderne = Orderne::find($id);

        return view('orderne.show', compact('orderne'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orderne = Orderne::find($id);

        return view('orderne.edit', compact('orderne'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Orderne $orderne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orderne $orderne)
    {
        request()->validate(Orderne::$rules);

        $orderne->update($request->all());

        return redirect()->route('ordernes.index')
            ->with('success', 'Orden actualizada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $orderne = Orderne::find($id)->delete();

        return redirect()->route('ordernes.index')
            ->with('success', 'Orden eliminada');
    }
}
