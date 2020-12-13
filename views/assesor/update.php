<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Assesor */

$this->title = 'Update Assesor: ' . $model->id_assesor;
$this->params['breadcrumbs'][] = ['label' => 'Assesors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_assesor, 'url' => ['view', 'id' => $model->id_assesor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="assesor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
