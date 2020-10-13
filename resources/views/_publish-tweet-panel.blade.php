<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
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


      <hr class="my-4">

      <footer class="flex justify-between items-center">
            <div style="display: flex;">
                  <img src="{{ auth()->user()->avatar}}" 
                        style="width: 40px; height: 40px" 
                        class="rounded-full mr-2" 
                        alt="ur avatar"
                  >

                  <h5>
                        {{ auth()->user()->username}}
                  </h5>
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