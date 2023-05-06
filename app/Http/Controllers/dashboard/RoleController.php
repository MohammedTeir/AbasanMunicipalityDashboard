<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
       $this->authorizeResource(Role::class);
    }

    public function index(): Response
    {

        return response()->view('apps.user-management.roles.list',
        ['roles'=>Role::select(['id','name','guard_name'])->with(['permissions'])->withCount('users')->get()
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
            'role_name' => 'required|string|max:255|unique:roles,name',
            'guard_name' => 'required|in:admin,user',

        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{


            $role = new Role();
            $role->name=$request->get('role_name');
            $role->guard_name=$request->get('guard_name');

            if($role->save()){

                return response()->json(['message'=>'The role has been added successfully.'],Response::HTTP_CREATED);
            }else{
                return response()->json(['message'=>'Unable to add the role. Please try again later.'],Response::HTTP_FORBIDDEN);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role): Response
    {
        //

        return response()->view('apps.user-management.roles.view',
        [
        'admins'=>Admin::withTrashed()->select(['id','name','email'])->get(),
        'role'=>$role,
        'permissions'=>Permission::select(['id','name','guard_name'])->where('guard_name',$role->guard_name)->get(),
    ]);
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
    public function update(Request $request, Role $role): JsonResponse
    {
        //
         //
         $rules = [

            'role_name' => [
                'required',
                'string',
                Rule::unique('roles', 'name')->ignore($role),
            ],
            'guard_name' => 'required|in:admin,user',
            'permissions' => 'array',
            'permissions.*' => 'exists:permissions,name',
        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{




            $role->name=$request->get('role_name');
            $role->guard_name=$request->get('guard_name');

            $role->syncPermissions($request->get('permissions'));

            // $permissions=[];

            if($role->save()){

                return response()->json(['message'=>'The role has been updated successfully.'],Response::HTTP_CREATED);
            }else{
                return response()->json(['message'=>'Unable to update the role. Please try again later.'],Response::HTTP_FORBIDDEN);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role): JsonResponse
    {
        //
        if($role->delete()){
            return response()->json(['message'=>'The role has been successfully deleted'],Response::HTTP_OK);
        }else{
            return response()->json(['message'=>'Unable to delete the role. Please try again later'],Response::HTTP_FORBIDDEN);
        }
    }

    public function revokeRole(Role $role,Admin $admin): JsonResponse
    {

         //
         if($admin->removeRole($role)){
            return response()->json(['message'=>'The admin has been successfully revoked'],Response::HTTP_OK);
        }else{
            return response()->json(['message'=>'Unable to revoke the role. Please try again later'],Response::HTTP_FORBIDDEN);
        }
    }

    public function revokeManyRole(Role $role,Admin $admin): JsonResponse
    {

         //
         if($admin->removeRole($role)){
            return response()->json(['message'=>'The admin has been successfully revoked'],Response::HTTP_OK);
        }else{
            return response()->json(['message'=>'Unable to revoke the role. Please try again later'],Response::HTTP_FORBIDDEN);
        }
    }

    public function revokeMany(Request $request,Role $role): JsonResponse
    {
        //
        //

        $rules = [
            'admins' => 'array',
            'admins.*' => 'exists:admins,id',

        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{

            $adminIds = $request->get('admins');
            $admins = Admin::whereIn('id', $adminIds)->get();

            foreach ($admins as $admin) {
                $admin->removeRole($role->name);
            }
            return response()->json(['message' => 'The role has been successfully revoked from the selected admins.'], Response::HTTP_OK);

            }
    }

}
