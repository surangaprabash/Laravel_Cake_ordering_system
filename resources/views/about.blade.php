<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/css/styleabout.css">
    <link rel="stylesheet" href="/css/stylehome.css">
    <script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>
    <script src="/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/jQuery/jQuery.js"></script>
</head>
<body>

<!-- nav bar -->
@include('nav')
<!-- end navbar -->

<h2 class="h2">Our Story</h2><br>

<p>Welcome to our delectable world of sweetness! At [Name], <br>we craft more than just cakes;<br>we create edible masterpieces that celebrate life's sweet moments.<br>
With a passion for perfection and a dash of creativity, <br>our talented bakers use only the finest ingredients to <br>turn your
 visions into indulgent reality. <br>Whether it's birthdays, weddings, or any occasion worth savoring,<br> join us in making every moment a bit more delightful with our scrumptious treats.<br> Explore the artistry of flavor, design, and joy at [Name].</p>

<h2 class="button"><a href="{{ url('reqorder') }}" class="btn order-button mt-4 btn-dark">Order Now</a></h2>

<!-- footer -->
@include('footer')
<!-- end footer -->

<script>
  var element = document.getElementById("act2");
  element.classList.add("active");
</script>

</body>
</html>