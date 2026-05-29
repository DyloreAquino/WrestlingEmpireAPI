<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class ChampionshipsFilter extends ApiFilter {
  protected array $safeParms = [
    'id' => ['eq'],
    'createdAt' => ['eq', 'gt', 'lt'],
    'updatedAt' => ['eq', 'gt', 'lt'],
    'name' => ['eq'],
    'division' => ['eq', 'ne'],
    'promotionId' => ['eq'],
  ];

  protected array $columnMap = [
    'createdAt' => 'created_at',
    'updatedAt' => 'updated_at',
    'promotionId' => 'promotion_id',
  ];

  protected array $operatorMap = [
    'eq' => '=',
    'gt' => '>',
    'lt' => '<',
    'gte' => '>=',
    'lte' => '<=',
    'ne' => '!='
  ];
}