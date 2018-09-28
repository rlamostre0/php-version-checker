# php-version-checker
Version checker for php made API

###### Version checker: use extends to API level and Client/App level Constructor provides parameters for required version and current version provided by app. Must use checkVersion() function to get version check result.

###### Function checkVersion() would result to true if current version is less than required version.

## Usage:
```
include 'VersionChecker.php';
$requiredAppVersion = "2.0.5";
$appVersion = "2.0.4";
$version = new VersionChecker($requiredAppVersion, $appVersion);

if($version->checkVersion()){
  echo "Please update your app to continue.";
}
```
