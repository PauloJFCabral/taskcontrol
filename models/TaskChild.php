<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task_child".
 *
 * @property integer $parent_id
 * @property integer $child_id
 */
class TaskChild extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task_child';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           // [['parent_id', 'child_id'], 'required'],
            [['parent_id', 'child_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'parent_id' => 'Parent ID',
            'child_id' => 'Child ID',
        ];
    }
}
