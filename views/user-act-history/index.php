<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel mdm\admin\models\searchs\UserActHistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Act Histories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-act-history-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php
        // echo Html::a('Create User Act History', ['create'], ['class' => 'btn btn-success']) 
        ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_user',
            'username',
            'nama',
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'act',
                'value' => function($model){
                    switch($model['act']){
                        case 1:
                            return "login";
                    }
                },
                'label' => 'Jenis Aksi'
            ],
            [
                'attribute' => 'url',
                'enableSorting' => false
            ],
            'modul',
            'keterangan',
            'tanggal',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
