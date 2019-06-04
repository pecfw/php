<?php

function twoOfAKind($total, $array, $coins) {
  if($total == 0) {
    array_push($array, $coins[$j]);
    sort($array);
    $result = recursion($array, 0);
    return $result;
  } elseif($total > 0) {
    array_push($array, $coins[$j]);
    $amount = $amount - $coins[$j];
    
  }
}

function recursion($coins, $amount) {
  $array = array();
  $newCoins = array();

  if($amount == 0) {
    return $coins;
  } 
  $start = sizeof($coins) - 1;

  for ($j = $start; $j >= 0; $j--) {
    $total = $amount - $coins[$j];

    // if($total < 0) {
    //   $newCoins = array_diff($coins, array($coins[$j]));
    if($total == 0) {
      array_push($array, $coins[$j]);
      sort($array);
      $result = recursion($array, 0);
      return $result;
    } elseif($total > 0) {
      array_push($array, $coins[$j]);
      $amount = $amount - $coins[$j];
    }
  }
  $newCoins = array_diff($coins, array($array[0]));
  sort($newCoins);
  $result2 = recursion($newCoins, $amount);
  return $result2;
}

function findFewestCoins($coins, $amount) {
  $result = recursion($coins, $amount);
  echo $result[0];
  return $result;
}