<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter {
  protected array $safeParms = [];

  protected array $columnMap = [];

  protected array $operatorMap = [];

  // Transforms the query into something that can be understood by Eloquent
  // useful because it understands symbols not text,
  // and also because it understands snake_case and not camelCase.
  public function transform(Request $request) {
    $eloQuery = [];

    // Go through each of the safe parameters as parm to operators
    foreach($this->safeParms as $parm => $operators) {
      // Get the query using request's query function
      // query basically gets the query for that specific parameter
      // in the form of ['operator' => 'value']
      // for ex. query('name') returns ['eq' => 'Jerold']
      $query = $request->query($parm);

      // If the query is not set, go to next safeParm
      if (!isset($query)) { continue; }

      // Get the column from the columnMap, if its not there just do parm
      $column = $this->columnMap[$parm] ?? $parm;

      // Now go through each operator,
      foreach($operators as $operator) {
        // actually populate the eloquent query once we find the operator needed
        if (isset($query[$operator])) {
          // this is what Eloquent's where() function requires when you pass an array of conditions
          $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
        }
      }
    }

    return $eloQuery;
  }
}