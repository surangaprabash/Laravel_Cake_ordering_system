<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/css/stylehome.css">
    <link rel="stylesheet" href="/css/stylemyorder.css">
    <script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>
    <script src="/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/jQuery/jQuery.js"></script>
</head>
<body>

<!-- nav bar -->
@include('nav')
<!-- end navbar -->

<div class="container">
    <h2 class="title">Your Order</h2>
    <div class="row mt-4">
        <div class="col-12 bg-secondary content-box">
            @if($data->isEmpty())
                <p class="p-4">You have not made any orders.</p>
                <div class="text-center">
                    <a href="{{ url('reqorder') }}" class="btn order-button mt-4 btn-dark">Order now</a>
                </div>
            @else
            <table class="table table-striped mt-2">
                <thead>
                    <tr>
                        <th></th>
                        <th>Cake</th>
                        <th>Order date</th>
                        <th>Recive date</th>
                        <th>status</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                        
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $item->cake->category }}</th>
                        <th>{{ $item->created_at->format('Y-m-d') }}</th>
                        <th>{{ $item->r_date }}</th>
                        <th>
                            @if ($item->status == 1) 
                                <p class="bg-success text-center">new</p>
                            @elseif($item->status == '2')
                                <p class="bg-warning text-center">processing</p>
                            @elseif($item->status == '4')
                                <p class="bg-danger text-center">Rejected</p>
                            @elseif($item->status == '5')
                                <p class="bg-secondary text-center">Canceled</p>
                            @else
                                <p class="bg-success text-center">delivered</p>
                            @endif
                        </th>
                        <th>
                            <a href="{{ url('cancel_order/'.$item->id) }}" class="btn btn-dark @unless($item->status == 1)disabled @endif">Cancel</a>

                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        @endif
        </div>
    </div>
</div>


<!-- footer -->
@include('footer')
<!-- end footer -->

<script>
  var element = document.getElementById("act5");
  element.classList.add("active");
</script>
</body>
</html>