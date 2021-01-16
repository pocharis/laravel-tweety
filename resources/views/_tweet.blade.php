<div class="flex p-4 border-b border-b-gray-400">
            

    
        <div class="mr-4 flex-shrink-0">
            <a href="{{route('profile', $tweet->user)}}">
                <img 
                    src="{{ $tweet->user->avatar}}"  
                    class="rounded-full mr-2" 
                    width="50"
                    height="50"
                    alt="profile">
            </a>
        </div>
    
        <div>
            <a href="{{route('profile', $tweet->user)}}">
                <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
            </a>
            <p class="text-sm">
                {{$tweet->body}}
            </p>
        </div>
    
    
</div>
