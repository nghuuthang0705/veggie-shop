<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('clients.pages.account', compact('user'));
    }

    // Update User Information
    public function update(Request $request)
    {
        $request->validate([
            'ltn__name'         => 'required|string|max:255',
            'ltn__phone_number' => 'nullable|string|max:15',
            'ltn__address'      => 'nullable|string|max:255',
            'avatar'           => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        // Handle avatar
        if($request->hasFile('avatar')){
            // Delete old photo if exists
            if($user->avatar && Storage::disk('public')->exists($user->avatar)){
                Storage::disk('public')->delete($user->avatar);
            }

            $file = $request->file('avatar');

            // Create new name with timestamp
            $filename = time() . '_' . uniqid() . '_' . $file->getClientOriginalExtension();
        
            // Save image to folder storage/app/public/uploads/users/tenfile.jpg
            $avatarPath = $file->storeAs('uploads/users', $filename, 'public');
            $user->avatar = $avatarPath;
        }

        $user->name = $request->input('ltn__name');
        $user->phone_number = $request->input('ltn__phone_number');
        $user->address = $request->input('ltn__address');
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Cập nhật thông tin thành công!',
            'avatar' => asset('storage/' .$user->avatar)
        ]);
    }

    // Change Password
    public function changePassword(Request $request)
    {
        $request->validate([
                'current_password'     => 'required',
                'new_password'         => 'required|min:6',
                'confirm_new_password' => 'required|same:new_password',
            ], [
                'current_password.required'     => 'Vui lòng nhập mật khẩu hiện tại.',
                'new_password.required'         => 'Mật khẩu mới không được để trống.',
                'new_password.min'              => 'Mật khẩu mới phải có ít nhất 6 ký tự.',
                'confirm_new_password.required' => 'Vui lòng nhập lại mật khẩu mới.',
                'confirm_new_password.same'     => 'Mật khẩu nhập lại không khớp.',
            ]
        );
        
        $user = Auth::user();

        // Check if current password incorrect
        if(!Hash::check($request->current_password, $user->password))
        {
            return response()->json(['errors' => ['current_password' => ['Mật khẩu hiện tại không đúng!']]], 422);
        }

        // Update new password
        $user->update(['password' => Hash::make($request->new_password)]);

        return response()->json([
            'success' => true,
            'message' => 'Đổi mật khẩu thành công!',
        ]);
    }
}
