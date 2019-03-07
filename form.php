<?php

ksort($_SERVER);

foreach ($_SERVER as $k => $v) {
    print "key is $k, value is $v";
    print "</br>";
}

if ('POST' == $_SERVER['REQUEST_METHOD']) {
    print "Hello, " . $_POST['my_name'];
} else {
    print <<<_HTML_
<form method="POST" action="{$_SERVER['PHP_SELF']}">
 Your name: <input type="text" name="my_name"/>
<input type="submit" value="Say Hello"/>
</form>

_HTML_;
}
