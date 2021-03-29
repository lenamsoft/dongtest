<?php
/**
 * Prepares variables for block accordions templates.
 *
 * Default template: block-accordions.html.twig.
 */
function template_preprocess_block_accordion(array &$vars) 
{
	$vars['#attached']['library'][] = 'blocks_extra/block_accordion';
}


/**
 * Prepares variables for page dashboard templates.
 *
 * Default template: page-dashboard.html.twig.
 */
function template_preprocess_page_dashboard(array &$vars) 
{}