<?php
shell_exec("sudo pgrep -f main | xargs kill -9");
header("Location: http://192.168.2.10/mk3_web/mk3_admin/index.html");
die();
?>
