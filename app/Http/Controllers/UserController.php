<?php

namespace App\Http\Controllers;

use App\Mail\SafePassword;
use App\Mail\VerifyAccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Illuminate\Support\Str;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function viewDocumentation(){
        return view("documentation");
    }
    public function viewRegister(){
        return view("register");
    }

    public function register(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'last_name_f' => 'required|string|max:255',
            'last_name_m' => 'required|string|max:255',
            'date_born' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'verify_password' => 'required|string|min:6',
        ]);
        if($request->get('password') != $request->get('verify_password')){
            return response()->json(['error' => 'las contrasenias no coinciden'], 500);
        }

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $clave=mt_rand(5000,10000);
        $user = User::create([
            'name' => $request->get('name'),
            'last_name_f' => $request->get('last_name_f'),
            'last_name_m' => $request->get('last_name_m'),
            'date_born' => $request->get('date_born'),
            'status' => "No Verificado",
            'email_verified_at' =>$clave,
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(['success' => 'el usuario se ha registrado correctamente'], 400);
    }


    public function login(Request $request)
    {
        $email=$request->input('email');
        $credentials = $request->only('email', 'password');
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'credenciales invalidas'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'hubo un error al crear el roken'], 500);
        }
       $user=User::where('email',$email)->first();
        if($user->status=="No Verificado"){
            Mail::to('diego8a455@gmail.com')->send(new VerifyAccount($user));
            return response()->json(['error' => 'revisa tu bandeja de entrada   '], 500);
        }
        return response()->json(compact('token'));
    }

    public function validateAccount(Request $request){
        $email=$request->input('email');
        $clave=$request->input('code');
        $user=User::where("email",$email)->first();
        if(!$user){
            return response()->json(['success' => 'El correo no existe']);
        }
        $tokenUser=$user->email_verified_at;
        if($clave==$tokenUser){
            $user->status="Verificado";
            $user->save();
            return response()->json(['success' => 'Se ha verificado correctamente tu correo']);
        }

    }

    public function safePassword(Request $request){
        $email = $request->input('email');
        $newPassword=Str::random(9);

        $user = User::where("email", $email)->first();
        if (!$user)
            return response()->json(['error' => 'El correo no existe!'], 400);
        $user->password=Hash::make($newPassword);
        $user->save();
        Mail::to($email)->send(new SafePassword($user,$newPassword));
        return response()->json(['success' => 'Se ha enviado tu nueva contraseña a tu correo']);
    }

    public function editPassword(Request $request){
        $newpassword=$request->input('newPassword');
        $auth=Auth::user()->getAuthIdentifier();
        $user=User::where("id",$auth)->first();
        if(!$user){
            return response()->json("no se encontro");
        }
        $user->password=Hash::make($newpassword);
        $user->save();
        return response()->json(['success'=>'Se ha cambiado la contraseña correctamente']);


    }


    public function logout(){
        JWTAuth::parseToken()->invalidate(true);
        return response()->json(['success' => 'Se ha cerrado sesion']);
    }
}
