<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $ID_USERS
 * @property integer $ID_REGISTRASI
 * @property string $ID_FANBASE
 * @property integer $ID_JENIS
 * @property string $PASSWORD
 * @property string $NOMER_SAKTI
 * @property string $VAS
 * @property string $STATUS
 *
 * The followings are the available model relations:
 * @property Groups[] $groups
 * @property GalleryBarang[] $galleryBarangs
 * @property GalleryPribadi[] $galleryPribadis
 * @property Groups[] $groups1
 * @property Komentar[] $komentars
 * @property Likes[] $likes
 * @property News[] $news
 * @property StatusUsers[] $statusUsers
 * @property Teman[] $temen
 * @property Teman[] $temen1
 * @property TransaksiRegistrasi $iDREGISTRASI
 * @property JenisUser $iDJENIS
 */
class Users extends CActiveRecord
{
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
			array('PASSWORD', 'required'),
			array('PASSWORD', 'length', 'max'=>50),
			array('NOMER_SAKTI ', 'required','message'=>'Data {attribute} Harus Diisi'),
			array('NOMER_SAKTI','unique','message'=>'NOMER_SAKTI "<b>{value}</b>" Sudah Digunakan'),
			array('NOMER_SAKTI, VAS', 'length', 'max'=>16),
			array('STATUS', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_USERS, ID_REGISTRASI, ID_FANBASE, ID_JENIS, PASSWORD, NOMER_SAKTI, VAS, STATUS', 'safe', 'on'=>'search'),
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
			'groups' => array(self::MANY_MANY, 'Groups', 'anggota_group(ID_USERS, ID_GROUPS)'),
			'galleryBarangs' => array(self::HAS_MANY, 'GalleryBarang', 'ID_USERS'),
			'galleryPribadis' => array(self::HAS_MANY, 'GalleryPribadi', 'ID_USERS'),
			'groups1' => array(self::HAS_MANY, 'Groups', 'ID_USERS'),
			'komentars' => array(self::HAS_MANY, 'Komentar', 'ID_USERS'),
			'likes' => array(self::HAS_MANY, 'Likes', 'ID_USERS'),
			'news' => array(self::HAS_MANY, 'News', 'ID_USERS'),
			'statusUsers' => array(self::HAS_MANY, 'StatusUsers', 'ID_USERS'),
			'temen' => array(self::HAS_MANY, 'Teman', 'USE_ID_USERS'),
			'temen1' => array(self::HAS_MANY, 'Teman', 'ID_USERS'),
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
			'ID_USERS' => 'Id Users',
			'ID_REGISTRASI' => 'Id Registrasi',
			'ID_FANBASE' => 'Id Fanbase',
			'ID_JENIS' => 'Id Jenis',
			'PASSWORD' => 'Password',
			'NOMER_SAKTI' => 'Nomer Sakti',
			'VAS' => 'Vas',
			'STATUS' => 'Status',
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

		$criteria->compare('ID_USERS',$this->ID_USERS);
		$criteria->compare('ID_REGISTRASI',$this->ID_REGISTRASI);
		$criteria->compare('ID_FANBASE',$this->ID_FANBASE,true);
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
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
