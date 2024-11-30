<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner; // Ensure you have a Partner model
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index(Request $request)
    {
        $query = Partner::query();

        if ($request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $partners = $query->paginate(10);

        return view('dashboard.partners', compact('partners'));
    }

    public function create()
    {
        return view('dashboard.createPartner');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('partners/images', 'public'); // Save to storage/app/public/partners/images
        }

        Partner::create($data);

        return redirect()->route('parthner.index')->with('success', 'Partner created successfully.');
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);

        return view('dashboard.createPartner', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if (!is_null($partner->image)) {
                Storage::delete('public/' . $partner->image);
            }

            $data['image'] = $request->file('image')->store('partners/images', 'public');
        }

        $partner->update($data);

        return redirect()->route('parthner.index')->with('success', 'Partner updated successfully.');
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);

        if (!is_null($partner->image)) {
            Storage::delete('public/' . $partner->image);
        }

        $partner->delete();

        return redirect()->route('parthner.index')->with('success', 'Partner deleted successfully.');
    }

    public function bulkDelete(Request $request)
    {
        $ids = $request->ids;

        foreach ($ids as $id) {
            $partner = Partner::find($id);

            if ($partner) {
                if (!is_null($partner->image)) {
                    Storage::delete('public/' . $partner->image);
                }
                $partner->delete();
            }
        }

        return response()->json(['message' => 'Partners deleted successfully.']);
    }
}