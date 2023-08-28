<?php
    // this will process the aswer for the job aptitude
    class ConditionJobAptitude extends PersonalityElem{
        protected static $conditionData = [
            [
                'type'=>'management',
                'questions'=>[70,110,150,152,155,181,183],
                'correctAnswer'=>[1,1,1,1,1,1,1]
            ],
            [
                'type'=>'safety',
                'questions'=>[70,110,150,152,155,181,183],
                'correctAnswer'=>[1,1,1,1,1,1,1]
            ],
            [
                'type'=>'accounting',
                'questions'=>[40,60,90,121,162,165],
                'correctAnswer'=>[1,1,1,1,1,1]
            ],
            [
                'type'=>'administrator',
                'questions'=>[20,80,86,140,178,160,156],
                'correctAnswer'=>[1,1,1,1,1,1,1]
            ],
            [
                'type'=>'technique',
                'questions'=>[10,30,50,130,151,154],
                'correctAnswer'=>[1,1,1,1,1,1]
            ],
            [
                'type'=>'research',
                'questions'=>[169,174,163,172,164,161],
                'correctAnswer'=>[1,1,1,1,1,1]
            ],
            [
                'type'=>'it',
                'questions'=>[100,120,153,184,171,179],
                'correctAnswer'=>[1,1,1,1,1,1]
            ],
            [
                'type'=>'manufacturing',
                'questions'=>[182,173,176,168,170,158],
                'correctAnswer'=>[1,1,1,1,1,1]
            ]
        ];

        public function __construct($answers)
        {
            parent::__construct($answers);
        }

        public function saveCandidateAnswer(){
            $modifiedAnswer = parent::modifiedAnswer();
            $newData = [];
        
            foreach (self::$conditionData as $conditionVal) {
                $questionArray = $conditionVal['questions'];
                $answerArray = []; // Reset the answer array for each type
        
                foreach ($modifiedAnswer as $answer) {
                    if (in_array($answer['num'], $questionArray)) {
                        // Check if the answer is correct for this type
                        $correctAnswerKey = array_search($answer['num'], $questionArray);
                        if ($correctAnswerKey !== false && $conditionVal['correctAnswer'][$correctAnswerKey] == $answer['modifiedAnswer']) {
                            $answerArray[] = 1; // Correct answer
                        } else {
                            $answerArray[] = 0; // Incorrect answer
                        }
                    }
                }
        
                // Add the type and answer array to takerAnswer
                $newData[] = [
                    'type' => $conditionVal['type'],
                    'takerAnswers' => $answerArray,
                    'questions'=>$questionArray
                ];
            }
            return $newData;
            // Now, $newData contains the takerAnswer for each type
            // You may want to return or store this data as needed
        }

        protected function getPersonalityResult(){
            return parent::savePersonalityResult();
        }
    }
?>