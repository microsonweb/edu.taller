<div class="clients index">
	<h2><?php echo __('Clients'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dni'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('calle'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('codPostal'); ?></th>
			<th><?php echo $this->Paginator->sort('province_id'); ?></th>
			<th><?php echo $this->Paginator->sort('locality_id'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('telMovil'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('correoElectronico'); ?></th>
			<th><?php echo $this->Paginator->sort('comentario'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('department_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clients as $client): ?>
	<tr>
		<td><?php echo h($client['Client']['id']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['dni']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['calle']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['numero']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['codPostal']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($client['Province']['nombre'], array('controller' => 'provinces', 'action' => 'view', $client['Province']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($client['Locality']['nombre'], array('controller' => 'localities', 'action' => 'view', $client['Locality']['id'])); ?>
		</td>
		<td><?php echo h($client['Client']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['telMovil']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['fax']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['correoElectronico']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['comentario']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['active']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['created']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($client['Department']['id'], array('controller' => 'departments', 'action' => 'view', $client['Department']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $client['Client']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $client['Client']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $client['Client']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $client['Client']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?></li>
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
