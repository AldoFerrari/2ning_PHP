<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('List of the product') }}
        </h2>
    </x-slot>

  
 
<div>
    <div>
        @if(session()->has('success'))
        <div> {{session('success')}}  </div>
        @endif
    </div>

    <div> 
        <a href="{{route('product.create')}}">Create a product</a>
         </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Description</th>
   
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td> {{$product->id}}</td>        
                <td> {{$product->name}}</td>        
                <td> {{$product->qty}}</td>        
                <td> {{$product->price}}</td>        
                <td> {{$product->description}}</td>
                
                <td> <a href="{{route('product.edit', ['product'=> $product ] )}}">Edit</a></td>
                
                <td>  
                    <form method="post" action="{{route('product.destroy',  ['product' => $product])}}"> 
                        @csrf 
        @method('delete')
          <input type="submit" value="Delete"  /> 
                        </form>
                 </td>        

            </tr>
        @endforeach 
    </table>
</div>

</x-app-layout>
