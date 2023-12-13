<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller{

    public function update(Request $request, $id){
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tp_number' => 'nullable|string|max:10',
            'address' => 'nullable|string',
            'current_password' => 'required|string|min:8',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $User = User::find($id);

        if (\Hash::check($request->input('current_password'), $User->password)) {
            
            $User->name = $request->input('name');
            $User->email = $request->input('email');
            $User->tp_number = $request->input('tp_number');
            $User->address = $request->input('address');
            
    
            // Update password only if a new password is provided
            if ($request->has('password') && !empty($request->input('password'))) {
                $User->password = \Hash::make($request->input('password'));
            }
            
    
            $User->update();
    
            return redirect()->route('profile')->with('success', 'Profile updated successfully!');
        } else {
            // Current password does not match
            return redirect()->route('profile')->with('error', 'Current password is incorrect. Profile not updated.');
        }
    }
}
