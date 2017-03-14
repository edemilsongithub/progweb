<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Produto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produto view large-9 medium-8 columns content">
    <h3><?= h($produto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($produto->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Faixa Etaria') ?></th>
            <td><?= h($produto->faixa_etaria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($produto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco Dia') ?></th>
            <td><?= $this->Number->format($produto->preco_dia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qnt') ?></th>
            <td><?= $this->Number->format($produto->qnt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Categoria') ?></th>
            <td><?= $this->Number->format($produto->id_categoria) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($produto->descricao)); ?>
    </div>
</div>
