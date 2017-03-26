<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('senha', ['label' => __('Senha'), 'type' => 'password']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Entrar')) ?>
    <?= $this->Form->end() ?>
</div>
