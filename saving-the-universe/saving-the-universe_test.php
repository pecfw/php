<?php

require "saving-the-universe.php";

class SavingTheUniverseTest extends PHPUnit\Framework\TestCase
{
  public function testCorrectNumberOfCases()
  {
    $this->assertEquals("Case #1: ", findNumberOfSwitches("/Users/philippawisniewski/Exercism/php/saving-the-universe/test-case.in"));
  }

  public function testConvertFileToArray()
  {
    $this->assertEquals([1], convertFileToArray("/Users/philippawisniewski/Exercism/php/saving-the-universe/test-case.in"));
  }

  public function testSingleCase()
  {
    $this->assertEquals(["Googol USA"], singleCase([1, "Googol USA"]));
  }

  public function testCalculateNumberOfSwitches()
  {
    $this->assertEquals(0, calculateNumberOfSwitches(["Googol USA"], ["Googol Sweden"]));
  }

  public function testCalculateNumberOfSwitchesWithComplexCase()
  {
    $this->assertEquals()
  }
}