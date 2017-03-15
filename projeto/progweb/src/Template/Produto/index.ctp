<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?php foreach ($produto as $produto): ?>
<div class="col-sm-3">
    <div class="product-image-wrapper">
        <div class="single-products">
                <div class="productinfo text-center">
                    <img src="" alt="" />
                    <h2><?= $this->Number->format($produto->preco_dia) ?> R$/dia</h2>
                    <p><?= h($produto->nome) ?></p>
                    <?= $this->Html->link('Ver mais', ['action' => 'view', $produto->id], ['class' => 'btn btn-default add-to-cart']) ?>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2><?= $this->Number->format($produto->preco_dia) ?> R$/dia</h2>
                        <p><?= h($produto->nome) ?></p>
                    <?= $this->Html->link('Ver mais', ['action' => 'view', $produto->id], ['class' => 'btn btn-default add-to-cart']) ?>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php endforeach; ?>