<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="categoria index large-9 medium-8 columns content">
    <h3><?= __('Categorias') ?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoria as $categorium): ?>
            <tr>
                <td><?= h($categorium->nome) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $categorium->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $categorium->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $categorium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorium->id)]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} gravação(ões) de {{count}}.')]) ?></p>
    </div>
</div>
