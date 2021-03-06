<?php

use yii\widgets\LinkPager;

?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Payment Methods</h3>
        <div class="card-tools">
            <?= LinkPager::widget([
                'pagination' => $pages,
                'linkContainerOptions' => [
                    'class' => 'page-item',
                ],
                'linkOptions' => [
                    'class' => 'page-link',
                ],
                'maxButtonCount' => 5,
                'disabledListItemSubTagOptions' => [
                    'tag' => 'a',
                    'class' => 'page-link',
                ],
            ]); ?>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($models as $key => $model) : ?>
                    <tr>
                        <td><?= $model->id; ?></td>
                        <td><?= $model->name; ?></td>
                        <td><?= $model->getTypeName(); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
