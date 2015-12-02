<?php

/**
 * This is the model class for table "status_users".
 *
 * The followings are the available columns in table 'status_users':
 * @property string $ID_STATUS_USERS
 * @property string $ID_FANBASE
 * @property integer $ID_USERS
 * @property string $DATETIME_STATUS
 * @property string $KONTEN
 *
 * The followings are the available model relations:
 * @property Komentar[] $komentars
 * @property Likes[] $likes
 * @property Users $iDUSERS
 * @property Fanbase $iDFANBASE
 */
class StatusUsers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'status_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// array('ID_STATUS_USERS, DATETIME_STATUS, KONTEN', 'required'),
			array('ID_USERS', 'numerical', 'integerOnly'=>true),
			array('ID_STATUS_USERS', 'length', 'max'=>50),
			array('ID_FANBASE', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_STATUS_USERS, ID_FANBASE, ID_USERS, DATETIME_STATUS, KONTEN', 'safe', 'on'=>'search'),
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
			'komentars' => array(self::HAS_MANY, 'Komentar', 'ID_STATUS_USERS'),
			'likes' => array(self::HAS_MANY, 'Likes', 'ID_STATUS_USERS'),
			'iDUSERS' => array(self::BELONGS_TO, 'Users', 'ID_USERS'),
			'iDFANBASE' => array(self::BELONGS_TO, 'Fanbase', 'ID_FANBASE'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_STATUS_USERS' => 'Id Status Users',
			'ID_FANBASE' => 'Id Fanbase',
			'ID_USERS' => 'Id Users',
			'DATETIME_STATUS' => 'Datetime Status',
			'KONTEN' => 'Konten',
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

		$criteria->compare('ID_STATUS_USERS',$this->ID_STATUS_USERS,true);
		$criteria->compare('ID_FANBASE',$this->ID_FANBASE,true);
		$criteria->compare('ID_USERS',$this->ID_USERS);
		$criteria->compare('DATETIME_STATUS',$this->DATETIME_STATUS,true);
		$criteria->compare('KONTEN',$this->KONTEN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function get_all_data()
        {            
           $sql = "SELECT 
           users.ID_USERS,
           users.ID_REGISTRASI,
           transaksi_registrasi.NAMA_LENGKAP,
           status_users.KONTEN,
           status_users.DATETIME_STATUS 
            FROM users,transaksi_registrasi,status_users 
            WHERE status_users.ID_USERS = users.ID_USERS AND 
            users.ID_REGISTRASI = transaksi_registrasi.ID_REGISTRASI ORDER BY status_users.ID_STATUS_USERS DESC";
    $data = Yii::app()->db
        ->createCommand($sql)
        ->queryAll();
    return $data;
        }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StatusUsers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
