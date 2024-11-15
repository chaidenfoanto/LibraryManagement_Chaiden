<?php

namespace App\Http\Controllers;

use App\Models\Librarian;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $librarians = Librarian::all();
        return view('admin.librarians.index', compact('librarians'));
    }

    public function createLibrarian(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:librarians,email',
        ]);

        Librarian::create([
            'name' => $request->name,
            'email' => $request->email,
            'is_active' => true,
        ]);

        return redirect()->route('admin.librarians.index')->with('success', 'Pustakawan berhasil ditambahkan');
    }

    public function removeLibrarian($id)
    {
        Librarian::findOrFail($id)->delete();

        return redirect()->route('admin.librarians.index')->with('success', 'Pustakawan berhasil dihapus');
    }

    public function toggleLibrarianStatus($id)
    {
        $librarian = Librarian::findOrFail($id);
        $librarian->is_active = !$librarian->is_active;
        $librarian->save();

        return redirect()->route('admin.librarians.index')->with('success', 'Status pustakawan diperbarui');
    }
}
