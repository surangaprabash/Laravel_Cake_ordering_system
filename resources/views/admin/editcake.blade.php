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

<div class="popup-container" id="popupContainer">
    <div class="popup">
      <a href="{{ url('addcake') }}" class="close-btn btn btn-danger">Back</a>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="h2">Edit Details</p>
            </div>
            <div class="col-12 input-box">
                <form action="{{ url('update_cake/'.$cake->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="input-field mb-2">
                        <label for="image" class="mb-1">Enter category of the cake</label> 
                        <input type="text" name="category" value="{{ $cake->category }}" id="">
                    </div>
                    <div class="input-field mb-2">
                        <label for="image" class="mb-1">Enter Description</label> 
                        <textarea name="description" id="" cols="10" rows="3">{{ $cake->description }}</textarea>
                    </div>
                    <div class="input-field mb-2">
                        <label for="image" class="mb-1">Price of the cake</label> 
                        <input type="text" name="price" value="{{ $cake->price }}" id="">
                    </div>
                    <div class="input-field mb-2">
                        <label for="image" class="mb-1">choose cake image</label> 
                        <input type="file" name="image" id="">
                    </div>
                    <div class="input-field mb-2">
                        <input class="btn btn-dark mt-2" type="submit" value="Save data">
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>

  <script>
    document.getElementById('popupContainer').style.display = 'flex';
  </script>


<script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>
<script src="/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="/jQuery/jQuery.js"></script>
</body>
</html>