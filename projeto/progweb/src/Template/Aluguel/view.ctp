<?php
/**
  * @var \App\View\AppView $this
  */
?>

<nav>
    <span>
        <?= $this->Html->link(__(' Voltar'), ['action' => 'index'], ['class' => 'fa fa-arrow-left btn btn-default']) ?> 
    </span>
</nav>

<div class="aluguel view large-9 medium-8 columns content">
    <h3><?= h($aluguel->produto->nome) ?></h3>
    <hr>
    <h4>Dados do Cliente</h4>
    <hr>

    <p><strong>Cliente ID :</strong> <?= $aluguel->cliente->id ?></p>
    <p><strong>Nome :</strong> <?= $aluguel->cliente->nome ?></p>
    <p><strong>E-mail :</strong> <?= $aluguel->cliente->email ?></p>
    <p><strong>Endereço :</strong> <?= $aluguel->cliente->endereco ?></p>

    <hr>
    <h4>Dados do Produto</h4>
    <hr>
    <p><strong>Produto ID :</strong> <?= $aluguel->produto->id ?></p>
    <p><strong>Nome :</strong> <?= $aluguel->produto->nome ?></p>
    <p><strong>Descrição :</strong> <?= $aluguel->produto->descricao ?></p>
    <p><strong>Faixa Etaria :</strong> <?= $aluguel->produto->faixa_etaria ?></p>
    <p><strong>Categoria :</strong> <?= $aluguel->produto->categorium->nome ?></p>

    <hr>
    <h4>Dados da Locação</h4>
    <hr>    
    <p><strong>Aluguel ID :</strong> <?= $aluguel->id ?></p>
    <p><strong>Data de Locação :</strong> <?= $aluguel->data_inicio ?></p>
    <p><strong>Data de Devolução :</strong> <?= $aluguel->data_fim ?></p>
    <p><strong>Preço :</strong> R$<?= $aluguel->preco_aluguel ?>,00</p>

</div>
