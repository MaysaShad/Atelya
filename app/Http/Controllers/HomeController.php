<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use App\Models\Design;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'q' => 'nullable|string|max:30',
            'user' => 'nullable|integer|min:1',
            'category' => 'nullable|integer|min:1',
            'categoryName' => 'nullable|integer|min:1',
            'sizes' => 'nullable|array|min:0',
            'sizes.*' => 'nullable|integer|min:1',
            'colors' => 'nullable|array|min:0',
            'colors.*' => 'nullable|integer|min:1',
            'minPrice' => 'nullable|numeric|min:0',
            'maxPrice' => 'nullable|numeric|min:0',
        ]);
        $f_q = $request->has('q') ? $request->q : null;
        $f_user = $request->has('user') ? $request->user : null;
        $f_category = $request->has('category') ? $request->category : null;
        $f_categoryName = $request->has('categoryName') ? $request->categoryName : null;
        $f_sizes = $request->has('sizes') ? $request->sizes : [];
        $f_colors = $request->has('colors') ? $request->colors : [];
        $f_minPrice = $request->has('minPrice') ? $request->minPrice : null;
        $f_maxPrice = $request->has('maxPrice') ? $request->maxPrice : null;
        
        $objs = Design::when(isset($f_q), function ($query) use ($f_q) {
            return $query->where(function ($query) use ($f_q) {
                $query->where('title', 'like', '%' . $f_q . '%')
                    ->orWhere('body', 'like', '%' . $f_q . '%');
            });
        })
            ->when(isset($f_user), function ($query) use ($f_user) {
                return $query->where('user_id', $f_user);
            })
            ->when(isset($f_category), function ($query) use ($f_category) {
                return $query->where('category_id', $f_category);
            })
            ->when(isset($f_categoryName), function ($query) use ($f_categoryName) {
                return $query->where('category_name_id', $f_categoryName);
            })
            ->when(count($f_sizes) > 0, function ($query) use ($f_sizes) {
                return $query->whereIn('size_id', $f_sizes);
            })
            ->when(count($f_colors) > 0, function ($query) use ($f_colors) {
                return $query->whereIn('color_id', $f_colors);
            })
            ->when(isset($f_minPrice), function ($query) use ($f_minPrice) {
                return $query->where('price', '>=', $f_minPrice);
            })
            ->when(isset($f_maxPrice), function ($query) use ($f_maxPrice) {
                return $query->where('price', '<=', $f_maxPrice);
            })
            ->paginate(10)
            ->withQueryString();

        $users = User::withCount('designs')
            ->orderBy('name')
            ->get();
        $categories = Category::with('categoryNames')
            ->withCount('designs')
            ->orderBy('name')
            ->get();
        $sizes = Size::withCount('designs')
            ->orderBy('name')
            ->get();
        $colors = Color::withCount('designs')
            ->orderBy('id', 'asc')
            ->get();

        return view('home.index')
            ->with([
                'objs' => $objs,
                'users' => $users,
                'categories' => $categories,
                'sizes' => $sizes,
                'colors' => $colors,
                'f_q' => $f_q,
                'f_user' => $f_user,
                'f_category' => $f_category,
                'f_categoryName' => $f_categoryName,
                'f_sizes' => $f_sizes,
                'f_colors' => $f_colors,
                'f_minPrice' => $f_minPrice,
                'f_maxPrice' => $f_maxPrice,
            ]);
    }


    public function show($id)
    {
        $obj = Design::findOrFail($id);

        return view('design.show')
            ->with([
                'obj' => $obj,
            ]);
    }
}
