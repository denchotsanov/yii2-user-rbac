<?php
use yii\helpers\Html;
/* @var $this \yii\web\View */
/* @var $model \denchotsanov\rbac\models\AuthItemModel */

$labels = $this->context->getLabels();
$this->title = Yii::t('denchotsanov.rbac', 'Create ' . $labels['Item']);
$this->params['breadcrumbs'][] = ['label' => Yii::t('denchotsanov.rbac', $labels['Items']), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->render('/layouts/_sidebar');
?>
<div class="auth-item-create">
    <h1><?php echo Html::encode($this->title); ?></h1>
    <?php echo $this->render('_form', [
        'model' => $model,
    ]); ?>
</div>