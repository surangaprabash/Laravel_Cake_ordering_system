<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
    @include('admin/nav')

    <table class="table table-striped mt-2">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">category</th>
                <th scope="col">tp-no</th>
                <th scope="col">address</th>
                <th scope="col">payment</th>
                <th scope="col">Required Date</th>
                <th scope="col">status</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($newOrders as $item)
            @php
                $specificCake = $allCakes->where('id', $item->cake_id)->first();
                $UserData = $allUsers->where('id', $item->user_id)->first();
            @endphp
            
            <tr>
                <th>{{ $item->id }}</th>
                <td>{{ $UserData->name }}</td>
                <td>{{ $specificCake->category }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->address }}</td>
                <td>
                    @if ($item->payment == 1) 
                        <p>Cash On delivery</p>
                    @elseif($item->payment == '2')
                        <p>Online paid</p>
                    @else
                        <p>Not paid</p>
                    @endif
                </td>
                <td>{{ $item->r_date }}</td>
                <td>
                    @if ($item->status == 1) 
                        <p class="bg-danger text-center">new</p>
                    @elseif($item->status == '2')
                        <p class="bg-warning text-center">processing</p>
                    @elseif($item->status == '4')
                        <p class="bg-secondary text-center">Rejected</p>
                    @elseif($item->status == '5')
                        <p class="bg-secondary text-center">User Canceled</p>
                    @else
                        <p class="bg-success text-center">delivered</p>
                    @endif
                </td>
                <td>
                    @if ($item->status == 1)
                        <a href="{{ url('reject_order/'.$item->id) }}" type="button" class="btn btn-danger">X</a>
                        <a href="{{ url('accept_order/'.$item->id) }}" type="button" class="btn btn-success">Accept</a>
                    @elseif($item->status == '2')
                    <a href="{{ url('reject_order/'.$item->id) }}" type="button" class="btn btn-danger">X</a>
                        <a href="{{ url('deliver_order/'.$item->id) }}" type="button" class="btn btn-success">Deliver</a>
                    @else
                        <button type="button" class="btn btn-primary">View</button>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
</table>

<!-- if($specificCake)
        <p>ID: $specificCake->id ,  Price:  $specificCake->price </p>
        <p>Passed ID:  $specificCakeId </p>
else
        <p>Specific cake not found.</p>
endif -->

<script>
  var element = document.getElementById("act2");
  element.classList.add("active");
</script>

<script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>
<script src="/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="/jQuery/jQuery.js"></script>
</body>
</html>