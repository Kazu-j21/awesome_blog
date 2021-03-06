@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row object-list">
            <div class="col-sm-8 offset-2">    
                <div class="card activity-feed">
                    <div class="card-body">
                            {{-- to display array content one by one, we use foreach --}}
                        <h3 class="mb-4">All Members</h3>
                            @foreach ($users as $user)
                                <div>
                                    <article class="card my-3">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="align-self-center mr-3">
                                                    <div class="avatar">
                                                        <div class="default">
                                                            <a href="/users/{{ $user->id }}/show">              
                                                                <img src="{{ asset('img/'. $user->avatar) }}" class="mr-3" width="64">  
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media-body py-3">
                                                    <strong>
                                                        <a href="/users/{{ $user->id }}/show">{{ $user->first_name . $user->last_name }}</a>
                                                    </strong>
            
                                                    <div class="float-right">
                                                        @if (auth()->user()->isFollowing($user->id))
                                                            <a href="{{ route('user.unfollow', ['followed_id' => $user->id]) }}" class="btn btn-danger">Unfollow</a>
                                                        @else
                                                            <a href="{{ route('user.follow', ['followed_id' => $user->id]) }}" class="btn btn-primary">Follow</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>    
                                </div>
                            @endforeach  
                        </div>
                    </div>
                </div>
            </div>
        </div>
 @endsection
                   