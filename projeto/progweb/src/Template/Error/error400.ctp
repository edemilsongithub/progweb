<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'error';

if (Configure::read('debug')):
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error400.ctp');

    $this->start('file');
?>
<?php if (!empty($error->queryString)) : ?>
    <p class="notice">
        <strong>SQL Query: </strong>
        <?= h($error->queryString) ?>
    </p>
<?php endif; ?>
<?php if (!empty($error->params)) : ?>
        <strong>SQL Query Params: </strong>
        <?php Debugger::dump($error->params) ?>
<?php endif; ?>
<?= $this->element('auto_table_warning') ?>
<?php
    if (extension_loaded('xdebug')):
        xdebug_print_function_stack();
    endif;

    $this->end();
endif;
?> 

<div class="container text-center">
    <div class="content-404">
        <img src="/images/404/404.png" class="img-responsive" alt="" />
        <h1><b>OPPS!</b></h1>
        <p><?= __d('cake', 'A página {0} não pode ser encontrada.', "<strong>'{$url}'</strong>") ?></p>
        <h2><a href="/">Ir ao início</a></h2>
    </div>
</div>

<style type="text/css">
    #header {display: none;}
</style>


<script src="/js/jquery.js"></script>
<script src="/js/price-range.js"></script>
<script src="/js/jquery.scrollUp.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/main.js"></script>