<?php

/**
 * This is the model class for table "transaksi_request_pembelian".
 *
 * The followings are the available columns in table 'transaksi_request_pembelian':
 * @property integer $ID_TRANSAKSI_REQUEST_PEMBELIAN
 * @property integer $ID_USERS
 * @property integer $ID_GALLERY_BARANG
 * @property string $TANGGAL
 * @property integer $STATUS
 * @property string $TYPE_PEMBELIAN
 *
 * The followings are the available model relations:
 * @property GalleryBarang $iDGALLERYBARANG
 * @property Users $iDUSERS
 */
class TransaksiRequestPembelian extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi_request_pembelian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// array('ID_USERS, ID_GALLERY_BARANG, TANGGAL, STATUS, TYPE_PEMBELIAN', 'required'),
			array('ID_USERS, ID_GALLERY_BARANG, STATUS', 'numerical', 'integerOnly'=>true),
			array('TYPE_PEMBELIAN', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_TRANSAKSI_REQUEST_PEMBELIAN, ID_USERS, ID_GALLERY_BARANG, TANGGAL, STATUS, TYPE_PEMBELIAN', 'safe', 'on'=>'search'),
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
			'iDGALLERYBARANG' => array(self::BELONGS_TO, 'GalleryBarang', 'ID_GALLERY_BARANG'),
			'iDUSERS' => array(self::BELONGS_TO, 'Users', 'ID_USERS'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_TRANSAKSI_REQUEST_PEMBELIAN' => 'Id Transaksi Request Pembelian',
			'ID_USERS' => 'Id Users',
			'ID_GALLERY_BARANG' => 'Id Gallery Barang',
			'TANGGAL' => 'Tanggal',
			'STATUS' => 'Status',
			'TYPE_PEMBELIAN' => 'Type Pembelian',
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

		$criteria->compare('ID_TRANSAKSI_REQUEST_PEMBELIAN',$this->ID_TRANSAKSI_REQUEST_PEMBELIAN);
		$criteria->compare('ID_USERS',$this->ID_USERS);
		$criteria->compare('ID_GALLERY_BARANG',$this->ID_GALLERY_BARANG);
		$criteria->compare('TANGGAL',$this->TANGGAL,true);
		$criteria->compare('STATUS',$this->STATUS);
		$criteria->compare('TYPE_PEMBELIAN',$this->TYPE_PEMBELIAN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TransaksiRequestPembelian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
