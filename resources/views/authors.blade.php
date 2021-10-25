@extends('base')

@section('content')

  <section id="services" class="container">
        <h2 class="display-4 mt-5 mb-3"><i class="fas fa-users"></i> Users</h2>
        <hr>
        @foreach($users as $user)
        <div class="card my-3 py-3 {{($user->gender == 'Male') ? 'male' : 'female'}}">
            <div class="card-body">
                <h5 class="card-title">
                    <i class="fas fa-user"></i> {{$user->name}}
                </h5>
                <h3>
                    <a href="/authors/{{$user->id}}" class="btn text-white"><i class="fas fa-arrow-right"></i> User Posts</a>
                </h3>
            </div>
        </div>
      @endforeach
   </section>
   
@endsection