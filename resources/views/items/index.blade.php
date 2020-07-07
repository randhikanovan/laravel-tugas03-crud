@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
        <h1>Data Item</h1>
        <a href = "/items/create" class="btn btn-primary mb-2">
            Create New Item
        </a>

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Bordered Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>                  
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th style="width: 40px">Price</th>
                    <th style="width: 40px">Stock</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($items as $key => $item)
                        <tr>
                            <td> {{ $key+1 }} </td>
                            <td> {{ $item->name }} </td>
                            <td> {{ $item->description }} </td>
                            <td> {{ $item->price }} </td>
                            <td> {{ $item->stock }} </td>
                            <td>
                                <a href="/items/{{$item->id}}" class="btn btn-sm btn-info">Show</a>
                                <a href="/items/{{$item->id}}/edit" class="btn btn-sm btn-default">Edit</a>
                                <form action="/items/{{$item->id}}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            {{-- <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
              </ul>
            </div>
          </div> --}}

    </div>
    
@endsection