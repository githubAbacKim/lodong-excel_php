<?php
    class ResponseReliability extends PersonalityElem{
        public function __construct($answers)
        {
            parent::__construct($answers);
        }
        protected static $personnalityResultLabel1 = ['a deligence', 'b responsibility', 'c cooperation', 'd autonomy','e leadership', 'f emotional state', 'g concentration', 'h emotional stability', 'i compliance'];

        protected static $secondaryCondition = [
            'set'=>[3,4,13,24],
            'set'=>[23,24,25,43],
            'set'=>[34,53,63],
            'set'=>[73],
            'set'=>[83,93,103],
            'set'=>[59,74,84,113,134,144],
            'set'=>[74,94,124,134],
            'set'=>[6,16],
            'set'=>[46,54,100,134],
            'set'=>[123,127,133],
            'set'=>[2,12,143],
            'set'=>[12,32],
            'set'=>[42,52],
            'set'=>[62,72],
            'set'=>[82,202],
            'set'=>[11,31],
            'set'=>[197],
            'set'=>[9,19,29],
            'set'=>[49,69,79],
            'set'=>[116,126,146],
            'set'=>[68,78,108],
            'set'=>[1,11,14,21],
            'set'=>[9,19,29,49],
            'set'=>[69,79,89,99],
            'set'=>[88,92,201],
            'set'=>[3,13,102],
            'set'=>[12,23,43],
            'set'=>[203],
            'set'=>[4,24,39,48,116],
            'set'=>[96,114,116,134],
            'set'=>[48,64,116,128],
            'set'=>[44,46,54,96],
            'set'=>[7,15,58,66,68,106],
            'set'=>[55,87,135,145],
            'set'=>[55,85,89,95,109],
            'set'=>[1,5,11,14,17,21,27,37],
            'set'=>[4,6,16,24,25,26,36],
            'set'=>[208],
            'set'=>[34,44,46,56],
            'set'=>[9,19,54,64,66,74,76,96],
            'set'=>[2,3,12,13],
            'set'=>[74,94,113],
            'set'=>[28,33,39,71,81],
            'set'=>[6,107,124],
            'set'=>[99,118,141],
            'set'=>[55,81],
            'set'=>[9,77,109],
            'set'=>[78,127],
            'set'=>[1,11,31,41,51],
            'set'=>[8,18,94,124,134,144],
            'set'=>[104,114,126,136,137],
            'set'=>[84,94,106,116]
        ];

        protected function getConfidenceResult($hits,$searchValue){
            foreach ($hits as $value) {
                if ($value !== $searchValue) {
                    return false; // Found a mismatch, return false
                }
            }
            return true;
        }

        protected function getConfidenceResult2($condition1,$ser){
            if($condition1 == true){
                return 1;
            }

            return 2;
        }

        public function primaryCondition(){
            $hitResults = parent::savePersonalityInitResults();

            $primaryCondition = [
                'set'=>[
                    'talentAward'=>'Diligence, compliance, responsibility',
                    'set' => [0,9,1],
                    'scoreRef' => 15,
                    'confidenceRef'=>100
                ],
                'set'=>[
                    'talentAward'=>'Integrity, Compliance',
                    'set' => [0,9],
                    'scoreRef' => 15,
                    'confidenceRef'=>99
                ],
                'set'=>[
                    'talentAward'=>'Integrity, Compliance',
                    'set' => [0,9],
                    'scoreRef' => 15,
                    'confidenceRef'=>98
                ],
                'set'=>[
                    'talentAward'=>'Honesty, compliance',
                    'set' => [0,9],
                    'scoreRef' => 15,
                    'confidenceRef'=>97
                ],
                'set'=>[
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 15,
                    'confidenceRef'=>96
                ],
                'set'=>[
                    'talentAward'=>'Integrity, Compliance',
                    'set' => [0,9],
                    'scoreRef' => 14,
                    'confidenceRef'=>95
                ],
                'set'=>[
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 15,
                    'confidenceRef'=>94
                ],
                'set'=>[
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 15,
                    'confidenceRef'=>93
                ],
                'set'=>[
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 15,
                    'confidenceRef'=>92
                ],
                'set'=>[
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 14,
                    'confidenceRef'=>91
                ],
                'set'=>[
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 13,
                    'confidenceRef'=>90
                ],
                'set'=>[
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 13,
                    'confidenceRef'=>89
                ],
                'set'=>[
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 12,
                    'confidenceRef'=>88
                ],
                'set'=>[
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 12,
                    'confidenceRef'=>87
                ],
                'set'=>[
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 11,
                    'confidenceRef'=>86
                ],
                'set'=>[
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 11,
                    'confidenceRef'=>85
                ],
                'set'=>[
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 11,
                    'confidenceRef'=>84
                ],
                'set'=>[
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 11,
                    'confidenceRef'=>83
                ],
                'set'=>[
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 11,
                    'confidenceRef'=>82
                ],
                'set'=>[
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 11,
                    'confidenceRef'=>81
                ],
                'set'=>[
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 11,
                    'confidenceRef'=>80
                ],
                'set'=>[
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 11,
                    'confidenceRef'=>79
                ],
                'set'=>[
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 10,
                    'confidenceRef'=>78
                ],
                'set'=>[
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 10,
                    'confidenceRef'=>77
                ],
                'set'=>[
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 10,
                    'confidenceRef'=>76
                ],
                'set'=>[
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>75
                ],
                'set'=>[
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>74
                ],
                'set'=>[
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>73
                ],
                'set'=>[
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>72
                ],
                'set'=>[
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>71
                ],
                'set'=>[
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>70
                ],
                'set'=>[
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>69
                ],
                'set'=>[
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>68
                ],
                'set'=>[
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>67
                ],
                'set'=>[
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>66
                ],
                'set'=>[
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 8,
                    'confidenceRef'=>65
                ],
                'set'=>[
                    'talentAward'=>'Honesty, compliance',
                    'set' => [0,9],
                    'scoreRef' => 8,
                    'confidenceRef'=>64
                ],
                'set'=>[
                    'talentAward'=>'Diligence, Compliance',
                    'set' => [0,9],
                    'scoreRef' => 8,
                    'confidenceRef'=>63
                ],
                'set'=>[
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 8,
                    'confidenceRef'=>62
                ],
                'set'=>[
                    'talentAward'=>'Diligence, Compliance',
                    'set' => [0,9],
                    'scoreRef' => 7,
                    'confidenceRef'=>61
                ],
                'set'=>[
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 7,
                    'confidenceRef'=>60
                ],
                'set'=>[
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 6,
                    'confidenceRef'=>59
                ],
                'set'=>[
                    'talentAward'=>'Sincerity, Sentiment',
                    'set' => [0,7],
                    'scoreRef' => 5,
                    'confidenceRef'=>58
                ],
                'set'=>[
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 4,
                    'confidenceRef'=>57
                ],
                'set'=>[
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 3,
                    'confidenceRef'=>56
                ],
                'set'=>[
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 2,
                    'confidenceRef'=>55
                ],
                'set'=>[
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 2,
                    'confidenceRef'=>54
                ],
                'set'=>[
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 2,
                    'confidenceRef'=>53
                ],
                'set'=>[
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 2,
                    'confidenceRef'=>52
                ],
                'set'=>[
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 0,
                    'confidenceRef'=>51
                ]
                
            ];

            return $primaryCondition;
        }
        
        public function primaryConditionResult(){

        }

        public function secondaryConditionResult(){
            
        }
    }
?>