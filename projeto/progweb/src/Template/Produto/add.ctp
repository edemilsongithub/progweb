<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="produto form large-9 medium-8 columns content">
    <?= $this->Form->create($produto) ?>
    <fieldset>
        <legend><?= __('Adicionar Produto') ?></legend>
        <?php
            echo "<div class=\"form-group\">";
            echo $this->Form->input('nome');
            echo "</div><div class=\"form-group\">";
            echo $this->Form->input('descricao');
            echo "</div><div class=\"form-group\">";
            echo $this->Form->input('faixa_etaria');
            echo "</div><div class=\"form-group\">";
            echo $this->Form->input('preco_dia');
            echo "</div><div class=\"form-group\">";
            echo $this->Form->input('qnt');
            echo "</div>";
        ?>
        <div class="form-group">
            <label for="id-categoria">Categoria</label>
            
            <select name="id_categoria" id="id-categoria">
            
            <?php foreach ($categorias as $categorium): ?>
                    <option value="<?= $categorium->id ?>"><?= h($categorium->nome) ?></option>
                <?php endforeach; ?>

            </select>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
