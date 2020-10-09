@if ($tweet->user_id == Auth::id())
<ul>
    <li>
        <a href="{{ route('tweet.delete', ['id' => $tweet->id]) }}">
            <button type="button"  
                    class="bg-red-500 hover:bg-red-700 rounded-lg shadow px-10 text-sm text-white h-10"
                    style="color: white; border-radius: 50%;"
            >
                Delete</button>
        </a> 
    </li>

    <li style="margin-top: 5%">
        <a href="{{ route('tweet.edit', $tweet)}}">
            <button type="button"
                    class="bg-green-500 hover:bg-green-700 rounded-lg shadow px-10 text-sm text-white h-10"
                    style="color: white; border-radius: 50%;">
                Edit
            </button>
        </a>
    </li>
</ul>
@endif