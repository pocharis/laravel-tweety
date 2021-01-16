<div class="border border-blue-400 rounded-lg p-8 mb-8">

    <form method="POST" action="/tweets">
        @csrf

        <textarea 
            name="body"
            class="w-full"
            placeholder="whats up Chale"
        ></textarea>

        <hr class="my-3">
        <div class="flex py-1 items-center justify-between">
            <div class="">
                <img 
                    src="{{ auth()->user()->avatar}}"  
                    class="rounded-full" 
                    alt="profile"
                    width="50"
                    height="50"
                >
            </div>
        
            <div class="" >
                <button 
                    type="submit" 
                    class="bg-blue-500 rounded-lg shadow py-1 px-2 text-white"
                >
                    Tweet-a-roo
                </button>
            </div>
        </div>
    
    </form>

   @error('body')

        <p class="text-red-500 text-sm">{{ $message }}</p>
   @enderror
    
</div>
