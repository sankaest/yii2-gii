<?php
/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $generator sankaest\gii\generators\crud\Generator */



$generator->modelClass = urldecode(Yii::$app->request->getQueryParam('crudModelClass'));
$generator->searchModelClass = urldecode(Yii::$app->request->getQueryParam('crudSearchModelClass'));
$generator->controllerClass = urldecode(Yii::$app->request->getQueryParam('crudControllerClass'));
$generator->viewPath = urldecode(Yii::$app->request->getQueryParam('crudViewPath'));

echo $form->field($generator, 'modelClass');
echo $form->field($generator, 'searchModelClass');
echo $form->field($generator, 'controllerClass');
echo $form->field($generator, 'viewPath');
echo $form->field($generator, 'baseControllerClass');
echo $form->field($generator, 'indexWidgetType')->dropDownList([
    'grid' => 'GridView',
    'list' => 'ListView',
]);
echo $form->field($generator, 'enableI18N')->checkbox();
echo $form->field($generator, 'enablePjax')->checkbox();
echo $form->field($generator, 'messageCategory');
