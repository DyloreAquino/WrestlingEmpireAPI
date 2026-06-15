<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class EventsFilter extends ApiFilter {
  protected array $safeParms = [
    'id' => ['eq'],
    'createdAt' => ['eq', 'gt', 'lt'],
    'updatedAt' => ['eq', 'gt', 'lt'],
    'type' => ['eq', 'ne'],
    'placement' => ['eq', 'ne'],
    'matchTypeId' => ['eq'],
    'championshipId' => ['eq'],
    'showId' => ['eq'],
    'rating' => ['eq', 'gt', 'lt', 'gte', 'lte']
  ];

  protected array $columnMap = [
    'createdAt' => 'created_at',
    'updatedAt' => 'updated_at',
    'matchTypeId' => 'match_type_id',
    'championshipId' => 'championship_id',
    'showId' => 'show_id',
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