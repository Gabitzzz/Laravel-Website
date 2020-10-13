 {{-- COMENTE URATE
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

        {{-- <hr style="height:2px;border-width:0;color:gray;background-color:gray"> --}}



<div class="container">
    <div class="row">
        <div class="col-md-8">
               

                    @foreach($tweet->comments as $comment)
                        <div class="display-comment">
                           <div style="display: inline-block">
                                <img src="{{ auth()->user()->avatar }}" 
                                style="height: 25px; display:inline-block;" 
                                class="rounded-full mr-2" 
                                alt=""
                            >
                                <strong>{{ $comment->user->name }}</strong>
                                <p style="display: inline-block">{{ $comment->body }}</p>

                           </div>
                        </div>
                    @endforeach

                    
                  

                    <div>

                        <form method="post" action="{{ route('comment.add') }}">
                            @csrf

                            <div class
                                    style="display: flex;
                                            ">

                                <div style="display:flex; margin-right:0.5vw;">
                                    <img src="{{ auth()->user()->avatar }}" 
                                    style="height: 25px; margin-top:0.5vw" 
                                    class="rounded-full mr-2" 
                                    alt=""
                                >
                                    <p style="margin-top:0.5vw">
                                        {{ auth()->user()->username }}
                                    </p>
                                </div>

                                <input type="text" 
                                        name="comment_body" 
                                        class="rounded-full mr-2l"
                                        style="border: 1px solid #4299e1; height:40px; margin-left:2vw; padding-left:1vw; padding-right:1vw;"
                                        placeholder="Comment"


                                />

                                <input type="hidden" 
                                        name="tweet_id" 
                                        value="{{ $tweet->id }}"

                                />

                                <input type="submit" 
                                        class="bg-blue-500 hover:bg-blue-700 rounded-lg shadow px-10 text-sm text-white h-10" 
                                        value="Add Comment"
                                        style="margin-left:0.5vw;"
                                />


                            </div>

                           
                        </form>

                    </div>

        </div>
        
    </div>
    <hr>

</div>