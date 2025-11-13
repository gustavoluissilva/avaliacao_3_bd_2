<section class="content-header">
  <h1>
    Plano
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
            <dt scope="row"><?= __('Nome') ?></dt>
            <dd><?= h($plano->nome) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($plano->id) ?></dd>
            <dt scope="row"><?= __('Valor Mensal') ?></dt>
            <dd><?= $this->Number->format($plano->valor_mensal) ?></dd>
            <dt scope="row"><?= __('Franquia') ?></dt>
            <dd><?= $this->Number->format($plano->franquia) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($plano->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($plano->modified) ?></dd>
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
          <h3 class="box-title"><?= __('Cobertura') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($plano->cobertura); ?>
        </div>
      </div>
    </div>
  </div>
</section>
