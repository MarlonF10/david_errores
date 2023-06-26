<?php

namespace App\Http\Controllers;

use App\Models\RegistersRecipe;
use Illuminate\Http\Request;

/**
 * Class RegistersRecipeController
 * @package App\Http\Controllers
 */
class RegistersRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registersRecipes = RegistersRecipe::paginate();

        return view('registers-recipe.index', compact('registersRecipes'))
            ->with('i', (request()->input('page', 1) - 1) * $registersRecipes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registersRecipe = new RegistersRecipe();
        return view('registers-recipe\create', compact('registersRecipe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(RegistersRecipe::$rules);

        $registersRecipe = RegistersRecipe::create($request->all());

        return redirect()->route('registers_recipes.index')
            ->with('success', 'La receta ha sido añadida.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registersRecipe = RegistersRecipe::find($id);

        return view('registers_recipes.show', compact('registersRecipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registersRecipe = RegistersRecipe::find($id);

        return view('registers-recipe\edit', compact('registersRecipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RegistersRecipe $registersRecipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistersRecipe $registersRecipe)
    {
        request()->validate(RegistersRecipe::$rules);

        $registersRecipe->update($request->all());

        return redirect()->route('registers_recipes.index')
            ->with('success', 'La receta ha sido actualizada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
       // RegistersRecipe::find($id)->delete();
        RegistersRecipe::where('id','=', $id)->delete();

        return redirect()->route('registers_recipes.index')
            ->with('success', 'La receta ha sido eliminada');
    }
}
