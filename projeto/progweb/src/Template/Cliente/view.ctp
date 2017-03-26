<?php
/**
  * @var \App\View\AppView $this
  */
?>
    

<nav>
    <span>
        <?= $this->Html->link(__('Editar Informações'), ['action' => 'edit', $cliente->id], ['class' => 'btn btn-default']) ?> 
    </span>
</nav>


<div class="cliente view large-9 medium-8 columns content">
    <h3><?= h($cliente->nome) ?></h3>
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($cliente->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cliente ID') ?></th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Nascimento') ?></th>
            <td><?= h($cliente->data_nasc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= $this->Text->autoParagraph(h($cliente->endereco)); ?></td>
        </tr>
    </table>
    </div>
</div>
