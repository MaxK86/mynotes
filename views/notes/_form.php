<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Categories;

//use kartik\tree\TreeView;
use kartik\tree\TreeViewInput;


/* @var $this yii\web\View */
/* @var $model app\models\Notes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

    <?= TreeViewInput::widget([
        'name' => 'kvTreeInput',
        //'value' => '1,2,3', // preselected values        
        'query' => Categories::find()->addOrderBy('root, lft'),
        'headingOptions' => ['label' => 'Categories'],
        'rootOptions' => ['label'=>'<i class="fa fa-tree text-success"></i>'],
        //'fontAwesome' => true,
        'asDropdown' => true,
        'multiple' => false,
        'options' => ['disabled' => false]
    ]);?>
    

    <?php //$form->field($model, 'created')->textInput() ?>

    <?php //$form->field($model, 'id_file')->textInput() ?>

    <br>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
