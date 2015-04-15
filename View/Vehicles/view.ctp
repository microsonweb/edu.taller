<div class="vehicles view">
<h2><?php echo __('Vehicle'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patente'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['patente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vehicle['Client']['id'], array('controller' => 'clients', 'action' => 'view', $vehicle['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Model'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['id_model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vehicle['Vehicle']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vehicle'), array('action' => 'edit', $vehicle['Vehicle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vehicle'), array('action' => 'delete', $vehicle['Vehicle']['id']), array(), __('Are you sure you want to delete # %s?', $vehicle['Vehicle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
