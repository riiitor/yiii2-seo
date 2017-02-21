### Install
create migration and apply it
```bash
yii migrate/create create_seo_table --fields=model_class:string:notNull,model_id:integer:notNull,title:string,keywords:string,description:string
```
add behavior to model
```php
'seo' => [
    'class' => \riiitor\seo\behaviors\SeoBehavior::className(),
]
```
add widget to form
```php
echo \riiitor\seo\widgets\SeoWidget::widget(['model' => $model]);
```
register meta
```php
$model->registerSeo();
```