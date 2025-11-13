<section class="content-header">
  <h1>
    Sinistro
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
            <dt scope="row"><?= __('Tipo') ?></dt>
            <dd><?= h($sinistro->tipo) ?></dd>
            <dt scope="row"><?= __('Status') ?></dt>
            <dd><?= h($sinistro->status) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($sinistro->id) ?></dd>
            <dt scope="row"><?= __('Seguro Id') ?></dt>
            <dd><?= $this->Number->format($sinistro->seguro_id) ?></dd>
            <dt scope="row"><?= __('Data Ocorrencia') ?></dt>
            <dd><?= h($sinistro->data_ocorrencia) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($sinistro->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($sinistro->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Descricao') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($sinistro->descricao); ?>
        </div>
      </div>
    </div>
  </div>
</section>
