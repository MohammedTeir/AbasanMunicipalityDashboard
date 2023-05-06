<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Stevebauman\Location\Facades\Location;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
       $this->authorizeResource(User::class);
    }

    public function index(): Response
    {
        //


        return response()->view('apps.human-resource.users.list',[

            'users'=>User::withTrashed()->select(['id','name','email','status','last_login_at','created_at','deleted_at'])->get(),
            'roles'=>Role::select(['id','name'])->where('guard_name','user')->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create(): Response
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        //

        $rules = [
            'avatar' => 'required|image|max:2048|mimetypes:image/*',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|max:255',
            'pin'=>'required|digits:9|unique:users,pin'

        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{

            $file = $request->file('avatar');
            $user = new User();
            $user->name=$request->get('full_name');
            $user->email=$request->get('email');
            $user->status= 'active';
            $user->pin=$request->get('pin');
            $user->password=Hash::make($request->get('password'));

            $user->save();

            if (!is_null($file)) {

                    //   if (Storage::exists('/public/' . $product->image)) {

                    //     Storage::delete('/public/' . $product->image);
                    //     }


                $ex = $file->getClientOriginalExtension();
                $name = 'avatar' . time() * rand(1, 10000000) . '.' . $ex;
                $path = "uploads/media/avatars/" . $name;

                $image = new Image();
                $image->url = $path;
                $user->image()->save($image); // associate the image with the user

                Storage::disk('public')->put($path, file_get_contents($file));

                }




            if($user->save()){

                return response()->json(['message'=>'The user has been added successfully.'],Response::HTTP_CREATED);
            }else{
                return response()->json(['message'=>'Unable to add the user. Please try again later.'],Response::HTTP_FORBIDDEN);
            }

            }
    }



    /**
     * Display the specified resource.
     */
    public function show(User $user): Response
    {

        return response()->view('apps.human-resource.users.view',[
            'user'=>$user,
            'roles'=>Role::select(['id','name'])->where('guard_name','user')->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id): Response
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */

    public function updateAvatar(Request $request, User $user)
    {
        $rules = [

            'avatar'=>'nullable|image|max:2048|mimetypes:image/*'

        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{

            $file = $request->file('avatar');

            if (!is_null($file)) {


                if ($user->image && !is_null($user->image->url) && Storage::exists('/public/'.$user->image->url)) {
                    Storage::delete('/public/'.$user->image->url);
                    $user->image()->delete();

                }



            $ex = $file->getClientOriginalExtension();
            $name = 'avatar' . time() * rand(1, 10000000) . '.' . $ex;
            $path = "uploads/media/avatars/" . $name;

            $image = new Image();
            $image->url = $path;
            // associate the image with the user

            if($user->image()->save($image)){
                Storage::disk('public')->put($path, file_get_contents($file));
                return response()->json(['message' => 'Avatar updated successfully.'],Response::HTTP_OK);

            }else{
                return response()->json([ 'message' => 'Invalid file format or file size too large.'] , Response::HTTP_NOT_MODIFIED);
            }


            }

            }


    }


    public function update(Request $request,User $user): JsonResponse
    {
        //



        $rules = [
            'name' => 'nullable|string|max:255',
            'pin' => [
                'string',
                Rule::unique('users', 'pin')->ignore($user->id),
            ],
        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{

            $user->name= $request->get('name');

            $user->pin= $request->get('pin');

            if($user->save()){

                return response()->json(['message'=>'The user has been updated successfully.'],Response::HTTP_CREATED);
            }else{
                return response()->json(['message'=>'Unable to update the user. Please try again later.'],Response::HTTP_FORBIDDEN);
            }

            }

    }

    public function emailUpdate(Request $request,User $user): JsonResponse
    {
        //
        $rules = [
            'email' => [
                'string',
                'email',
                Rule::unique('users', 'email')->ignore($user->email),
                Rule::unique('admins', 'email')
            ],
        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{

            $user->email= $request->get('email');

            if($user->save()){
                $user->touch(); // Update the updated_at timestamp
                return response()->json(['message'=>'The email has been updated successfully.'],Response::HTTP_OK);
            }else{
                return response()->json(['message'=>'Unable to update the email. Please try again later.'],Response::HTTP_FORBIDDEN);
            }

            }

    }

    public function passwordUpdate(Request $request,User $user): JsonResponse
    {
        //
        $rules = [

            'current_password' => 'required',
            'password' => [
            'required',
            'string',
            'min:8',
            'max:255',
            'confirmed',
            'different:current_password',
            'regex:/[a-z]/',
            'regex:/[0-9]/',
            'regex:/[@$!%*#?&]/',
        ],
            'password_confirmation' => 'required',

        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{

            if(Hash::check($request->get('current_password'),$user->password)){

                $user->password= Hash::make($request->get('password'));

                if($user->save()){
                    $user->touch(); // Update the updated_at timestamp
                    return response()->json(['message'=>'The password has been updated successfully.'],Response::HTTP_OK);
                }else{
                    return response()->json(['message'=>'Unable to update the password. Please try again later.'],Response::HTTP_NOT_MODIFIED);
                }
            }else{
                return response()->json(['message'=>'The old password is not correct.'],Response::HTTP_FORBIDDEN);

            }


            }

    }

    public function roleUpdate(Request $request,User $user): JsonResponse
    {
        //
        $rules = [

            'role' => 'required|exists:roles,name,guard_name,user',

        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{

            $user->syncRoles($request->get('role'));

            if($user->save()){
                $user->touch(); // Update the updated_at timestamp
                return response()->json(['message'=>'The role has been updated successfully.'],Response::HTTP_OK);
            }else{
                return response()->json(['message'=>'Unable to update the role. Please try again later.'],Response::HTTP_FORBIDDEN);
            }

            }

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): JsonResponse
    {
        //
        if($user->delete()){
            $user->status= 'deleted';
            $user->save();
            return response()->json(['message'=>'The user has been successfully deleted'],Response::HTTP_OK);
        }else{
            return response()->json(['message'=>'Unable to delete the user. Please try again later'],Response::HTTP_FORBIDDEN);
        }
    }

    public function deleteall(Request $request): JsonResponse
    {
        //
        $rules = [
            'users' => 'array',
            'users.*' => 'exists:users,id',

        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{

        $ids =  $request->get('users');

        if(User::withoutTrashed()->whereIn('id', $ids)->delete()){
            User::onlyTrashed()->whereIn('id', $ids)->update(['status'=>'deleted']);
            return response()->json(['message'=>'The users has been successfully deleted'],Response::HTTP_OK);
        }else{
            return response()->json(['message'=>'Unable to delete the users. Please try again later'],Response::HTTP_FORBIDDEN);
        }
            }
    }

    public function restore(User $user):JsonResponse
    {

        if($user->restore()){
            $user->status= 'active';
            $user->save();
            return response()->json(['message'=>'The user has been successfully restored'],Response::HTTP_OK);
        }else{
            return response()->json(['message'=>'Unable to restore the user. Please try again later'],Response::HTTP_FORBIDDEN);
        }

    }


}
