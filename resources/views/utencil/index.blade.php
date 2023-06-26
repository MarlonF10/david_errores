@extends('layouts.app')

@section('template_title')
    Utencil
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Utencilios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('utencils.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir nuevo utencilio') }}
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
										<th>Fecha de compra</th>
										<th>Uso</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($utencils as $utencil)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $utencil->name }}</td>
											<td>{{ $utencil->type }}</td>
											<td>{{ $utencil->date_purchase }}</td>
											<td>{{ $utencil->use }}</td>

                                            <td>
                                                <form action="{{ route('utencils.destroy',$utencil->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('utencils.show',$utencil->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('utencils.edit',$utencil->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $utencils->links() !!}
            </div>
        </div>
    </div>
@endsection
