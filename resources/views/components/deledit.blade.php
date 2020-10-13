@if ($tweet->user_id == Auth::id())
<ul style="display: flex; margin-right:0; margin-top:10px;">

    <li style="margin-left: 4vw;">
        <a href="{{ route('tweet.edit', $tweet)}}">
            <button type="button"
                    class="bg-green-500 hover:bg-green-700 rounded-lg shadow px-10 text-sm text-white h-10 rounded-full mr-2"
                    style="color: white;">
                Edit
            </button>
        </a>
    </li>

    <li style=" padding-right: 2vw;">
        <a href="{{ route('tweet.delete', ['id' => $tweet->id]) }}">
            <button type="button"  
                    class="bg-red-500 hover:bg-red-700 rounded-lg shadow px-10 text-sm text-white h-10"
                    style="color: white; "
            >
                Delete</button>
        </a> 
    </li>

    
</ul>
@endif