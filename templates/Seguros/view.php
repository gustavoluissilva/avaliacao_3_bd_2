<section class="content-header">
  <h1>
    Seguro
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
            <dt scope="row"><?= __('Status') ?></dt>
            <dd><?= h($seguro->status) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($seguro->id) ?></dd>
            <dt scope="row"><?= __('Celular Id') ?></dt>
            <dd><?= $this->Number->format($seguro->celular_id) ?></dd>
            <dt scope="row"><?= __('Plano Id') ?></dt>
            <dd><?= $this->Number->format($seguro->plano_id) ?></dd>
            <dt scope="row"><?= __('Funcionario Id') ?></dt>
            <dd><?= $this->Number->format($seguro->funcionario_id) ?></dd>
            <dt scope="row"><?= __('Data Inicio') ?></dt>
            <dd><?= h($seguro->data_inicio) ?></dd>
            <dt scope="row"><?= __('Data Fim') ?></dt>
            <dd><?= h($seguro->data_fim) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($seguro->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($seguro->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
