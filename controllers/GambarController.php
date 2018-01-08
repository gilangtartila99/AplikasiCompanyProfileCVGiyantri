<?php

namespace app\controllers;

use Yii;
use app\models\Gambar;
use app\models\GambarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

/**
 * GambarController implements the CRUD actions for Gambar model.
 */
class GambarController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','view','create','update','delete','logout','updategambar'],
                'rules' => [
                    [
                        'actions' => ['index','view','create','update','delete','logout','updategambar'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => [''],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Gambar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GambarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize=8;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Gambar model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Gambar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Gambar();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_gambar]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Gambar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_gambar]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Hotel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdategambar($id)
    {
        $model = $this->findModel($id);
        $tmpgambar = $model->gambar;
        if ($model->load(Yii::$app->request->post())) {
            
            $model->gambar = UploadedFile::getInstance($model, 'gambar');
            
            if(!$model->gambar==NULL){
                //save file
                $unik = $model->id_gambar;
                $namafile = $model->gambar->baseName.$unik;
                $extensi = $model->gambar->extension;
            
                $model->gambar->saveAs('images/gallery/'.$namafile.'.'.$extensi);
                $model->gambar = $namafile.'.'.$extensi;
            } else {
                if($tmpgambar!=NULL) $model->gambar = $tmpgambar;
            }
            $model->save();
            
            return $this->redirect(['view', 'id' => $model->id_gambar]);
        } else {
            return $this->render('updategambar', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Gambar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Gambar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Gambar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Gambar::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
