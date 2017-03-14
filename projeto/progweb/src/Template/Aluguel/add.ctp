<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Aluguel'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="aluguel form large-9 medium-8 columns content">
    <?= $this->Form->create($aluguel) ?>
    <fieldset>
        <legend><?= __('Add Aluguel') ?></legend>
        <?php
            echo $this->Form->input('id_cliente');
            echo $this->Form->input('id_produto');
            echo $this->Form->input('data_inicio');
            echo $this->Form->input('data_fim');
            echo $this->Form->input('preco_aluguel');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
