<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use App\Http\Resources\V1\PromotionResource;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display all promotions.
     * 
     * @group Promotions
     */
    public function index()
    {
        return PromotionResource::collection(Promotion::all());
    }

    /**
     * Display one promotion.
     * 
     * Also shows the wrestlers and championships attributed to this promotion.
     * 
     * @group Promotions
     */
    public function show(Request $request, Promotion $promotion)
    {
        $universe = $request->active_universe;

        if (!$universe) {
            return response()->json(['message' => 'No active universe selected.'], 400);
        }

        // Eager load only the wrestlers and championships that match the active universe ID
        $promotion->universe_wrestlers = $promotion->wrestlersInUniverse($universe->id)->get();
        $promotion->universe_championships = $promotion->championshipsInUniverse($universe->id)->get();

        return new PromotionResource($promotion);
    }
}
