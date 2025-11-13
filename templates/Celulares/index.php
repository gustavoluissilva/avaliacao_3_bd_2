<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Celulares

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
                  <th scope="col"><?= $this->Paginator->sort('cliente_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('marca') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modelo') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('imei') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('data_aquisicao') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($celulares as $celulare): ?>
                <tr>
                  <td><?= $this->Number->format($celulare->id) ?></td>
                  <td><?= $this->Number->format($celulare->cliente_id) ?></td>
                  <td><?= h($celulare->marca) ?></td>
                  <td><?= h($celulare->modelo) ?></td>
                  <td><?= h($celulare->imei) ?></td>
                  <td><?= $this->Number->format($celulare->valor) ?></td>
                  <td><?= h($celulare->data_aquisicao) ?></td>
                  <td><?= h($celulare->created) ?></td>
                  <td><?= h($celulare->modified) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $celulare->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $celulare->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $celulare->id], ['confirm' => __('Are you sure you want to delete # {0}?', $celulare->id), 'class'=>'btn btn-danger btn-xs']) ?>
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