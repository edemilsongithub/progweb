<?= $this->Form->create($categorium, ['class' => 'form-inline']) ?>

<div class="form-group">
    <?php
    echo $this->Form->input('nome', ['placeholder' => 'Título da Categoria', 'label' => '', 'class' => 'form-control']);
    ?>
</div>

<hr />

<?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-success']) ?>
<?= $this->Form->end() ?>
