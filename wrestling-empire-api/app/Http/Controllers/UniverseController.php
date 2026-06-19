<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniverseController extends Controller
{
    /**
     * Display a listing of the user's universes.
     * GET /api/v1/universes
     */
    public function index(Request $request)
    {
        // Fetches ONLY the universes belonging to the authenticated user
        $universes = $request->user()->universes()->latest()->get();

        return response()->json($universes, 200);
    }

    /**
     * Store a newly created universe in storage.
     * POST /api/v1/universes
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        // Creates a universe with the user_id automatically assigned
        $universe = $request->user()->universes()->create([
            'name' => $fields['name']
        ]);

        return response()->json($universe, 201);
    }

    /**
     * Display the specified universe.
     * GET /api/v1/universes/{id}
     */
    public function show(Request $request, $id)
    {
        // findOrFail here ensures a 404 is thrown if the universe doesn't exist OR belongs to someone else
        $universe = $request->user()->universes()->findOrFail($id);

        return response()->json($universe, 200);
    }

    /**
     * Update the specified universe in storage.
     * PUT/PATCH /api/v1/universes/{id}
     */
    public function update(Request $request, $id)
    {
        $universe = $request->user()->universes()->findOrFail($id);

        $fields = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $universe->update([
            'name' => $fields['name']
        ]);

        return response()->json([
            'message' => 'Universe updated successfully',
            'universe' => $universe
        ], 200);
    }

    /**
     * Remove the specified universe from storage.
     * DELETE /api/v1/universes/{id}
     */
    public function destroy(Request $request, $id)
    {
        $universe = $request->user()->universes()->findOrFail($id);

        // Because we set up ->cascadeOnDelete() in the migration, 
        // deleting this universe will automatically wipe out its custom roster, shows, and teams too.
        $universe->delete();

        return response()->json([
            'message' => 'Universe and all its associated data deleted successfully.'
        ], 200);
    }
}