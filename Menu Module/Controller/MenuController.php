<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
{
    $menus = Menu::all();
    return view('menu.index', compact('menus'));
}

public function create()
{
    return view('menu.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'category' => 'required',
        'image' => 'required|image'
    ]);

    $imagePath = $request->file('image')->store('menu_images', 'public');

    Menu::create([
        'name' => $validated['name'],
        'description' => $validated['description'],
        'price' => $validated['price'],
        'category' => $validated['category'],
        'image' => $imagePath
    ]);

    return redirect()->route('menu.index')->with('success', 'Menu item added successfully!');
}

    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|in:starters,salads,specialty',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($menu->image);
            $imagePath = $request->file('image')->store('menu_images', 'public');
            $validated['image'] = $imagePath;
        }

        $menu->update($validated);

        return redirect()->route('menu.index')
            ->with('success', 'Menu item updated successfully.');
    }

    public function destroy(Menu $menu)
    {
        Storage::disk('public')->delete($menu->image);
        $menu->delete();

        return redirect()->route('menu.index')
            ->with('success', 'Menu item deleted successfully.');
    }


}

