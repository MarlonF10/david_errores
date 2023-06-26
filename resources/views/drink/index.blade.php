@extends('layouts.app')

@section('template_title')
    Drink
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Bebidas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('drinks.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir Bebidas') }}
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
										<th>Tipo</th>
										<th>Ingredientes Principales</th>
										<th>Precio</th>
										<th>Comentarios</th>
										<th>Características</th>
										<th>ID Cliente</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($drinks as $drink)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $drink->name }}</td>
											<td>{{ $drink->type }}</td>
											<td>{{ $drink->main_ingredients }}</td>
											<td>{{ $drink->price }}</td>
											<td>{{ $drink->comments }}</td>
											<td>{{ $drink->characteristics }}</td>
											<td>{{ $drink->id_customers }}</td>

                                            <td>
                                                <form action="{{ route('drinks.destroy',$drink->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('drinks.show',$drink->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('drinks.edit',$drink->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $drinks->links() !!}
            </div>
        </div>
    </div>
@endsection
