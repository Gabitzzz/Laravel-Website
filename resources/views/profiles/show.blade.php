<x-app>

@section('content')
   <header class="mb-6 relative">
     <div class="relative">
         <img
            src="{{ $user->cover }}"
            alt="cover photo"
            class="mb-2"
         >

         <img src="{{ $user->avatar }}"
            class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" 
            style="left:50%"
            width="150"
         >
     </div>

      <div class="flex justify-between items-center mb-6">
         <div style="max-width: 270px">
               <h2 class="font-bold text-2xl mb-0">
                  {{  $user->username }}
               </h2>

               <h4 class="text-sm mb-0">
                  {{ $user->name }}
               </h4>

               <p class="text-xs">
                  Joined {{ $user->created_at->diffForHumans()}}
               </p>
         </div>

         <div class="flex">
           @can ('edit', $user)
               <a
                  href="{{ $user->path('edit') }}"
                  class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                  Edit Profile
               </a>   
           @endcan

            <x-follow-button :user="$user"></x-follow-button>

         </div>
      </div>

      <h4>
         {{$user->description}}
      </h4>

      
   </header>

   @include('_timeline', [
      'tweets' => $tweets
   ])

</x-app>