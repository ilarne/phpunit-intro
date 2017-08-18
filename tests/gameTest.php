<?php

require './src/game.php';

// $this->someAssertion($actual, $expected);

class GameTest extends PHPUnit_Framework_TestCase {
  public function testCheckType() {
    $rock = new Rock();
    $this->assertEquals(get_class($rock), "Rock");
    $paper = new Paper();
    $this->assertEquals(get_class($paper), "Paper");
    $scissors = new Scissors();
    $this->assertEquals(get_class($scissors), "Scissors");
  }

  public function testReturnsDraw() {
    $game = new Game();
    $rock = new Rock();
    $this->assertEquals($game->evaluates($rock, $rock), "Draw");
  }

  public function testRockBeatsScissors() {
    $game = new Game();
    $rock = new Rock();
    $scissors = new Scissors();
    $this->assertEquals($game->evaluates($rock, $scissors), $rock);
  }
}

 ?>
