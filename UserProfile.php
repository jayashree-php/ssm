<?php
App::uses('AppModel', 'Model');
/**
 * UserProfile Model
 *
 * @property User $User
 * @property Gender $Gender
 * @property Religion $Religion
 * @property Caste $Caste
 * @property SubCaste $SubCaste
 * @property Community $Community
 * @property Gothram $Gothram
 * @property Star $Star
 * @property Rasi $Rasi
 * @property FoodHabbit $FoodHabbit
 * @property Qualification $Qualification
 * @property EmploymentType $EmploymentType
 * @property IncomeType $IncomeType
 * @property Currency $Currency
 * @property HeightType $HeightType
 * @property Complexion $Complexion
 * @property Language $Language
 * @property Disability $Disability
 * @property ParentsAliveType $ParentsAliveType
 * @property FamilyStatus $FamilyStatus
 * @property MaritalStatus $MaritalStatus
 * @property BloodGroup $BloodGroup
 * @property ContactView $ContactView
 * @property UserProfileContactView $UserProfileContactView
 * @property UserProfileContact $UserProfileContact
 * @property UserProfileExpectation $UserProfileExpectation
 * @property UserProfileHistory $UserProfileHistory
 * @property UserProfileHoroscopeDetail $UserProfileHoroscopeDetail
 * @property UserProfileImage $UserProfileImage
 * @property UserProfileName $UserProfileName
 * @property UserProfileView $UserProfileView
 * @property PropertyType $PropertyType
 */
