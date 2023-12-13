<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/register.css">
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                       
                <!-------------      image     ------------->
                
                <img src="/images/Bakery-Logo.png" alt="">
                <div class="text">
                    <p>Join the community of developers <i>- ludiflex</i></p>
                </div>
                
            </div>

            <div class="col-md-6 right">
                
                <div class="input-box">
                   
                    <header class="h2">Register</header>

                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif

                   <form action="{{ route('register') }}" method="post">
                    @csrf
                    @method('post')

                    <div class="input-field">
                            <input type="text" class="input" name="name" id="name" autocomplete="off">
                            <label for="name">Name</label> 
                        </div>
                    <div class="input-field">
                            <input type="text" class="input" name="email" id="email" autocomplete="off">
                            <label for="email">Email</label> 
                        </div> 
                    <div class="input-field">
                            <input type="password" class="input" name="password"  id="pass">
                            <label for="pass">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" name="password_confirmation"  id="cpass">
                            <label for="cpass">Confirm Password</label>
                        </div>
                    <div class="input-field">
                            
                            <input type="submit" class="submit" value="Sign Up">
                    </div> 
                   </form>
                   <div class="signin">
                    <span>Already have an account? <a href="{{url('login')}}">Log in here</a></span>
                   </div>
                </div>  
            </div>
        </div>
    </div>
</div>
<script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>
<script src="/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="/jQuery/jQuery.js"></script>
</body>
</html>