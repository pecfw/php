<?php

function convertFileToArray($file) {
  $handle = fopen($file, "r");
  $fileArray = [];
  if($handle) {
    while(($buffer = fgets($handle, 4096)) !== false) {
      array_push($fileArray, $buffer);
    }
  }
  fclose($handle);

  return $fileArray;
}

function singleCase($fileArray) {
  $numberOfValues = $fileArray[0];
  $arrayOfValues = array_slice($fileArray, 1, $numberOfValues);
  return $arrayOfValues;
}

function calculateNumberOfSwitches($engines, $searches) {
  $numberOfSwitches = 0;
  foreach($engines as $engine) {
    if(in_array($engine, $searches)) {
      $numberOfSwitches++;
    }
  }

  return $numberOfSwitches;
}

function findNumberOfSwitches($file) {
  $fileArray = convertFileToArray($file);

  $numberOfCases = $fileArray[0];
  $fileArray = array_slice($fileArray, 1);

  // for($case = 1; $case <= $numberOfCases; $case++) {
    // $arrayOfSearchEngines = singleCase($fileArray);
    // $fileArray = array_slice($fileArray, $arrayOfSearchEngines);
    // $arrayOfSearchValues = singleCase($fileArray);
    // $fileArray = array_slice($fileArray, $arrayOfSearchValues);
    // calculateNumberOfSwitches();
  // }


  for($i = 1; $i <= $numberOfCases; $i++) {
    return "Case #".$i.": ";
  }
}