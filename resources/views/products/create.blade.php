<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Add a product') }}
        </h2>
    </x-slot>

    
 <div class=" ">Welcome  
    @if (!Auth::guest()) 
    {{ Auth::user()->name }}
@endif
, in this section you can propose a product.</div>  
 
<div>
    @if($errors->any())
<ul>

@foreach ($errors->all() as $error)
 <li>{{$error}}</li>
    
@endforeach
 
</ul>
    @endif
</div>


    <form method="post" action="{{route('product.store')}}">
        @csrf 
        @method('post')
       <div>
         <label>Name</label>
        <input type="text" name="name" placeholder="Name" />
</div> 
<div>
        <label>Qty</label>
        <input type="number" name="qty" placeholder="Qty" />
        </div> 
<div>
        <label>Price</label>
        <input type="text" name="price" placeholder="Price" />
        </div> 
<div>
        <label>Description</label>
        <textarea type="text" name="description" placeholder="Description" ></textarea>
        </div> 
<div>
        <input type="submit" value="save a new product" />
        </div> 
</form> 

    
</x-app-layout>
