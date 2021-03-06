<div class="container-fluid"><!--product-details-->
	<div class="row">
		<div class="product-information"><!--/product-information-->
			<img src="/images/product-details/new.jpg" class="newarrival" alt="" />
			<h2><?= h($produto->nome) ?></h2>
			<p>Web ID: <?= h($produto->id) ?></p>
			<span>
				<span><?= $this->Number->format($produto->preco_dia) ?> R$ / dia</span>
                <br />
				<label>Quantidade:</label>
				<input type="text" value="<?= $this->Number->format($produto->qnt) ?>" />
			</span>
			<p><b>Faixa Etária:</b> <?= h($produto->faixa_etaria) ?></p>

            <?php 	if($produto->qnt > 0) : ?>
			<span>
                <a href="/aluguel/add/<?= $produto->id ?>" class="btn btn-default cart">
					<i class="fa fa-shopping-cart"></i>
					Alugar
                </a>
            </span>
			<?php else: ?>

			<span>Não há produtos em estoque :c</span>

			<?php endif; ?>
			<a href=""><img src="/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
		</div><!--/product-information-->
	</div>
</div><!--/product-details-->


<div class="produto view large-9 medium-8 columns content">
    <div class="row">
        <h4><?= __('Descrição') ?></h4>
        <?= $this->Text->autoParagraph(h($produto->descricao)); ?>
    </div>
</div>


<?php if($usuario != null) : ?>

<hr />
    

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <span>
        <?= $this->Html->link(__('Editar Produto'), ['action' => 'edit', $produto->id], ['class' => 'btn btn-default']) ?> 
        <?= $this->Form->postLink(__('Deletar Produto'), ['action' => 'delete', $produto->id], ['class' => 'btn btn-danger', 'confirm' => __('Você tem certeza que quer remover {0}?', $produto->nome)]) ?> 
        <?= $this->Html->link(__('Adicionar Produto'), ['action' => 'add'], ['class' => 'btn btn-default']) ?> 
    </span>
</nav>

<?php endif; ?>


<br />