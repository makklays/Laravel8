<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class LikaController extends Controller
{
    //
    public function profile()
    {
        $user = DB::table('users')
            ->where('id', Auth::user()->id)
            ->where('is_delete', 0)
            ->first();

        if (empty($user)) return redirect()->route('login');

        return view('lika/profile', [
            'user' => $user,
        ]);
    }

    public function users()
    {
        $users = DB::table('users')
            ->where('is_delete', 0)
            ->orderBy('created_at')
            ->paginate(3);

        return view('lika/users', [
            'users' => $users,
        ]);
    }

    public function delete(Request $request)
    {
        if (Auth::user()->isAdmin()) {
            $id = $request->id;

            // get user by id
            $user = DB::table('users')->where('id', $id)->first();

            // delete user - update is_delete
            DB::update('UPDATE `users` SET `is_delete` = 1 WHERE `id`=?', [$id]);

            return redirect()->route('users')->with([
                'flash_message' => 'Your user, <b>'.$user->name.'</b> has been delete successfully!',
                'flash_type' => 'success'
            ]);
        }
    }

    public function blocked()
    {
        return view('blocked');
    }
}
