<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/css/stylehome.css">
    <script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>
    <script src="/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/jQuery/jQuery.js"></script>

</head>
<body class="body-bg">
<!-- nav bar -->
@include('nav')
<!-- end navbar -->

<div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-12">
                <header class="h2">Edit Profile</header>
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
            </div>
        </div>
        <form class="form-group" action="{{ url('profile/'.Auth::user()->id )}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <!-- Profile Information Section -->
                <div class="col-md-6">
                <div class="form-group input-field">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="{{ Auth::user()->name }}">
                    </div>

                    <div class="form-group input-field">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="{{ Auth::user()->email }}">
                    </div>

                    <div class="form-group input-field">
                        <label for="telephone">Telephone</label>
                        <input name="tp_number" type="tel" class="form-control" id="telephone" placeholder="{{ Auth::user()->tp_number }}">
                    </div>

                    <div class="form-group input-field">
                        <label for="address">Address</label>
                        <textarea name="address" class="form-control" id="address" rows="3" placeholder="{{ Auth::user()->address }}"></textarea>
                    </div>
                </div>

                <!-- Current Password Section -->
                <div class="col-md-6">
                    <div class="form-group input-field">
                        <label for="current_password">Current Password</label>
                        <input name="current_password" type="password" class="form-control" id="current_password" placeholder="Current Password">
                    </div>
                    <div class="form-group input-field">
                        <label for="password">Change Password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="New Password">
                    </div>

                    <div class="form-group input-field">
                        <label for="confirm-password">Confirm Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="confirm-password" placeholder="Confirm Password">
                    </div>
                </div>
            </div>

            <!-- Save Button -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group input-field text-center">
                        <input type="submit" class="btn save-button mt-2 btn-dark" value="Save">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
  var nav = document.getElementById("navbar");
  nav.classList.remove("fixed-top");
</script>

<script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>
<script src="/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="/jQuery/jQuery.js"></script>
</body>
</html>