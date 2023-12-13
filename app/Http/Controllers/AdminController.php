<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    
    public function index(){
        $newCake = Cake::all();
        return view('admin/addcake', compact('newCake'));
    }

    public function install(){
        return view('admin/install');
    }
    
    public function admin(){

        $newOrders = Orders::orderBy('created_at', 'desc')->get();
        //$newOrders = Orders::all();
        $allCakes = Cake::all();
        $allUsers = User::all();

        return view('admin/admin', compact('newOrders','allCakes','allUsers'));
    }

    public function accept_order($id){
        $order = Orders::find($id);
        $order->status = '2';
        $order->update();
        return redirect('admin');
    }

    public function reject_order($id){
        $order = Orders::find($id);
        $order->status = '4';
        $order->update();
        return redirect('admin');
    }

    public function deliver_order($id){
        $order = Orders::find($id);
        $order->status = '3';
        $order->update();
        return redirect('admin');
    }

    public function add_cake(Request $request){

        $newCake = new Cake;
        $newCake->category = $request->input('category');
        $newCake->description = $request->input('description');
        $newCake->price = $request->input('price');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images',$filename);  
            $newCake->image = $filename;
        }
        $newCake->save();
        return redirect('addcake')->with('Cake added successfully');
    }

    public function editcake($id){

        $cake = Cake::find($id);
        if ($cake==null) {
            return redirect('addcake');
        }else{
            return view('admin.editcake', compact('cake'));
        }
    }

    public function update_cake(Request $request, $id){

        $newCake = Cake::find($id);
        $newCake->category = $request->input('category');
        $newCake->description = $request->input('description');
        $newCake->price = $request->input('price');
        if ($request->hasfile('image')) {

            $destination = 'images/'.$newCake->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/',$filename);  
            $newCake->image = $filename;
        }
        $newCake->update();
        return redirect('addcake')->with('Update successfully');

    }

    public function deletecake($id) {

        $newCake = Cake::find($id);
        $destination = 'images/'.$newCake->image;
        if(File::exists($destination)){
            File::delete($destination);
        }

        $newCake->delete();
        return redirect('addcake')->with('Deleted Successfully');
    }

    
    public function contact(){
        return view('admin.addcontact');
    }

    
}
