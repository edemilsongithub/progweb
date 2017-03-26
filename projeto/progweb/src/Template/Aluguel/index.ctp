<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="aluguel index large-9 medium-8 columns content">
    <h3><?= __('Aluguéis Ativos') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= __('Nome do Produto') ?></th>
                <th scope="col"><?= __('Data Locação') ?></th>
                <th scope="col"><?= __('Data de Devolução') ?></th>
                <th scope="col"><?= __('Preço') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aluguel as $aluguel): ?>
            <tr>
                <td><?= $aluguel->produto->nome ?></td>
                <td><?= h($aluguel->data_inicio) ?></td>
                <td><?= h($aluguel->data_fim) ?></td>
                <td>R$<?= $this->Number->format($aluguel->preco_aluguel) ?>,00</td>
                <td class="actions">
                    <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $aluguel->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} gravações(s) de {{count}}.')]) ?></p>
    </div>
</div>
