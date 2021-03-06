<?php
/**
 * Add snippets to build
 * 
 * @package minipayment
 * @subpackage build
 */
$snippets = array();

$snippets[0]= $modx->newObject('modSnippet');
$snippets[0]->fromArray(array(
	'id' => 0,
	'name' => 'miniPayment',
	'description' => 'Displays Items.',
	'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.minipayment.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.minipayment.php';
$snippets[0]->setProperties($properties);
unset($properties);

return $snippets;