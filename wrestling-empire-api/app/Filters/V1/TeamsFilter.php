<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class TeamsFilter extends ApiFilter {
  protected array $safeParms = [
    'id' => ['eq'],
    'name' => ['eq'],
    'yearStart' => ['eq', 'gt', 'lt'],
    'monthStart' => ['eq', 'gt', 'lt'],
    'weekStart' => ['eq', 'gt', 'lt'],
    'yearEnd' => ['eq', 'gt', 'lt'],
    'monthEnd' => ['eq', 'gt', 'lt'],
    'weekEnd' => ['eq', 'gt', 'lt'],
    'createdAt' => ['eq', 'gt', 'lt'],
    'updatedAt' => ['eq', 'gt', 'lt'],
  ];

  protected array $columnMap = [
    'yearStart' => 'year_start',
    'monthStart' => 'month_start',
    'weekStart' => 'week_start',
    'yearEnd' => 'year_end',
    'monthEnd' => 'month_end',
    'weekEnd' => 'week_end',
    'createdAt' => 'created_at',
    'updatedAt' => 'updated_at',
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