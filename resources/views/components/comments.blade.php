 {{-- COMENTE URATE --}}
        <hr style="height:2px;border-width:0;color:red;background-color:red">
        
        <div class="mr-2" style=" display:inline; padding-left:50px;">
            <a href="{{ $tweet->user->path() }}">
                    <img src="{{ auth()->user()->avatar }}" 
                        style="height: 25px; margin-left: 50px; display:inline" 
                        class="rounded-full mr-2" 
                        alt=""
                    >    
            </a> 

            <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 rounded-lg shadow px-10 text-sm text-white h-10"
                    style="display: inline; margin-left: 350px; margin-top:10px;"
            >
              post comment
          </button>


            <textarea name="body" 
                        placeholder="Ur comment"
                        style="margin-left: 100px; border-radius:none !important;"
                        class="w-full"
                        required
            ></textarea>

           
        </div>
        {{--    END OF COMENTE URATE --}}

        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
