<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/reqorder.css">
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row order_row">
            
            <div class="col-md-6 right">
                
                <div class="input-box">
                   
                   <header class="h2">Order a cake</header>
                        <form action="{{ url('reqorder') }}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="input-field">
                                <select name="cake_id" id="cake_pri" class="input">
                                    <option value="" disabled>Select a cake</option>
                                    @foreach($allCakes as $cake)
                                    <option value="{{ $cake->id }}|{{ $cake->price }}">{{ $cake->category }}</option>
                                    @endforeach
                                 
                                </select>
                            </div> 
                            <div class="input-field">
                                <textarea name="description" id="tarea" class="input long" id="" rows="4" cols="50">Enter some details about cake</textarea>
                            </div> 
                            <div class="input-field">
                                <input id="quantity" name="quantity" type="number" class="input" value="1"  required="" autocomplete="off">
                                <label for="quantity">quantity</label> 
                            </div> 
                            <div class="input-field">
                                <input id="address" name="address" type="text" class="input" required="" autocomplete="off">
                                <label for="address">Address</label> 
                            </div> 
                            <div class="input-field">
                                <input id="pnumber" name="phone" type="text" class="input" required="" autocomplete="off">
                                <label for="pnumber">Phone number</label> 
                            </div>  
                            <div class="input-field">
                                    <input type="button" class="submit" value="Next" onclick="openPopup()">
                            </div> 
                            <div class="popup-container" id="popupContainer">
                                <div class="popup">
                                <a class="close-btn btn btn-danger" onclick="closePopup()">Close</a>
                               
                                <div class="popup-wrapper">
                                    <div class="container popupmain">
                                        <div class="row">
                                        
                                            <div class="col-12">
                                            <h1 class="popup-title mt-4 mb-4">Summery</h1>
                                                <table>
                                                    <tr><th>Name </th><td id="pop_name"></td></tr>
                                                    <tr><th>Contact </th><td id="pop_cno"></td></tr>
                                                    <tr><th>Address </th><td id="pop_add"></td></tr>
                                                    <tr><th>Quantity </th><td id="pop_qun"></td></tr>
                                                    <tr><th>Price </th><td id="pop_pri"></td></tr>
                                                    <tr><th>Total </th><td id="pop_total"></td></tr>
                                                    <input type="hidden" id="pop_to" name="total">
                                                    <tr>
                                                        <th>Required date</th>
                                                        <td>
                                                            <div class="input-field">
                                                                <input id="r_date" name="r_date" type="date" class="input" value="1"  required="" autocomplete="off">
                                                            </div> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Payment method</th>
                                                        <td id="pop_total">
                                                            <div class="input-field">
                                                                <select name="payment" id="" class="input">
                                                                    <option value="1">Cash on Delivery</option>
                                                                    <option value="2" disabled>pay online</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <input type="submit" class="btn btn-dark sub-button mt-4 mb-4" value="Confirm"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>
                </div>  
            </div>

            <div class="col-md-6 side-image">
                       
                <!-------------      image     ------------->
                
                <!-- <img src="/images/Bakery-Logo.png" alt=""> -->
                <div class="text">
                    <p></p>
                </div>
                
            </div>


        </div>
    </div>
</div>


<script>
    
    function openPopup() {

        var qun = document.getElementById('quantity').value;
        var add = document.getElementById('address').value;
        var pno = document.getElementById('pnumber').value;

        var selectElement = document.getElementById("cake_pri");
        

        var selectedOption = selectElement.options[selectElement.selectedIndex];
        var optionValue = selectedOption.value;
        var valuesArray = optionValue.split('|');
        var secondValue = valuesArray[1];

        var result = parseFloat(qun) * parseFloat(secondValue);

        if (qun == null || qun == "") {
            alert("Quantity Cannot be empty");  
        }else if (add == null || add == "") {
            alert("Address cannot be empty");  
        }else if (pno == null || pno == "") {
            alert("Contact Number cannot be empty");  
        }else{  
            document.getElementById('pop_name').innerHTML = ": {{ Auth::user()->name}}";
            document.getElementById('pop_cno').innerHTML = ": "+pno;
            document.getElementById('pop_add').innerHTML = ": "+add;
            document.getElementById('pop_qun').innerHTML = ": "+qun;
            document.getElementById('pop_pri').innerHTML = ": RS "+secondValue;
            document.getElementById('pop_total').innerHTML = ": RS "+result;
            document.getElementById('pop_to').value = result;
            document.getElementById('popupContainer').style.display = 'flex';
        }
    }

    function closePopup() {
      document.getElementById('popupContainer').style.display = 'none';
    }
  </script>
<script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>
<script src="/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="/jQuery/jQuery.js"></script>
</body>
</html>