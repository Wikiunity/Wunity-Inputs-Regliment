<?php
 /*
 *	Wikiunity 2011-2012
 *	@developer Michael McCouman Junior / CEO and Founder
 *	@iniz the inputs
 *	@file tags
 *	@mediawiki
 */
$wgHooks['ParserFirstCallInit'][] = 'efibtSetup';
 
function efibtSetup( &$parser ) {
	$parser->setHook( 'input', 'efibtRender' );
       return true;
}
function efibtRender( $text, $args, $parser, $frame ) {
	$output = $parser->recursiveTagParse( $text, $frame );
	return '<div id="inputboxing">' 
	. $output . '</div>';
}
