@extends('users.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Veículos</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}">Cadastrar Veículo</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>ANO</th>
            <th width="280px">AÇÃO</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>
                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $users->links() !!}

@endsection