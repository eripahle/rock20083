<?php

/**
 * This is the model class for table "gallery_pribadi".
 *
 * The followings are the available columns in table 'gallery_pribadi':
 * @property integer $ID_GALLERY_PRIBADI
 * @property string $ID_FANBASE
 * @property integer $ID_USERS
 * @property string $GAMBAR_GALLERY_PRIBADI
 *
 * The followings are the available model relations:
 * @property Fanbase $iDFANBASE
 * @property Users $iDUSERS
 */
class GalleryPribadi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gallery_pribadi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('GAMBAR_GALLERY_PRIBADI', 'required'),
			array('ID_USERS', 'numerical', 'integerOnly'=>true),
			array('ID_FANBASE', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_GALLERY_PRIBADI, ID_FANBASE, ID_USERS, GAMBAR_GALLERY_PRIBADI', 'safe', 'on'=>'search'),
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
			'iDFANBASE' => array(self::BELONGS_TO, 'Fanbase', 'ID_FANBASE'),
			'iDUSERS' => array(self::BELONGS_TO, 'Users', 'ID_USERS'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_GALLERY_PRIBADI' => 'Id Gallery Pribadi',
			'ID_FANBASE' => 'Id Fanbase',
			'ID_USERS' => 'Id Users',
			'GAMBAR_GALLERY_PRIBADI' => 'Gambar Gallery Pribadi',
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

		$criteria->compare('ID_GALLERY_PRIBADI',$this->ID_GALLERY_PRIBADI);
		$criteria->compare('ID_FANBASE',$this->ID_FANBASE,true);
		$criteria->compare('ID_USERS',$this->ID_USERS);
		$criteria->compare('GAMBAR_GALLERY_PRIBADI',$this->GAMBAR_GALLERY_PRIBADI,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GalleryPribadi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
