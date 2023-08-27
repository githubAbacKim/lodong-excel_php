<?php
    class JobAptitude extends ConditionJobAptitude{
        protected static $jobAptitudeData = [
            [
                'type'=>'management', 
                'question'=>[70,110,150,152,155,183,181],
                'scoreRef'=>[ 'cooperation','autonomy']
            ],
            [
                'type'=>'safety', 
                'question'=>[157,177,180,175,167,159,''],
                'scoreRef'=>[  'responsibility','cooperation','emotional stability']
                
            ],
            [
                'type'=>'accounting', 
                'question'=>[40,60,90,121,162,165,''],
                'scoreRef'=>['deligence','compliance']
            ],
            [
                'type'=>'administration', 
                'question'=>[20,80,86,140,178,160,156],
                'scoreRef'=>[ 'leadership','compliance']
            ],
            [
                'type'=>'technique', 
                'question'=>[10,30,50,130,151,154,''],
                'scoreRef'=>[ 'responsibility','emotional stability']
            ],
            [
                'type'=>'research', 
                'question'=>[169,174,163,172,164,161,''],
                'scoreRef'=>[ 'deligence','responsibility','leadership']
            ],
            [
                'type'=>'it', 
                'question'=>[100,120,153,184,171,179,''],
                'scoreRef'=>[ 'responsibility','compliance']
            ],
            [
                'type'=>'manufacturing', 
                'question'=>[182,173,176,168,170,158,''],
                'scoreRef'=>[ 'deligence','responsibility','emotional stability']
            ],
        ];
        
        protected static $jobAptitudeScoreRef = [
            ['numAnswer'=>0,'score'=>0],
            ['numAnswer'=>1,'score'=>0],
            ['numAnswer'=>2,'score'=>32],
            ['numAnswer'=>3,'score'=>48],
            ['numAnswer'=>4,'score'=>64],
            ['numAnswer'=>5,'score'=>80],
            ['numAnswer'=>6,'score'=>96],
            ['numAnswer'=>7,'score'=>96],
        ];

        protected static $jobAptitudeLabels = ['management','safety','accounting','administration','technique','research','it','manufacturing'];

        public function __construct($answers){
            parent::__construct($answers);
        }

        protected function condition1Result($correctAnswer){
            $result = 0;
            foreach (self::$jobAptitudeScoreRef as $value) {
                return $result = ($value['numAnswer'] === $correctAnswer) ? $value['score'] : 'false';
            }
        }

        protected function personalityAquisitionScore(){
            // Sample data representing the values in cells T4, Z4 to AB4
            $t4Value = 43; // Boolean value
            $z4ToAB4Values = [10, 20, 30, 40, 50]; // Integer values

            // Initialize variables to hold the sum and the count of integers
            $sum = 0;
            $count = 0;

            // Check if T4 is not equal to false and add it to the sum
            if ($t4Value !== false) {
                $sum += $t4Value; // Assuming you want to add 1 for a true value
            }

            // Loop through the integer values in the range Z4 to AB4 and add them to the sum
            foreach ($z4ToAB4Values as $value) {
                $sum += $value;
                $count++;
            }

            // Calculate the final result by dividing the sum by 3
            $result = $sum / 3;

            return $result;
        }

        public function saveTakersAnswer(){
            // initialize the modified answer from the conversation class
            $modifiedAnswer = parent::modifiedAnswer();

            // Initialize an empty array to store taker answers
            $takerAnswer = [];

            // Loop through each item in $jobAptitudeData
            foreach (self::$jobAptitudeData as $jobData) {
                $type = $jobData['type'];
                $questionArray = $jobData['question'];
                
                // Initialize an array to store answers for this type
                $answerArray = [];

                // Loop through $modifiedAnswer to match by num
                foreach ($modifiedAnswer as $answer) {
                    if (in_array($answer['num'], $questionArray)) {
                        // Add the answer to the answer array for this type
                        $answerArray[] = $answer['modifiedAnswer'];
                    }
                }

                // Add the type and answer array to takerAnswer
                $takerAnswer[] = [
                    'type' => $type,
                    'answers' => $answerArray,
                ];
            }

            return $takerAnswer;
        }

        public function getTotalCorrectAnswer(){
            $takerAnswer = $this->saveTakersAnswer();
            $result = [];
            foreach ($takerAnswer as $answerValue) {
                $newConditionData = [];
                $total = 0;
                foreach($answerValue['answers'] as $answers){
                    if($answers == 1){
                    }
                }
            }

        }


    }
?>