<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comment;

/**
 * CommentSearch represents the model behind the search form of `app\models\Comment`.
 */
class CommentSearch extends Comment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['c_id', 'c_post_fk', 'c_author_fk', 'c_vote'], 'integer'],
            [['c_reporting', 'c_status', 'c_datetime', 'c_title', 'c_content'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Comment::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'c_id' => $this->c_id,
            'c_post_fk' => $this->c_post_fk,
            'c_author_fk' => $this->c_author_fk,
            'c_datetime' => $this->c_datetime,
            'c_vote' => $this->c_vote,
        ]);

        $query->andFilterWhere(['like', 'c_reporting', $this->c_reporting])
            ->andFilterWhere(['like', 'c_status', $this->c_status])
            ->andFilterWhere(['like', 'c_title', $this->c_title])
            ->andFilterWhere(['like', 'c_content', $this->c_content]);

        return $dataProvider;
    }
}
