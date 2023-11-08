 
 

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Welcome') }}
            </h2>

        </x-slot>


        
        welcome
        @if (!Auth::guest()) 
        {{ Auth::user()->name . " " . Auth::user()->email }}
    @endif
    to the portal 2uningAuto.com
     

            
                <div class="flex justify-center"> 
                    <div class="panel-body"> 
                        <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="2ningauto" height="50px;">
                    </div>
                </div>

                <?php /* 
               comment example
                */ ?> 
                {{--    comment example --}}
                <h3>product list</h3>
                <ul>   
                    @foreach($products as $product)
                       
                             <li>    
                              {{$product->name}} - {{$product->qty}} \ {{$product->price}} 
                              \  {{$product->description}}
                          </li>   
                     @endforeach  
                </ul>


                    <h3>users list</h3>
                 <ul>   
                      @foreach($users as $user)
                         
                               <li>    
                                {{$user->name}} 
                            </li>   
                       @endforeach  
                  </ul>
                       <h3>Cars list</h3>
                       <ul>   
                        @foreach($products as $product)
                           
                                 <li>    
                                  {{$product->name}} - {{$product->qty}} \ {{$product->price}} 
                                  \  {{$product->description}}
                              </li>   
                         @endforeach  
                    </ul>

                       <h3>Clubs list</h3>
                       <ul>   
                        @foreach($products as $product)
                           
                                 <li>    
                                  {{$product->name}} - {{$product->qty}} \ {{$product->price}} 
                                  \  {{$product->description}}
                              </li>   
                         @endforeach  
                    </ul>
      
  
</x-app-layout>