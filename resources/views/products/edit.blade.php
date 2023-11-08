<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('edit a product') }}
        </h2>
    </x-slot>

  

<div>
    @if($errors->any())
<ul>

@foreach ($errors->all() as $error)
 <li>{{$error}}</li>
    
@endforeach


</ul>
    @endif
</div>


    <form method="post" action="{{route('product.update',  ['product' => $product])}}">
        @csrf 
        @method('put')
       <div>
         <label>Name</label>
        <input type="text" name="name" placeholder="Name"  value="{{$product->name}}" />
</div> 
<div>
        <label>Qty</label>
        <input type="number" name="qty" placeholder="Qty" value="{{$product->qty}}" />
        </div> 
<div>
        <label>Price</label>
        <input type="text" name="price" placeholder="Price" value="{{$product->price}}" />
        </div> 
<div>
        <label>Description</label>
        <textarea type="text" name="description" placeholder="Description" >{{$product->description}}</textarea>
        </div> 
<div>
        <input type="submit" value="Update" />
        </div> 
</form>

</x-app-layout>
