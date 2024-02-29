<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/login.css">

</head>
<body>


<div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                       
                <!-------------      image     ------------->
                
                <img src="/images/Bakery-Logo.png" alt="">
                <div class="text">
                    <p>Join and Order a cake</p>
                </div>
                
            </div>

            <div class="col-md-6 right">
                
                <div class="input-box">
                   
                   <header class="h2">Login</header>

                   @if(Session::has('error'))
                        <div class="alert alert-danger">
                          {{Session::get('error')}}
                        </div>
                   @endif
                   @if(Session::has('success'))
                        <div class="alert alert-success">
                          {{Session::get('success')}}
                        </div>
                   @endif

                   <form action="{{ route('login') }}" method="post">
                    @csrf
                    @method('post')
                        <div class="input-field">
                              <input type="text" name="email" class="input" id="email" required="" autocomplete="off">
                              <label for="email">Email</label> 
                          </div> 
                        <div class="input-field">
                              <input type="password" name="password" class="input" id="pass" required="">
                              <label for="pass">Password</label>
                          </div> 
                        <div class="input-field">
                              
                              <input type="submit" class="submit" value="Sign Up">
                        </div> 
                   </form>
                   <div class="signin">
                   <a class="small text-muted" href="#!"></a><br>
                   <span><a href="#">Forgot password?</a></span><br>
                    <span>Don't have an account? <a href="{{ url('register') }}">Create Now</a></span>
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