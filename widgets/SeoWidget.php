<?php
namespace riiitor\seo\widgets;

use riiitor\seo\models\Seo;
use yii\base\InvalidConfigException;
use yii\base\Widget;
use Yii;

class SeoWidget extends Widget {

    public $model;

    public function init() {
        parent::init();
        $view = Yii::$app->getView();
        SeoAsset::register($view);
    }

    public function run() {

        if ($this->model) {
            $modelClass = (new \ReflectionClass($this->model))->getShortName();

            $seoModel = Seo::find()->where(['model_class' => $modelClass, 'model_id' => $this->model->id])->one();
            if (!$seoModel) {
                $seoModel = new Seo();
            }
            return $this->render('form', [
                'model' => $seoModel,
            ]);
        }else {
            throw new InvalidConfigException;
        }
    }
}