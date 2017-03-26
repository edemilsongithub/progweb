<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="cliente form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <?php
            echo $this->Form->input('nome', ['label' => 'Nome Completo :', 'class' => 'form-control']);
            echo "<br />";
            echo "<p><strong>Data de Nascimento : </strong> <input id=\"data_nasc\" class=\"calcV\" type=\"date\" name=\"data_nasc\" required></p>";
            // echo $this->Form->input('data_nasc', ['label' => 'Data de Nascimento :', 'class' => 'form-control']);
            echo "<br />";
            echo $this->Form->input('email', ['label' => 'E-mail :', 'class' => 'form-control']);
            echo "<br />";
            echo $this->Form->input('senha', ['label' => 'Senha :', 'class' => 'form-control']);
            echo "<br />";
            echo $this->Form->input('endereco', ['label' => 'Endereço :', 'class' => 'form-control']);
            echo "<br />";
        ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar'), ['label' => 'Data de Nascimento :', 'class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>

<br />

<style type="text/css">

    .input.date.required select {
    width: 100px;
    margin: 5px;
}
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