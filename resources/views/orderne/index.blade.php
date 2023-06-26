@extends('layouts.app')

@section('template_title')
    Orderne
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ordenes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ordernes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear orden') }}
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
                                        
										<th>Id Platillo</th>
										<th>Id Bebida</th>
										<th>Id Cliente</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ordernes as $orderne)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $orderne->id_saurcers }}</td>
											<td>{{ $orderne->id_drinks }}</td>
											<td>{{ $orderne->id_customers }}</td>

                                            <td>
                                                <form action="{{ route('ordernes.destroy',$orderne->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ordernes.show',$orderne->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ordernes.edit',$orderne->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $ordernes->links() !!}
            </div>
        </div>
    </div>
@endsection
