@extends('layouts.app')

@section('template_title')
    Registers Recipe
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registro de recetas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('registers_recipes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir receta') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre de la receta</th>
										<th>Receta</th>
										<th>Tipo de receta</th>
										<th>Descripción</th>
										<th>Id Restaurante</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registersRecipes as $registersRecipe)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $registersRecipe->name_recipe }}</td>
											<td>{{ $registersRecipe->recipe }}</td>
											<td>{{ $registersRecipe->type_recipe }}</td>
											<td>{{ $registersRecipe->description }}</td>
											<td>{{ $registersRecipe->id2 }}</td>

                                            <td>
                                                <form action="{{ route('registers_recipes.destroy',$registersRecipe->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('registers_recipes.show',$registersRecipe->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('registers_recipes.edit',$registersRecipe->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $registersRecipes->links() !!}
            </div>
        </div>
    </div>
@endsection
