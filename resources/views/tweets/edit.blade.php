<x-app>
    <form method="POST" action="{{ $tweet->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                    for="body">
                Edit 
            </label>

            <input class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="body"
                    id="body"
                    value="{{ $tweet->body}}"
                    required
            >

            @error('body')
                <p class="text-red-500 text-xs mt-2"> {{ $message }} </p>
            @enderror


            <div class="mb-6">
                <button type = "submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4"
                >
                    Submit
                </button>
    
                <a href="{{route('home')}}" class="bg-red-500 text-white rounded py-2 px-4 hover:bg-red-700">Cancel</a>
            </div>

        </div>
    </form>

</x-app>