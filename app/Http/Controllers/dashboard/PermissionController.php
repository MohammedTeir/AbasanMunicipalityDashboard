<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
       $this->authorizeResource(Permission::class);
    }

    public function index(): Response
    {

        return response()->
        view('apps.user-management.permissions',
        [
            'permissions'=>Permission::with('roles')->select(['id','name','guard_name','created_at'])->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create(): JsonResponse
    // {
    //     //

    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        //
        $rules=[
            'permission_name' => 'required|string|max:50|unique:permissions,name',
            'guard_name' => 'required|in:admin,user',
        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{
            $permission = new Permission();
            $permission->name=$request->get('permission_name');
            $permission->guard_name=$request->get('guard_name');

            if($permission->save()){
                return response()->json(['message'=>'The permission has been added successfully.'],Response::HTTP_CREATED);
            }else{
                return response()->json(['message'=>'Unable to add the permission. Please try again later.'],Response::HTTP_FORBIDDEN);
            }
        }

    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id): JsonResponse
    // {
    //     //

    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Permission $permission): Response
    // {

    //     return response()->view('permissions.edit', compact('permission'));

    //  }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission): JsonResponse
    {
        //


        $rules=[
            'permission_name' => [
                'required',
                'string',
                'max:50',
                Rule::unique('permissions', 'name')->ignore($permission),
            ],

            'guard_name' => 'required|in:admin,user',
        ];

        $validator = Validator($request->all(), $rules);

        if($validator->fails()){
            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);
        }else{

            $permission->name=$request->get('permission_name');
            $permission->guard_name=$request->get('guard_name');

            if($permission->save()){
                return response()->json(['message'=>'The permission has been updated successfully.'],Response::HTTP_CREATED);
            }else{
                return response()->json(['message'=>'Unable to update the permission. Please try again later.'],Response::HTTP_FORBIDDEN);
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission): JsonResponse
    {
        //
        if($permission->delete()){
            return response()->json(['message'=>'The permission has been successfully deleted'],Response::HTTP_OK);
        }else{
            return response()->json(['message'=>'Unable to delete the permission. Please try again later'],Response::HTTP_FORBIDDEN);
        }

    }
}
