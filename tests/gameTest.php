<?php

require './src/game.php';

class GameTest extends PHPUnit_Framework_TestCase {

  protected $game;
  protected $rock;
  protected $scissors;
  protected $paper;

  protected function setUp() {
    $this->rock = new Rock();
    $this->game = new Game();
    $this->scissors = new Scissors();
    $this->paper = new Paper();
  }

  public function testCheckType() {
    $this->assertEquals(get_class($this->rock), "Rock");
    $this->assertEquals(get_class($this->paper), "Paper");
    $this->assertEquals(get_class($this->scissors), "Scissors");
  }

  public function testReturnsDraw() {
    $this->assertEquals($this->game->evaluates($this->rock, $this->rock), "Draw");
  }

  public function testRockBeatsScissors() {
    $this->assertEquals($this->game->evaluates($this->rock, $this->scissors), $this->rock);
  }

  public function testScissorsBeatsPaper() {
    $this->assertEquals($this->game->evaluates($this->paper, $this->scissors), $this->scissors);
  }

  public function testPaperBeatsRock() {
    $this->assertEquals($this->game->evaluates($this->rock, $this->paper), $this->paper);
  }
}

 ?>
