<?php

use sankaest\gii\generators\model\Generator;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $generator sankaest\gii\generators\model\Generator */

echo $form->field($generator, 'moduleName')->textInput();
?>

    <div>
        <strong> Model Class </strong>
        <br>
        <?= $generator->crudModelClass ?>
    </div>
    <br>
    <div>
        <strong>Search Model Class</strong>
        <br>
        <?= $generator->crudSearchModelClass ?>
    </div>
    <br>
    <div>
        <strong> Controller Class </strong>
        <br>
        <?= $generator->crudControllerClass ?>
    </div>
    <br>
    <div>
        <strong>  View Path  </strong>
        <br>
        <?= $generator->crudViewPath ?>
    </div>
    <br>
<?= \yii\helpers\Html::a('CRUD', \yii\helpers\Url::to([
    '/gii/crud',
    'crudModelClass' => urlencode($generator->crudModelClass),
    'crudSearchModelClass' => urlencode($generator->crudSearchModelClass),
    'crudControllerClass' => urlencode($generator->crudControllerClass),
    'crudViewPath' => urlencode($generator->crudViewPath),
]), ['class' => 'btn btn-success']) ?>

    <br>
    <br>
<?php

echo $form->field($generator, 'tableName')->textInput(['table_prefix' => $generator->getTablePrefix()]);
echo $form->field($generator, 'modelClass');
echo $form->field($generator, 'standardizeCapitals')->checkbox();
echo $form->field($generator, 'singularize')->checkbox();
echo $form->field($generator, 'ns');
echo $form->field($generator, 'baseClass');
echo $form->field($generator, 'db');
echo $form->field($generator, 'useTablePrefix')->checkbox();
echo $form->field($generator, 'generateRelations')->dropDownList([
    Generator::RELATIONS_NONE => 'No relations',
    Generator::RELATIONS_ALL => 'All relations',
    Generator::RELATIONS_ALL_INVERSE => 'All relations with inverse',
]);
echo $form->field($generator, 'generateJunctionRelationMode')->dropDownList([
    Generator::JUNCTION_RELATION_VIA_TABLE => 'Via Table',
    Generator::JUNCTION_RELATION_VIA_MODEL => 'Via Model',
]);
echo $form->field($generator, 'generateRelationsFromCurrentSchema')->checkbox();
echo $form->field($generator, 'generateLabelsFromComments')->checkbox();
echo $form->field($generator, 'generateQuery')->checkbox();
echo $form->field($generator, 'queryNs');
echo $form->field($generator, 'queryClass');
echo $form->field($generator, 'queryBaseClass');
echo $form->field($generator, 'enableI18N')->checkbox();
echo $form->field($generator, 'messageCategory');
echo $form->field($generator, 'useSchemaName')->checkbox();
