<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "announcement".
 *
 * @property int $id
 * @property string $announcement
 * @property string $priority
 * @property string $date
 * @property string $user
 * @property string $client
 */
class Announcement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'announcement';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['announcement', 'priority', 'date', 'user', 'client'], 'required'],
            [['date'], 'safe'],
            [['announcement'], 'string', 'max' => 1000],
            [['priority', 'client'], 'string', 'max' => 45],
            [['user'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'announcement' => 'Announcement',
            'priority' => 'Priority',
            'date' => 'Date',
            'user' => 'User',
            'client' => 'Client',
        ];
    }
}
