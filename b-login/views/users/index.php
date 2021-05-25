<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Users'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'surname',
            'identification',
            //'role_id',
            [
                'attribute'=> 'role_id',
                'value'=> function($data){
                    return $data->role->name_rol;
                }
            ],
            'email:email',
            'username',
            //'password',
            //'auth_key',
            //'access_token',
            //'status',
            [
                'attribute'=> 'status',
                'value'=> function($data){
                    return ($data->status==1)?'Active':'Inactive';
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
