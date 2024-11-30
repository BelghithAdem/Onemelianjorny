<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests; // Assuming your model is named RequestModel to avoid conflict with Illuminate\Http\Request
use Illuminate\Support\Facades\Log;
use App\Models\Product;
class RequestController extends Controller
{
    public function index(Request $request)
    {
        $query = Requests::query();

        $requests = $query->paginate(10);
        Log::info($requests);
        return view('dashboard.requests', compact('requests'));
    }

    public function create()
    {
        $products = Product::all();
        return view('dashboard.createRequest',compact("products"));
    }

    public function store(Request $request)
    {
        Log::info("create");
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'num_tel' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'methode_livraison' => 'required|string|max:255',
            'estimation_temps' => 'nullable|string|max:255',
               'produit_id' => 'required|exists:products,id'
        ]);

        Requests::create($data);

        return ;
    }

    public function edit(Requests $request)
    {
        $products = Product::all();
        return view('dashboard.createRequest', compact('request','products'));
    }

    public function update(Request $request, $id)
    {  // Validate the incoming data
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'num_tel' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'methode_livraison' => 'required|string|max:255',
            'estimation_temps' => 'nullable|string|max:255',
            'produit_id' => 'required|exists:products,id',
        ]);

        // Find the request by ID
        $requests = Requests::findOrFail($id);

        // Log the validated data
        Log::info("update 12");
        Log::info($data);

        // Update the request model with the validated data
        $requests->update($data);  // This will update the model using the provided data

        // Optionally log success
        Log::info("Request updated successfully");

        // Redirect to the requests index page with a success message
        return redirect()->route('requests.index')->with('success', 'Request updated successfully.');
    }

    public function destroy($id)
    {
        $requestModel = Requests::findOrFail($id);

        $requestModel->delete();

        return redirect()->route('requests.index')->with('success', 'Request deleted successfully.');
    }

    public function bulkDelete(Request $request)
    {
        $ids = $request->ids;

        Requests::whereIn('id', $ids)->delete();

        return response()->json(['message' => 'Requests deleted successfully.']);
    }
}
