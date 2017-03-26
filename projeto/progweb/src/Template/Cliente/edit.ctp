<?php
/**
  * @var \App\View\AppView $this
  */
?>

<nav>
    <span>
        <?= $this->Html->link(__(' Voltar'), ['action' => 'view', $cliente->id], ['class' => 'fa fa-arrow-left btn btn-default']) ?> 
    </span>
</nav>

<br />

<div class="form">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <?php
            echo $this->Form->input('nome', ['label' => 'Nome : ', 'class' => 'form-control']);
            // echo "<p><strong>Data de Nascimento: </strong> <input id=\"data_nasc\" class=\"calcV\" type=\"date\" name=\"data_nasc\" value=\"". $cliente->data_nasc ."\"></p>";
            // echo $this->Form->input('data_nasc', ['label' => 'Data de Nascimento : ', 'class' => 'form-control']);
            echo $this->Form->input('email', ['label' => 'E-mail : ', 'class' => 'form-control']);
            echo $this->Form->input('senha', ['label' => 'Senha : ', 'class' => 'form-control']);
            echo $this->Form->input('endereco', ['label' => 'Endereço : ', 'class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar Alterações'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>

<style>
input[type="date"] {
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #555;
    vertical-align: middle;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
}
</style>

<br />
