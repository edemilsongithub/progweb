<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="categoria form large-9 medium-8 columns content form-group">
    <?= $this->Form->create($categorium) ?>
    <fieldset>
        <legend><?= __('Adicionar Categoria') ?></legend>
        <?php
            echo $this->Form->input('nome', ['label' => 'Nome']);
        ?>
    </fieldset>
    <hr />
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
