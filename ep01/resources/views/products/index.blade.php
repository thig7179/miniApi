@extends('products.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>PRODUTOS</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}">Add PRODUTOS</a>
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
            <th>NOME</th>
            <th>CUSTO</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th width="280px">AÇÃO</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nome }}</td>
                <td>R$ {{ $product->custo }}</td>
                <td>R$ {{ $product->preco }}</td>
                <td>{{ $product->quantidade }}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection