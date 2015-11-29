<?php

/**
 * This is the model class for table "status".
 *
 * The followings are the available columns in table 'status':
 * @property string $ID_STATUS
 * @property string $ID_FANBASE
 * @property integer $ID_USER
 * @property string $DATETIME_STATUS
 * @property string $KONTEN
 */
class Status extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'status';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_STATUS, ID_FANBASE, ID_USER, DATETIME_STATUS, KONTEN', 'safe', 'on'=>'search'),
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
			'users' => array(self::HAS_MANY, 'User', 'ID_USER'),
		
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_STATUS' => 'Id Status',
			'ID_FANBASE' => 'Id Fanbase',
			'ID_USER' => 'Id User',
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

		$criteria->compare('ID_STATUS',$this->ID_STATUS,true);
		$criteria->compare('ID_FANBASE',$this->ID_FANBASE,true);
		$criteria->compare('ID_USER',$this->ID_USER);
		$criteria->compare('DATETIME_STATUS',$this->DATETIME_STATUS,true);
		$criteria->compare('KONTEN',$this->KONTEN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function get_all_data()
        {            
           $sql = "SELECT user.ID_USER,user.ID_REGISTRASI,transaksi_registrasi.NAMA_LENGKAP,status.KONTEN,status.DATETIME_STATUS 
            FROM user,transaksi_registrasi,status 
            WHERE STATUS.ID_USER = user.ID_USER AND user.ID_REGISTRASI = transaksi_registrasi.ID_REGISTRASI ORDER BY status.ID_STATUS DESC";
    // $sql = "SELECT * FROM STATUS";
    $data = Yii::app()->db
        ->createCommand($sql)
        ->queryAll();
    return $data;
        }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Status the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
