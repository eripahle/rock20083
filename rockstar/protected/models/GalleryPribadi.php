<?php

/**
 * This is the model class for table "gallery_pribadi".
 *
 * The followings are the available columns in table 'gallery_pribadi':
 * @property string $ID_GALLERY
 * @property string $ID_FANBASE
 * @property integer $ID_USER
 * @property string $GAMBAR_GALLERY
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
			array('ID_GALLERY, GAMBAR_GALLERY', 'required'),
			array('ID_USER', 'numerical', 'integerOnly'=>true),
			array('ID_GALLERY', 'length', 'max'=>50),
			array('ID_FANBASE', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_GALLERY, ID_FANBASE, ID_USER, GAMBAR_GALLERY', 'safe', 'on'=>'search'),
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
			'ID_GALLERY' => 'Id Gallery',
			'ID_FANBASE' => 'Id Fanbase',
			'ID_USER' => 'Id User',
			'GAMBAR_GALLERY' => 'Gambar Gallery',
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

		$criteria->compare('ID_GALLERY',$this->ID_GALLERY,true);
		$criteria->compare('ID_FANBASE',$this->ID_FANBASE,true);
		$criteria->compare('ID_USER',$this->ID_USER);
		$criteria->compare('GAMBAR_GALLERY',$this->GAMBAR_GALLERY,true);

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
