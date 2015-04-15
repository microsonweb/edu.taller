<div class="provinces view">
<h2><?php echo __('Province'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($province['Province']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($province['Province']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Province'), array('action' => 'edit', $province['Province']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Province'), array('action' => 'delete', $province['Province']['id']), array(), __('Are you sure you want to delete # %s?', $province['Province']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clients'); ?></h3>
	<?php if (!empty($province['Client'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Calle'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('CodPostal'); ?></th>
		<th><?php echo __('Province Id'); ?></th>
		<th><?php echo __('Localidad'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('TelMovil'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('CorreoElectronico'); ?></th>
		<th><?php echo __('Comentario'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($province['Client'] as $client): ?>
		<tr>
			<td><?php echo $client['id']; ?></td>
			<td><?php echo $client['dni']; ?></td>
			<td><?php echo $client['nombre']; ?></td>
			<td><?php echo $client['apellido']; ?></td>
			<td><?php echo $client['calle']; ?></td>
			<td><?php echo $client['numero']; ?></td>
			<td><?php echo $client['codPostal']; ?></td>
			<td><?php echo $client['province_id']; ?></td>
			<td><?php echo $client['localidad']; ?></td>
			<td><?php echo $client['telefono']; ?></td>
			<td><?php echo $client['telMovil']; ?></td>
			<td><?php echo $client['fax']; ?></td>
			<td><?php echo $client['correoElectronico']; ?></td>
			<td><?php echo $client['comentario']; ?></td>
			<td><?php echo $client['active']; ?></td>
			<td><?php echo $client['created']; ?></td>
			<td><?php echo $client['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clients', 'action' => 'view', $client['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clients', 'action' => 'edit', $client['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clients', 'action' => 'delete', $client['id']), array(), __('Are you sure you want to delete # %s?', $client['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
