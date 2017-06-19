--TEST--
swoole_mysql: query timeout
--SKIPIF--
<?php require __DIR__ . "/../inc/skipif.inc"; ?>
--INI--
assert.active=1
assert.warning=1
assert.bail=0
assert.quiet_eval=0


--FILE--
<?php
require_once __DIR__ . "/../inc/zan.inc";
require_once __DIR__ . "/../../apitest/swoole_mysql/swoole_mysql_query_timeout.php";

?>
--EXPECT--
query timeout
closed