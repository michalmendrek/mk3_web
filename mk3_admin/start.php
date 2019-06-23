<?php
shell_exec("sudo /home/pi/mk3_new/piwnica_quest/main &");
header("Location: http://192.168.2.10/mk3_web/mk3_admin/index.html");
die();
?>
