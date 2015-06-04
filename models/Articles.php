<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property integer $id
 * @property string $title
 * @property string $index
 * @property string $content
 * @property string $create_at
 * @property integer $status
 * @property integer $type
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'type'], 'required'],
            [['content'], 'string'],
            [['create_at'], 'safe'],
            [['status', 'type'], 'integer'],
            [['title', 'index'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'index' => Yii::t('app', 'Index'),
            'content' => Yii::t('app', 'Content'),
            'create_at' => Yii::t('app', 'Create At'),
            'status' => Yii::t('app', 'Status'),
            'type' => Yii::t('app', 'Type'),
        ];
    }
}
