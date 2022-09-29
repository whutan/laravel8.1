<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\LoginRequest;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::login');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(LoginRequest $request)
    {
        
    $executed = RateLimiter::attempt(
        'send-message:'.$request->id,
        $perMinute = 2,
        function() use ($request){
            if (! Auth::guard('admins')->attempt($request->only('name', 'password'))) {
                RateLimiter::hit($this->throttleKey($request));
    
                throw ValidationException::withMessages([
                    'email' => trans('auth.failed'),
                ]);
            }
            
            // return redirect()->intended('/');
           
            
        }
    );
    if (! $executed) {
        return 'Too many messages sent!';
      }
      $request->session()->regenerate();//登录成功后生成新的session_id
    return redirect()->intended('/admin');

    }
    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
    public function throttleKey($request)
    {
      
        return Str::lower($request->input('email')).'|'.$request->ip();
    }
  
}
