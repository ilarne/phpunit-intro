<?php

class Rock {
  public $beats = "Scissors";
}

class Paper {
  public $beats = "Rock";
}

class Scissors {
  public $beats = "Paper";
}

class Game {
  public function evaluates($choice1, $choice2) {
    if (get_class($choice1) === get_class($choice2)) {
      return "Draw";
    }
    elseif ($choice1->beats === get_class($choice2)) {
      return $choice1;
    }
      else {
        return $choice2;
      }
    }
  }

?>
