<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usermodel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function AddUser(Request $request)
    {
        try {
            
                    $validator = Validator::make($request->all(), [
                        'user_name' => ['required','string','regex:/^[A-Za-z\- ]+$/', ],
                        'user_unique_id'=>['required','string','unique:tbl_user_master,user_unique_id'],
                        'email_id' => ['required','email','unique:tbl_user_master,email_id','max:255'],
                        'user_password' => ['required','string','min:8'],
                        'address' => ['required','string','regex:/^[a-zA-Z0-9-.,\/ ]*$/'],
                        'contact_no' => ['required','string','unique:tbl_user_master,contact_no','size:10' ],
                        'c_by' => ['required','string'],
                        'user_type' => ['required','integer'],
                       
                    ], [
                    'user_name.required' => 'User Name is required!',
                    'user_unique_id.required'=>'User id is required!',
                    'email_id.required' => 'Email is required!',
                    'email_id.email_id' => 'Please provide a valid email address!',
                    'email_id.unique' => 'This email is already registered!',
                    'user_password.required' => 'Password is required!',
                    'user_password.min' => 'Password must be at least 8 characters!',
                    'address.required' => 'Address is required!',
                    'address.address'=> 'Please provide a valid  address',
                    'contact_no.required' => 'Phone Number is required!',
                    'contact_no.unique' => 'This Phone Number is already registered!',
                    'contact_no.max' => 'Phone Number must be 10 digit!',
                    'c_by.required' => 'C By is required!',
                    'user_type.required'=>'User Type required!',
                    
                ]);
        
                
                if ($validator->fails()) {
                    return response()->json(['status' => false,'data' => [],'msg' => $validator->errors()->first(),
                        'response_code' => 400,]);
                }
                $data = [];
            
                  
                    $data['id'] = Str::uuid(); 
                    $data['user_unique_id'] = $request->input('user_unique_id');
                    $data['user_name'] =  $request->input('user_name');
                    $data['email_id'] = $request->input('email_id');
                    $data['user_password'] = bcrypt($request->input('user_password'));
                    $data['address'] = $request->input('address');
                    $data['contact_no'] = $request->input('contact_no');
                    $data['c_by'] = $request->input('c_by');
                    $data['user_type'] = $request->input('user_type');
                    $data['status'] = 1;
                    Usermodel::create($data);
                
                   return response()->json(['status' => true,'data' =>[],'msg' => 'User successfully registered.!!','response_code' => 200]);
    
               
        } catch (\Exception $e) {
            Log::error('Error in Add_user: ' . $e->getMessage());
            return response()->json(['status' => false,'data' => [],'msg' => 'Something went wrong!!','response_code' => 500,
            ],500);
        }
    }


    public function user_list(Request $request)
    {
        try {
            $id = $request->input('id', '');
            $users = UserModel::user_list($id);
            if ($users->isEmpty()) 
            {
                return response()->json(['status' => false,'data' => [],'msg' => 'No data found for the given ID.',
                    'response_code' => 400,
                ], 400);
            }
            return response()->json(['status' => true,'data' =>$users,'msg' => 'successfully Fetched!!','response_code' => 200,]);
              
        } catch (\Exception $e) {
            return response()->json(['status' => false,'data' => [],'msg' => 'Something went wrong!!','response_code' => 500,
            ], 500);
        }
    }


    public function User_update(Request $request, $id)
    {
        try {
            // Log::info('Updating user with userId: ' . $userId);
            // Log::info('Email to validate: ' . $request->input('email'));
            $validator = Validator::make($request->all(), [
                'id'=>['required','string'],
                'user_name' => ['required','string','regex:/^[A-Za-z\- ]+$/', ],
                'email_id' => ['required','email'],
                'address' => ['required','string','regex:/^[a-zA-Z0-9-.,\/ ]*$/'],
                'contact_no' => ['required','string'],
                'd_by' => ['required','string'],
               
            ], [
            'id.required' => 'Id is required!',
            'user_name.required' => 'User Name is required!',
            'email_id.required' => 'Email is required!',
            'email_id.email_id' => 'Please provide a valid email address!',
            'email_id.unique' => 'This email is already registered!',
            'address.required' => 'Address is required!',
            'address.address'=> 'Please provide a valid  address',
            'contact_no.required' => 'Phone Number is required!',
            'contact_no.unique' => 'This Phone Number is already registered!',
            'contact_no.max' => 'Phone Number must be 10 digit!',
            'd_by.required' => 'D By is required!',
            
        ]);

            if ($validator->fails()) {
                return response()->json(['status' => false, 'data' => [], 'msg' => $validator->errors()->first(), 'response_code' => 400]);
            }

            $contact_no = $request->input('contact_no');
            $exists = DB::table('tbl_user_master')
                        ->where('status', 1)
                        ->where('contact_no', $contact_no)
                        ->where('id', '!=', $id)
                        ->exists();
    
            if ($exists) {
                return response()->json(['status' => false, 'data' => [], 'msg' => 'This phone number is already registered!', 'response_code' => 400]);
            }
    
            $email_id = $request->input('email_id');
            $emailExists = DB::table('tbl_user_master')
                             ->where('status', 1)
                             ->where('email_id', $email_id)
                             ->where('id', '!=', $id)
                             ->exists();
    
            if ($emailExists) {
                return response()->json(['status' => false, 'data' => [], 'msg' => 'This email is already registered!', 'response_code' => 400]);
            }
      
            $user = UserModel::where('id', $id)->first();
            if (!$user) {
                return response()->json(['status' => false, 'data' => [], 'msg' => 'User not found!', 'response_code' => 404]);
            }
            $data = [];
            $data['user_name'] = $request->input('user_name');
            $data['email_id'] = $request->input('email_id');
            $data['address'] = $request->input('address');
            $data['contact_no'] = $request->input('contact_no');
            $data['d_by'] = $request->input('d_by');
            $user->update($data);
            return response()->json(['status' => true, 'data' => [], 'msg' => 'User updated successfully!', 'response_code' => 200]);

        } catch (\Exception $e) {
            return response()->json(['status' => false, 'data' => [], 'msg' => 'Something went wrong!', 'response_code' => 500], 500);
        }
    }


    public function Delete_User(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'id'=>['required'],
                'd_by' => ['required', 'string'],
            ], [
                'id'=> 'User Id required!',
                'd_by.required' => 'D By is required!',
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => false, 'data' => [], 'msg' => $validator->errors()->first(), 'response_code' => 400]);
            }
      
            $user = UserModel::where('id', $id)->first();
            if (!$user) {
                return response()->json(['status' => false, 'data' => [], 'msg' => 'id not found!', 'response_code' => 404]);
            }
            $data = [];
            $data['d_by'] = $request->input('d_by');
            $data['status'] = 0;
            $user->update($data);
            return response()->json(['status' => true, 'data' => [], 'msg' => 'Delete User successfully!', 'response_code' => 200]);

        } catch (\Exception $e) {
            return response()->json(['status' => false, 'data' => [], 'msg' => 'Something went wrong!', 'response_code' => 500], 500);
        }
    }

}
