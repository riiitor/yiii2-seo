<?php
use yii\helpers\Html;
?>
<div id="seo-widget">
    <div class="form-group">
        <?= Html::label($model->getAttributeLabel('title'), 'seo-title', ['class' => 'control-label', 'data-base-label' => $model->getAttributeLabel('title')]);?>
        <?= Html::input('text', 'Seo[title]', $model->title, ['id' => 'seo-title', 'class' => 'form-control', 'maxlength' => 255]) ?>
    </div>
    <div class="form-group">
        <?= Html::label($model->getAttributeLabel('description'), 'seo-description', ['class' => 'control-label', 'data-base-label' => $model->getAttributeLabel('description')]);?>
        <?= Html::input('text', 'Seo[description]', $model->description, ['id' => 'seo-description', 'class' => 'form-control', 'maxlength' => 255]) ?>
    </div>
    <div class="form-group">
        <?= Html::label($model->getAttributeLabel('keywords'), 'seo-keywords', ['class' => 'control-label', 'data-base-label' => $model->getAttributeLabel('keywords')]);?>
        <?= Html::input('text', 'Seo[keywords]', $model->keywords, ['id' => 'seo-keywords', 'class' => 'form-control', 'maxlength' => 255]) ?>
    </div>
</div>
