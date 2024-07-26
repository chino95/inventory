@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('article.create') }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="_method" value="delete" />
  @csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Price</th>
                        <th scope="col">User</th>
                        <th scope="col">Options</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @foreach($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>$ {{ number_format($item->price, 2) }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td><a href="/article/create">New</a></td>
                        <td><a href="{{ url('/article/edit', ['article' => $item->id]) }}">Edit</a></td>
                        <td><a href="{{ url('/article/delete', ['article' => $item->id]) }}">Delete</a></td>
                    </tr>
                    @endforeach
                          
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
