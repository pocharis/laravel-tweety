@extends('layouts.app')

@section('content')

    
    <header class="mb-6 relative">
        <img 
            src="/images/default-profile-banner.jpg" 
            alt=""
            class="mb-2"
        >

        <div class="flex justify-between items-center mb-5">
          <div>
            <h2 class="font-bold text-2xl mb-0"> {{ $user->name }}</h2>

            <p class="text-sm">Joined {{$user->created_at->diffForHumans() }}</p>
          </div>

          <div class="flex">
          @can('edit', $user)
             <a href="/profiles/{{ auth()->user()->username }}/edit" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
          @endcan
             <x-follow-button :user="$user"></x-follow-button>
          </div>
                
        </div>

        <p class="text-sm">
            Noe I am jhere  Noe I am jhere  Noe I am jhere
            Noe I am jhere  Noe I am jhere  Noe I am jhere
            Noe I am jhere  Noe I am jhere  Noe I am jhere
            Noe I am jhere  Noe I am jhere  Noe I am jhere
        </p>

        <img 
            src="{{ $user->avatar}}"  
            class="rounded-full mr-2 absolute" 
            alt="profile"
            style="width:150px; left:calc(50% - 75px); top:138px"
        >

   

    </header>



    @include('_timeline',[
        'tweets' => $user->tweets
    ])

    
@endsection