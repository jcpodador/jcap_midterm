<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>IPT Midterm CheapTalk</title>
</head>

<style>
    .container{
        margin-top:50px;
    }
    
    .navbar{
        height:30px;
        padding-bottom: 4%;
    }

    body{
        background-image:url('bg3.jpg');
        background-size: cover; 
    }
    
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-primary bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand text-warning" href="/"><i class="fas fa-headset"></i> CheapTalk</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
            aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link box text-info" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-info nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="far fa-list"></i> Category
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach(App\Models\Category::get() as $category)
                                <li>
                                    <a class="dropdown-item" href="/categories/{{$category->id}}">{{$category->category}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link box text-info" href="/authors"><i class="fas fa-users"></i> Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link box text-info" href="/logout">Logout</a>
                        </li>
                    @else
                        <li><a class=" nav-link box text-info " href="/login">Login</a></li>
                        <li><a class=" nav-link box text-info" href="/register">Register</a></li>
                    @endif
                </ul>
              </div>
        </div>
    </nav>
</div>
<br>
    @if (session ('Error'))
        <div class="alert alert-danger">
            <div class="container">
                {{session('Error')}}
            </div>
        </div>
    @endif
    @if (session ('Message'))
        <div class="alert alert-primary">
            <div class="container">
                {{session('Message')}}
            </div>
        </div>
    @endif
    @if (session ('errors'))
        <div class="alert alert-warning">
            <div class="container">
                Please fix the following errors
                <ul>
                    @foreach (session('errors')->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    </div>
        @yield('content')
    </div>
</body>
</html>