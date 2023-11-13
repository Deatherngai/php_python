<?php
$script = __DIR__ . DIRECTORY_SEPARATOR . "1a-cli.py";
$result = shell_exec("python $script");
echo "PHP got the result - $result";
?>