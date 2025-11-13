<section class="content-header">
  <h1>
    Funcionario
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
            <dd><?= h($funcionario->nome) ?></dd>
            <dt scope="row"><?= __('Cpf') ?></dt>
            <dd><?= h($funcionario->cpf) ?></dd>
            <dt scope="row"><?= __('Cargo') ?></dt>
            <dd><?= h($funcionario->cargo) ?></dd>
            <dt scope="row"><?= __('Email') ?></dt>
            <dd><?= h($funcionario->email) ?></dd>
            <dt scope="row"><?= __('Senha') ?></dt>
            <dd><?= h($funcionario->senha) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($funcionario->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($funcionario->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($funcionario->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
