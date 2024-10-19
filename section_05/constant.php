<?php
define("App_Name", "My App");
define("App_Version", "1.0.0");
echo App_Name."\n";
echo App_Version."\n";

const DB_NAME = "MyDB";

function run()
{
  echo DB_NAME."\n";
}
echo run();