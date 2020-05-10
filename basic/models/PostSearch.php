<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Post;

/**
 * PostSearch represents the model behind the search form of `app\models\Post`.
 */
class PostSearch extends Post
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['p_id', 'p_author_fk', 'p_vote'], 'integer'],
            [['p_title', 'p_extract', 'p_content', 'p_datetime', 'p_status', 'p_reporting', 'p_category'], 'safe'],
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
        $query = Post::find();

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
            'p_id' => $this->p_id,
            'p_author_fk' => $this->p_author_fk,
            'p_datetime' => $this->p_datetime,
            'p_vote' => $this->p_vote,
        ]);

        $query->andFilterWhere(['like', 'p_title', $this->p_title])
            ->andFilterWhere(['like', 'p_extract', $this->p_extract])
            ->andFilterWhere(['like', 'p_content', $this->p_content])
            ->andFilterWhere(['like', 'p_status', $this->p_status])
            ->andFilterWhere(['like', 'p_reporting', $this->p_reporting])
            ->andFilterWhere(['like', 'p_category', $this->p_category]);

        return $dataProvider;
    }
}
