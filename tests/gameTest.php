<?php

require './src/game.php';

class GameTest extends PHPUnit_Framework_TestCase {
  public function testCheckType(){
    $rock = new Rock();
    $this->assertEquals(get_class($rock), "Rock");
  }
}

 ?>
