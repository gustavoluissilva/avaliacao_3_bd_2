<section class="content-header">
  <h1>
    Pagamento
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Metodo Pagamento') ?></dt>
            <dd><?= h($pagamento->metodo_pagamento) ?></dd>
            <dt scope="row"><?= __('Status Pagamento') ?></dt>
            <dd><?= h($pagamento->status_pagamento) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($pagamento->id) ?></dd>
            <dt scope="row"><?= __('Seguro Id') ?></dt>
            <dd><?= $this->Number->format($pagamento->seguro_id) ?></dd>
            <dt scope="row"><?= __('Valor Pago') ?></dt>
            <dd><?= $this->Number->format($pagamento->valor_pago) ?></dd>
            <dt scope="row"><?= __('Data Pagamento') ?></dt>
            <dd><?= h($pagamento->data_pagamento) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($pagamento->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($pagamento->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
