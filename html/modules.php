<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * This is a file to add template specific chrome to module rendering.  To use it you would
 * set the style attribute for the given module(s) include in your template to use the style
 * for each given modChrome function.
 *
 * eg. To render a module mod_test in the submenu style, you would use the following include:
 * <jdoc:include type="module" name="test" style="submenu" />
 *
 * This gives template designers ultimate control over how modules are rendered.
 *
 * NOTICE: All chrome wrapping methods should be named: modChrome_{STYLE} and take the same
 * two arguments.
 */

/*
 * Module chrome for rendering the module in a submenu
 */
function modChrome_no($module, &$params, &$attribs)
{
	if ($module->content)
	{
		echo $module->content;
	}
}

function modChrome_superheader($module, &$params, &$attribs)
{
	$moduleTag     = $params->get('module_tag', 'div');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize != 0 ? ' span' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'));
	$headerClass   = htmlspecialchars($params->get('header_class', 'page-header'));

	if ($module->content)
	{
		echo '<' . $moduleTag . ' class="wrapper ' . htmlspecialchars($params->get('moduleclass_sfx')) . '">';
			echo '<div class="inner">';
				echo '<header class="major">';
			
					if ($module->showtitle)
					{
						echo '<' . $headerTag . '>' . $module->title . '</' . $headerTag . '>';
					}

					echo $module->content;

		    	echo '</header>';
			echo '</div>';
		echo '</' . $moduleTag . '>';
	}
}

function modChrome_cta($module, &$params, &$attribs)
{
	$moduleTag     = $params->get('module_tag', 'div');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize != 0 ? ' span' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'));
	$headerClass   = htmlspecialchars($params->get('header_class', 'page-header'));

	if ($module->content)
	{
		echo '<' . $moduleTag . ' id="cta" class="wrapper ' . htmlspecialchars($params->get('moduleclass_sfx')) . '">';
			echo '<div class="inner">';
				echo $module->content;
			echo '</div>';
		echo '</' . $moduleTag . '>';
	}
}

function modChrome_wrapper($module, &$params, &$attribs)
{
	$moduleTag     = $params->get('module_tag', 'div');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize != 0 ? ' span' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'));
	$headerClass   = htmlspecialchars($params->get('header_class', 'page-header'));

	if ($module->content)
	{
		echo '<' . $moduleTag . ' class="wrapper ' . htmlspecialchars($params->get('moduleclass_sfx')) . '">';
			echo '<div class="inner">';
				echo $module->content;
			echo '</div>';
		echo '</' . $moduleTag . '>';
	}
}