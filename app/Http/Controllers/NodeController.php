<?php

namespace App\Http\Controllers;

use App\Models\Node;
use Illuminate\Http\Request;

class NodeController extends Controller
{
    public function showNodes()
    {
        $nodes = Node::all();

        return view('settings.node', compact('nodes'));
    }
    public function create()
    {
        return view('settings.node.create-node');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'ram' => 'required|string|max:255',
            'ram_unit' => 'required|string|max:255',
            'storage' => 'required|string|max:255',
            'storage_unit' => 'required|string|max:255',
            'cores' => 'required|string|max:255',
        ]);
    
        // Création et stockage du nouveau node dans la base de données
        Node::create($validatedData);
    
        return redirect()->route('settnode')->with('success', 'Node created successfully!');
    }
}
