<div class="clients view">
<h2><?php echo __('Client'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($client['Client']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($client['Client']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($client['Client']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calle'); ?></dt>
		<dd>
			<?php echo h($client['Client']['calle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($client['Client']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CodPostal'); ?></dt>
		<dd>
			<?php echo h($client['Client']['codPostal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Province'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Province']['nombre'], array('controller' => 'provinces', 'action' => 'view', $client['Province']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Locality'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Locality']['nombre'], array('controller' => 'localities', 'action' => 'view', $client['Locality']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($client['Client']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TelMovil'); ?></dt>
		<dd>
			<?php echo h($client['Client']['telMovil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($client['Client']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CorreoElectronico'); ?></dt>
		<dd>
			<?php echo h($client['Client']['correoElectronico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
			<?php echo h($client['Client']['comentario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($client['Client']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($client['Client']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($client['Client']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Department']['id'], array('controller' => 'departments', 'action' => 'view', $client['Department']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client'), array('action' => 'delete', $client['Client']['id']), array(), __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Localities'), array('controller' => 'localities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Locality'), array('controller' => 'localities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Vehicles'); ?></h3>
	<?php if (!empty($client['Vehicle'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Patente'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Model Id'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($client['Vehicle'] as $vehicle): ?>
		<tr>
			<td><?php echo $vehicle['id']; ?></td>
			<td><?php echo $vehicle['patente']; ?></td>
			<td><?php echo $vehicle['client_id']; ?></td>
			<td><?php echo $vehicle['model_id']; ?></td>
			<td><?php echo $vehicle['active']; ?></td>
			<td><?php echo $vehicle['created']; ?></td>
			<td><?php echo $vehicle['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'vehicles', 'action' => 'view', $vehicle['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'vehicles', 'action' => 'edit', $vehicle['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'vehicles', 'action' => 'delete', $vehicle['id']), array(), __('Are you sure you want to delete # %s?', $vehicle['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vehicle'), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
