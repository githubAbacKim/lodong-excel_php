<?php
    class PersonalityElem extends Conversation{
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

        // this will contain 
        protected $personalitiesData = [];

        // store the results for the actual score for all personalities
        protected $personalityResult1 = [];
        protected $personalityResult2 = [];


        protected static $personnalityResultLabel1 = ['Deligence', 'Responsibility', 'Cooperation', 'Autonomy','Leadership', 'EmtionalState', 'Concentration', 'EmotionalStability', 'Compliance', 'talentSynthesis'];
        protected static $personnalityResultLabel2 = ['ConfidenceLevel', 'TestAttitude', 'TestStatus', 'NonResponseRate', 'ResponseConsistency', 'Antisocial'];

        protected static $personalityElementsArr = [
            [
                'type'=>'Deligence',
                'questionSet'=>[4,24,25,34,44,54,64,74,84,94,104,114,124,134,144,212,226],
                'correctAnswer'=>[4=>'1',24=>'2',25=>'2',34=>'1',44=>'1',54=>'2',64=>'1',74=>'1',84=>'1',94=>'2',104=>'1',114=>'2',124=>'1',134=>'2',144=>'1',212=>'',226=>''],
                'answerShape'=>[4=>'2',24=>'1',25=>'1',34=>'',44=>'2',54=>'1',64=>'',74=>'',84=>'',94=>'',104=>'2',114=>'1',124=>'2',134=>'1',144=>'2',212=>'',226=>''],
                'shapeModification'=>[4=>'',24=>'',25=>'',34=>'',44=>'',54=>'',64=>'',74=>'',84=>'',94=>'',104=>'',114=>'',124=>'',134=>'',144=>'',212=>'1',226=>'2'],
                'modificaitonConversionToActual'=>[4=>'',24=>'',25=>'',34=>'',44=>'',54=>'',64=>'',74=>'',84=>'',94=>'',104=>'',114=>'',124=>'',134=>'',144=>'',212=>'2',226=>'4'],
                'modificationValue'=>[4=>'-1',24=>'-1',25=>'-1',34=>'',44=>'-1',54=>'-2',64=>'',74=>'',84=>'',94=>'',104=>'-1',114=>'-1',124=>'-1',134=>'-2',144=>'-1',212=>'-3',226=>'-3']
            ],
            [
                'type'=>'Responsibility',
                'questionSet'=>[6,16,26,36,46,56,66,76,96,106,116,126,136,146,137,208,217,221],
                'correctAnswer'=>[6=>'1',16=>'1',26=>'1',36=>'1',46=>'1',56=>'2',66=>'1',76=>'1',96=>'1',106=>'2',116=>'1',1261=>'1',136=>'1',146=>'2',137=>'1',208=>'',217=>'',221=>''],
                'answerShape'=>[6=>'',16=>'',26=>'',36=>'',46=>'',56=>'1',66=>'1',76=>'1',96=>'1',106=>'1',116=>'1',126=>'1',136=>'1',146=>'1',137=>'',208=>'',217=>'',221=>''],
                'shapeModification'=>[6=>'',16=>'',26=>'',36=>'',46=>'',56=>'',66=>'',76=>'',96=>'',106=>'',116=>'',126=>'',136=>'',146=>'',137=>'',208=>'3',217=>'3',221=>'2'],
                'modificaitonConversionToActual'=>[6=>'',16=>'',26=>'',36=>'',46=>'',56=>'',66=>'',76=>'',96=>'',106=>'',116=>'',126=>'',136=>'',146=>'',137=>'',208=>'1',217=>'5',221=>'3'],
                'modificationValue'=>[6=>'',16=>'',26=>'',36=>'',46=>'',56=>'-3',66=>'-1',76=>'-1',96=>'-1',106=>'-2',116=>'-2',126=>'-1',136=>'-2',146=>'-4',137=>'',208=>'-3',217=>'-3',221=>'-3']
            ],
            [
                'type'=>'Cooperation',
                'questionSet'=>[8,18,28,33,38,39,48,58,68,78,98,108,128,132,148,225,223],
                'correctAnswer'=>[8=>'1',18=>'1',28=>'2',33=>'1',38=>'1',39=>'1',48=>'2',58=>'1',68=>'1',78=>'2',98=>'1',108=>'2',128=>'2',132=>'2',148=>'1',225=>'',223=>''],
                'answerShape'=>[8=>'2',18=>'2',28=>'1',33=>'2',38=>'',39=>'',48=>'1',58=>'1',68=>'',78=>'',98=>'',108=>'1',128=>'',132=>'',148=>'',225=>'',223=>''],
                'shapeModification'=>[8=>'',18=>'',28=>'',33=>'',38=>'',39=>'',48=>'',58=>'',68=>'',78=>'',98=>'',108=>'',128=>'',132=>'',148=>'',225=>'2',223=>'2'],
                'modificaitonConversionToActual'=>[8=>'',18=>'',28=>'',33=>'',38=>'',39=>'',48=>'',58=>'',68=>'',78=>'',98=>'',108=>'',128=>'',132=>'',148=>'',225=>'5',223=>'4'],
                'modificationValue'=>[8=>'-1',18=>'-2',28=>'-2',33=>'-1',38=>'',39=>'',48=>'-1',58=>'-1',68=>'',78=>'',98=>'',108=>'-2',128=>'',132=>'',148=>'',225=>'-3',223=>'-3']
            ],
            [
                'type'=>'Autonomy',
                'questionSet'=>[1,11,14,21,31,41,51,71,81,91,101,111,118,131,141,220,224],
                'correctAnswer'=>[1=>'1',11=>'1',14=>'1',21=>'2',31=>'2',41=>'2',51=>'2',71=>'2',81=>'1',91=>'2',101=>'2',111=>'1',118=>'2',131=>'1',141=>'1',220=>'',224=>''],
                'answerShape'=>[1=>'2',11=>'',14=>'2',21=>'1',31=>'1',41=>'1',51=>'1',71=>'',81=>'',91=>'',101=>'',111=>'2',118=>'1',131=>'',141=>'',220=>'',224=>''],
                'shapeModification'=>[1=>'',11=>'',14=>'',21=>'',31=>'',41=>'',51=>'',71=>'',81=>'',91=>'',101=>'',111=>'',118=>'',131=>'',141=>'',220=>'1',224=>'1'],
                'modificaitonConversionToActual'=>[1=>'',11=>'',14=>'',21=>'',31=>'',41=>'',51=>'',71=>'',81=>'',91=>'',101=>'',111=>'',118=>'',131=>'',141=>'',220=>'5',224=>'5'],
                'modificationValue'=>[1=>'-1',11=>'',14=>'-1',21=>'-1',31=>'-1',41=>'-1',51=>'-1',71=>'',81=>'',91=>'',101=>'',111=>'-1',118=>'-1',131=>'',141=>'',220=>'-3',224=>'-3']
            ],
            [
                'type'=>'Leadership',
                'questionSet'=>[9,19,29,49,69,79,89,99,109,119,129,138,139,149,150],
                'correctAnswer'=>[9=>'2',19=>'2',29=>'1',49=>'1',69=>'2',79=>'1',89=>'1',99=>'2',109=>'2',119=>'2',129=>'2',138=>'2',139=>'2',149=>'2',150=>'1'],
                'answerShape'=>[9=>'',19=>'',29=>'',49=>'',69=>'',79=>'',89=>'',99=>'',109=>'',119=>'',129=>'',138=>'',139=>'',149=>'',150=>''],
                'shapeModification'=>[9=>'2',19=>'1',29=>'',49=>'',69=>'',79=>'',89=>'',99=>'',109=>'',119=>'',129=>'',138=>'',139=>'2',149=>'1',150=>'1'],
                'modificaitonConversionToActual'=>[9=>'-2',19=>'-1',29=>'',49=>'',69=>'',79=>'',89=>'',99=>'',109=>'',119=>'',129=>'',138=>'',139=>'-1',149=>'-2',150=>'-3'],
                'modificationValue'=>[9=>'',19=>'',29=>'',49=>'',69=>'',79=>'',89=>'',99=>'',109=>'',119=>'',129=>'',138=>'',139=>'',149=>'',150=>'']
            ],
            [
                'type'=>'Emtional State',
                'questionSet'=>[5,17,27,37,47,55,57,61,67,77,97,107,117,127,147,214,228,209,216,213],
                'correctAnswer'=>[5=>'2',17=>'2',27=>'2',37=>'2',47=>'2',55=>'2',57=>'2',61=>'2',67=>'2',77=>'2',97=>'2',107=>'2',117=>'2',127=>'2',147=>'2',214=>'',228=>'',209=>'',216=>'',213=>''],
                'answerShape'=>[5=>'1',17=>'',27=>'',37=>'',47=>'',55=>'1',57=>'1',61=>'',67=>'1',77=>'1',97=>'1',107=>'1',117=>'1',127=>'1',147=>'1',214=>'',228=>'',209=>'',216=>'',213=>''],
                'shapeModification'=>[5=>'',17=>'',27=>'',37=>'',47=>'',55=>'',57=>'',61=>'',67=>'',77=>'',97=>'',107=>'',117=>'',127=>'',147=>'',214=>'1',228=>'3',209=>'1',216=>'1',213=>'1'],
                'modificaitonConversionToActual'=>[5=>'',17=>'',27=>'',37=>'',47=>'',55=>'',57=>'',61=>'',67=>'',77=>'',97=>'',107=>'',117=>'',127=>'',147=>'',214=>'4',228=>'5',209=>'2',216=>'3',213=>'5'],
                'modificationValue'=>[5=>'-1',17=>'',27=>'',37=>'',47=>'',55=>'-1',57=>'-2',61=>'',67=>'-1',77=>'-2',97=>'-2',107=>'-2',117=>'-1',127=>'-2',147=>'-2',214=>'-2',228=>'-2',209=>'-2',216=>'-2',213=>'-2']
            ],
            [
                'type'=>'Concentration',
                'questionSet'=>[7,15,35,45,65,75,85,95,105,115,125,55,135,145,87,215,219,227],
                'correctAnswer'=>[7=>'2',15=>'2',35=>'2',45=>'2',65=>'2',75=>'2',85=>'2',95=>'2',105=>'2',115=>'2',125=>'2',55=>'2',135=>'2',145=>'2',87=>'1',215=>'',219=>'',227=>''],
                'answerShape'=>[7=>'',15=>'1',35=>'1',45=>'',65=>'',75=>'',85=>'',95=>'1',105=>'',115=>'',125=>'',55=>'',135=>'',145=>'',87=>'',215=>'',219=>'',227=>''],
                'shapeModification'=>[7=>'',15=>'',35=>'',45=>'',65=>'',75=>'',85=>'',95=>'',105=>'',115=>'',125=>'',55=>'',135=>'',145=>'',87=>'',215=>'3',219=>'4',227=>'2'],
                'modificaitonConversionToActual'=>[7=>'',15=>'',35=>'',45=>'',65=>'',75=>'',85=>'',95=>'',105=>'',115=>'',125=>'',55=>'',135=>'',145=>'',87=>'',215=>'5',219=>'5',227=>'3'],
                'modificationValue'=>[7=>'',15=>'-2',35=>'-1',45=>'',65=>'',75=>'',85=>'',95=>'-2',105=>'',115=>'',125=>'',55=>'',135=>'',145=>'',87=>'',215=>'-3',219=>'-3',227=>'-3']
            ],
            [
                'type'=>'Emotional Stability',
                'questionSet'=>[3,13,23,43,53,63,73,83,93,103113,59,133,132,143,210,222],
                'correctAnswer'=>[3=>'2',13=>'2',23=>'2',43=>'1',53=>'2',63=>'2',73=>'2',83=>'1',93=>'1',103=>'2',113=>'2',59=>'1',133=>'2',132=>'2',143=>'2',210=>'',222=>''],
                'answerShape'=>[3=>'1',13=>'',23=>'',43=>'',53=>'1',63=>'',73=>'1',83=>'',93=>'',103=>'',113=>'1',59=>'',133=>'',132=>'',143=>'1',210=>'',222=>''],
                'shapeModification'=>[3=>'',13=>'',23=>'',43=>'',53=>'',63=>'',73=>'',83=>'',93=>'',103=>'',113=>'',59=>'',133=>'',132=>'',143=>'',210=>'2',222=>'2'],
                'modificaitonConversionToActual'=>[3=>'',13=>'',23=>'',43=>'',53=>'',63=>'',73=>'',83=>'',93=>'',103=>'',113=>'',59=>'',133=>'',132=>'',143=>'',210=>'4',222=>'5'],
                'modificationValue'=>[3=>'-2',13=>'',23=>'',43=>'',53=>'-1',63=>'',73=>'-1',83=>'',93=>'',103=>'',113=>'-3',59=>'',133=>'',132=>'',143=>'-1',210=>'-3',222=>'-3']
            ],
            [
                'type'=>'Compliance',
                'questionSet'=>[2,12,22,32,42,52,62,72,82,88,92,102,112,122,142,218,207,211],
                'correctAnswer'=>[2=>'1',12=>'1',22=>'1',32=>'2',42=>'2',52=>'1',62=>'2',72=>'2',82=>'1',88=>'2',92=>'1',102=>'1',112=>'2',122=>'2',142=>'2',218=>'',207=>'',211=>''],
                'answerShape'=>[2=>'',12=>'',22=>'',32=>'',42=>'',52=>'',62=>'',72=>'',82=>'1',88=>'',92=>'',102=>'',112=>'',122=>'1',142=>'',218=>'',207=>'',211=>''],
                'shapeModification'=>[2=>'',12=>'',22=>'',32=>'',42=>'',52=>'',62=>'',72=>'',82=>'',88=>'',92=>'',102=>'',112=>'',122=>'',142=>'',218=>'2',207=>'2',211=>'1'],
                'modificaitonConversionToActual'=>[2=>'',12=>'',22=>'',32=>'',42=>'',52=>'',62=>'',72=>'',82=>'',88=>'',92=>'',102=>'',112=>'',122=>'',142=>'',218=>'4',207=>'4',211=>'2'],
                'modificationValue'=>[2=>'',12=>'',22=>'',32=>'',42=>'',52=>'',62=>'',72=>'',82=>'-1',88=>'',92=>'',102=>'',112=>'',122=>'-2',142=>'',218=>'-3',207=>'-3',211=>'-3']
            ]
        ];

        protected $numberOfCorrectAnswers = [];
        protected $theNumberOfHits = [];

        public function __construct($answers){
            parent::__construct($answers);
        }

        protected function getNumberOfCorrectAnswer($modifiedAnswer,  $answerShape){
            if($modifiedAnswer === $answerShape){
                return '-1';
            }else{
                return '0';
            }
        }

        protected function getNumberOfHit($correctAnswer, $modifiedAnswer){
            if($correctAnswer === $modifiedAnswer){
                return 'true';
            }else{
                return 'false';
            }
        }

        protected function getIncrementalScore($modifiedValueArr){
            return array_sum(array_filter($modifiedValueArr,'is_numeric'));
        }

        protected function getTotalNumberOfHits($numberOfHitsArr){
            $counts = array_count_values($numberOfHitsArr);            
            return isset($counts['true']) ? $counts['true'] : 0;
        }

        protected function getAverageScore(){
            // Sample data representing the lookup range '인성검사 채점 조건'!$A$3:$E$18
            $lookupRange = [
                ['Value1', 'Value2', 'Value3', 'Value4', 'Result1'],
                // ... other rows ...
                ['O23_Value', 'Value2', 'Value3', 'Value4', 'Desired_Result'],
                // ... other rows ...
            ];

            $totalNumberOfHits = 'O23_Value';  // Value from O23 cell in Excel

            $foundResult = null;

            foreach ($lookupRange as $row) {
                if ($row[0] === $totalNumberOfHits) {
                    $foundResult = $row[4];  // Get the value from the 5th column (index 4)
                    break;  // Stop the loop once the match is found
                }
            }

            if ($foundResult !== null) {
                echo "Found result: " . $foundResult;
            } else {
                echo "No matching result found.";
            }
        }

        protected function getActualScore($totalModificationValue,$averageScore){
            // Calculate the sum of L23 and L24
            $sum = $totalModificationValue + $averageScore;

            // Round down the sum to zero decimal places
            $result = floor($sum);

            return $result;

        }

        protected function findPesonality(){
            // determine what type of personality and add data to the array variable for the specified personality
            $modifiedAnswer = parent::saveModifiedAnswer();
            foreach ($personalityElementsArr as $personalityElement) {
                $type = $personalityElement['type'];
                $questionSet = $personalityElement['questionSet'];
                
                // Initialize arrays for correctAnswer and modifiedAnswer
                $correctAnswer = [];
                $modifiedAnswer = [];
                
                foreach ($questionSet as $questionNum) {
                    // Search for the questionNum in $modifiedAnswer
                    foreach ($result as $value) {
                        if ($value['num'] == $questionNum) {
                            // Add the corresponding values to correctAnswer and modifiedAnswer
                            $correctAnswer[$questionNum] = $personalityElement['correctAnswer'][$questionNum];
                            $modifiedAnswer[$questionNum] = $value['modifiedAnswer'];
                            break; // Break the inner loop once found
                        }
                    }
                }
                
                // Create the personalityData array
                $personalityData = [
                    'type' => $type,
                    'correctAnswer' => $correctAnswer,
                    'modifiedAnswer' => $modifiedAnswer,
                ];
                
                // Add the personalityData array to the $personalitiesData array
                $personalitiesData[] = $personalityData;
            }

            // Now $personalitiesData contains the desired structure
            print_r($personalitiesData);
        }

        protected function savePersonalityResult(){

        }

        protected function savePersonalityActualScore(){
            // save the result for the actual score of all personalities.  Diligence, responsibility, cooperation, autonomy, leadership, emotional state, concentration, emotional stability, compliance, talent synthesis
        }

        public function testFunction(){
            $modifiedAnswer = parent::saveModifiedAnswer();

            return $modifiedAnswer;
        }

    }
?>