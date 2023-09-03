<?php
    class JobAptitude extends ConditionJobAptitude{
        protected static $jobAptitudeData = [
            [
                'type'=>'management', 
                'question'=>[70,110,150,152,155,183,181],
                'scoreRef'=>['c cooperation','d autonomy']
            ],
            [
                'type'=>'safety', 
                'question'=>[157,177,180,175,167,159,''],
                'scoreRef'=>['b responsibility','c cooperation','h emotional stability']
                
            ],
            [
                'type'=>'accounting', 
                'question'=>[40,60,90,121,162,165,''],
                'scoreRef'=>['a deligence','i compliance']
            ],
            [
                'type'=>'administration', 
                'question'=>[20,80,86,140,178,160,156],
                'scoreRef'=>[ 'e leadership','i compliance']
            ],
            [
                'type'=>'technique', 
                'question'=>[10,30,50,130,151,154,''],
                'scoreRef'=>['b responsibility','h emotional stability']
            ],
            [
                'type'=>'research', 
                'question'=>[169,174,163,172,164,161,''],
                'scoreRef'=>[ 'a deligence','b responsibility','e leadership']
            ],
            [
                'type'=>'it', 
                'question'=>[100,120,153,184,171,179,''],
                'scoreRef'=>[ 'b responsibility','i compliance']
            ],
            [
                'type'=>'manufacturing', 
                'question'=>[182,173,176,168,170,158,''],
                'scoreRef'=>[ 'a deligence','b responsibility','h emotional stability']
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
            $modifiedAnswer = parent::saveModifiedAnswer();

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

        protected function getTotalCorrectAnswer($numberOfHitsArr) {
           return array_sum($numberOfHitsArr);
        }


        protected function getFinalResult($searchType) {
            // Get the Personality Result from personalityElements
            $scoreArray = parent::getPersonalityResult();
            $score = null;
            // Loop through the array to find the matching 'type'
            foreach ($scoreArray as $item) {
                if ($item['type'] === substr($searchType,2)) {
                    $score = $item['score'];
                    break; // Exit the loop once a match is found
                }
            }

            return $score; // Return Score
        }

        protected function convertSumAnswer($score){
            $result = 0;
            foreach(self::$jobAptitudeScoreRef as $ref){
                if($ref['numAnswer'] == $score){
                    $result = $ref['score'];
                }
            }

            return $result;
        }

        public function saveTotalCorrectAnswer() {
            $result = [];
        
            $answers = parent::sumCorrectAnswer();
        
            foreach ($answers as $answer) {
                $scores = []; // Declare $scores here to accumulate scores for each answer
        
                $scores[] = $this->convertSumAnswer($answer['sum']); // Remove the inner square brackets
        
                foreach (self::$jobAptitudeData as $jobData) {
                    if ($answer['type'] == $jobData['type']) {
                        foreach ($jobData['scoreRef'] as $type) {
                            $scores[] = $this->getFinalResult($type);
                        }
                    }
                }
        
                $result[] = ['type' => $answer['type'], 'totalScore' => $scores]; // Change 'totaScore' to 'totalScore'
            }
        
            return $result; // Add this return statement to make the result accessible outside the function
        }

        protected function sumTotalAnswer($scoresArr) {
            $sum = 0;
            foreach ($scoresArr as $value) {
                if (is_numeric($value)) { // Check if the value is numeric
                    $sum += $value;
                }
            }
            return $sum;
        }
        
        public function getPersonalityAcquisitionScore() {
            $totalScores = $this->saveTotalCorrectAnswer(); // Ensure this function returns the correct data structure
            $result = [];
            
            foreach ($totalScores as $scores) {
                $total = array_sum($scores['totalScore']) / 3;
                $result[] = ['type' => $scores['type'], 'score' => round($total)]; // Use 'score' instead of 'totaScore'
            }
            
            return $result; // Return the calculated results, not $totalScores
        }

    }
?>