<div class="rounded-lg px-8 py-6 mb-8" style="margin-top: 1vw; border: 1px solid #4299e1;">
    <form method="POST" 
            action="{{ route('home') }}"
            enctype="multipart/form-data">
     @csrf

     <div style="display: flex;">
            <textarea name="body" 
                  class="w-full"
                  placeholder="What's up doc?"
                  required
                  autofocus
            ></textarea>

            <div class="row">
                  <input type="file"
                        id="image"
                        name="image">

                        
                  @error('image')
                        <p class="text-red-500 text-sm mt-2">{{ $message}}</p>
                  @enderror
            </div>
      </div>


      <hr style="border-top: 1px solid #4299e1;">


      <footer class="flex justify-between items-center">
            
            <div class="rounded-full mr-2-xl"
                  style="display: flex; border: 1px solid #4299e1">
                  <img src="{{ auth()->user()->avatar}}" 
                        style="width: 40px; height: 40px" 
                        class="rounded-full mr-2" 
                        alt="ur avatar"
                  >

                  <a href="{{ auth()->user()->path() }}">
                      <h5 style="padding-right:2vw; padding-top:0.5vw;">
                        {{ auth()->user()->username}}
                      </h5>
                  </a>
            </div>
            

            <button type="submit"
                  class="bg-blue-500 hover:bg-blue-700 rounded-lg shadow px-10 text-sm text-white h-10"
            >
                  P O S T
            </button>

      </footer>
    </form>

    @error('body')
          <p class="text-red-500 text-sm mt-2">{{ $message}}</p>
    @enderror

 </div>