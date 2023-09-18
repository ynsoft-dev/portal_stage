<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard1') }}
        </h2>
    </x-slot>

    <div class="mt-10 ml-10 grid grid-cols-4 gap-4">
       
        @foreach ($cards as $card)
        
        <div class="card">
          <div class="image"><img class="image" src="{{$card->image}}" /></div>
           <div class="content">
              <a href="#">
                <span class="title">
                  {{$card->name}}
                 </span>
              </a>
         
              <p class="desc">
                 {{$card->description}}
              </p>
              <div class="btn">
                <a class="action" href="{{$card->link}}">
                  {{$card->btn}}
                  <span aria-hidden="true">
                   →
                  </span>
                </a>
                <div title="Like" class="heart-container">
                 <input id="Give-It-An-Id" class="checkbox" type="checkbox" onclick="window.location.href='/bookmarks/{{ Auth::user()->id}}/{{$card->id}}'" checked>
                
                <div class="svg-container">
                  <svg xmlns="http://www.w3.org/2000/svg" class="svg-outline" viewBox="0 0 24 24">
                      <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                      </path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" class="svg-filled" viewBox="0 0 24 24">
                      <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                      </path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" class="svg-celebrate">
                      <polygon points="10,10 20,20"></polygon>
                      <polygon points="10,50 20,50"></polygon>
                      <polygon points="20,80 30,70"></polygon>
                      <polygon points="90,10 80,20"></polygon>
                      <polygon points="90,50 80,50"></polygon>
                      <polygon points="80,80 70,70"></polygon>
                  </svg>
              </div>
              </div>
            </div>
           </div>
         </div>
        
            @endforeach
              
      </div>

</x-app-layout>
