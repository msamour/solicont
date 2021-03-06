<div class="bodegas view">
<h2><?php  __('Bodega');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Empresa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($bodega['Empresa']['nombre'], array('controller'=> 'empresas', 'action'=>'view', $bodega['Empresa']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bodega['Bodega']['nombre']; ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
<div class="related">
	<h3><?php __('Productos en la bodega');?></h3>
	<?php if (!empty($bodega['Producto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Linea Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Existencia'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		$id = 0;
		foreach ($bodega['Producto'] as $producto):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $producto['id'];?></td>
			<td>
				<?php echo $ajax->div('linea'.$id);
				echo $ajax->divEnd('linea'.$id); 
				?>
				<script>
				 <?php echo $ajax->remoteFunction(
				 array(
				 'url' => array( 'controller' => 'lineas', 'action' => 'nombre', $producto['linea_id'] ),
				 'update' => 'linea'.$id
				 )
				 ); ?>
				 </script>
			</td>
			<td><?php echo $producto['nombre'];?></td>
			<td><?php 
				echo $ajax->div('div'.$id);
				echo "0.00";
				echo $ajax->divEnd('div'.$id);
				
				 ?> 
				 <script>
				 <?php echo $ajax->remoteFunction(
				 array(
				 'url' => array( 'controller' => 'detalles', 'action' => 'existencia', $producto['id'],$mibod ),
				 'update' => 'div'.$id
				 )
				 ); ?>
				 </script>
			</td>
			<td class="actions">
				<?php echo $html->link(__('Movimientos', true), array('controller'=> 'productos', 'action'=>'movimientos', $producto['id'].'/'.$mibod)); ?> 
				<?php echo $html->link(__('View', true), array('controller'=> 'productos', 'action'=>'view', $producto['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'productos', 'action'=>'edit', $producto['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'productos', 'action'=>'delete', $producto['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $producto['id'])); ?>
			</td>
		</tr>
		<?php $id++;?>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Producto', true), array('controller'=> 'productos', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
