<?php

use yii\helpers\Html;
//use yii\grid\GridView;

use app\models\Categories;
use kartik\tree\TreeViewInput;
use kartik\tree\TreeView;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categories-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!--p>
        <?= Html::a('Create Categories', ['create'], ['class' => 'btn btn-success']) ?>
    </p-->

    <?php 
     /*
        GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'root',
            'lft',
            'rgt',
            'lvl',
            // 'name',
            // 'icon',
            // 'icon_type',
            // 'active',
            // 'selected',
            // 'disabled',
            // 'readonly',
            // 'visible',
            // 'collapsed',
            // 'movable_u',
            // 'movable_d',
            // 'movable_l',
            // 'movable_r',
            // 'removable',
            // 'removable_all',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 
    */
//    $a = Categories::find()->addOrderBy('root, lft');
//    print_r($a);
    
    echo TreeView::widget([
        // single query fetch to render the tree
        'query'             => Categories::find()->addOrderBy('root, lft'), 
        'headingOptions'    => ['label' => 'Categories'],
        //'isAdmin'           => true,                       // optional (toggle to enable admin mode)
        'displayValue'      => 1,                           // initial display value
        //'softDelete'      => true,                        // normally not needed to change
        //'cacheSettings'   => ['enableCache' => true]      // normally not needed to change
        'showCheckbox'      => true,
        'iconEditSettings' => [
            'show' => 'list',
            'listData' => [
                'file' => 'File',                
                'phone' => 'Phone',
                'bell' => 'Bell',
            ]
        ],
    ]);
    
    /*
    echo TreeViewInput::widget([
        // single query fetch to render the tree
        'query'             => Categories::find()->addOrderBy('root, lft'), 
        'headingOptions'    => ['label' => 'Categories'],
        'name'              => 'kv-product',    // input name
        'value'             => '1,2,3',         // values selected (comma separated for multiple select)
        'asDropdown'        => true,            // will render the tree input widget as a dropdown.
        'multiple'          => true,            // set to false if you do not need multiple selection
        'fontAwesome'       => true,            // render font awesome icons
        'rootOptions'       => [
            'label' => '<i class="fa fa-tree"></i>', 
            'class'=>'text-success'
        ],                                      // custom root label
        //'options'         => ['disabled' => true],
    ]);
    */
     
    ?>

</div>
