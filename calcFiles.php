<?php
/**
 * Created by PhpStorm.
 * User: 32
 * Date: 10.02.2017
 * Time: 20:42
 */

$dirName = __DIR__;
$filesPattern = __DIR__ . DIRECTORY_SEPARATOR . '*.*';
$files = glob($filesPattern);
echo '<p>Files in directory ' . $dirName . ':</p><pre>' . var_export($files, 1). '</pre>';


if (is_dir($dirName)) {
    if ($dh = opendir($dirName)) {
        while (($file = readdir($dh)) !== false) {
            if (is_file($file)) {
                echo "filename: $file <br>";
            }
        }
        closedir($dh);
    }
}