<?php

use frontend\models\CrCourseCategory;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\CategorySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Cr Course Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cr-course-category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cr Course Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'category_id',
            'category_name',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CrCourseCategory $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'category_id' => $model->category_id]);
                 }
            ],
        ],
    ]); ?>


</div>