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
                <th scope="col"><?= $this->Paginator->sort('id_cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_produto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_fim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preco_aluguel') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aluguel as $aluguel): ?>
            <tr>
                <td><?= $this->Number->format($aluguel->id_cliente) ?></td>
                <td><?= $this->Number->format($aluguel->id_produto) ?></td>
                <td><?= h($aluguel->data_inicio) ?></td>
                <td><?= h($aluguel->data_fim) ?></td>
                <td><?= $this->Number->format($aluguel->preco_aluguel) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aluguel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aluguel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aluguel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aluguel->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
