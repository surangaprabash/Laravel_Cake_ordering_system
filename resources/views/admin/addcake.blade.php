<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/cakeadd.css">
</head>
<body>
<!-- Navbar -->
@include('admin/nav')
<!-- End Navbar -->

<button type="button" onclick="openPopup()" class="btn btn-dark m-3 ">Add a New Cake</button>

@if (session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif

<div class="popup-container" id="popupContainer">
    <div class="popup">
      <button class="close-btn btn btn-danger" onclick="closePopup()">Close</button>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="h2">Add a New Cake</p>
            </div>
            <div class="col-12 input-box">
                <form action="{{ url('addcake') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-field mb-2">
                        <label for="image" class="mb-1">Enter category of the cake</label> 
                        <input type="text" name="category" id="">
                    </div>
                    <div class="input-field mb-2">
                        <label for="image" class="mb-1">Enter Description</label> 
                        <textarea name="description" id="" cols="10" rows="5">Enter description</textarea>
                    </div>
                    <div class="input-field mb-2">
                        <label for="image" class="mb-1">Price of the cake</label> 
                        <input type="text" name="price" id="">
                    </div>
                    <div class="input-field mb-2">
                        <label for="image" class="mb-1">choose cake image</label> 
                        <input type="file" name="image" id="">
                    </div>
                    <div class="input-field mb-2">
                        <input class="btn btn-dark mt-2" type="submit" value="Add Cake">
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>

@foreach ($newCake as $item)

<div class="container_fluid ps-4 pe-4 pt-2">
    <div class="row p-1 bg-gray rounded-4">
        <div class="col-2 cake-image" style="background-image: url('/images/{{ $item->image}} ');"></div>
        <div class="col-2 text-center right_border content_center">{{ $item->category }}</div>
        <div class="col-3 right_border">
            <p class="p">{{ $item->description }}</p>
        </div>
        <div class="col-1 right_border content_center">RS <br>{{ $item->price }}/=</div>
        <div class="col-2 right_border content_center">
            @if ($item->available=='yes')
            <h5 class="text-dark me-2">Available</h5>
            @endif
            @if ($item->available=='no')
            <h5 class="text-dark me-2">Not Available</h5>
            @endif
        </div>
        <div class="col-2 end_card content_center">
            <a href="{{ url('editcake/'.$item->id )}}" class="btn btn-dark me-2">Edit</a>
            <a href="{{ url('deletecake/'.$item->id )}}" class="btn btn-danger">Delete</a>
        </div>
    </div>
</div>

@endforeach

  <script>
    function openPopup() {
      document.getElementById('popupContainer').style.display = 'flex';
    }

    function closePopup() {
      document.getElementById('popupContainer').style.display = 'none';
    }
  </script>


<script>
  var element = document.getElementById("act1");
  element.classList.add("active");
</script>

<script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>
<script src="/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="/jQuery/jQuery.js"></script>
</body>
</html>