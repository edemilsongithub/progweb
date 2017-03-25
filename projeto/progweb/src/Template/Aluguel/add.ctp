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
            echo "<p><strong>E-mail: </strong> " . $usuario->email . "</p>";
            echo "<p><strong>Endereço: </strong> " . $usuario->endereco . "</p>";

            echo $this->Form->input('id_cliente', ['type' => 'hidden', 'value' => $usuario->id]);


            echo "<br /><h4>Dados do Produto</h4>";
            echo $this->Form->input('id_produto', ['type' => 'hidden', 'value' => $produto->id]);


            echo "<p><strong>Nome: </strong> " . $produto->nome . "</p>";
            echo "<p><strong>Web ID: </strong> " . $produto->id . "</p>";
            echo "<p><strong>Descrição: </strong> " . $produto->descricao . "</p>";
            echo "<p><strong>Preço / dia: </strong> " . $produto->preco_dia . "</p>";


            echo "<br /><h4>Dados da Locação</h4>";

            echo "<p><strong>Data da Locação: </strong> <input id=\"data1\" class=\"calcV\" type=\"date\" name=\"data_inicio\"></p>";
            echo "<p><strong>Data de Devolução: </strong> <input id=\"data2\" class=\"calcV\" type=\"date\" name=\"data_fim\"></p>";

            echo "<hr />";

            echo "<div class=\"input-group col-md-6\">";
            echo "<div class=\"input-group-addon\">$</div>";
            echo $this->Form->input('preco_aluguel', ['label' => '', 'id' => 'total', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Preço Final', 'readonly' => true]);
            echo "<div class=\"input-group-addon\">.00</div>";
            echo "</div>";
        ?>
    </fieldset>
    <?= $this->Form->button(__('Alugar'), ['id' => 'enviar', 'class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>

<style>
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

<script>

$(document).on("change", ".calcV", function(){

    var campo1 = document.getElementById('data1');
    var campo2 = document.getElementById('data2');

    var date1 = new Date(campo1.value);
    var date2 = new Date(campo2.value);
    var preco_dia = <?= $produto->preco_dia ?>;

    var timeDiff = date2.getTime() - date1.getTime();
    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
    var total = diffDays * preco_dia;

    if(!(total > 0) || date1.getTime() < (new Date).getTime())
    {
        $("#enviar").addClass("disabled");
        total = 0.00;
        alert("Você só pode colocar a Data de Locação posterior ao dia de hoje!");
    } else
    {
        $("#enviar").removeClass("disabled");
    }

    document.getElementById('total').value = total;
});

</script>

</section>

<br /><br /><br /><br />