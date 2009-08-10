<?php //debug($empresas)?>
<?php if (!empty($empresas)):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Direccion'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empresas as $empresa):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $empresa['Empresa']['id'];?></td>
			<td><?php echo $empresa['Empresa']['nombre'];?></td>
			<td><?php echo $empresa['Empresa']['direccion'];?></td>
			<td class="actions">
				<?php if (!empty($empresa['Bodega'])):?>
					<?php foreach ($empresa['Bodega'] as $bodega): ?>
						<?php echo $html->link(__($bodega['nombre'], true), array('controller'=> 'bodegas', 'action'=>'view', $bodega['id'])); ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>