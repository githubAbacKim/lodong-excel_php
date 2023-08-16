<?php

class Conversation{
    public $answer;
    public $qNum;

    protected static $questionAlgoArr1 = array(1,2,4,6,8,9,12,14,16,18,19,22,26,27,33,35,36,38,39,43,44,46,49,52,58,59,63,64,66,69,74,75,76,79,81,82,83,84,87,89,91,92,93,96,98,99,102,104,109,111,116,119,124,125,126,129,131,136,137,138,139,141,144,148,149);

    protected static $questionAlgoArr2 = array(3,5,7,11,13,15,17,21,23,24,25,28,29,31,32,34,37,41,42,45,47,48,51,53,54,55,56,57,61,62,65,67,68,71,72,73,77,78,85,88,94,95,97,101,103,105,106,107,108,112,113,114,115,117,118,122,127,132,133,134,135,142,143,145,146,147,150);

    protected static $questionAlgoArr3 = array(10,20,30,40,50,60,70,80,90,100,110,120,121,123,130,140);

    protected static $personalityElementsArr = array(
        array('A'=>'A 근면성','questionSet'=>array(24,25,34,44,54,64,74,84,94,104,114,124,134,144,212,226)),
        array('B'=>'B 책임감','questionSet'=>array(6,16,26,36,46,56,66,76,96,106,116,126,136,146,137,208,217,221)),
        array('C'=>'C 협동성','questionSet'=>array(8,18,28,33,38,39,48,58,68,78,98,108,128,132,148,225,223)),
        array('D'=>'D 자주성','questionSet'=>array(1,11,14,21,31,41,51,71,81,91,101,111,118,131,141,220,224)),
        array('E'=>'E 지도성','questionSet'=>array(9,19,29,49,69,79,89,99,109,119,129,138,139,149,150)),
        array('F'=>'F 감정상태','questionSet'=>array(5,17,27,37,47,55,57,61,67,77,97,107,117,127,147,214,228,209,216,213)),
        array('G'=>'G 집중력','questionSet'=>array(7,15,35,45,65,75,85,95,105,115,125,55,135,145,87,215,219,227)),
        array('H'=>'H 정서안정','questionSet'=>array(3,13,23,43,53,63,73,83,93,103113,59,133,132,143,210,222)),
        array('I'=>'I 준법성','questionSet'=>array(2,12,22,32,42,52,62,72,82,88,92,102,112,122,142,218,207,211))
    );


    public function __constructor($inputNum,$inputAnswer){
        $this->answer = $inputAnswer;
        $this->qNum = $inputNum;
    }

    // determine answer conversion based on the question number category
    function answerFormula1(){
        if($this->answer <= 3){
            return '1';
        }else{
            return '2';
        }
    }

    function answerFormula2(){
        if($this->answer >= 3){
            return '2';
        }else{
            return '1';
        }
    }

    function answerFormula3(){
        if($this->answer === 0){
            return '0';
        }else{
            return '0';
        }
    }
    
    function checkAnswerSet(){
        if (in_array($this->qNum, self::$questionAlgoArr1)) {
            $this->answerFormula1();
        } elseif(in_array($this->qNum, self::$questionAlgoArr1)) {
            $this->answerFormula2();
        }else{
            $this->answerFormula3();
        }
    }

    
    
}

?>