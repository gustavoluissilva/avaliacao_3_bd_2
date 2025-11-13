<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Seguros

    <div class="pull-right"><?php echo $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('List'); ?></h3>

          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('celular_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('plano_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('funcionario_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('data_inicio') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('data_fim') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($seguros as $seguro): ?>
                <tr>
                  <td><?= $this->Number->format($seguro->id) ?></td>
                  <td><?= $this->Number->format($seguro->celular_id) ?></td>
                  <td><?= $this->Number->format($seguro->plano_id) ?></td>
                  <td><?= $this->Number->format($seguro->funcionario_id) ?></td>
                  <td><?= h($seguro->data_inicio) ?></td>
                  <td><?= h($seguro->data_fim) ?></td>
                  <td><?= h($seguro->status) ?></td>
                  <td><?= h($seguro->created) ?></td>
                  <td><?= h($seguro->modified) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $seguro->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $seguro->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $seguro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seguro->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>