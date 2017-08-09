<?php
namespace riiitor\seo\behaviors;

use Yii;
use riiitor\seo\models\Seo;
use yii\base\Behavior;
use yii\db\ActiveRecord;
use yii\helpers\Html;

class SeoBehavior extends Behavior {

    public function events() {
        return [
            ActiveRecord::EVENT_AFTER_INSERT => 'create',
            ActiveRecord::EVENT_AFTER_UPDATE => 'update',
            ActiveRecord::EVENT_AFTER_DELETE => 'delete',
        ];
    }

    public function create() {
        $model = new Seo();

        $model->model_class = $this->getModelClass($this->owner);
        $model->model_id = $this->owner->id;

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
        }
    }

    public function update() {

        $model = Seo::find()->where(['model_class' => $this->getModelClass($this->owner), 'model_id' => $this->owner->id])->one();

        if (!$model) {
            $model = new Seo();

            $model->model_class = $this->getModelClass($this->owner);
            $model->model_id = $this->owner->id;
        }

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
        }
    }

    public function delete() {
        $model = Seo::find()->where(['model_class' => $this->getModelClass($this->owner), 'model_id' => $this->owner->id])->one();

        if ($model) {
            $model->delete();
        }
    }

    public function registerSeo() {
        $seoModel = Seo::find()->where(['model_class' => $this->getModelClass($this->owner), 'model_id' => $this->owner->id])->one();
        $view = Yii::$app->getView();

        if ($seoModel) {
            $view->title = $seoModel->title;
            $view->registerMetaTag(['name' => 'keywords', 'content' => $seoModel->keywords]);
            $view->registerMetaTag(['name' => 'description', 'content' => $seoModel->description]);
        }
    }

    private function getModelClass($model) {
        return (new \ReflectionClass($model))->getShortName();
    }
}