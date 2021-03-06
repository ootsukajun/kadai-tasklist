<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加

class UsersController extends Controller
{
    public function index()
    {
        // ユーザ一覧をidの降順で取得
        $user = User::orderBy('id', 'asc')->paginate(10);

        // ユーザ一覧ビューでそれを表示
        return view('users.index', [
            'user' => $user,
        ]);
    }
    
    
}
