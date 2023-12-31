@extends('layouts.app')

@section('template_title')
    Menu
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Menú') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('menus.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Categoría</th>
										<th>Clasificación</th>
										<th>Id Platillos</th>
										<th>Id Bebidas</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menus as $menu)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $menu->category }}</td>
											<td>{{ $menu->classification }}</td>
											<td>{{ $menu->id_saurcers }}</td>
											<td>{{ $menu->id_drinks }}</td>

                                            <td>
                                                <form action="{{ route('menus.destroy',$menu->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('menus.show',$menu->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('menus.edit',$menu->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $menus->links() !!}
            </div>
        </div>
    </div>
@endsection
