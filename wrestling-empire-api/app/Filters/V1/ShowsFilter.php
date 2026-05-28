<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class ShowsFilter extends ApiFilter {
  protected array $safeParms = [
    'id' => ['eq'],
    'createdAt' => ['eq', 'gt', 'lt'],
    'updatedAt' => ['eq', 'gt', 'lt'],
    'name' => ['eq'],
    'year' => ['eq', 'gt', 'lt'],
    'month' => ['eq', 'gt', 'lt'],
    'week' => ['eq', 'gt', 'lt'],
    'type' => ['eq'],
    'territoryId' => ['eq']
  ];

  protected array $columnMap = [
    'createdAt' => 'created_at',
    'updatedAt' => 'updated_at',
    'territoryId' => 'territory_id',
  ];

  protected array $operatorMap = [
    'eq' => '=',
    'gt' => '>',
    'lt' => '<',
    'gte' => '>=',
    'lte' => '<=',
  ];
}