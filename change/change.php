<?php

function recursion($coins, $amount, $resultArray) {
  if($amount == 0) {
    return [];
  }

  if(in_array($amount, $resultArray)) {
    return $resultArray[$amount];
  }

  $min = 99999999999999;
  for($i=0; $i < sizeof($coins); $i++) {
    if($coins[$i] > $amount) {
      continue;
    }

    $value = recursion($amount - $coins[$i], $coins, $resultArray);

    if($value < $min) {
      $min = $val;
    }
  }

  $min = ($min == 99999999999999 ? $min : $min + 1);

  //set in the array
  //return the array
}

function findFewestCoins($coins, $amount) {
  $coinsLength = sizeof($coins);
  $result = [];

  $i = $coinsLength - 1;
  while($i >= 0) {
    while($amount >= $coins[$i]) {
      $amount -= $coins[$i];
      array_push($result, $coins[$i]);
    }
    $i -= 1;
  }
  sort($result);
  return $result;
}