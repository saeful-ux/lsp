<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Assesor */

$this->title = 'Create Assesor';
$this->params['breadcrumbs'][] = ['label' => 'Assesors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assesor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
