<?php
/**
  * @var \App\View\AppView $this
  */
?>

<style>
h2.title.text-center {
    display: none;
}
</style>


<section id="cart_items">


<div class="review-payment">
    <h2><?= __('Realizar Locação') ?></h2>
</div>

<div class="aluguel form large-9 medium-8 columns content">
    <?= $this->Form->create($aluguel, ['class' => 'form-horizontal']) ?>
    <fieldset>
        <?php
            echo "<h4>Dados do Cliente</h4>";

            echo "<p><strong>Nome: </strong> " . $usuario->nome . "</p>";
            echo "<p><strong>Endereço: </strong> " . $usuario->endereco . "</p>";

            echo $this->Form->input('id_cliente', ['type' => 'hidden', 'value' => $usuario->id]);


            echo "<br /><h4>Dados do Produto</h4>";
            echo $this->Form->input('id_produto', ['type' => 'hidden', 'value' => $produto->id]);


            echo "<p><strong>Nome: </strong> " . $produto->nome . "</p>";
            echo "<p><strong>Web ID: </strong> " . $produto->id . "</p>";


            echo $this->Form->input('data_inicio', ['type' => 'date', 'label' => 'Início do Aluguel']);
            echo $this->Form->input('data_fim', ['type' => 'date', 'label' => 'Data de Devolução']);

            echo "<hr />";
            echo $this->Form->input('preco_aluguel', ['type' => 'text']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Alugar')) ?>
    <?= $this->Form->end() ?>
</div>

<style>
.input.date.required select {
    width: 100px;
    margin: 5px;
}
</style>

</section>

<br /><br /><br /><br />