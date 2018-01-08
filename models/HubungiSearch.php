<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Hubungi;

/**
 * HubungiSearch represents the model behind the search form about `app\models\Hubungi`.
 */
class HubungiSearch extends Hubungi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_hubungi'], 'integer'],
            [['nama', 'email', 'judul', 'pesan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Hubungi::find();

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
            'id_hubungi' => $this->id_hubungi,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'pesan', $this->pesan]);

        return $dataProvider;
    }
}
