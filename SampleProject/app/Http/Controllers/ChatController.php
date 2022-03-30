<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Chatpost;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Schedule;
use App\Models\Adminpost;

class ChatController extends Controller
{
    //プロフィール編集
    //編集画面
    public function showedit()
    {
        $user = Auth::user();
        return view('mydate_edit', ['user' => $user]);
    }
    // 編集
    public function uppage(Request $request)
    {
        $user = Auth::user();
        $user = [
            'email' => $request->email,
        ];
        DB::table('users')
        ->where('id', $request->id)
        ->update($user);
        return redirect('/mypage');
    }
    //マイページ表示
    public function mypage()
    {
        return view('mypage');
    }
        
    //投稿機能
    //投稿
    public function showList()
    {
        $chatpost = Chatpost::all();
        return view('keijiban', ['chatpost' => $chatpost]);
    }
    public function add(Request $request)
    {
        $name = $request->name;
        $message = $request->message;
        
        Chatpost::create([
            'name' => $name,
            'message' => $message,
        ]);
        $data = [
            'name' => $name,
            'message' => $message
        ];
        
        Chatpost::insert($data);
        return redirect('/keijiban');
    }
    //投稿削除
    public function destroy($id)
    {
        $chatpost = Chatpost::findOrFail($id);
        $chatpost->delete();
        return redirect('/keijiban');
    }
//ログイン、ログアウト機能
    public function showlogout()
    {
        return view('/logoutpage');
    }
    public function showLogin()
    {
        return view('/login_form');
    }

    public function logindata(LoginFormRequest $request)
    {
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('chat.top')->with('login_success', '');
        }

        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています。',
        ]);
    }
//ログイン機能
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('showLogin')->with('logout', 'ログアウトしました。');
    }
    //新規登録画面
    public function register()
    {
        return view('/register');
    }
    public function userindex()
    {
        $schedule = Schedule::all();
        $adminpost = Adminpost::all();
        return view('/chat.top', ['schedule' => $schedule, 'adminpost' => $adminpost]);
    }
    public function showschedule(Request $request)
    {
        $this->createScheduleOrAdminPost($request);
        return $this->userindex();
    }

    public function createScheduleOrAdminPost(Request $request)
    {
        if ($request->scheduledate != null) {
            $this->createSchedule($request);
        } elseif ($request->title != null) {
            $this->createAdminPost($request);
        }
    }

    public function createSchedule($request)
    {
        Schedule::create([
            'scheduledate' => $request->scheduledate,
            'schedule_title' =>  $request->schedule_title,
            'plase' => $request->plase,
            'admin_id' => 1
        ]);
    }

    public function createAdminPost($request)
    {
        Adminpost::create([
            'title' => $request->title,
            'content' => $request->content,
            'member_id' => 1,
            'category' => 1,
            'name' => 1
        ]);
    }
}
