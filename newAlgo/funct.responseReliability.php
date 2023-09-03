<?php
    class ResponseReliability extends PersonalityElem{
        public function __construct($answers)
        {
            parent::__construct($answers);
        }

        protected static $secondaryCondition = [
            ['set'=>[3,4,13,24],'confidenceScore'=>100],
            ['set'=>[23,24,25,43],'confidenceScore'=>99],
            ['set'=>[34,53,63],'confidenceScore'=>98],
            ['set'=>[73],'confidenceScore'=>97],
            ['set'=>[83,93,103],'confidenceScore'=>97],
            ['set'=>[59,74,84,113,134,144],'confidenceScore'=>96],
            ['set'=>[74,94,124,134],'confidenceScore'=>95],
            ['set'=>[6,16],'confidenceScore'=>94],
            ['set'=>[46,54,100,134],'confidenceScore'=>94],
            ['set'=>[123,127,133],'confidenceScore'=>93],
            ['set'=>[2,12,143],'confidenceScore'=>92],
            ['set'=>[12,32],'confidenceScore'=>91],
            ['set'=>[42,52],'confidenceScore'=>90],
            ['set'=>[62,72],'confidenceScore'=>89],
            ['set'=>[82,202],'confidenceScore'=>88],
            ['set'=>[11,31],'confidenceScore'=>87],
            ['set'=>[197],'confidenceScore'=>86],
            ['set'=>[9,19,29],'confidenceScore'=>85],
            ['set'=>[49,69,79],'confidenceScore'=>84],
            ['set'=>[116,126,146],'confidenceScore'=>83],
            ['set'=>[68,78,108],'confidenceScore'=>82],
            ['set'=>[1,11,14,21],'confidenceScore'=>81],
            ['set'=>[9,19,29,49],'confidenceScore'=>80],
            ['set'=>[69,79,89,99],'confidenceScore'=>79],
            ['set'=>[88,92,201],'confidenceScore'=>78],
            ['set'=>[3,13,102],'confidenceScore'=>77],
            ['set'=>[12,23,43],'confidenceScore'=>76],
            ['set'=>[203],'confidenceScore'=>75],
            ['set'=>[4,24,39,48,116],'confidenceScore'=>74],
            ['set'=>[96,114,116,134],'confidenceScore'=>73],
            ['set'=>[48,64,116,128],'confidenceScore'=>72],
            ['set'=>[44,46,54,96],'confidenceScore'=>71],
            ['set'=>[7,15,58,66,68,106],'confidenceScore'=>70],
            ['set'=>[55,87,135,145],'confidenceScore'=>69],
            ['set'=>[55,85,89,95,109],'confidenceScore'=>68],
            ['set'=>[1,5,11,14,17,21,27,37],'confidenceScore'=>67],
            ['set'=>[4,6,16,24,25,26,36],'confidenceScore'=>66],
            ['set'=>[208],'confidenceScore'=>65],
            ['set'=>[34,44,46,56],'confidenceScore'=>64],
            ['set'=>[9,19,54,64,66,74,76,96],'confidenceScore'=>63],
            ['set'=>[2,3,12,13],'confidenceScore'=>62],
            ['set'=>[74,94,113],'confidenceScore'=>61],
            ['set'=>[28,33,39,71,81],'confidenceScore'=>60],
            ['set'=>[6,107,124],'confidenceScore'=>59],
            ['set'=>[99,118,141],'confidenceScore'=>58],
            ['set'=>[55,81],'confidenceScore'=>57],
            ['set'=>[9,77,109],'confidenceScore'=>56],
            ['set'=>[78,127],'confidenceScore'=>55],
            ['set'=>[1,11,31,41,51],'confidenceScore'=>54],
            ['set'=>[8,18,94,124,134,144],'confidenceScore'=>53],
            ['set'=>[104,114,126,136,137],'confidenceScore'=>52],
            ['set'=>[84,94,106,116],'confidenceScore'=>51]
        ];

        protected static $deductionConditions = [
            [14,12,],
            [31,41],
            [51,71],
            [81,91],
            [101,111],
            [118,131],
            [6,16],
            [26,36],
            [46,56]
        ];

        protected function getPrimaryResult($hits,$scoreRef){
            $savePersonalityResult = parent::savePersonalityInitResults();
            foreach($hits as $hitIndex) {
                foreach($savePersonalityResult as $key => $personality){
                    if($hitIndex == $key){
                        if($personality['totalNumberOfHits'] !== $scoreRef){
                            return 'false';
                        }
                    }
                }
            }
            // return true if all hits found and values are equal return true
            return 'true';
            
        }

        protected function getPrimaryResult2($condition1){
            if($condition1 == 'true'){
                return 1;
            }
            return 2;
        }

        public function primaryCondition(){
            $hitResults = parent::savePersonalityInitResults();

            $primaryCondition = [
                [
                    'talentAward'=>'Diligence, compliance, responsibility',
                    'set' => [0,9,1],
                    'scoreRef' => 15,
                    'confidenceRef'=>100
                ],
                [
                    'talentAward'=>'Integrity, Compliance',
                    'set' => [0,9],
                    'scoreRef' => 15,
                    'confidenceRef'=>99
                ],
                [
                    'talentAward'=>'Integrity, Compliance',
                    'set' => [0,9],
                    'scoreRef' => 15,
                    'confidenceRef'=>98
                ],
                [
                    'talentAward'=>'Honesty, compliance',
                    'set' => [0,9],
                    'scoreRef' => 15,
                    'confidenceRef'=>97
                ],
                [
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 15,
                    'confidenceRef'=>96
                ],
                [
                    'talentAward'=>'Integrity, Compliance',
                    'set' => [0,9],
                    'scoreRef' => 14,
                    'confidenceRef'=>95
                ],
                [
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 15,
                    'confidenceRef'=>94
                ],
                [
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 15,
                    'confidenceRef'=>93
                ],
                [
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 15,
                    'confidenceRef'=>92
                ],
                [
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 14,
                    'confidenceRef'=>91
                ],
                [
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 13,
                    'confidenceRef'=>90
                ],
                [
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 13,
                    'confidenceRef'=>89
                ],
                [
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 12,
                    'confidenceRef'=>88
                ],
                [
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 12,
                    'confidenceRef'=>87
                ],
                [
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 11,
                    'confidenceRef'=>86
                ],
                [
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 11,
                    'confidenceRef'=>85
                ],
                [
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 11,
                    'confidenceRef'=>84
                ],
                [
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 11,
                    'confidenceRef'=>83
                ],
                [
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 11,
                    'confidenceRef'=>82
                ],
                [
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 11,
                    'confidenceRef'=>81
                ],
                [
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 11,
                    'confidenceRef'=>80
                ],
                [
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 11,
                    'confidenceRef'=>79
                ],
                [
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 10,
                    'confidenceRef'=>78
                ],
                [
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 10,
                    'confidenceRef'=>77
                ],
                [
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 10,
                    'confidenceRef'=>76
                ],
                [
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>75
                ],
                [
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>74
                ],
                [
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>73
                ],
                [
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>72
                ],
                [
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>71
                ],
                [
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>70
                ],
                [
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>69
                ],
                [
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>68
                ],
                [
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>67
                ],
                [
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 9,
                    'confidenceRef'=>66
                ],
                [
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 8,
                    'confidenceRef'=>65
                ],
                [
                    'talentAward'=>'Honesty, compliance',
                    'set' => [0,9],
                    'scoreRef' => 8,
                    'confidenceRef'=>64
                ],
                [
                    'talentAward'=>'Diligence, Compliance',
                    'set' => [0,9],
                    'scoreRef' => 8,
                    'confidenceRef'=>63
                ],
                [
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 8,
                    'confidenceRef'=>62
                ],
                [
                    'talentAward'=>'Diligence, Compliance',
                    'set' => [0,9],
                    'scoreRef' => 7,
                    'confidenceRef'=>61
                ],
                [
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 7,
                    'confidenceRef'=>60
                ],
                [
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 6,
                    'confidenceRef'=>59
                ],
                [
                    'talentAward'=>'Sincerity, Sentiment',
                    'set' => [0,7],
                    'scoreRef' => 5,
                    'confidenceRef'=>58
                ],
                [
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 4,
                    'confidenceRef'=>57
                ],
                [
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 3,
                    'confidenceRef'=>56
                ],
                [
                    'talentAward'=>'Conscientiousness',
                    'set' => [0],
                    'scoreRef' => 2,
                    'confidenceRef'=>55
                ],
                [
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 2,
                    'confidenceRef'=>54
                ],
                [
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 2,
                    'confidenceRef'=>53
                ],
                [
                    'talentAward'=>'Diligence',
                    'set' => [0],
                    'scoreRef' => 2,
                    'confidenceRef'=>52
                ],
                [
                    'talentAward'=>'Integrity',
                    'set' => [0],
                    'scoreRef' => 0,
                    'confidenceRef'=>51
                ]
                
            ];

            return $primaryCondition;
        }
        
        public function primaryConditionResult(){
            /* [
                'talentAward'=>'Diligence, compliance, responsibility',
                'set' => [0,9,1],
                'scoreRef' => 15,
                'confidenceRef'=>100
            ] */

            $conditionData = $this->primaryCondition();
            $result = [];
            foreach($conditionData as $data){
                $result1 = $this->getPrimaryResult($data['set'],$data['scoreRef']);
                $result2 = $this->getPrimaryResult2($result1);
                
                $result[] = ['primResult1'=>$result1,'confidenceRef'=>$data['confidenceRef'],'primResult2'=>$result2];
            
            }

            return $result;
        }

        /* protected function getSecondaryResult1($set){
            // get the taker answers and identify if all of the set number's answer are all equal the return true else return false
            $answersArray = parent::saveModifiedAnswer();
            $firstModifiedAnswer = null;
            $areEqual = 'true';

            foreach ($set as $num) {
                foreach ($answersArray as $answer) {
                    if ($answer['num'] === $num) {
                        if ($firstModifiedAnswer === null) {
                            $firstModifiedAnswer = $answer['modifiedAnswer'];
                        } else {
                            if ($firstModifiedAnswer !== $answer['modifiedAnswer']) {
                                $areEqual = 'false';
                                break;
                            }
                        }
                    }
                }

                if (!$areEqual) {
                    break;
                }
            }

            if (!$areEqual) {
                return 'false'; // At least one set of modified answers is not equal
            }

            return $areEqual;
        } */
        protected function getSecondaryResult1($set) {
            $answersArray = parent::saveModifiedAnswer();
            $firstModifiedAnswer = null;
            
            foreach ($set as $num) {
                foreach ($answersArray as $answer) {
                    if ($answer['num'] === $num) {
                        if ($firstModifiedAnswer === null) {
                            $firstModifiedAnswer = $answer['modifiedAnswer'];
                        } else {
                            if ($firstModifiedAnswer !== $answer['modifiedAnswer']) {
                                return 'false'; // Break early, no need to check further
                            }
                        }
                    }
                }
            }
        
            return 'true';
        }

        protected function getSecondaryResult2($result){
            // check if secondary result 1 result, if equal to true return 1 else return null / ''
            if($result == 'true'){
                return 1;
            }

            return "";
            
        }

        protected function getSecondaryResult3($result, $index) {
            // Create a lookup table for primary results
            $primResults = $this->primaryConditionResult();
        
            // Check if the index exists in the lookup table
            if (isset($primResults[$index])) {
                // Compare primary result 2 to the provided result
                if ($primResults[$index]['primResult2'] == $result) {
                    return 'true';
                }
            }
        
            return 'false';
        }

        protected function getSecondaryResult4($result, $index){
            // primary result 2 is equal to secondary result 3, if equal return true else return false
            $primResults = $this->primaryConditionResult();

            /* foreach($primResults as $primKey => $primVal) {
                    if($index == $primKey){
                        if($primVal['primResult1'] == 'true' && $result == 'true'){
                            return 'true';
                        }
                    }
            } */
            if(isset($primResults[$index]['primResult1']) && $primResults[$index]['primResult1'] == 'true' && $result == 'true'){
                return 'true';
            }

            return 'false';
        }

        public function secondaryConditionResult(){
            // iterate secondary condition data and get the results. create new array to return as result data

            // ['set'=>[3,4,13,24],'confidenceScore'=>0],
            
            $result = [];
            $secondaryCondition = self::$secondaryCondition;
            foreach ($secondaryCondition as $key => $value) {
                $result1 = $this->getSecondaryResult1($value['set']);
                $result2 = ($result1 == 'true') ? 1 : 0;
                $result3 = $this->getSecondaryResult3($result2, $key);
                $result4 = $this->getSecondaryResult4($result3, $key);

                $result[] = ['secondaryResult1'=>$result1,'secondaryResult2'=>$result2,'secondaryResult3'=>$result3,'secondaryResult4'=>$result4,'scoreRef'=>$value['confidenceScore'],];
            }

            return $result;
        }

        protected function getDeductionResult1($set){
            $answersArray = parent::saveModifiedAnswer();

            $firstModifiedAnswer = null;
            $areEqual = 1;

            foreach ($set as $num) {
                foreach ($answersArray as $answer) {
                    if ($answer['num'] === $num) {
                        if ($firstModifiedAnswer === null) {
                            $firstModifiedAnswer = $answer['modifiedAnswer'];
                        } else {
                            if ($firstModifiedAnswer !== $answer['modifiedAnswer']) {
                                $areEqual = 'false';
                                break;
                            }
                        }
                    }
                }

                if (!$areEqual) {
                    break;
                }
            }

            if (!$areEqual) {
                return 'false'; // At least one set of modified answers is not equal
            }

            return $areEqual;

        }

        public function deductionResult(){
            $deductionData = self::$deductionConditions;
            $result = [];
            foreach ($deductionData as $key => $value) {
                $result[] = $this->getDeductionResult1($value);
            }

            return $result;
        }

        protected function getDeductionValue($deductions){
            $sum = 0;
        
            foreach ($deductions as $deductVal) {
                if (is_numeric($deductVal)) {
                    $sum += $deductVal;
                }
            }

            return $sum;
        }

        public function finalResponseResult(){
            $deductionResult = $this->deductionResult();
            $secondaryResult = $this->secondaryConditionResult();
            
            $confidenceScore = 0;
            $total = 0;
            $result = [];
            $confidenceLevel = null;
            foreach ($deductionResult as $value) {
                if(is_numeric($value)){
                    $total = $total + $value;
                }
            }
            
            foreach ($secondaryResult as $value) {
                if ($value['secondaryResult4'] == 'true'){
                    $confidenceScore = $value['scoreRef'] - $total; // Subtract $sum instead of adding
                }
            }

            if($confidenceScore <= 60){
                $confidenceLevel = '심각';
            }elseif ($confidenceScore >= 61 && $confidenceScore <= 70) {
                $confidenceLevel = '보통';
            }else{
                $confidenceLevel = '양호';
            }


            
            return $result[] = ['confidencelevel'=>$confidenceLevel,'responseConsistency'=>$confidenceScore];            
        }
    }
?>