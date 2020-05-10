<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $c_id
 * @property int $c_post_fk
 * @property int $c_author_fk
 * @property string $c_reporting
 * @property string $c_status
 * @property string $c_datetime
 * @property string $c_title
 * @property string $c_content
 * @property int $c_vote
 *
 * @property User $cAuthorFk
 * @property Post $cPostFk
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['c_post_fk', 'c_author_fk', 'c_reporting', 'c_status', 'c_datetime', 'c_title', 'c_content', 'c_vote'], 'required'],
            [['c_post_fk', 'c_author_fk', 'c_vote'], 'integer'],
            [['c_reporting', 'c_status', 'c_content'], 'string'],
            [['c_datetime'], 'safe'],
            [['c_title'], 'string', 'max' => 150],
            [['c_author_fk'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['c_author_fk' => 'u_id']],
            [['c_post_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['c_post_fk' => 'p_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'c_id' => 'C ID',
            'c_post_fk' => 'C Post Fk',
            'c_author_fk' => 'C Author Fk',
            'c_reporting' => 'C Reporting',
            'c_status' => 'C Status',
            'c_datetime' => 'C Datetime',
            'c_title' => 'C Title',
            'c_content' => 'C Content',
            'c_vote' => 'C Vote',
        ];
    }

    /**
     * Gets query for [[CAuthorFk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCAuthorFk()
    {
        return $this->hasOne(User::className(), ['u_id' => 'c_author_fk']);
    }

    /**
     * Gets query for [[CPostFk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCPostFk()
    {
        return $this->hasOne(Post::className(), ['p_id' => 'c_post_fk']);
    }
}
