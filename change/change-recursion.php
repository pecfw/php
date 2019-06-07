<?php

function recursion($coins, $amount, $resultArray) {
  if($amount == 0) {
    return $resultArray;
  }

  if(sizeof($coins) == 0) {
    $newCoins = array_diff($coins, array($resultArray[0]));
    sort($newCoins);
    $result2 = recursion($newCoins, $amount, $resultArray);
    return $result2;
  }

  $start = sizeof($coins) - 1;

  for ($j = $start; $j >= 0; $j--) {
    $total = $amount - $coins[$j];
    
    if($total < 0) {
      $newCoins = array_diff($coins, array($coins[$j]));
      $result = recursion($newCoins, $amount, $resultArray);
      return $result;
    } elseif($total == 0) {
      array_push($resultArray, $coins[$j]);
      sort($resultArray);
      $result = recursion($coins, 0, $resultArray);
      return $result;
    } elseif($total > 0) {
      array_push($resultArray, $coins[$j]);
      $amount = $amount - $coins[$j];
      $result = recursion($coins, $amount, $resultArray);
      return $result;
    }
  }
}

function findFewestCoins($coins, $amount) {
  $resultArray = array();
  $result = recursion($coins, $amount, $resultArray);
  return $result;
}