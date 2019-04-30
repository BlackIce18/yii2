<?php
use yii\helpers\Html;
?>
<table class="table">
<thead>
    <tr>    
        <?php foreach ($oneCategory->attributeLabels() as $label) :?>
            <th><?=$label;?></th>
        <?php endforeach;?>
        <th></th>
    </tr>
</thead>
<tbody>
    <tr>
    <td>
        <?= $oneCategory->id;?>
    </td>
    <td>
        <?= $oneCategory->name;?>
    </td>
    <td>
        <?= $oneCategory->created_at;?>
    </td>
    <td>
        <?= $oneCategory->updated_at;?>
    </td>
    <td><?= Html::a('Редактировать',['category/update', 'id'=>$oneCategory->id])?></td>
</tr>
</tbody>
</table>