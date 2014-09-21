<?php

/**
 * This is the model class for table "cdisease".
 *
 * The followings are the available columns in table 'cdisease':
 * @property string $diseasecode
 * @property string $mapdisease
 * @property string $diseasename
 * @property string $diseasenamethai
 * @property string $code504
 * @property string $code506
 * @property string $codechronic
 * @property string $codeoccupa
 * @property string $aric
 * @property integer $pcudiag
 * @property string $illornot
 * @property string $flagdiagnewcodebhpp
 * @property string $validscore
 */
class Cdisease extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
        public $findtext;
	public function tableName()
	{
		return 'cdisease';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('findtext', 'length', 'max'=>255),
			array('pcudiag', 'numerical', 'integerOnly'=>true),
			array('diseasecode', 'length', 'max'=>7),
			array('mapdisease', 'length', 'max'=>100),
			array('diseasename, diseasenamethai', 'length', 'max'=>255),
			array('code504, code506, codeoccupa', 'length', 'max'=>2),
			array('codechronic', 'length', 'max'=>4),
			array('aric, illornot, flagdiagnewcodebhpp, validscore', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('diseasecode, mapdisease, diseasename, diseasenamethai, code504, code506, codechronic, codeoccupa, aric, pcudiag, illornot, flagdiagnewcodebhpp, validscore', 'safe', 'on'=>'search'),
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
                        'findtext'=>'คำค้น',
			'diseasecode' => 'Diseasecode',
			'mapdisease' => 'Mapdisease',
			'diseasename' => 'Diseasename',
			'diseasenamethai' => 'Diseasenamethai',
			'code504' => 'Code504',
			'code506' => 'Code506',
			'codechronic' => 'Codechronic',
			'codeoccupa' => 'Codeoccupa',
			'aric' => 'Aric',
			'pcudiag' => 'Pcudiag',
			'illornot' => 'Illornot',
			'flagdiagnewcodebhpp' => 'Flagdiagnewcodebhpp',
			'validscore' => 'Validscore',
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

		$criteria->compare('diseasecode',$this->diseasecode,true);
		$criteria->compare('mapdisease',$this->mapdisease,true);
		$criteria->compare('diseasename',$this->diseasename,true);
		$criteria->compare('diseasenamethai',$this->diseasenamethai,true);
		$criteria->compare('code504',$this->code504,true);
		$criteria->compare('code506',$this->code506,true);
		$criteria->compare('codechronic',$this->codechronic,true);
		$criteria->compare('codeoccupa',$this->codeoccupa,true);
		$criteria->compare('aric',$this->aric,true);
		$criteria->compare('pcudiag',$this->pcudiag);
		$criteria->compare('illornot',$this->illornot,true);
		$criteria->compare('flagdiagnewcodebhpp',$this->flagdiagnewcodebhpp,true);
		$criteria->compare('validscore',$this->validscore,true);
                if($this->findtext){
                    $criteria->addSearchCondition('diseasecode',  $this->findtext,TRUE,'OR');
                    $criteria->addSearchCondition('diseasename',  $this->findtext,TRUE,'OR');
                    $criteria->addSearchCondition('diseasenamethai',  $this->findtext,TRUE,'OR');
                }

                    
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cdisease the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
