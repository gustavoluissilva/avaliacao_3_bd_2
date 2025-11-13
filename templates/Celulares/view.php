<section class="content-header">
  <h1>
    Celulare
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
            <dt scope="row"><?= __('Marca') ?></dt>
            <dd><?= h($celulare->marca) ?></dd>
            <dt scope="row"><?= __('Modelo') ?></dt>
            <dd><?= h($celulare->modelo) ?></dd>
            <dt scope="row"><?= __('Imei') ?></dt>
            <dd><?= h($celulare->imei) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($celulare->id) ?></dd>
            <dt scope="row"><?= __('Cliente Id') ?></dt>
            <dd><?= $this->Number->format($celulare->cliente_id) ?></dd>
            <dt scope="row"><?= __('Valor') ?></dt>
            <dd><?= $this->Number->format($celulare->valor) ?></dd>
            <dt scope="row"><?= __('Data Aquisicao') ?></dt>
            <dd><?= h($celulare->data_aquisicao) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($celulare->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($celulare->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
