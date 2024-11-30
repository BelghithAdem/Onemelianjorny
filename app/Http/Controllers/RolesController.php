<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Roles;
use Illuminate\Support\Facades\Storage;

class RolesController extends Controller
{

        public function index(Request $request)
        {
            $query = Roles::query();

            if ($request->search) {
                $query->where('name', 'like', '%' . $request->search . '%');
            }

            $roles = $query->paginate(10);

            return view('dashboard.roles', compact('roles'));
        }

        public function create()
        {
            return view('dashboard.CreateRole');
        }

        public function store(Request $request)
        {
            $data = $request->validate([
                'name' => 'required|string|max:255',

            ]);


            Roles::create($data);

            return redirect()->route('roles.index')->with('success', 'Product created successfully.');
        }

        public function edit(Roles $role)
        {
            return view('dashboard.createRole', compact('role'));
        }

        public function update(Request $request, Roles $role)
        {
            $data = $request->validate([
                'name' => 'required|string|max:255',

            ]);


            $role->update($data);

            return redirect()->route('roles')->with('success', 'Product updated successfully.');
        }
        public function destroy($id)
        {
            // Find the product by ID
            $role = Roles::findOrFail($id);

            // Delete associated files only if they exist

            // Delete the product
            $role->delete();

            return redirect()->route('roles.index')->with('success', 'Product deleted successfully.');
        }


    }


