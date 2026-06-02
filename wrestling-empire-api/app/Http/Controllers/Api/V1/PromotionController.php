<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use App\Http\Resources\V1\PromotionResource;

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
    public function show(Promotion $promotion)
    {
        return new PromotionResource(
            $promotion->loadMissing('wrestlers', 'championships')
        );
    }
}
