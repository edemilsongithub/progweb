<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aluguel'), ['action' => 'edit', $aluguel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aluguel'), ['action' => 'delete', $aluguel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aluguel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aluguel'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluguel'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aluguel view large-9 medium-8 columns content">
    <h3><?= h($aluguel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($aluguel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Cliente') ?></th>
            <td><?= $this->Number->format($aluguel->id_cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Produto') ?></th>
            <td><?= $this->Number->format($aluguel->id_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco Aluguel') ?></th>
            <td><?= $this->Number->format($aluguel->preco_aluguel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Inicio') ?></th>
            <td><?= h($aluguel->data_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Fim') ?></th>
            <td><?= h($aluguel->data_fim) ?></td>
        </tr>
    </table>
</div>
