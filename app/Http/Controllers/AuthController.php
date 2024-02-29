<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cake;
use App\Models\Orders;

class AuthController extends Controller
{
    public function welcome(){
        
        $newCake = Cake::all();
        return view('welcome', compact('newCake'));
    }

    public function index(){
        return view('login');
    }

    public function login(Request $request){
        //dd($request->all());
        //$credentials
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        //login
   
        if(\Auth::attempt($request->only('email', 'password'))){

            if(\Auth::id()){
                $usertype=Auth()->user()->usertype;
                if($usertype=='admin'){
                    return redirect('admin');
                }else{
                    return redirect('/');
                }
            }
        }

        return redirect('login')->withError('Password and email not match');

    }

    public function register_here(){
        return view('register');
    }

    public function register(Request $request){

        //validate
        $request->validate([
            'name' =>'required',
            'email' =>'required|unique:users|email',
            'password' => 'required|min:8|confirmed'
        ]);
        //save user in db
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password)
        ]);

        //login
        if(\Auth::attempt($request->only('email', 'password'))){
            return redirect('/');
        }
        
        return redirect()->route('register')->with('error', 'Account not Create. try again');
    }

    public function home(){
        $newCake = Cake::all();
        return view('welcome', compact('newCake'));
    }

    public function reqorder(){

    $allCakes = Cake::all();
    $specificCakeId = 2; 
    $specificCake = Cake::find($specificCakeId);
    return view('reqorder', compact('allCakes', 'specificCake', 'specificCakeId'));
    
    }

    public function order_cake(Request $request){

        $newOrder = new Orders;
        
        $user = \Auth::id();
        $newOrder->user_id = $user;

        $selectedValue = $request->input('cake_id');
        $valuesArray = explode('|', $selectedValue);
        $firstValue = $valuesArray[0];

        $newOrder->cake_id = $firstValue;
        $newOrder->description = $request->input('description');
        $newOrder->quantity = $request->input('quantity');
        $newOrder->address = $request->input('address');
        $newOrder->phone = $request->input('phone');
        $newOrder->payment = $request->input('payment');
        $newOrder->total = $request->input('total');
        $newOrder->r_date = $request->input('r_date');

        $newOrder->save();

        return redirect('home')->with('Cake ordered successfully');
    }

    public function about(){
        return view('about');
    }

    public function service(){
        return view('service');
    }

    public function contact(){
        return view('contact');
    }

    public function profile(){
        return view('profile');
    }

    public function myOrder(){

        $user = \Auth::id();
        $data = Orders::where('user_id', $user)->with('cake')->orderBy('created_at', 'desc')->get();


        return view('myOrder', compact('data'));
    }

    public function cancel_order($id){
        $order = Orders::find($id);
        $order->status = '5';
        $order->update();
        return redirect('myOrder');
    }
    

    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('/');
    }
}
