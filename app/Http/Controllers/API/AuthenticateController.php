<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Citizen;
use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthenticateController extends Controller
{
    use HasApiTokens;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $r)
    {

        $validator = Validator::make($r->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' =>  $validator->errors()]);
        }

        $data = $r->all();
        $data['password'] = bcrypt($data['password']);
        $user =  User::create($data);
        $success['token'] =  $user->createToken('NPC_APP')->plainTextToken;
        $success['name']  = $user->name;

        return response()->json(['success', 'Registration Successfull'], 200);
    }

    public function login(Request $r)
    {

        if (Auth::attempt(['email' => $r->email, 'password' => $r->password])) {
            $user = $user = User::where('email', $r->email)->first();
         
            $success['token'] =  $user->createToken('NPC_APP')->plainTextToken;
            $success['name'] =  $user->name;

            return response()->json([$success, 'User login successfully.']);
        } else {
            return response()->json(['Unauthorised.', "Invalid username or password"], 422);
        }
    }
}
