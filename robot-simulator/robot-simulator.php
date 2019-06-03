<?php

class Robot {
  const DIRECTION_NORTH = 'N';
  const DIRECTION_SOUTH = 'S';
  const DIRECTION_EAST = 'E';
  const DIRECTION_WEST = 'W';

  public $position;
  public $direction;

  function __construct($start, $direction) {
    $this->position = $start;
    $this->direction = $direction;
  }

  function turnRight() {
    if ($this->direction == self::DIRECTION_NORTH) {
      $this->direction = self::DIRECTION_EAST;
    } elseif ($this->direction == self::DIRECTION_EAST) {
      $this->direction = self::DIRECTION_SOUTH;
    } elseif ($this->direction == self::DIRECTION_SOUTH) {
      $this->direction = self::DIRECTION_WEST;
    } else {
      $this->direction = self::DIRECTION_NORTH;
    }
  }

  function turnLeft() {
    if ($this->direction == self::DIRECTION_NORTH) {
      $this->direction = self::DIRECTION_WEST;
    } elseif ($this->direction == self::DIRECTION_WEST) {
      $this->direction = self::DIRECTION_SOUTH;
    } elseif ($this->direction == self::DIRECTION_SOUTH) {
      $this->direction = self::DIRECTION_EAST;
    } else {
      $this->direction =self::DIRECTION_NORTH;
    }
  }

  function advance() {
    if ($this->direction == self::DIRECTION_NORTH) {
      $this->position[1]++;
    } elseif ($this->direction == self::DIRECTION_SOUTH) {
      $this->position[1]--;
    } elseif ($this->direction == self::DIRECTION_EAST) {
      $this->position[0]++;
    } else {
      $this->position[0]--;
    }
  }

  function instructions($instructions) {
    $instructionArray = str_split($instructions);
    for($i = 0; $i < count($instructionArray); $i++) {
      if($instructionArray[$i] == 'L') {
        $this::turnLeft();
      } elseif($instructionArray[$i] == 'A') {
        $this::advance();
      } elseif($instructionArray[$i] == 'R') {
        $this::turnRight();
      } else {
        throw new InvalidArgumentException();
      }
    }
  }
}