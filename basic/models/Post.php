<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $p_id
 * @property int $p_author_fk
 * @property string $p_title
 * @property string $p_extract
 * @property string $p_content
 * @property string $p_datetime
 * @property int $p_vote
 * @property string $p_status
 * @property string $p_reporting
 * @property string $p_category
 *
 * @property Comment[] $comments
 * @property User $pAuthorFk
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['p_author_fk', 'p_title', 'p_extract', 'p_content', 'p_datetime', 'p_vote', 'p_status', 'p_reporting', 'p_category'], 'required'],
            [['p_author_fk', 'p_vote'], 'integer'],
            [['p_extract', 'p_content', 'p_status', 'p_reporting', 'p_category'], 'string'],
            [['p_datetime'], 'safe'],
            [['p_title'], 'string', 'max' => 150],
            [['p_author_fk'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['p_author_fk' => 'u_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'p_id' => 'P ID',
            'p_author_fk' => 'P Author Fk',
            'p_title' => 'P Title',
            'p_extract' => 'P Extract',
            'p_content' => 'P Content',
            'p_datetime' => 'P Datetime',
            'p_vote' => 'P Vote',
            'p_status' => 'P Status',
            'p_reporting' => 'P Reporting',
            'p_category' => 'P Category',
        ];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['c_post_fk' => 'p_id']);
    }

    /**
     * Gets query for [[PAuthorFk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPAuthorFk()
    {
        return $this->hasOne(User::className(), ['u_id' => 'p_author_fk']);
    }
}
