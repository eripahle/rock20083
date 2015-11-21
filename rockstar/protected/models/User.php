<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $ID_USER
 * @property integer $ID_REGISTRASI
 * @property integer $ID_JENIS
 * @property string $USERNAME
 * @property string $PASSWORD
 * @property string $NOMER_SAKTI
 * @property string $VAS
 * @property string $STATUS
 *
 * The followings are the available model relations:
 * @property TransaksiRegistrasi $iDREGISTRASI
 * @property JenisUser $iDJENIS
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_USER, USERNAME, PASSWORD, NOMER_SAKTI, VAS, STATUS', 'required'),
			array('ID_USER, ID_REGISTRASI, ID_JENIS', 'numerical', 'integerOnly'=>true),
			array('USERNAME', 'length', 'max'=>30),
			array('PASSWORD', 'length', 'max'=>50),
			array('NOMER_SAKTI, VAS', 'length', 'max'=>16),
			array('STATUS', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_USER, ID_REGISTRASI, ID_JENIS, USERNAME, PASSWORD, NOMER_SAKTI, VAS, STATUS', 'safe', 'on'=>'search'),
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
			'iDREGISTRASI' => array(self::BELONGS_TO, 'TransaksiRegistrasi', 'ID_REGISTRASI'),
			'iDJENIS' => array(self::BELONGS_TO, 'JenisUser', 'ID_JENIS'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_USER' => 'Id User',
			'ID_REGISTRASI' => 'Id Registrasi',
			'ID_JENIS' => 'Id Jenis',
			'USERNAME' => 'Username',
			'PASSWORD' => 'Password',
			'NOMER_SAKTI' => 'Nomer Sakti',
			'VAS' => 'Vas',
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

		$criteria->compare('ID_USER',$this->ID_USER);
		$criteria->compare('ID_REGISTRASI',$this->ID_REGISTRASI);
		$criteria->compare('ID_JENIS',$this->ID_JENIS);
		$criteria->compare('USERNAME',$this->USERNAME,true);
		$criteria->compare('PASSWORD',$this->PASSWORD,true);
		$criteria->compare('NOMER_SAKTI',$this->NOMER_SAKTI,true);
		$criteria->compare('VAS',$this->VAS,true);
		$criteria->compare('STATUS',$this->STATUS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
