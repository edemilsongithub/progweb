<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="col-md-4 col-md-offset-4">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <?php
            echo $this->Form->input('email', ['label' => '', 'placeholder' => 'email@example.com', 'class' => 'form-control']);
            echo $this->Form->input('senha', ['label' => '', 'type' => 'password', 'placeholder' => 'senha', 'class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Entrar'), ['class' => 'btn btn-lg btn-primary btn-block']) ?>
    <?= $this->Form->end() ?>
</div>


<style type="text/css">
.form-control {
    position: relative;
    height: auto;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 10px;
    font-size: 16px;
}
input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.input.password {
    margin-top: -21px;
}
</style>