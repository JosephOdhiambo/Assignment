<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CrCourseCategory $model */

$this->title = 'Update Cr Course Category: ' . $model->category_id;
$this->params['breadcrumbs'][] = ['label' => 'Cr Course Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->category_id, 'url' => ['view', 'category_id' => $model->category_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cr-course-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
