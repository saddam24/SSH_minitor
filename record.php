/* File: record.php */


<?php
echo "Bad  Ip! You will be blocked for X minutes.";
exec("/usr/bin/touch /tmp/blockit");

# Change this line to match your MySQL configuration
$db = mysql_connect("localhost", "root", "");
mysql_select_db("anm", $db);

$ip = $_SERVER['REMOTE_ADDR'];  

# How long should the IP be banned?
$ban_time = 600; // seconds = 10 minutes

# Describe the reason for ban
#$reason = "Fell in Honeypot: ".$_SERVER['HTTP_USER_AGENT'];

$sql = "INSERT INTO hosts_ban (ip, reason, ban_time, expiry, last_access) VALUES('$ip','$reason', '$ban_time', NOW() + INTERVAL '$ban_time' SECOND, NOW()) ON DUPLICATE KEY UPDATE power = power + 1, expiry = NOW() + INTERVAL (POWER(2,(power-1))*ban_time) SECOND, last_access = NOW();";
mysql_query($sql);
?>
