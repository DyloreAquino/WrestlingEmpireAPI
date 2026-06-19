<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Register a new user
    public function register(Request $request)
    {
        // TODO: Move to validation file
        $fields = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed' // requires password_confirmation field
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => $fields['password'] // Handled by 'hashed' cast in model
        ]);

        // Generate an API token immediately for the registered user
        $token = $user->createToken('wrestler_api_token')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token
        ], 201);
    }

    // Log user in and issue a new token
    public function login(Request $request)
    {
        // TODO: Move to validation file
        $fields = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        // Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Invalid email or password.'
            ], 401);
        }

        // Create new token
        $token = $user->createToken('wrestler_api_token')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token
        ], 200);
    }

    // Revoke current token (Logout)
    public function logout(Request $request)
    {
        // Delete the token that was used to make this request
        $request->user()->currentAccessToken()->delete();

        return response([
            'message' => 'Logged out successfully'
        ], 200);
    }

    // Changes the current active universe
    public function updateActiveUniverse(Request $request)
    {
        $fields = $request->validate([
            'universe_id' => 'required|exists:universes,id'
        ]);

        // Double check that the universe actually belongs to this user
        $universe = $request->user()->universes()->findOrFail($fields['universe_id']);

        // Update the user's active context
        $request->user()->update([
            'current_universe_id' => $universe->id
        ]);

        return response()->json([
            'message' => 'Active universe updated successfully',
            'current_universe_id' => $universe->id
        ], 200);
    }
}