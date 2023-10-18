<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CrCourseCategory $model */

$this->title = 'Create Cr Course Category';
$this->params['breadcrumbs'][] = ['label' => 'Cr Course Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cr-course-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
