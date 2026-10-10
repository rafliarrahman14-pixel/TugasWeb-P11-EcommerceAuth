<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    public function edit(Product $product)
    {
        Gate::authorize('update', $product);

        return "Halaman Edit Produk: " . $product->name;
    }

    public function destroy(Product $product)
    {
        Gate::authorize('delete', $product);

        return "Produk boleh dihapus: " . $product->name;
    }
}