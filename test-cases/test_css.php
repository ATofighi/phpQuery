<?php
require_once('../phpQuery/phpQuery.php');
phpQuery::$debug = true;

$testName = 'CSS Change';
$expected = 'red';
$result = phpQuery::newDocumentFile('test.html')
	->find('p[rel]:first')
	->css('color', 'red');
if ($result->css('color') == 'red') {
	print "Test '{$testName}' passed :)";
} else {
	print "Test '{$testName}' <strong>FAILED</strong> !!!";
}
print "\n";


$testName = 'CSS change in iteration';
$expected = '30px';
$doc = phpQuery::newDocumentFile('test.html');
foreach ($doc['p[rel]:first'] as $p) {
	pq($p)->css('padding', '30px');
}
if ($doc['p[rel]:first']->css('padding') == $expected) {
	print "Test '{$testName}' passed :)";
} else {
	print "Test '{$testName}' <strong>FAILED</strong> !!!";
}
print "\n";