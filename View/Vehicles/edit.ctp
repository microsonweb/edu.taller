<div class="vehicles form">
<?php echo $this->Form->create('Vehicle'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vehicle'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('patente');
		echo $this->Form->input('client_id');
		echo $this->Form->input('id_model');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vehicle.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Vehicle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
