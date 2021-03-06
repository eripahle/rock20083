<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $ID_USER
 * @property integer $ID_REGISTRASI
 * @property integer $ID_JENIS
 * @property string $NOMER_SAKTI
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

	public $password2;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(

			array('NOMER_SAKTI ', 'required','message'=>'Data {attribute} Harus Diisi'),
			array('NOMER_SAKTI', 'length', 'max'=>20),
			array('NOMER_SAKTI','unique','message'=>'NOMER_SAKTI "<b>{value}</b>" Sudah Digunakan'),
			// array('PASSWORD, password2', 'required', 'on' => 'create'),
            // array('PASSWORD, password2', 'length', 'min' => 6, 'max' => 30, 'on' => array('create', 'update')),
            // array('password2', 'compare', 'compareAttribute' => 'PASSWORD','message'=>'Password Harus Sama'),
            // array('PASSWORD, password2', 'length', 'min' => 8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_USER, ID_REGISTRASI, ID_JENIS, NOMER_SAKTI, PASSWORD, VAS, STATUS', 'safe', 'on'=>'search'),
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

	 public function validatePassword($password)
    {
    	$hash= CPasswordHelper::hashPassword($this->PASSWORD);
        return CPasswordHelper::verifyPassword(md5($password),$hash);
    }
 
    public function hashPassword($password)
    {
        return CPasswordHelper::hashPassword($password);
    }

	public function generateSalt() { 
		return uniqid('',true); 
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
