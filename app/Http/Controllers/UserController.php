<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requestt;
use Auth;
use Image;
use DB;
use App\Exports\UsersExport;

use Maatwebsite\Excel\Facades\Excel;
class UserController extends Controller
{
    public function index()
    {
       return view('user.index');
    }
    public function profile()
    {
     
      $user_data = DB::table('users')->get();
       return view('profile',array('user' => Auth::user()))->with('user_data',$user_data);
      
    }
    public function update_avatar(Request $request)
    {
          if ($request->hasFile('avatar')){
             $avatar = $request->file('avatar');
             $filename= time() . '.' . $avatar->getClientOriginalExtension();
             Image::make($avatar)->resize(300,300)->save(public_path('/img/avatars/' . $filename));
             $user= Auth::user();
             $user->avatar = $filename;
             $user->save();
          }
          return view('profile',array('user' => Auth::user()));
    }
    function excel()
    { return Excel::download(new UsersExport, 'users.xlsx');
   //   $user_data = DB::table('users')->get()->toArray();
   //   $user_array[] = array('user Name', 'Email', 'User since');
   //   foreach($user_data as $user)
   //   {
   //    $user_array[] = array(
   //     'user Name'  => $user->name,
   //     'Email'   => $user->email,
   //     'User since'    => $user->created_at,
       
   //    );
   //   }
   //   Excel::create('user Data', function($excel) use ($user_array){
   //    $excel->setTitle('user Data');
   //    $excel->sheet('user Data', function($sheet) use ($user_array){
   //     $sheet->fromArray($user_array, null, 'A1', false, false);
   //    });
   //   })->download('xlsx');
    }
}
