<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $u_id
 * @property string $u_nickname
 * @property string $u_datetime
 * @property string $u_email
 * @property string $u_password
 * @property string $u_role
 * @property string $u_grade
 * @property int $u_number_speech
 *
 * @property Comment[] $comments
 * @property Post[] $posts
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['u_nickname', 'u_datetime', 'u_email', 'u_password', 'u_role', 'u_grade', 'u_number_speech'], 'required'],
            [['u_datetime'], 'safe'],
            [['u_role', 'u_grade'], 'string'],
            [['u_number_speech'], 'integer'],
            [['u_nickname'], 'string', 'max' => 30],
            [['u_email'], 'string', 'max' => 50],
            [['u_password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'u_id' => 'U ID',
            'u_nickname' => 'U Nickname',
            'u_datetime' => 'U Datetime',
            'u_email' => 'U Email',
            'u_password' => 'U Password',
            'u_role' => 'U Role',
            'u_grade' => 'U Grade',
            'u_number_speech' => 'U Number Speech',
        ];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['c_author_fk' => 'u_id']);
    }

    /**
     * Gets query for [[Posts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['p_author_fk' => 'u_id']);
    }
}
