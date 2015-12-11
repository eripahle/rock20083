<?php

/**
 * This is the model class for table "transaksi_request_topup_point".
 *
 * The followings are the available columns in table 'transaksi_request_topup_point':
 * @property integer $ID_TRANSAKSI_REQUEST_TOPUP_POINT
 * @property integer $ID_USERS
 * @property string $TANGGAL
 * @property integer $POINT
 * @property integer $STATUS
 */
class TransaksiRequestTopupPoint extends CActiveRecord
{
	public $biaya;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi_request_topup_point';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// array('ID_USERS, TANGGAL, POINT, STATUS', 'required'),
			array('ID_USERS, POINT, STATUS', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_TRANSAKSI_REQUEST_TOPUP_POINT, ID_USERS, TANGGAL, POINT, STATUS', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_TRANSAKSI_REQUEST_TOPUP_POINT' => 'Id Transaksi Request Topup Point',
			'ID_USERS' => 'Id Users',
			'TANGGAL' => 'Tanggal',
			'POINT' => 'Point',
			'STATUS' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID_TRANSAKSI_REQUEST_TOPUP_POINT',$this->ID_TRANSAKSI_REQUEST_TOPUP_POINT);
		$criteria->compare('ID_USERS',$this->ID_USERS);
		$criteria->compare('TANGGAL',$this->TANGGAL,true);
		$criteria->compare('POINT',$this->POINT);
		$criteria->compare('STATUS',$this->STATUS);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TransaksiRequestTopupPoint the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
