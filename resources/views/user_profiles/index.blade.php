@extends('layouts.main')
    @section('content')
        @foreach ($userProfiles as $userProfile) 
            <div class="p-4">
                {{ $userProfile->nickname }}
                {{ $userProfile->first_name }}
                {{ $userProfile->last_name }}
                {{ $userProfile->email }}
            </div>
        @endforeach
    @endsection        
