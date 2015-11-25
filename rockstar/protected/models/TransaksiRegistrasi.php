<?php

/**
 * This is the model class for table "transaksi_registrasi".
 *
 * The followings are the available columns in table 'transaksi_registrasi':
 * @property integer $ID_REGISTRASI
 * @property string $NAMA_LENGKAP
 * @property string $TEMPAT
 * @property string $TANGGAL
 * @property string $NEGARA
 * @property string $PROVINSI
 * @property string $KOTA
 * @property string $ALAMAT
 * @property string $KODE_POS
 * @property string $NO_TELP
 * @property string $EMAIL
 * @property string $TWITTER
 * @property string $NAMA_IBU
 * @property string $NAMA_AYAH
 * @property string $NO_SAKTI
 * @property string $CORP
 * @property string $VID
 * @property string $STATUS_REKONSILIASI
 * @property string $STATUS_RELEASE
 *
 * The followings are the available model relations:
 * @property User[] $users
 */
class TransaksiRegistrasi extends CActiveRecord
{
	public $verifyCode;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi_registrasi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// array('verifyCode, NAMA_LENGKAP, TEMPAT, TANGGAL, NEGARA, PROVINSI, KOTA, ALAMAT, KODE_POS, NO_TELP, EMAIL, TWITTER, NAMA_IBU, NAMA_AYAH,CORP', 'required','message'=>'Data {attribute} Harus Diisi'),
			array('NAMA_LENGKAP', 'required'),
			array('NAMA_LENGKAP', 'length', 'max'=>50),
			array('verifyCode', 'captcha', 'allowEmpty'=>!extension_loaded('gd')),
			array('TEMPAT, EMAIL, TWITTER, NAMA_IBU, NAMA_AYAH, CORP', 'length', 'max'=>30),
			array('NEGARA, PROVINSI, KOTA', 'length', 'max'=>40),
			array('KODE_POS', 'length', 'max'=>5),
			array('NO_TELP', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_REGISTRASI, NAMA_LENGKAP, TEMPAT, TANGGAL, NEGARA, PROVINSI, KOTA, ALAMAT, KODE_POS, NO_TELP, EMAIL, TWITTER, NAMA_IBU, NAMA_AYAH, NO_SAKTI, CORP, VAD, STATUS_REKONSILIASI, STATUS_RELEASE', 'safe', 'on'=>'search'),
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
			'users' => array(self::HAS_MANY, 'User', 'ID_REGISTRASI'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NAMA_LENGKAP' => 'Nama Lengkap',
			'TEMPAT' => 'Tempat',
			'TANGGAL' => 'Tanggal',
			'NEGARA' => 'Negara',
			'PROVINSI' => 'Provinsi',
			'KOTA' => 'Kota',
			'ALAMAT' => 'Alamat',
			'KODE_POS' => 'Kode Pos',
			'NO_TELP' => 'No Telp',
			'EMAIL' => 'Email',
			'TWITTER' => 'Twitter',
			'NAMA_IBU' => 'Nama Ibu',
			'NAMA_AYAH' => 'Nama Ayah',
			'NO_SAKTI' => 'No Sakti',
			'CORP' => 'Corp',
			'VAD' => 'Vad',
			'STATUS_REKONSILIASI' => 'Status Rekonsiliasi',
			'STATUS_RELEASE' => 'Status Release',
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

		$criteria->compare('ID_REGISTRASI',$this->ID_REGISTRASI);
		$criteria->compare('NAMA_LENGKAP',$this->NAMA_LENGKAP,true);
		$criteria->compare('TEMPAT',$this->TEMPAT,true);
		$criteria->compare('TANGGAL',$this->TANGGAL,true);
		$criteria->compare('NEGARA',$this->NEGARA,true);
		$criteria->compare('PROVINSI',$this->PROVINSI,true);
		$criteria->compare('KOTA',$this->KOTA,true);
		$criteria->compare('ALAMAT',$this->ALAMAT,true);
		$criteria->compare('KODE_POS',$this->KODE_POS,true);
		$criteria->compare('NO_TELP',$this->NO_TELP,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('TWITTER',$this->TWITTER,true);
		$criteria->compare('NAMA_IBU',$this->NAMA_IBU,true);
		$criteria->compare('NAMA_AYAH',$this->NAMA_AYAH,true);
		$criteria->compare('NO_SAKTI',$this->NO_SAKTI,true);
		$criteria->compare('CORP',$this->CORP,true);
		$criteria->compare('VAD',$this->VAD,true);
		$criteria->compare('STATUS_REKONSILIASI',$this->STATUS_REKONSILIASI,true);
		$criteria->compare('STATUS_RELEASE',$this->STATUS_RELEASE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TransaksiRegistrasi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
