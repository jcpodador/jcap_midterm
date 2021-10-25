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

    .mb-3{
        background: linear-gradient(
            rgba(0,0,0,0,7);
        )
    }

</style>

<br><br>
<body>
    <div class = "container">
        <div class="row mt-5 mb-2">
            <div class="col-md-4 offset-md-4">

                <form action="{{url('/register')}}" method="post">
                    {{csrf_field()}}
                    
                    <div class="card bg-transparent border-dark">
                        <div class="card-body">
                            <div class="class d-flex justify-content-center">
                                <img src="icon.png"  class="rounded-circle" style="height: 100px">
                            </div>
                                <div class="mb-3">
                                    <label for="name" style="font-weight: 500">Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="gender" style="font-weight: 500">Gender</label>
                                    <select name="gender" id="gender" class="form-select">
                                        <option value="Male" style="font-weight: 500">Male</option>
                                        <option value="Female" style="font-weight: 500">Female</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="email" style="font-weight: 500">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="password" style="font-weight: 500">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="submit">Register</button>
                                </div>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

@stop