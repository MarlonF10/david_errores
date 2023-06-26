@extends('layouts.app')

@section('template_title')
    Restaurant
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Restaurante') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('restaurants.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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

										<th>Nombre</th>
										<th>Dirección</th>
										<th>Número de teléfono</th>
										<th>Hora de apertura</th>
										<th>Hora de cierre</th>
										<th>Id Empleado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($restaurants as $restaurant)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $restaurant->name }}</td>
											<td>{{ $restaurant->direction }}</td>
											<td>{{ $restaurant->cellphone }}</td>
											<td>{{ $restaurant->star_time }}</td>
											<td>{{ $restaurant->finish_time }}</td>
											<td>{{ $restaurant->id1 }}</td>

                                            <td>
                                                <form action="{{ route('restaurants.destroy',$restaurant->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('restaurants.show',$restaurant->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('restaurants.edit',$restaurant->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $restaurants->links() !!}
            </div>
        </div>
    </div>
@endsection
