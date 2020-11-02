<div class="rounded-lg py-4 px-6"
        style="position: fixed;
        border: 1px solid #4299e1;
        margin-top:1vw;
        width:15vw;">
    <h3 class="font-bold text-xl mb-4" 
        style="color: #4299e1; text-align:center;">
        Following
    </h3>
    
    <hr style="border-top: 1px solid #4299e1;">

    <ul>
       @forelse (current_user()->follows as $user)
    <li class="{{ $loop->last ? '' : 'mb-2' }}">
                <div>
                    <a href="{{ route('profile', $user) }}" 
                        class="flex items-center text-sm" 
                        style="color: #4299e1">
                        
                        <img 
                            src="{{ $user->avatar}}" 
                            style="width: 40px; height: 40px" 
                            class="rounded-full mr-2" 
                            alt=""
                        >
            
                        {{ $user->name}}
                    </a>
                </div>
            </li>
        @empty
        <li>No friends yet.</li>
       @endforelse
    </ul>


</div>