class UserProfile extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'gender_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'date_of_birth' => array(
		'rule1' => array(
				'rule' => array('checkyob'),
				'on' => 'create',
				'message'=>"Year of Birth Mismatched!."				
			),
			'date' => array(
				'rule' => array('date'),
				'message' => 'Must be valied date!.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),	
		'created' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Must be valied date!.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),		
		'max_contact_views' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Field cannot be empty!..',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'expiry_date' => array(
			'rule1' => array(
				'rule' => array('checkValidity'),
				'on' => 'create',
				'message'=>"Must be greated than registered date!"				
			),
			'rule2' => array(
				'rule' => array('date'),
				'required' => 'create',
				'message'=>"Cannot be empty!"
			)
		),
		
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ModifiedUser' => array(
			'className' => 'ModifiedUser',
			'foreignKey' => 'modified_by_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Gender' => array(
			'className' => 'Gender',
			'foreignKey' => 'gender_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'Plan' => array(
			'className' => 'Plan',
			'foreignKey' => 'plan_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'Religion' => array(
			'className' => 'Religion',
			'foreignKey' => 'religion_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'Caste' => array(
			'className' => 'Caste',
			'foreignKey' => 'caste_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
			'MotherCaste' => array(
					'className' => 'MotherCaste',
					'foreignKey' => 'mother_caste_id',
					'conditions' => '',
					'fields' => '',
					'order' => '',
					'counterCache' => true,
			),
		'SubCaste' => array(
			'className' => 'SubCaste',
			'foreignKey' => 'sub_caste_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'Community' => array(
			'className' => 'Community',
			'foreignKey' => 'community_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'Gothram' => array(
			'className' => 'Gothram',
			'foreignKey' => 'gothram_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'Star' => array(
			'className' => 'Star',
			'foreignKey' => 'star_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'Rasi' => array(
			'className' => 'Rasi',
			'foreignKey' => 'rasi_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'FoodHabbit' => array(
			'className' => 'FoodHabbit',
			'foreignKey' => 'food_habbit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Qualification' => array(
			'className' => 'Qualification',
			'foreignKey' => 'qualification_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'EmploymentType' => array(
			'className' => 'EmploymentType',
			'foreignKey' => 'employment_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'IncomeType' => array(
			'className' => 'IncomeType',
			'foreignKey' => 'income_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Currency' => array(
			'className' => 'Currency',
			'foreignKey' => 'currency_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HeightType' => array(
			'className' => 'HeightType',
			'foreignKey' => 'height_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Complexion' => array(
			'className' => 'Complexion',
			'foreignKey' => 'complexion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Language' => array(
			'className' => 'Language',
			'foreignKey' => 'language_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'Disability' => array(
			'className' => 'Disability',
			'foreignKey' => 'disability_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'ParentsAliveType' => array(
			'className' => 'ParentsAliveType',
			'foreignKey' => 'parents_alive_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FamilyStatus' => array(
			'className' => 'FamilyStatus',
			'foreignKey' => 'family_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'MaritalStatus' => array(
			'className' => 'MaritalStatus',
			'foreignKey' => 'marital_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'BloodGroup' => array(
			'className' => 'BloodGroup',
			'foreignKey' => 'blood_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'Organization' => array(
			'className' => 'Organization',
			'foreignKey' => 'organization_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'Plan'=>array(
		'className' => 'Plan',
			'foreignKey' => 'plan_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'FatherEmploymentType' => array(
			'className' => 'FatherEmploymentType',
			'foreignKey' => 'father_employment_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'MotherEmploymentType' => array(
			'className' => 'MotherEmploymentType',
			'foreignKey' => 'mother_employment_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'FatherOrganization' => array(
			'className' => 'FatherOrganization',
			'foreignKey' => 'father_organization_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
		'MotherOrganization' => array(
			'className' => 'MotherOrganization',
			'foreignKey' => 'mother_organization_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			 'counterCache' => true,
		),
			'City' => array(
					'className' => 'City',
					'foreignKey' => 'placeofjob_city_id',
					'conditions' => '',
					'fields' => '',
					'order' => '',
					'counterCache' => true,
			),

			'VisaStatus' => array(
					'className' => 'VisaStatus',
					'foreignKey' => 'visa_status_id',
					'conditions' => '',
					'fields' => '',
					'order' => '',
					'counterCache' => true,
			),
	);

	public $hasOne=array(
		'UserProfileExpectation' => array(
			'className' => 'UserProfileExpectation',
			'foreignKey' => 'user_profile_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'UserProfileContact' => array(
			'className' => 'UserProfileContact',
			'foreignKey' => 'user_profile_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),		
		'UserProfileHoroscopeDetail' => array(
			'className' => 'UserProfileHoroscopeDetail',
			'foreignKey' => 'user_profile_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
	);
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ContactView' => array(
			'className' => 'ContactView',
			'foreignKey' => 'user_profile_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'UserProfileContactView' => array(
			'className' => 'UserProfileContactView',
			'foreignKey' => 'user_profile_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		
		'UserProfileHistory' => array(
			'className' => 'UserProfileHistory',
			'foreignKey' => 'user_profile_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		
		'UserProfileImage' => array(
			'className' => 'UserProfileImage',
			'foreignKey' => 'user_profile_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'UserProfileName' => array(
			'className' => 'UserProfileName',
			'foreignKey' => 'user_profile_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'UserProfileView' => array(
			'className' => 'UserProfileView',
			'foreignKey' => 'user_profile_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'UserProfileBookMark' => array(
			'className' => 'UserProfileBookMark',
			'foreignKey' => 'user_profile_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'PropertyType' => array(
			'className' => 'PropertyType',
			'joinTable' => 'user_profiles_property_types',
			'foreignKey' => 'user_profile_id',
			'associationForeignKey' => 'property_type_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Hobby' => array(
			'className' => 'Hobby',
			'joinTable' => 'hobbies_user_profiles',
			'foreignKey' => 'user_profile_id',
			'associationForeignKey' => 'hobby_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Talent' => array(
			'className' => 'Talent',
			'joinTable' => 'talents_user_profiles',
			'foreignKey' => 'user_profile_id',
			'associationForeignKey' => 'talent_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'OtherLanguage' => array(
			'className' => 'OtherLanguage',
			'joinTable' => 'other_languages_user_profiles',
			'foreignKey' => 'user_profile_id',
			'associationForeignKey' => 'other_language_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);
	public function checkValidity($data){
			$reg_dat = $this->data['UserProfile']['created'];
			$ex_dat = $this->data['UserProfile']['expiry_date'];
			if(strtotime($reg_dat)>strtotime($ex_dat)){
					return false;
				}
			return true;	
		}
	public function checkyob($data){
			$dob = $this->data['UserProfile']['date_of_birth'];
			$yob = $this->data['UserProfileName']['yob'];
			if(strlen($yob) > 2){
				$given_yob = date("Y",strtotime($dob));
				}else{
			//	pr(date("y",strtotime($dob)));
				$given_yob = date("y",strtotime($dob));
				}				
			if($yob == $given_yob){
			return true;
				}	
			return false;	
		}	
	public function getLogForHasAndBelongsToMany($model, $group, $data, $old_data){
		$log=array();			
		if(!empty($data[$model]) || !empty($old_data[$model])){
							$log=array();	
							if(!empty($old_data[$model])){
								$pt_ids=array();							
								foreach($old_data[$model] as $pre_typ){
									array_push($pt_ids,$pre_typ['id']);																				
								}	
								if(!empty($data[$model])){		
								if($model == "PropertyType"){
								$new_ids=array();
								  foreach($data[$model][$model] as $pro){
									array_push($new_ids,$pro['property_type_id']);																				
									}																	
								 $diff_array= array_diff($pt_ids,$new_ids);	
								 if(empty($diff_array)){
								  $diff_array= array_diff($new_ids,$pt_ids);	
									 }								 
								}else{
								 $diff_array= array_diff($pt_ids,$data[$model][$model]);									
								}													
									if(!empty($diff_array)){
										$log['field_name']=$model;
										$log['Group']=$group;	
										if($model == "PropertyType"){										
											$log['old_data']=implode(",",$pt_ids);	
											$log['new_data']=implode(",",$new_ids);									
										}else{										
											$log['old_data']=implode(",",$pt_ids);							
											$log['new_data']=implode(",",$data[$model][$model]);									
										}
									}	
								}else{									
									$log['field_name']=$model;
									$log['old_data']=implode(",",$pt_ids);							
									$log['new_data']="";
									$log['Group']=$group;							  									
								}
							}elseif(!empty($data[$model][$model])){								
								$log['field_name']=$model;
								$log['old_data']= " ";									
								$log['new_data']=implode(",",$data[$model][$model]);
								$log['Group']=$group;	
							}
							
						}	
						return $log;
		}		
}
