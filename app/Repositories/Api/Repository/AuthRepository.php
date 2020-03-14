<?php
namespace App\Repositories\Api\Repository;
use App\Repositories\Api\Interfaces\AuthRepositoryInterface;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\User;
use Illuminate\Support\Facades\Hash;
class AuthRepository implements AuthRepositoryInterface
{
    public function register(Request $request)
    {
       $v=$request->validate([
          'email'=>'required',
          'password'=>'required',
          'address'=>'required',
          'phone'=>'required',
          'name'=>'required'
       ]);
   
       $user=new User;
       $user->email=$request->email;
       $user->password=bcrypt($request->password);
       $user->address=$request->address;
       $user->phone=$request->phone;
       $user->name=$request->name;
       $user->save();
       $http = new Client([
          'base_uri' => 'http://localhost:8000',
          'defaults' => [
              'exceptions' => false
          ]
       ]);
 
 $response = $http->post('/oauth/token', [
     'form_params' => [
         'grant_type' => 'password',
         'client_id' => '2',
         'client_secret' => 'IHwNlcVXnuanT9J4O8wdvjEongNDb9EV6PO03x0n',
         'username' => $request->email,
         'password' => $request->password,
         'scope' => '',
     ],
 ]);
 return response(['success'=>'true','message'=>'OK',"token"=>json_decode((string) $response->getBody(), true)]);
  
 
    }
    public function login(Request $request)
    {
       $v=$request->validate([
          'email'=>'required',
          'password'=>'required',
       ]);
       $user=User::where('email',$request->email)->first();
       if(!$user)
       {
          return response(['success'=>'error','message'=>'user not found']);
       }
       if(Hash::check($request->password,$user->password))
       {
          $http = new Client([
             'base_uri' => 'http://localhost:8000',
             'defaults' => [
                 'exceptions' => false
             ]
          ]);
          $response = $http->post('/oauth/token', [
             'form_params' => [
                 'grant_type' => 'password',
                 'client_id' => '2',
                 'client_secret' => 'IHwNlcVXnuanT9J4O8wdvjEongNDb9EV6PO03x0n',
                 'username' => $request->email,
                 'password' => $request->password,
                 'scope' => '',
             ],
         ]);
         return response(['success'=>'true','message'=>'OK',"token"=>json_decode((string) $response->getBody(), true)]);
         
       }
       else{
          return response(['success'=>'error','message'=>'password not matched']);
 
       }
    }
}
