<?php

/**
 * This is the model class for table "komentar".
 *
 * The followings are the available columns in table 'komentar':
 * @property integer $ID_KOMENTAR
 * @property string $ID_STATUS_USERS
 * @property integer $ID_USERS
 * @property string $KOMENTAR
 * @property string $DATETIME_KOMENTAR
 *
 * The followings are the available model relations:
 * @property Users $iDUSERS
 */
class Komentar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'komentar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// array('KOMENTAR, DATETIME_KOMENTAR', 'required'),
			array('ID_USERS', 'numerical', 'integerOnly'=>true),
			array('ID_STATUS_USERS', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_KOMENTAR, ID_STATUS_USERS, ID_USERS, KOMENTAR, DATETIME_KOMENTAR', 'safe', 'on'=>'search'),
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
			'iDUSERS' => array(self::BELONGS_TO, 'Users', 'ID_USERS'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_KOMENTAR' => 'Id Komentar',
			'ID_STATUS_USERS' => 'Id Status Users',
			'ID_USERS' => 'Id Users',
			'KOMENTAR' => 'Komentar',
			'DATETIME_KOMENTAR' => 'Datetime Komentar',
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

		$criteria->compare('ID_KOMENTAR',$this->ID_KOMENTAR);
		$criteria->compare('ID_STATUS_USERS',$this->ID_STATUS_USERS,true);
		$criteria->compare('ID_USERS',$this->ID_USERS);
		$criteria->compare('KOMENTAR',$this->KOMENTAR,true);
		$criteria->compare('DATETIME_KOMENTAR',$this->DATETIME_KOMENTAR,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function get_data_komentar($id)
        {            
           $sql = "SELECT 
           users.ID_USERS,
           users.ID_REGISTRASI,
           transaksi_registrasi.NAMA_LENGKAP,
           komentar.KOMENTAR,
           komentar.DATETIME_KOMENTAR 
            FROM users,transaksi_registrasi,komentar 
            WHERE komentar.ID_USERS = users.ID_USERS 
            AND users.ID_REGISTRASI = transaksi_registrasi.ID_REGISTRASI 
            AND komentar.ID_STATUS_USERS = $id 
            ORDER BY komentar.ID_KOMENTAR ASC";
    $data = Yii::app()->db
        ->createCommand($sql)
        ->queryAll();
    return $data;
        }
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Komentar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
