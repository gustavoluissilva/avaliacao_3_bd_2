<section class="content-header">
  <h1>
    Atendimento
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
            <dd><?= h($atendimento->tipo) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($atendimento->id) ?></dd>
            <dt scope="row"><?= __('Cliente Id') ?></dt>
            <dd><?= $this->Number->format($atendimento->cliente_id) ?></dd>
            <dt scope="row"><?= __('Funcionario Id') ?></dt>
            <dd><?= $this->Number->format($atendimento->funcionario_id) ?></dd>
            <dt scope="row"><?= __('Data Atendimento') ?></dt>
            <dd><?= h($atendimento->data_atendimento) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($atendimento->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($atendimento->modified) ?></dd>
            <dt scope="row"><?= __('Resolvido') ?></dt>
            <dd><?= $atendimento->resolvido ? __('Yes') : __('No'); ?></dd>
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
            <?= $this->Text->autoParagraph($atendimento->descricao); ?>
        </div>
      </div>
    </div>
  </div>
</section>
