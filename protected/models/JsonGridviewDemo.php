<?php

/**
 * This is the model class for table "json_gridview_demo".
 *
 * The followings are the available columns in table 'json_gridview_demo':
 * @property integer $id
 * @property string $textfield
 * @property integer $numberfield
 * @property integer $boolfield
 */
class JsonGridviewDemo extends CActiveRecord
{
	public function tableName()
	{
		return 'json_gridview_demo';
	}

	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numberfield, boolfield', 'numerical', 'integerOnly'=>true),
			array('textfield', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, textfield, numberfield, boolfield', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'textfield' => 'Textfield',
			'numberfield' => 'Numberfield',
			'boolfield' => 'Boolfield',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('textfield',$this->textfield,true);
		$criteria->compare('numberfield',$this->numberfield);
		$criteria->compare('boolfield',$this->boolfield);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}