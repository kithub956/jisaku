<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Adminpost;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function adminmypage()
    {
        return view('mypage');
    }

    //予定表投稿画面
    public function index()
    {
        $schedule = Schedule::all();
        $adminpost = Adminpost::all();
        return view('/admins.index', ['schedule' => $schedule, 'adminpost' => $adminpost]);
    }
    public function showschedule(Request $request)
    {
        $this->createScheduleOrAdminPost($request);
        return $this->index();
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
    public function detail($id)
    {
        $adminpost = Adminpost::find($id);
        return view('detail', ['adminpost' => $adminpost]);
    }
}
