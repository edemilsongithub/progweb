<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $produto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Produto'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="produto form large-9 medium-8 columns content">
    <?= $this->Form->create($produto) ?>
    <fieldset>
        <legend><?= __('Edit Produto') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('descricao');
            echo $this->Form->input('faixa_etaria');
            echo $this->Form->input('preco_dia');
            echo $this->Form->input('qnt');
            echo $this->Form->input('id_categoria');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
