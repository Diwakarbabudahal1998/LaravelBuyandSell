<?php
namespace App\Repositories\Admin\Repository;
use App\Repositories\Admin\Interfaces\UserRepositoryInterface;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;




class UserRepository implements UserRepositoryInterface
{
    public function viewuser()
    {
        $users = User::orderBy('created_at', 'desc')->get(); 
        return view('admin.user.viewuser',compact('users'));
    }
    public function createuser()
    {
        $role = Role::all();
        return view('admin.user.adduser',compact('role'));
    }
    public function storeuser(Request $request)
    {
        $user=new User();
        $user->email=$request->input('email');
        $user->name=$request->input('username');
        $user->password=Hash::make($request->input('password'));
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $role = $request->input('roles');
        $user->assignRole($role);
        $data=([
            'username'=> $request->input('username'),
            'email'=> $request->input('email'),
            'phone'=> $request->input('phone'),
            'password'=> $request->input('password'),
        ]);
        Mail::to($request->get('email'))->send(new WelcomeMail($data));
        $user->save();
        return redirect('admin/user');
    }
    public function deleteuser($id){
        $user=User::find($id);
        $user->delete();
        return redirect('admin/user');
    }
}