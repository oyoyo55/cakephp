<p>This is People table records.</p>
<table>
<thead><tr>
    <th><?=$this->Paginator->sort('id') ?></th>
    <th><?=$this->Paginator->sort('name') ?></th>
    <th><?=$this->Paginator->sort('mail') ?></th>
    <th><?=$this->Paginator->sort('age') ?></th>
    <th>message</th>

</tr></thead>
<?php foreach ($data->toArray() as $obj): ?>
<tr>
    <td><?=h($obj->id) ?></td>
    <td><a href="<?= $this->Url->build(['controller'=>'Pepole', 'action'=>'edit']);?>?id=<?= $obj->id ?>">
    <?=($obj->name) ?></a></td>
    <td><?=h($obj->mail) ?></td>
    <td><?=h($obj->age) ?></td>
    <td>
        <?php foreach ($obj->messages as $item): ?>
            "<?= h($item->message) ?>"<br>
        <?php endforeach; ?>
    </td>
    
</tr>
<?php endforeach; ?>
</table>

<div class="paginator">
    <ul class="pagination">
        <?=$this->Paginator->first(' |<< ' . '最初へ') ?>
        <?=$this->Paginator->prev(' << ' . '前へ') ?>
        <?=$this->Paginator->next('次へ' . '前へ') ?>
        <?=$this->Paginator->last('最後へ' . ' >>| ') ?>
    </ul>
</div>