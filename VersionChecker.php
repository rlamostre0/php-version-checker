<?php
/**
 * Author: Ronn Lamostre
 *
 * Version checker: use extends to API level and Client/App level
 * Constructor provides parameters for required version and current version
 * provided by app. Must use checkVersion() function to get
 * version check result.
 *
 * Function checkVersion() would result to true if current version
 * is less than required version.
 *
 */
class VersionChecker {
  private $currentVersion;
  private $requiredVersion;

  public function __construct($r, $c) {
      $this->currentVersion = $c;
      $this->requiredVersion = $r;
  }

  public function checkVersion(){
    return $this->versionToInt($this->currentVersion) < $this->versionToInt($this->requiredVersion);
  }

  private function versionToInt($d){
    $v = explode(".", $d);
    $vLen = 3 - count($v);
    for($i=0; $i<$vLen; $i++){
      $v[] = '000';
    }
    $vTemp = $v;
    $count = 0;
    foreach ($vTemp as $t){
      $v[$count] = $this->versionDigitParser($t);
      $count++;
    }
    $v = implode("", $v);
    return (int)$v;
  }

  private function versionDigitParser($d){
    $dLen = 3 - strlen($d);
    for ($i=0; $i<$dLen; $i++){
      $d = '0' . $d;
    }
    return $d;
  }

}
