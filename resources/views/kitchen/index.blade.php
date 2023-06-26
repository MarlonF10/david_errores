@extends('layouts.app')

@section('template_title')
    Kitchen
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cocina') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('kitchens.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir datos') }}
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
										<th>Nombre de cocineros</th>
										<th>Nombre de meseros</th>
										<th>Id Recetas</th>
										<th>Id Menú</th>
										<th>Id Utencilios</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kitchens as $kitchen)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $kitchen->n_cooks }}</td>
											<td>{{ $kitchen->n_waiters }}</td>
											<td>{{ $kitchen->id_recipes }}</td>
											<td>{{ $kitchen->id_menus }}</td>
											<td>{{ $kitchen->id_utencils }}</td>

                                            <td>
                                                <form action="{{ route('kitchens.destroy',$kitchen->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('kitchens.show',$kitchen->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('kitchens.edit',$kitchen->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $kitchens->links() !!}
            </div>
        </div>
    </div>
@endsection
