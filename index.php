<?php
/**
 * Author: Ronn Lamostre
 *
 * Sample code using the VersionChecker class
 *
 */
include 'VersionChecker.php';
$requiredAppVersion = "2.0.5";
$appVersion = "2.0.4";
$version = new VersionChecker($requiredAppVersion, $appVersion);

if($version->checkVersion()){
  echo "Please update your app to continue.";
}
