@extends('layouts.app')

@section('content')


    @foreach($users as $user)

        <a href="{{ $user->path() }}" class="flex items-center mb-5"> 
           
                <img 
                src="{{ $user->avatar}}"  
                class="rounded-full mr-2" 
                width="50"
                height="50"
                alt="profile">
                
                <div class="ml-4">
                    <h4 class="folt-bold">
                        {{'@'.$user->username}}
                    </h4>
                </div>
            

        </a>

    @endforeach
    {{ $users -> links()}}

   
@endsection