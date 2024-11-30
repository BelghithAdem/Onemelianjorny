<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class ContactController extends Controller
{

    public function index(Request $request)
    {
        $query = Contact::query();

        if ($request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $contacts = $query->paginate(10);

        return view('dashboard.contact', compact('contacts'));
    }
    public function store(Request $request)
    {
        Log::info("hello test",["request" => $request]);

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'website' => 'nullable|url|max:255',
            'details' => 'nullable|string',
          
        ]);
        Log::info("hello test");

        Contact::create($validatedData);

        return redirect()->back()->with('success', 'Merci! Votre demande a été enregistrée.');
    }
}

