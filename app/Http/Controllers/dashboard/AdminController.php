<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Image;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
        $this->authorizeResource(Admin::class);
     }

    public function index(): Response
    {
        return response()->view('apps.human-resource.admins.list',[

            'admins'=>Admin::withTrashed()->select(['id','name','email','status','last_login_at','created_at','deleted_at'])->get(),
            'roles'=>Role::select(['id','name'])->where('guard_name','admin')->get()

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
            'email' => 'required|email|unique:admins,email|max:255',
            'password' => 'required|string|min:8|max:255',
            'role_name' => 'required|string|max:255|exists:roles,name',


        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{

            $file = $request->file('avatar');
            $admin = new admin();
            $admin->name=$request->get('full_name');
            $admin->email=$request->get('email');
            $admin->status= 'active';
            $admin->password=Hash::make($request->get('password'));
            $admin->assignRole($request->get('role_name'));

            $admin->save();

            if (!is_null($file)) {

                    //   if (Storage::exists('/public/' . $product->image)) {

                    //     Storage::delete('/public/' . $product->image);
                    //     }


                $ex = $file->getClientOriginalExtension();
                $name = 'avatar' . time() * rand(1, 10000000) . '.' . $ex;
                $path = "uploads/media/avatars/" . $name;

                $image = new Image();
                $image->url = $path;
                $admin->image()->save($image); // associate the image with the admin

                Storage::disk('public')->put($path, file_get_contents($file));

                }




            if($admin->save()){

                return response()->json(['message'=>'The admin has been added successfully.'],Response::HTTP_CREATED);
            }else{
                return response()->json(['message'=>'Unable to add the admin. Please try again later.'],Response::HTTP_FORBIDDEN);
            }

            }
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin): Response
    {

        return response()->view('apps.human-resource.admins.view',[
            'admin'=>$admin,
            'roles'=>Role::select(['id','name'])->where('guard_name','admin')->get()]);
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

    public function updateAvatar(Request $request, Admin $admin)
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


                if ($admin->image && !is_null($admin->image->url) && Storage::exists('/public/'.$admin->image->url)) {
                    Storage::delete('/public/'.$admin->image->url);
                    $admin->image()->delete();

                }



            $ex = $file->getClientOriginalExtension();
            $name = 'avatar' . time() * rand(1, 10000000) . '.' . $ex;
            $path = "uploads/media/avatars/" . $name;

            $image = new Image();
            $image->url = $path;
            // associate the image with the admin

            if($admin->image()->save($image)){
                Storage::disk('public')->put($path, file_get_contents($file));
                return response()->json(['message' => 'Avatar updated successfully.'],Response::HTTP_OK);

            }else{
                return response()->json([ 'message' => 'Invalid file format or file size too large.'] , Response::HTTP_NOT_MODIFIED);
            }


            }

            }


    }

    public function update(Request $request,Admin $admin): JsonResponse
    {
        //



        $rules = [
            'name' => 'nullable|string|max:255',
        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{

            $admin->name= $request->get('name');

            if($admin->save()){

                return response()->json(['message'=>'The admin has been updated successfully.'],Response::HTTP_CREATED);
            }else{
                return response()->json(['message'=>'Unable to update the admin. Please try again later.'],Response::HTTP_FORBIDDEN);
            }

            }

    }

    public function emailUpdate(Request $request,Admin $admin): JsonResponse
    {
        //
        $rules = [
            'email' => [
                'string',
                'email',
                Rule::unique('admins', 'email')->ignore($admin->email),
                Rule::unique('users', 'email')
            ],
        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{

            $admin->email= $request->get('email');

            if($admin->save()){
                $admin->touch(); // Update the updated_at timestamp
                return response()->json(['message'=>'The email has been updated successfully.'],Response::HTTP_OK);
            }else{
                return response()->json(['message'=>'Unable to update the email. Please try again later.'],Response::HTTP_FORBIDDEN);
            }

            }

    }

    public function passwordUpdate(Request $request,Admin $admin): JsonResponse
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

            if(Hash::check($request->get('current_password'),$admin->password)){

                $admin->password= Hash::make($request->get('password'));

                if($admin->save()){
                    $admin->touch(); // Update the updated_at timestamp
                    return response()->json(['message'=>'The password has been updated successfully.'],Response::HTTP_OK);
                }else{
                    return response()->json(['message'=>'Unable to update the password. Please try again later.'],Response::HTTP_NOT_MODIFIED);
                }
            }else{
                return response()->json(['message'=>'The old password is not correct.'],Response::HTTP_FORBIDDEN);

            }


            }

    }

    public function roleUpdate(Request $request,Admin $admin): JsonResponse
    {
        //
        $rules = [

            'role' => 'required|exists:roles,name,guard_name,admin',

        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{

            $admin->syncRoles($request->get('role'));

            if($admin->save()){
                $admin->touch(); // Update the updated_at timestamp
                return response()->json(['message'=>'The role has been updated successfully.'],Response::HTTP_OK);
            }else{
                return response()->json(['message'=>'Unable to update the role. Please try again later.'],Response::HTTP_FORBIDDEN);
            }

            }

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin): JsonResponse
    {
        //
        if($admin->delete()){
            $admin->status= 'deleted';
            $admin->save();
            return response()->json(['message'=>'The admin has been successfully deleted'],Response::HTTP_OK);
        }else{
            return response()->json(['message'=>'Unable to delete the admin. Please try again later'],Response::HTTP_FORBIDDEN);
        }
    }

    public function deleteall(Request $request): JsonResponse
    {
        //

        $rules = [
            'admins' => 'array',
            'admins.*' => 'exists:admins,id',

        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{

        $ids =  $request->get('admins');

        if(Admin::withoutTrashed()->whereIn('id', $ids)->delete()){
            Admin::onlyTrashed()->whereIn('id', $ids)->update(['status'=>'deleted']);
            return response()->json(['message'=>'The admins has been successfully deleted'],Response::HTTP_OK);
        }else{
            return response()->json(['message'=>'Unable to delete the admins. Please try again later'],Response::HTTP_FORBIDDEN);
        }
            }
    }

    public function restore(Admin $admin):JsonResponse
    {

        if($admin->restore()){
            $admin->status= 'active';
            $admin->save();
            return response()->json(['message'=>'The admin has been successfully restored'],Response::HTTP_OK);
        }else{
            return response()->json(['message'=>'Unable to restore the admin. Please try again later'],Response::HTTP_FORBIDDEN);
        }

    }

}
