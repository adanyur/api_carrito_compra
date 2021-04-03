<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests\PostAuthRequest;

class AuthController extends Controller
{
    //

public function login(Request $request){

    if(!Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
        return response()->json(['status'=>false,'message'=>'usuario no tiene acceso']);
    }

    $user = User::whereEmail($request->email)->first();

    $token = $user->createToken('carrito_compra')->accessToken;
    return response()->json(['status' => true,
                                'data'=>$user,
                                'token'=>$token]);
}

public function register(PostAuthRequest $request){

    $data = $request->all();
    $data['password'] = bcrypt($data['password']);
    return  User::create($data);
}



public function logout(Request $request){
    $token = $request->user()->token();
    $token->revoke();   
    $response = ['message' => 'Cerro session'];
    return response($response, 200); 
}



}
