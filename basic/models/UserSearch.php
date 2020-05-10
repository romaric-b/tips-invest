<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form of `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['u_id', 'u_number_speech'], 'integer'],
            [['u_nickname', 'u_datetime', 'u_email', 'u_password', 'u_role', 'u_grade'], 'safe'],
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
        $query = User::find();

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
            'u_id' => $this->u_id,
            'u_datetime' => $this->u_datetime,
            'u_number_speech' => $this->u_number_speech,
        ]);

        $query->andFilterWhere(['like', 'u_nickname', $this->u_nickname])
            ->andFilterWhere(['like', 'u_email', $this->u_email])
            ->andFilterWhere(['like', 'u_password', $this->u_password])
            ->andFilterWhere(['like', 'u_role', $this->u_role])
            ->andFilterWhere(['like', 'u_grade', $this->u_grade]);

        return $dataProvider;
    }
}
