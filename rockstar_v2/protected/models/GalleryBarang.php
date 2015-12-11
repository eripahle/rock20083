<?php

/**
 * This is the model class for table "gallery_barang".
 *
 * The followings are the available columns in table 'gallery_barang':
 * @property integer $ID_GALLERY_BARANG
 * @property integer $ID_USERS
 * @property string $NAMA_GALLERY
 * @property string $KODE_GALLERY
 * @property string $JENIS_GALLERY
 * @property string $SAMPEL_GALLERY
 * @property string $GAMBAR_GALLERY
 * @property string $HARGA_POINT
 * @property string $HARGA_POINT_BONUS
 * @property string $HARGA_CASH
 *
 * The followings are the available model relations:
 * @property Users $iDUSERS
 */
class GalleryBarang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gallery_barang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NAMA_GALLERY, KODE_GALLERY, JENIS_GALLERY, HARGA_POINT, HARGA_POINT_BONUS, HARGA_CASH', 'required'),
			array('ID_GALLERY_BARANG, ID_USERS', 'numerical', 'integerOnly'=>true),
			array('NAMA_GALLERY, JENIS_GALLERY', 'length', 'max'=>50),
			array('KODE_GALLERY', 'length', 'max'=>32),
			array('HARGA_POINT, HARGA_POINT_BONUS, HARGA_CASH', 'length', 'max'=>20),
			array('SAMPEL_GALLERY, GAMBAR_GALLERY', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_GALLERY_BARANG, ID_USERS, NAMA_GALLERY, KODE_GALLERY, JENIS_GALLERY, SAMPEL_GALLERY, GAMBAR_GALLERY, HARGA_POINT, HARGA_POINT_BONUS, HARGA_CASH', 'safe', 'on'=>'search'),
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
			'ID_GALLERY_BARANG' => 'Id Gallery Barang',
			'ID_USERS' => 'Id Users',
			'NAMA_GALLERY' => 'Nama Gallery',
			'KODE_GALLERY' => 'Kode Gallery',
			'JENIS_GALLERY' => 'Jenis Gallery',
			'SAMPEL_GALLERY' => 'Sampel Gallery',
			'GAMBAR_GALLERY' => 'Gambar Gallery',
			'HARGA_POINT' => 'Harga Point',
			'HARGA_POINT_BONUS' => 'Harga Point Bonus',
			'HARGA_CASH' => 'Harga Cash',
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

		$criteria->compare('ID_GALLERY_BARANG',$this->ID_GALLERY_BARANG);
		$criteria->compare('ID_USERS',$this->ID_USERS);
		$criteria->compare('NAMA_GALLERY',$this->NAMA_GALLERY,true);
		$criteria->compare('KODE_GALLERY',$this->KODE_GALLERY,true);
		$criteria->compare('JENIS_GALLERY',$this->JENIS_GALLERY,true);
		$criteria->compare('SAMPEL_GALLERY',$this->SAMPEL_GALLERY,true);
		$criteria->compare('GAMBAR_GALLERY',$this->GAMBAR_GALLERY,true);
		$criteria->compare('HARGA_POINT',$this->HARGA_POINT,true);
		$criteria->compare('HARGA_POINT_BONUS',$this->HARGA_POINT_BONUS,true);
		$criteria->compare('HARGA_CASH',$this->HARGA_CASH,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function get_data_barang($id)
        {            
           $sql = "SELECT * 
            FROM gallery_barang,transaksi_request_pembelian
            WHERE transaksi_request_pembelian.ID_USERS = $id 
            AND transaksi_request_pembelian.STATUS = 1
            AND gallery_barang.ID_GALLERY_BARANG = transaksi_request_pembelian.ID_GALLERY_BARANG";
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
	 * @return GalleryBarang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
