@extends('layouts.app')

@section('template_title')
    Saurcer
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Platillos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('saurcers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
										<th>Ingredientes principales</th>
										<th>Precio</th>
										<th>Comentarios</th>
										<th>Características</th>
										<th>Id restaurante</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saurcers as $saurcer)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $saurcer->name }}</td>
											<td>{{ $saurcer->type }}</td>
											<td>{{ $saurcer->main_ingredients }}</td>
											<td>{{ $saurcer->price }}</td>
											<td>{{ $saurcer->comments }}</td>
											<td>{{ $saurcer->characteristics }}</td>
											<td>{{ $saurcer->id3 }}</td>

                                            <td>
                                                <form action="{{ route('saurcers.destroy',$saurcer->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('saurcers.show',$saurcer->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('saurcers.edit',$saurcer->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $saurcers->links() !!}
            </div>
        </div>
    </div>
@endsection
