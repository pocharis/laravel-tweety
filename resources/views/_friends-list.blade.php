<h3 class="font-bold mb-4 text-lg">Follows</h3>

<ul>

    @forelse (auth()->user()->follows as $user)
        <li class="mb-4"> 
            <div class="">
                
            <a class="flex items-center text-sm" href="{{route('profile', $user)}}">
                
                <img 
                    src="{{ $user->avatar }}" 
                    alt=""
                    width="40"
                    height="40"
                    class="rounded-full mr-2"
                >
                
                {{ $user->name }}

            </a>
            
            </div>
            
        </li>
    @empty
        <li>No friends yet</li>
    @endforelse

</ul>