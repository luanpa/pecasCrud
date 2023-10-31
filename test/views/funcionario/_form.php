<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Funcionario $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="funcionario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpf')->textInput() ?>

    <?= $form->field($model, 'logradouro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cep')->textInput() ?>

    <?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero')->textInput() ?>

    <?= $form->field($model, 'complemento')->textInput() ?>

    <?= $form->field($model, 'cargo_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
