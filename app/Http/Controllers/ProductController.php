<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

        public function index(Request $request)
        {
            $query = Product::query();

            if ($request->search) {
                $query->where('name', 'like', '%' . $request->search . '%');
            }

            $products = $query->paginate(10);

            return view('dashboard.products', compact('products'));
        }

        public function create()
        {
            return view('dashboard.createProduct');
        }

        public function store(Request $request)
        {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'pdf' => 'nullable|mimes:pdf|max:2048',
                'qty' => 'required|integer',
                'video' => 'nullable|file|mimes:mp4,mov,avi|max:10240',
            ]);
            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('images', 'public'); // Save to storage/app/public/images
            }

            if ($request->hasFile('pdf')) {
                $data['pdf'] = $request->file('pdf')->store('pdfs', 'public'); // Save to storage/app/public/pdfs
            }

            if ($request->hasFile('video')) {
                $data['video'] = $request->file('video')->store('videos', 'public'); // Save to storage/app/public/videos
            }

            Product::create($data);

            return redirect()->route('productDashboard.index')->with('success', 'Product created successfully.');
        }

        public function edit($id)
        {
            // Find the product by ID or fail with a 404 error if not found
            $product = Product::findOrFail($id);

            // Log the product details for debugging
            Log::info($product);

            // Return the view with the product data
            return view('dashboard.createProduct', compact('product'));
        }

        public function update(Request $request, $id)
        {
            // Find the product by id
            $product = Product::findOrFail($id);

            // Validate the request data
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'pdf' => 'nullable|mimes:pdf|max:2048',
                'qty' => 'required|integer',
                'video' => 'nullable|file|mimes:mp4,mov,avi|max:10240',
            ]);

            // Handle file uploads if they exist
            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('images', 'public'); // Save to storage/app/public/images
            }

            if ($request->hasFile('pdf')) {
                $data['pdf'] = $request->file('pdf')->store('pdfs', 'public'); // Save to storage/app/public/pdfs
            }

            if ($request->hasFile('video')) {
                $data['video'] = $request->file('video')->store('videos', 'public'); // Save to storage/app/public/videos
            }

            // Update the product using the validated data
            $product->update($data);

            // Redirect with success message
            return redirect()->route('productDashboard')->with('success', 'Product updated successfully.');
        }

        public function destroy($id)
        {
            // Find the product by ID
            $product = Product::findOrFail($id);

            // Delete associated files only if they exist
            if (!is_null($product->image)) {
                Storage::delete('public/' . $product->image);
            }

            if (!is_null($product->pdf)) {
                Storage::delete('public/' . $product->pdf);
            }

            if (!is_null($product->video)) {
                Storage::delete('public/' . $product->video);
            }

            // Delete the product
            $product->delete();

            return redirect()->route('product-dashboard.index')->with('success', 'Product deleted successfully.');
        }



        public function bulkDelete(Request $request)
        {
            $ids = $request->ids;

            foreach ($ids as $id) {
                $product = Product::find($id);

                if ($product) {
                    Storage::delete([$product->image, $product->pdf, $product->video]);
                    $product->delete();
                }
            }

            return response()->json(['message' => 'Products deleted successfully.']);
        }
    }


