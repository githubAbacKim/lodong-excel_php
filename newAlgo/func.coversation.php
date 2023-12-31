<?php
// this class aims to modify the user answer based on given algorithm
class Conversation{
    protected $answersArr;
    protected $qNum;

    protected static $questionSetArr = [1,2,4,6,8,9,12,14,16,18,19,22,26,27,33,35,36,38,39,43,44,46,49,52,58,59,63,64,66,69,74,75,76,79,81,82,83,84,87,89,91,92,93,96,98,99,102,104,109,111,116,119,124,125,126,129,131,136,137,138,139,141,144,148,149,3,5,7,11,13,15,17,21,23,24,25,28,29,31,32,34,37,41,42,45,47,48,51,53,54,55,56,57,61,62,65,67,68,71,72,73,77,78,85,88,94,95,97,101,103,105,106,107,108,112,113,114,115,117,118,122,127,132,133,134,135,142,143,145,146,147,150];

    protected static $zeroSet = [10,20,30,40,50,60,70,80,90,100,110,120,121,123,130,140];

    protected $modifiedAnswer = [];

    public function __construct($answers){
        $this->answersArr = $answers;
    }

    protected function generateQuestionSet(){
        $result = [];
        for($i = 1; $i<=228; $i++){
            if (!in_array($i, self::$zeroSet)) {
                $result[] = $i;
            }
        }
        return $result;
    }

    // Determine answer conversion based on the question number category

    protected function convertAnswer($answer){
        if($answer <= 3){
            return 1;
        }else{
            return 2;
        }
    }

    public function saveModifiedAnswer(){
        /* 
            call this function to get the modified answers
        */
        $result = [];
        $questions = $this->generateQuestionSet();
        foreach ($this->answersArr as $answerVal) {
            $num = $answerVal['num'];
            
            if (in_array($num, $questions)) {
                $modified = $this->convertAnswer($answerVal['answer']);
                $result[] = ['num' => $num, 'modifiedAnswer' => $modified];
            } else {
                $result[] = ['num' => $num, 'modifiedAnswer' => 0];
            }
        }
        
        return $result;
       
    }
}

?>