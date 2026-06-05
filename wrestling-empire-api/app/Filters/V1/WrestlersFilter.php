<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class WrestlersFilter extends ApiFilter {
  protected array $safeParms = [
    'id' => ['eq'],
    'createdAt' => ['eq', 'gt', 'lt'],
    'updatedAt' => ['eq', 'gt', 'lt'],
    'name' => ['eq', 'like'],
    'gender' => ['eq'],
    'finisherName' => ['eq'],
    'allegiance' => ['eq'],
    'role' => ['eq', 'ne'],
    'territoryId' => ['eq'],
    'promotionId' => ['eq'],
    'popularity' => ['eq', 'gt', 'lt'],
    'strength' => ['eq', 'gt', 'lt'],
    'skill' => ['eq', 'gt', 'lt'],
    'agility' => ['eq', 'gt', 'lt'],
    'stamina' => ['eq', 'gt', 'lt'],
    'attitude' => ['eq', 'gt', 'lt'],
    'managerId' => ['eq'],
    'partnerId' => ['eq'],
    'storyFriendId' => ['eq'],
    'storyEnemyId' => ['eq'],
    'realFriendId' => ['eq'],
    'realEnemyId' => ['eq'],
  ];

  protected array $columnMap = [
    'createdAt' => 'created_at',
    'updatedAt' => 'updated_at',
    'finisherName' => 'finisher_name',
    'territoryId' => 'territory_id',
    'promotionId' => 'promotion_id',
    'managerId' => 'manager_id',
    'partnerId' => 'partner_id',
    'storyFriendId' => 'story_friend_id',
    'storyEnemyId' => 'story_enemy_id',
    'realFriendId' => 'real_friend_id',
    'realEnemyId' => 'real_enemy_id',
  ];

  protected array $operatorMap = [
    'eq' => '=',
    'gt' => '>',
    'lt' => '<',
    'gte' => '>=',
    'lte' => '<=',
    'ne' => '!=',
    'like' => 'like'
  ];
}