<?php
/* SVN FILE: $Id: default.ctp 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 18:16:01 -0800 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php __('Sistema de Manejo de Inventario:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');

		echo $html->css('cake.generic');
		//echo $html->css('niceforms-default');
		
		echo $scripts_for_layout;
	?>
	<?php 
		print $html->charset('UTF-8');
		if(isset($javascript)): 
			print $javascript->link('prototype');
			print $javascript->link('scriptaculous.js?load=effects');
			//print $javascript->link('niceforms');
		endif;  
	?>
	
</head>
<body>
	<div id="container">
		<div id="header">
			<table border=0>
				<TR>
				<td>
					<h1><?php echo $html->link(__('Inicio', true), '/'); ?></h1>
				</td>
				<TD>
					<h1><?php echo $html->link(__('Empresas', true), '/empresas/index'); ?></h1
				</TD>
				<TD>
					<h1><?php echo $html->link(__('Productos', true), '/productos/index'); ?></h1
				</TD>
				<TD>
					<h1><?php echo $html->link(__('Reportes', true), '/productos/index'); ?></h1
				</TD>
				<TD>
					<h1><?php echo $html->link(__('Manual', true), '/pages/manual'); ?></h1
				</TD>
				<TD>
					<h1><?php echo $html->link(__('Logout', true), '/users/logout'); ?></h1
				</TD>
				</TR>
			</table>
		</div>
		<div id="content">

			<?php $session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $html->link(
					$html->image('cake.power.gif', array('alt'=> __("CakePHP: the rapid development php framework", true), 'border'=>"0")),
					'http://www.cakephp.org/',
					array('target'=>'_blank'), null, false
				);
			?>
		</div>
	</div>
	<?php echo $cakeDebug; ?>
</body>
</html>