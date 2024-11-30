<?php

namespace App\Http\Controllers;

use App\Models\User; // Import the User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // For password hashing

use App\Models\Roles; // Import the User model
class UsersController extends Controller
{
    // Display a paginated list of users
    public function index(Request $request)
    {
        $query = User::query();

        if ($request->search) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%');
        }

        $users = $query->paginate(10);

        return view('dashboard.users', compact('users'));
    }

    // Show the form for creating a new user
    public function create()
    {
        $roles = Roles::all();
        return view('dashboard.createUser', compact('roles'));
    }

    // Store a newly created user
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role_id' => 'required|exists:roles,id',
        ]);

        $data['password'] = Hash::make($data['password']); // Hash the password

        User::create($data);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // Show the form for editing an existing user
    public function edit(User $user)
    {
        $roles = Roles::all();
        return view('dashboard.createUser', compact('user','roles'));
    }

    // Update an existing user
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
            'role_id' => 'required|exists:roles,id',
        ]);

        if ($request->password) {
            $data['password'] = Hash::make($request->password); // Hash the new password
        } else {
            unset($data['password']); // Do not update the password if it's not provided
        }

        $user->update($data);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    // Delete a user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
