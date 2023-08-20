<?php
    class PersonalityElem {
        public $val;

        // array set for question belongs to what personality.
        /* protected static $personalityElementsArr = array(
            array('A'=>'A 근면성','questionSet'=>array(24,25,34,44,54,64,74,84,94,104,114,124,134,144,212,226)),
            array('B'=>'B 책임감','questionSet'=>array(6,16,26,36,46,56,66,76,96,106,116,126,136,146,137,208,217,221)),
            array('C'=>'C 협동성','questionSet'=>array(8,18,28,33,38,39,48,58,68,78,98,108,128,132,148,225,223)),
            array('D'=>'D 자주성','questionSet'=>array(1,11,14,21,31,41,51,71,81,91,101,111,118,131,141,220,224)),
            array('E'=>'E 지도성','questionSet'=>array(9,19,29,49,69,79,89,99,109,119,129,138,139,149,150)),
            array('F'=>'F 감정상태','questionSet'=>array(5,17,27,37,47,55,57,61,67,77,97,107,117,127,147,214,228,209,216,213)),
            array('G'=>'G 집중력','questionSet'=>array(7,15,35,45,65,75,85,95,105,115,125,55,135,145,87,215,219,227)),
            array('H'=>'H 정서안정','questionSet'=>array(3,13,23,43,53,63,73,83,93,103113,59,133,132,143,210,222)),
            array('I'=>'I 준법성','questionSet'=>array(2,12,22,32,42,52,62,72,82,88,92,102,112,122,142,218,207,211))
        ); */

        protected static $personalityElementsArr = array(
            [
                'A'=>'A 근면성',
                'questionSet'=>[4,24,25,34,44,54,64,74,84,94,104,114,124,134,144,212,226],
                'correctAnswer'=>[4=>'1',24=>'2',25=>'2',34=>'1',44=>'1',54=>'2',64=>'1',74=>'1',84=>'1',94=>'2',104=>'1',114=>'2',124=>'1',134=>'2',144=>'1',212=>'',226=>''],
                'answerShape'=>[4=>'2',24=>'1',25=>'1',34=>'',44=>'2',54=>'1',64=>'',74=>'',84=>'',94=>'',104=>'2',114=>'1',124=>'2',134=>'1',144=>'2',212=>'',226=>''],
                'shapeModification'=>[4=>'',24=>'',25=>'',34=>'',44=>'',54=>'',64=>'',74=>'',84=>'',94=>'',104=>'',114=>'',124=>'',134=>'',144=>'',212=>'1',226=>'2'],
                'modificaitonConversionToActual'=>[4=>'',24=>'',25=>'',34=>'',44=>'',54=>'',64=>'',74=>'',84=>'',94=>'',104=>'',114=>'',124=>'',134=>'',144=>'',212=>'2',226=>'4'],
                'modificationValue'=>[4=>'-1',24=>'-1',25=>'-1',34=>'',44=>'-1',54=>'-2',64=>'',74=>'',84=>'',94=>'',104=>'-1',114=>'-1',124=>'-1',134=>'-2',144=>'-1',212=>'-3',226=>'-3']
            ],
            [
                'B'=>'B 책임감',
                'questionSet'=>[6,16,26,36,46,56,66,76,96,106,116,126,136,146,137,208,217,221],
                'correctAnswer'=>[6=>'1',16=>'1',26=>'1',36=>'1',46=>'1',56=>'2',66=>'1',76=>'1',96=>'1',106=>'2',116=>'1',1261=>'1',136=>'1',146=>'2',137=>'1',208=>'',217=>'',221=>''],
                'answerShape'=>[6=>'',16=>'',26=>'',36=>'',46=>'',56=>'1',66=>'1',76=>'1',96=>'1',106=>'1',116=>'1',126=>'1',136=>'1',146=>'1',137=>'',208=>'',217=>'',221=>''],
                'shapeModification'=>[6=>'',16=>'',26=>'',36=>'',46=>'',56=>'',66=>'',76=>'',96=>'',106=>'',116=>'',126=>'',136=>'',146=>'',137=>'',208=>'3',217=>'3',221=>'2'],
                'modificaitonConversionToActual'=>[6=>'',16=>'',26=>'',36=>'',46=>'',56=>'',66=>'',76=>'',96=>'',106=>'',116=>'',126=>'',136=>'',146=>'',137=>'',208=>'1',217=>'5',221=>'3'],
                'modificationValue'=>[6=>'',16=>'',26=>'',36=>'',46=>'',56=>'-3',66=>'-1',76=>'-1',96=>'-1',106=>'-2',116=>'-2',126=>'-1',136=>'-2',146=>'-4',137=>'',208=>'-3',217=>'-3',221=>'-3']
            ],
            [
                'C'=>'C 협동성',
                'questionSet'=>[8,18,28,33,38,39,48,58,68,78,98,108,128,132,148,225,223],
                'correctAnswer'=>[8=>'1',18=>'1',28=>'2',33=>'1',38=>'1',39=>'1',48=>'2',58=>'1',68=>'1',78=>'2',98=>'1',108=>'2',128=>'2',132=>'2',148=>'1',225=>'',223=>''],
                'answerShape'=>[8=>'2',18=>'2',28=>'1',33=>'2',38=>'',39=>'',48=>'1',58=>'1',68=>'',78=>'',98=>'',108=>'1',128=>'',132=>'',148=>'',225=>'',223=>''],
                'shapeModification'=>[8=>'',18=>'',28=>'',33=>'',38=>'',39=>'',48=>'',58=>'',68=>'',78=>'',98=>'',108=>'',128=>'',132=>'',148=>'',225=>'2',223=>'2'],
                'modificaitonConversionToActual'=>[8=>'',18=>'',28=>'',33=>'',38=>'',39=>'',48=>'',58=>'',68=>'',78=>'',98=>'',108=>'',128=>'',132=>'',148=>'',225=>'5',223=>'4'],
                'modificationValue'=>[8=>'-1',18=>'-2',28=>'-2',33=>'-1',38=>'',39=>'',48=>'-1',58=>'-1',68=>'',78=>'',98=>'',108=>'-2',128=>'',132=>'',148=>'',225=>'-3',223=>'-3']
            ],
            [
                'D'=>'D 자주성',
                'questionSet'=>[1,11,14,21,31,41,51,71,81,91,101,111,118,131,141,220,224],
                'correctAnswer'=>[1=>'1',11=>'1',14=>'1',21=>'2',31=>'2',41=>'2',51=>'2',71=>'2',81=>'1',91=>'2',101=>'2',111=>'1',118=>'2',131=>'1',141=>'1',220=>'',224=>''],
                'answerShape'=>[1=>'2',11=>'',14=>'2',21=>'1',31=>'1',41=>'1',51=>'1',71=>'',81=>'',91=>'',101=>'',111=>'2',118=>'1',131=>'',141=>'',220=>'',224=>''],
                'shapeModification'=>[1=>'',11=>'',14=>'',21=>'',31=>'',41=>'',51=>'',71=>'',81=>'',91=>'',101=>'',111=>'',118=>'',131=>'',141=>'',220=>'1',224=>'1'],
                'modificaitonConversionToActual'=>[1=>'',11=>'',14=>'',21=>'',31=>'',41=>'',51=>'',71=>'',81=>'',91=>'',101=>'',111=>'',118=>'',131=>'',141=>'',220=>'5',224=>'5'],
                'modificationValue'=>[1=>'-1',11=>'',14=>'-1',21=>'-1',31=>'-1',41=>'-1',51=>'-1',71=>'',81=>'',91=>'',101=>'',111=>'-1',118=>'-1',131=>'',141=>'',220=>'-3',224=>'-3']
            ],
            [
                'E'=>'E 지도성',
                'questionSet'=>[9,19,29,49,69,79,89,99,109,119,129,138,139,149,150],
                'correctAnswer'=>[9=>'',19=>'',29=>'',49=>'',69=>'',79=>'',89=>'',99=>'',109=>'',119=>'',129=>'',138=>'',139=>'',149=>'',150=>''],
                'answerShape'=>[9=>'',19=>'',29=>'',49=>'',69=>'',79=>'',89=>'',99=>'',109=>'',119=>'',129=>'',138=>'',139=>'',149=>'',150=>''],
                'shapeModification'=>[9=>'',19=>'',29=>'',49=>'',69=>'',79=>'',89=>'',99=>'',109=>'',119=>'',129=>'',138=>'',139=>'',149=>'',150=>''],
                'modificaitonConversionToActual'=>[9=>'',19=>'',29=>'',49=>'',69=>'',79=>'',89=>'',99=>'',109=>'',119=>'',129=>'',138=>'',139=>'',149=>'',150=>''],
                'modificationValue'=>[9=>'',19=>'',29=>'',49=>'',69=>'',79=>'',89=>'',99=>'',109=>'',119=>'',129=>'',138=>'',139=>'',149=>'',150=>'']
            ],
            [
                'F'=>'F 감정상태',
                'questionSet'=>[5,17,27,37,47,55,57,61,67,77,97,107,117,127,147,214,228,209,216,213],
                'correctAnswer'=>[5=>'',17=>'',27=>'',37=>'',47=>'',55=>'',57=>'',61=>'',67=>'',77=>'',97=>'',107=>'',117=>'',127=>'',147=>'',214=>'',228=>'',209=>'',216=>'',213=>''],
                'answerShape'=>[5=>'',17=>'',27=>'',37=>'',47=>'',55=>'',57=>'',61=>'',67=>'',77=>'',97=>'',107=>'',117=>'',127=>'',147=>'',214=>'',228=>'',209=>'',216=>'',213=>''],
                'shapeModification'=>[5=>'',17=>'',27=>'',37=>'',47=>'',55=>'',57=>'',61=>'',67=>'',77=>'',97=>'',107=>'',117=>'',127=>'',147=>'',214=>'',228=>'',209=>'',216=>'',213=>''],
                'modificaitonConversionToActual'=>[5=>'',17=>'',27=>'',37=>'',47=>'',55=>'',57=>'',61=>'',67=>'',77=>'',97=>'',107=>'',117=>'',127=>'',147=>'',214=>'',228=>'',209=>'',216=>'',213=>''],
                'modificationValue'=>[5=>'',17=>'',27=>'',37=>'',47=>'',55=>'',57=>'',61=>'',67=>'',77=>'',97=>'',107=>'',117=>'',127=>'',147=>'',214=>'',228=>'',209=>'',216=>'',213=>'']
            ],
            [
                'G'=>'G 집중력',
                'questionSet'=>[7,15,35,45,65,75,85,95,105,115,125,55,135,145,87,215,219,227],
                'correctAnswer'=>[7=>'',15=>'',35=>'',45=>'',65=>'',75=>'',85=>'',95=>'',105=>'',115=>'',125=>'',55=>'',135=>'',145=>'',87=>'',215=>'',219=>'',227=>''],
                'answerShape'=>[7=>'',15=>'',35=>'',45=>'',65=>'',75=>'',85=>'',95=>'',105=>'',115=>'',125=>'',55=>'',135=>'',145=>'',87=>'',215=>'',219=>'',227=>''],
                'shapeModification'=>[7=>'',15=>'',35=>'',45=>'',65=>'',75=>'',85=>'',95=>'',105=>'',115=>'',125=>'',55=>'',135=>'',145=>'',87=>'',215=>'',219=>'',227=>''],
                'modificaitonConversionToActual'=>[7=>'',15=>'',35=>'',45=>'',65=>'',75=>'',85=>'',95=>'',105=>'',115=>'',125=>'',55=>'',135=>'',145=>'',87=>'',215=>'',219=>'',227=>''],
                'modificationValue'=>[7=>'',15=>'',35=>'',45=>'',65=>'',75=>'',85=>'',95=>'',105=>'',115=>'',125=>'',55=>'',135=>'',145=>'',87=>'',215=>'',219=>'',227=>'']
            ],
            [
                'H'=>'H 정서안정',
                'questionSet'=>[3,13,23,43,53,63,73,83,93,103113,59,133,132,143,210,222],
                'correctAnswer'=>[3=>'',13=>'',23=>'',43=>'',53=>'',63=>'',73=>'',83=>'',93=>'',103=>'',113=>'',59=>'',133=>'',132=>'',143=>'',210=>'',222=>''],
                'answerShape'=>[3=>'',13=>'',23=>'',43=>'',53=>'',63=>'',73=>'',83=>'',93=>'',103=>'',113=>'',59=>'',133=>'',132=>'',143=>'',210=>'',222=>''],
                'shapeModification'=>[3=>'',13=>'',23=>'',43=>'',53=>'',63=>'',73=>'',83=>'',93=>'',103=>'',113=>'',59=>'',133=>'',132=>'',143=>'',210=>'',222=>''],
                'modificaitonConversionToActual'=>[3=>'',13=>'',23=>'',43=>'',53=>'',63=>'',73=>'',83=>'',93=>'',103=>'',113=>'',59=>'',133=>'',132=>'',143=>'',210=>'',222=>''],
                'modificationValue'=>[3=>'',13=>'',23=>'',43=>'',53=>'',63=>'',73=>'',83=>'',93=>'',103=>'',113=>'',59=>'',133=>'',132=>'',143=>'',210=>'',222=>'']
            ],
            [
                'I'=>'I 준법성',
                'questionSet'=>[2,12,22,32,42,52,62,72,82,88,92,102,112,122,142,218,207,211],
                'correctAnswer'=>[2=>'',12=>'',22=>'',32=>'',42=>'',52=>'',62=>'',72=>'',82=>'',88=>'',92=>'',102=>'',112=>'',122=>'',142=>'',218=>'',207=>'',211=>''],
                'answerShape'=>[2=>'',12=>'',22=>'',32=>'',42=>'',52=>'',62=>'',72=>'',82=>'',88=>'',92=>'',102=>'',112=>'',122=>'',142=>'',218=>'',207=>'',211=>''],
                'shapeModification'=>[2=>'',12=>'',22=>'',32=>'',42=>'',52=>'',62=>'',72=>'',82=>'',88=>'',92=>'',102=>'',112=>'',122=>'',142=>'',218=>'',207=>'',211=>''],
                'modificaitonConversionToActual'=>[2=>'',12=>'',22=>'',32=>'',42=>'',52=>'',62=>'',72=>'',82=>'',88=>'',92=>'',102=>'',112=>'',122=>'',142=>'',218=>'',207=>'',211=>''],
                'modificationValue'=>[2=>'',12=>'',22=>'',32=>'',42=>'',52=>'',62=>'',72=>'',82=>'',88=>'',92=>'',102=>'',112=>'',122=>'',142=>'',218=>'',207=>'',211=>'']
            ]
        );
        protected static $correctAnswer = [];
        protected static $testMakerModification = [];
        protected static $answerShape = [];
        protected static $shapeModification = [];
        protected static $numberOfCorrectAnswers = [];
        protected static $convertOfValue = [];
        protected static $theNumberOfHits = [];

        public function __constructor($inputArr){

        }
    }
?>