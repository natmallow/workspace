<?php




/**
 * 

The LeagueTable class tracks the score of each player in a league. After each game, the player records their score with the recordResult function. 

The player's rank in the league is calculated using the following logic:

    The player with the highest score is ranked first (rank 1). The player with the lowest score is ranked last.
    If two players are tied on score, then the player who has played the fewest games is ranked higher.
    If two players are tied on score and number of games played, then the player who was first in the list of players is ranked higher.

Implement the playerRank function that returns the player at the given rank.

For example:

$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo $table->playerRank(1);

All players have the same score. However, Arnold and Chris have played fewer games than Mike, and as Chris is before Arnold in the list of players, he is ranked first. Therefore, the code above should display "Chris".

 */

class LeagueTable {

    public function __construct($players) {
        $this->standings = array();
        foreach ($players as $index => $p) {
            $this->standings[$p] = array
                (
                'index' => $index,
                'games_played' => 0,
                'score' => 0
            );
        }
    }

    public function recordResult($player, $score) {
        $this->standings[$player]['games_played'] ++;
        $this->standings[$player]['score'] += $score;
    }

    public function highLow() {
        //players with high low scores 2


        usort($this->standings, function ($item1, $item2) {
            return $item2['score'] <=> $item1['score'];
        });

        usort($this->standings, function ($item1, $item2) {
            return $item1['games_played'] <=> $item2['games_played'];
        });


        print_r($this->standings);
    }

    public function sort_array_of_array(&$array) {
        $sort_score = array();
        $sort_games_played = array();
        $sort_name = array();

        foreach ($array as $key => $row) {
            $sort_name[$key] = $row['index'];
            $sort_score[$key] = $row['score'];
            $sort_games_played[$key] = $row['games_played'];
        }

        array_multisort(
                $sort_score, SORT_DESC, $sort_games_played, SORT_ASC, $sort_name, SORT_ASC, $array);
    }

    public function playerRank($rank) {
        echo '<pre>';
        $this->sort_array_of_array($this->standings);
        print_r($this->standings);
        //$this->standings = array_reverse($this->standings);

        $newArray = array_keys($this->standings);
        return $newArray[$rank - 1];
    }

}

$table = new LeagueTable(array('Mike', 'Chris', 'Arnold', 'Bob'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 15);
$table->recordResult('Chris', 5);
$table->recordResult('Bob', 6);
//$table->recordResult('Chris', 7);
echo $table->playerRank(1);
?>