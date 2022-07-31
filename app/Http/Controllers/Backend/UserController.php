<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserPostRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Modules\Backend\Services\User\UserService;
use App\DataTables\UsersDataTable;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    protected UserService $userService;

    public function __construct(
        UserService $userService
    ) {
        $this->userService = $userService;
    }

    public function index(UsersDataTable $datatables)
    {
        return $datatables->render('backend.pages.users.index');
    }

    public function store(UserPostRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        $this->userService->storeUser($validated);
        Alert::success(' Berhasil Tambah Data ', ' Silahkan Periksa Kembali');
        return redirect()->route('users.index');
    }

    public function create()
    {
        return view('backend.pages.users.create');
    }

    public function edit($id)
    {
        $data = $this->userService->getUserById($id);
        return view('backend.pages.users.edit', compact('data'));
    }

    public function update(UserUpdateRequest $request, $id)
    {

        $data = $this->userService->getUserById($id);
        $validated = $request->validated();
        if ($validated['password'] == '') {
            $validated['password'] = $data->password;
        } else {
            $validated['password'] = Hash::make($validated['password']);
        }
        $this->userService->update($id, $validated);
        Alert::success(' Berhasil Ubah Data ', ' Silahkan Periksa Kembali');
        return redirect()->route('users.index');
    }

    public function destroy(Request $request)
    {
        if (!$request->ajax()) {
            abort(404);
        }
        $user_id = $this->userService->deleteUser($request->id);
        return response()->json($user_id);
    }
    
}

