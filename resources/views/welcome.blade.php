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
    <!-- Hero section -->
    <section class="hero-section">
        <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
            <h1>Cake ordering system</h1>
            <h2>IAD Project Group 11</h1>
            <a href="{{ url('reqorder') }}" class="btn order-button mt-4 btn-dark">Order now</a>
        </div>
    </section>
    <!-- End Hero Section -->

    <!--Body-->
    <div class="container py-5">
        <h1 class="text-center">Popular Cakes</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

        @foreach ($newCake as $item)

            <div class="col">
                <div class="card">
                    <img src="/images/{{ $item->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->category }}</h5>
                        <p class="card-text">{{ $item->description }}</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <h3 class="h4 text-danger">RS {{ $item->price }}/-</h3>
                        <a href="{{ url('reqorder') }}" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
            </div>

        @endforeach

        </div>
    </div>
    <!--End Body-->

<!-- footer -->
@include('footer')
<!-- end footer -->

<script>
  var element = document.getElementById("act1");
  element.classList.add("active");
</script>
</body>
</html>