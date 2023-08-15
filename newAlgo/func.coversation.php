<?php

class Conversation{
    public $answer;
    public $qNum;

    protected static $questionAlgoArr1 = array();
    protected static $questionAlgoArr2 = array();
    protected static $questionAlgoArr3 = array();

    protected static $personalityElementsArr = array(
        array('A'=>'근면성','questionSet'=>array(24,25,34,44,54,64,74,84,94,104,114,124,134,144,212,226)),
        array('B'=>'책임감','questionSet'=>array(6,16,26,36,46,56,66,76,96,106,116,126,136,146,137,208,217,221)),
        array('C'=>'협동성','questionSet'=>array(8,18,28,33,38,39,48,58,68,78,98,108,128,132,148,225,223)),
        array('D'=>'자주성','questionSet'=>array(1,11,14,21,31,41,51,71,81,91,101,111,118,131,141,220,224)),
        array('E'=>'지도성','questionSet'=>array(9,19,29,49,69,79,89,99,109,119,129,138,139,149,150)),
        array('F'=>'감정상태','questionSet'=>array(5,17,27,37,47,55,57,61,67,77,97,107,117,127,147,214,228,209,216,213)),
        array('G'=>'집중력','questionSet'=>array(7,15,35,45,65,75,85,95,105,115,125,55,135,145,87,215,219,227)),
        array('H'=>'정서안정','questionSet'=>array(3,13,23,43,53,63,73,83,93,103113,59,133,132,143,210,222)),
        array('I'=>'준법성','questionSet'=>array(2,12,22,32,42,52,62,72,82,88,92,102,112,122,142,218,207,211))
    );


    public function __constructor($inputNum,$inputAnswer){
        $this->answer = $inputAnswer;
        $this->qnum = $inputNum
    }

    function checkAnswerSet(){
        if (in_array($this->answer, $questionAlgoArr1)) {
            $this->questAlgo1();
        } else {
            echo "Value not found in the array.";
        }
    }

    function questAlgo1(){
        if($this->answer <= 3){
            return '1';
        }else{
            return '2';
        }
    }

    function questAlgo2(){
        if($this->answer >= 3){
            return '2';
        }else{
            return '1';
        }
    }

    function questAlgo3(){
        if($this->answer === 0){
            return '0';
        }else{
            return '0';
        }
    }

    function createPersonalityResult({

    })

    
}

?>