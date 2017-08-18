<?php

class Rock {}

class Paper {}

class Scissors {}

class Game {
  public function evaluates($choice1, $choice2) {
    if (get_class($choice1) === get_class($choice2)) {
      return "Draw";
    }
    else {
      return $choice1;
      }
    }
  }

?>
