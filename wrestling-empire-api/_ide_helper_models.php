<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $division
 * @property int $promotion_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Promotion $promotion
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TitleReign> $title_reigns
 * @property-read int|null $title_reigns_count
 * @method static \Database\Factories\ChampionshipFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Championship newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Championship newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Championship query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Championship whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Championship whereDivision($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Championship whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Championship whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Championship wherePromotionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Championship whereUpdatedAt($value)
 */
	class Championship extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $type
 * @property string $placement
 * @property int $match_type_id
 * @property int $finish_type_id
 * @property int $championship_id
 * @property int $show_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\FinishType $finish_type
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Stipulation> $match_stipulation
 * @property-read int|null $match_stipulation_count
 * @property-read \App\Models\MatchType $match_type
 * @property-read \App\Models\Show $show
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Wrestler> $wrestlers
 * @property-read int|null $wrestlers_count
 * @method static \Database\Factories\EventFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereChampionshipId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereFinishTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereMatchTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event wherePlacement($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereShowId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Event whereUpdatedAt($value)
 */
	class Event extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Event> $events
 * @property-read int|null $events_count
 * @method static \Database\Factories\FinishTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FinishType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FinishType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FinishType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FinishType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FinishType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FinishType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FinishType whereUpdatedAt($value)
 */
	class FinishType extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Event> $events
 * @property-read int|null $events_count
 * @method static \Database\Factories\MatchTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatchType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatchType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatchType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatchType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatchType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatchType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MatchType whereUpdatedAt($value)
 */
	class MatchType extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Championship> $championships
 * @property-read int|null $championships_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Show> $shows
 * @property-read int|null $shows_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Wrestler> $wrestlers
 * @property-read int|null $wrestlers_count
 * @method static \Database\Factories\PromotionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promotion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promotion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promotion query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promotion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promotion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promotion whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Promotion whereUpdatedAt($value)
 */
	class Promotion extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $name
 * @property int $year
 * @property int $month
 * @property int $week
 * @property string $type
 * @property int $territory_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Event> $events
 * @property-read int|null $events_count
 * @property-read \App\Models\Promotion|null $promotion
 * @property-read \App\Models\Territory $territory
 * @method static \Database\Factories\ShowFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Show newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Show newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Show query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Show whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Show whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Show whereMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Show whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Show whereTerritoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Show whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Show whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Show whereWeek($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Show whereYear($value)
 */
	class Show extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Event> $events
 * @property-read int|null $events_count
 * @method static \Database\Factories\StipulationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stipulation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stipulation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stipulation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stipulation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stipulation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stipulation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Stipulation whereUpdatedAt($value)
 */
	class Stipulation extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property int $year_start
 * @property int $month_start
 * @property int $week_start
 * @property int|null $year_end
 * @property int|null $month_end
 * @property int|null $week_end
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Wrestler> $wrestlers
 * @property-read int|null $wrestlers_count
 * @method static \Database\Factories\TeamFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereMonthEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereMonthStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereWeekEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereWeekStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereYearEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Team whereYearStart($value)
 */
	class Team extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Show> $shows
 * @property-read int|null $shows_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Wrestler> $wrestlers
 * @property-read int|null $wrestlers_count
 * @method static \Database\Factories\TerritoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Territory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Territory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Territory query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Territory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Territory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Territory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Territory whereUpdatedAt($value)
 */
	class Territory extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $championship_id
 * @property int $year_start
 * @property int $month_start
 * @property int $week_start
 * @property int|null $year_end
 * @property int|null $month_end
 * @property int|null $week_end
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Championship $championship
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Wrestler> $wrestlers
 * @property-read int|null $wrestlers_count
 * @method static \Database\Factories\TitleReignFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TitleReign newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TitleReign newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TitleReign query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TitleReign whereChampionshipId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TitleReign whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TitleReign whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TitleReign whereMonthEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TitleReign whereMonthStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TitleReign whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TitleReign whereWeekEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TitleReign whereWeekStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TitleReign whereYearEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TitleReign whereYearStart($value)
 */
	class TitleReign extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $gender
 * @property string $finisher_name
 * @property string $allegiance
 * @property string $role
 * @property int $territory_id
 * @property int $promotion_id
 * @property int $popularity
 * @property int $strength
 * @property int $skill
 * @property int $agility
 * @property int $stamina
 * @property int $attitude
 * @property int|null $manager_id
 * @property int|null $partner_id
 * @property int|null $story_friend_id
 * @property int|null $story_enemy_id
 * @property int|null $real_friend_id
 * @property int|null $real_enemy_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Event> $events
 * @property-read int|null $events_count
 * @property-read Wrestler|null $managee
 * @property-read Wrestler|null $manager
 * @property-read Wrestler|null $partner
 * @property-read \App\Models\Promotion $promotion
 * @property-read Wrestler|null $real_enemy
 * @property-read Wrestler|null $real_friend
 * @property-read Wrestler|null $story_enemy
 * @property-read Wrestler|null $story_friend
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Team> $teams
 * @property-read int|null $teams_count
 * @property-read \App\Models\Territory $territory
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TitleReign> $title_reigns
 * @property-read int|null $title_reigns_count
 * @method static \Database\Factories\WrestlerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereAgility($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereAllegiance($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereAttitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereFinisherName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereManagerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler wherePartnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler wherePopularity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler wherePromotionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereRealEnemyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereRealFriendId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereSkill($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereStamina($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereStoryEnemyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereStoryFriendId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereStrength($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereTerritoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wrestler whereUpdatedAt($value)
 */
	class Wrestler extends \Eloquent {}
}

