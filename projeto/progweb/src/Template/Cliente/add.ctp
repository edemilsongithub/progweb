<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cliente'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cliente form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Add Cliente') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('data_nasc');
            echo $this->Form->input('email');
            echo $this->Form->input('senha');
            echo $this->Form->input('endereco');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
