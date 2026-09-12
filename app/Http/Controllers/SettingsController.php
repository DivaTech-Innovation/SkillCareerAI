<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        $user->save();

        return back()->with(
            'success',
            'Profil berhasil diperbarui! 🎉'
        );
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check(
            $request->current_password,
            $user->password
        )) {

            return back()->withErrors([
                'current_password' =>
                    'Password saat ini salah.'
            ]);
        }

        $user->password =
            Hash::make($request->password);

        $user->save();

        return back()->with(
            'success',
            'Password berhasil diperbarui! 🔐'
        );
    }


    public function deleteAccount(Request $request)
    {
        $user = Auth::user();

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $user->delete();

        return redirect()
            ->route('register')
            ->with(
                'success',
                'Akun berhasil dihapus.'
            );
    }
}