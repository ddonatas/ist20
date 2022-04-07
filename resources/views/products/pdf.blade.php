@extends('products.layout')
 
@section('content')



   

    
   
   
  
   
    <table class="table table-bordered">
        <tr>
           
            <th>Vardas</th>
            <th>Detales</th>
            <th>Miestas</th>
          
        </tr>
        @foreach ($products as $product)
        <tr>
            
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>{{ $product->city}}</td>
           
        </tr>
        @endforeach
    </table>
  
    
      
@endsection