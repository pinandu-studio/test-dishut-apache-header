<?php

echo "<h3>Dari getallheaders()</h3>";
echo "<pre style=\"font-size: 11px;\">";
print_r(getallheaders());
echo "</pre>";

echo "<h3>Dari apache_request_headers()</h3>";
echo "<pre style=\"font-size: 11px;\">";
print_r(apache_request_headers());
echo "</pre>";

echo "<h3>Dari \$_SERVER</h3>";
echo "<pre style=\"font-size: 11px;\">";
print_r($_SERVER);
echo "</pre>";