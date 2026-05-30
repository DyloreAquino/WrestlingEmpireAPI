<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use App\Http\Resources\V1\PromotionResource;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PromotionResource::collection(Promotion::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Promotion $promotion)
    {
        return new PromotionResource(
            $promotion->loadMissing('wrestlers', 'championships')
        );
    }
}
