@extends('base')

@section('content')

<style>
    p{
        text-align: center;
    }
    body{
        background-image:url('bg2.jpg');
        background-size: cover;
    }
</style>
<br>
<br><br>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 offset-md-4">
                <div class="card bg-transparent border-dark">
                    <div class="card-body">
                        <div class="class d-flex justify-content-center">
                            <img src="icon.png" class="rounded-circle" style="height: 100px">
                        </div>
                <div class="card-body">
                    <form action="{{url('/login')}}" method="post">
                        {{csrf_field()}}
                        <div class="mb-4">
                            <label for="email" style="font-weight:500">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" style="font-weight: 500">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        
                        <div class="d-grid gap-2 col-5 mx-auto">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                        <br>
                        <p><a href="/">Forgot Password?</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>


@stop