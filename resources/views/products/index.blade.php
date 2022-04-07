@extends('products.layout')
 
@section('content')



   


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel CRUD projektas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                <a class="btn btn-info" href="{{ url('pdf') }}"> PDF </a>
            </div>
        </div>
    </div>
    
    <div class="row">
         <div class="row align-items-end">
                      
                <form action="{{ route('products.index') }}" method="GET" role="search">
                    <div class="form-group col-5 col-md-6 ">
                    <input type="text" class="form-control form-control-sm" name="term" placeholder="ieškok" id="term">
                        <a href="{{ route('products.index') }}" >  
                            </div>  

                            <div class="form-group col-5 col-md-1 ">  
                                <button class="btn btn-info" type="submit">Rasti</button>
                            </div> 

                            <div class="form-group col-5 col-md-1">
                                <button  class="btn btn-danger" type="button">Rodyti viską</button>
                      
                            </div>   
                        </a>
                </form>         
        </div>                
    </div>
    
   
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Nr</th>
            <th>Vardas</th>
            <th>Detales</th>
            <th>Miestas</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>{{ $product->city}}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-success" href="{{ route('products.edit',$product->id) }}">Edit</a>
                   
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