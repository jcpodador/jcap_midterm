@extends('base')

@section('content')

  <section id="services" class="container">
    
     <h2 class="display-4 mt-5 mb-3">{{$category->category}} Post</h2>
     <hr>
     @foreach($posts as $post)
      <div class="card my-3 py-3 {{($post->user->gender == 'Male') ? 'male' : 'female'}}">
         <div class="card-body">
            <div class="dropdown float-end">
              <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-list"></i> {{$post->category->category}}
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    
                  @foreach(
                  App\Models\User::whereHas('posts', function($query) use ($post){
                     $query->where('category_id', $post->category_id);
                  })->get() as $user)

                  <li><a class="dropdown-item" href="/authors/{{$user->id}}">{{$user->name}}</a></li>
                  
                  @endforeach
    
              </ul>
            </div>
            <p class="card-title pb-3">
              <i class="fas fa-user"></i> {{$post->user->name}}
            </p>
            <p class="card-text rounded bg-white text-dark p-3 ">
              {{$post->post}}
            </p>
          </div>
      </div>
      @endforeach
   </section>
   
@endsection