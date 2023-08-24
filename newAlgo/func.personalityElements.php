<?php
    class PersonalityElem extends Conversation{
        public $val;
        // this will contain 
        protected $personalitiesData = [];

        // store the results for the actual score for all personalities
        protected $personalityResult1 = [];
        protected $personalityResult2 = [];


        protected static $personnalityResultLabel1 = ['Deligence', 'Responsibility', 'Cooperation', 'Autonomy','Leadership', 'EmtionalState', 'Concentration', 'EmotionalStability', 'Compliance', 'talentSynthesis'];
        protected static $personnalityResultLabel2 = ['ConfidenceLevel', 'TestAttitude', 'TestStatus', 'NonResponseRate', 'ResponseConsistency', 'Antisocial'];


        protected static $personalityElementsArr = [
            ['type'=>'deligence','num'=>4,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'deligence','num'=>24,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'deligence','num'=>25,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'deligence','num'=>34,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'deligence','num'=>44,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'deligence','num'=>54,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'deligence','num'=>64,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'deligence','num'=>74,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'deligence','num'=>84,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'deligence','num'=>94,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'deligence','num'=>104,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'deligence','num'=>114,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'deligence','num'=>124,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'deligence','num'=>134,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'deligence','num'=>144,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'deligence','num'=>212,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>2,'modificationValue'=>-3],
            ['type'=>'deligence','num'=>226,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>4,'modificationValue'=>-3],
            ['type'=>'responsibility','num'=>6,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'responsibility','num'=>16,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'responsibility','num'=>26,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'responsibility','num'=>36,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'responsibility','num'=>46,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'responsibility','num'=>56,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-3],
            ['type'=>'responsibility','num'=>66,'correctAnswer'=>1,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'responsibility','num'=>76,'correctAnswer'=>1,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'responsibility','num'=>96,'correctAnswer'=>1,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'responsibility','num'=>106,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'responsibility','num'=>116,'correctAnswer'=>1,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'responsibility','num'=>126,'correctAnswer'=>1,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'responsibility','num'=>136,'correctAnswer'=>1,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'responsibility','num'=>146,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-4],
            ['type'=>'responsibility','num'=>137,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'responsibility','num'=>208,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>3,'modificationConversionToActual'=>1,'modificationValue'=>-3],
            ['type'=>'responsibility','num'=>217,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>3,'modificationConversionToActual'=>5,'modificationValue'=>-3],
            ['type'=>'responsibility','num'=>221,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>3,'modificationValue'=>-3],
            ['type'=>'cooperation','num'=>8,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'cooperation','num'=>18,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'cooperation','num'=>28,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'cooperation','num'=>33,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'cooperation','num'=>38,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'cooperation','num'=>39,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'cooperation','num'=>48,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'cooperation','num'=>58,'correctAnswer'=>1,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'cooperation','num'=>68,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'cooperation','num'=>78,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'cooperation','num'=>98,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'cooperation','num'=>108,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'cooperation','num'=>128,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'cooperation','num'=>132,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'cooperation','num'=>148,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'cooperation','num'=>225,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>5,'modificationValue'=>-3],
            ['type'=>'cooperation','num'=>223,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>4,'modificationValue'=>-3],
            ['type'=>'autonomy','num'=>1,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'autonomy','num'=>11,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'autonomy','num'=>14,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'autonomy','num'=>21,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'autonomy','num'=>31,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'autonomy','num'=>41,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'autonomy','num'=>51,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'autonomy','num'=>71,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'autonomy','num'=>81,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'autonomy','num'=>91,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'autonomy','num'=>101,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'autonomy','num'=>111,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'autonomy','num'=>118,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'autonomy','num'=>131,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'autonomy','num'=>141,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'autonomy','num'=>220,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>5,'modificationValue'=>-3],
            ['type'=>'autonomy','num'=>224,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>5,'modificationValue'=>-3],
            ['type'=>'leadership','num'=>9,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>-2,'modificationValue'=>''],
            ['type'=>'leadership','num'=>19,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>-1,'modificationValue'=>''],
            ['type'=>'leadership','num'=>29,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'leadership','num'=>49,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'leadership','num'=>69,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'leadership','num'=>79,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'leadership','num'=>89,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'leadership','num'=>99,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'leadership','num'=>109,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'leadership','num'=>119,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'leadership','num'=>129,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'leadership','num'=>138,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'leadership','num'=>139,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>-1,'modificationValue'=>''],
            ['type'=>'leadership','num'=>149,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>-2,'modificationValue'=>''],
            ['type'=>'leadership','num'=>150,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>-3,'modificationValue'=>''],
            ['type'=>'emotionalState','num'=>5,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'emotionalState','num'=>17,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'emotionalState','num'=>27,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'emotionalState','num'=>37,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'emotionalState','num'=>47,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'emotionalState','num'=>55,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'emotionalState','num'=>57,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'emotionalState','num'=>61,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'emotionalState','num'=>67,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'emotionalState','num'=>77,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'emotionalState','num'=>97,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'emotionalState','num'=>107,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'emotionalState','num'=>117,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'emotionalState','num'=>127,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'emotionalState','num'=>147,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'emotionalState','num'=>214,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>4,'modificationValue'=>-2],
            ['type'=>'emotionalState','num'=>228,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>3,'modificationConversionToActual'=>5,'modificationValue'=>-2],
            ['type'=>'emotionalState','num'=>209,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>2,'modificationValue'=>-2],
            ['type'=>'emotionalState','num'=>216,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>3,'modificationValue'=>-2],
            ['type'=>'emotionalState','num'=>213,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>5,'modificationValue'=>-2],
            ['type'=>'concentration','num'=>7,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'concentration','num'=>15,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'concentration','num'=>35,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'concentration','num'=>45,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'concentration','num'=>65,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'concentration','num'=>75,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'concentration','num'=>85,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'concentration','num'=>95,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'concentration','num'=>105,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'concentration','num'=>115,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'concentration','num'=>125,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'concentration','num'=>55,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'concentration','num'=>135,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'concentration','num'=>145,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'concentration','num'=>87,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'concentration','num'=>215,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>3,'modificationConversionToActual'=>5,'modificationValue'=>-3],
            ['type'=>'concentration','num'=>219,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>4,'modificationConversionToActual'=>5,'modificationValue'=>-3],
            ['type'=>'concentration','num'=>227,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>3,'modificationValue'=>-3],
            ['type'=>'emotionalStability','num'=>3,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'emotionalStability','num'=>13,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'emotionalStability','num'=>23,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'emotionalStability','num'=>43,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'emotionalStability','num'=>53,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'emotionalStability','num'=>63,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'emotionalStability','num'=>73,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'emotionalStability','num'=>83,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'emotionalStability','num'=>93,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'emotionalStability','num'=>103,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'emotionalStability','num'=>113,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-3],
            ['type'=>'emotionalStability','num'=>59,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'emotionalStability','num'=>133,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'emotionalStability','num'=>132,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'emotionalStability','num'=>143,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'emotionalStability','num'=>210,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>4,'modificationValue'=>-3],
            ['type'=>'emotionalStability','num'=>222,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>5,'modificationValue'=>-3],
            ['type'=>'compliance','num'=>2,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'compliance','num'=>12,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'compliance','num'=>22,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'compliance','num'=>32,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'compliance','num'=>42,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'compliance','num'=>52,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'compliance','num'=>62,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'compliance','num'=>72,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'compliance','num'=>82,'correctAnswer'=>1,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'compliance','num'=>88,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'compliance','num'=>92,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'compliance','num'=>102,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'compliance','num'=>112,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'compliance','num'=>122,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'compliance','num'=>142,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'compliance','num'=>218,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>4,'modificationValue'=>-3],
            ['type'=>'compliance','num'=>207,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>4,'modificationValue'=>-3],
            ['type'=>'compliance','num'=>211,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>2,'modificationValue'=>-3]
        ];

        protected $numberOfCorrectAnswers = [];
        protected $theNumberOfHits = [];

        public function __construct($answers){
            parent::__construct($answers);
        }

        protected function getNumberOfCorrectAnswer($modifiedAnswer, $answerShape){
            if ($modifiedAnswer == $answerShape) {
                return -1;
            } else {
                return 0;
            }
        }
        
        protected function getNumberOfHit($correctAnswer, $modifiedAnswer){
            if ($correctAnswer == $modifiedAnswer) {
                return 'true';
            } else {
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

        public function findPersonality() {
            // Initialize the result array
            $personalityResultArr = [];
        
            // Get the modified answers
            $modifiedAnswer = parent::saveModifiedAnswer();
        
            foreach ($modifiedAnswer as $modifiedAnswerValue) {
                $num = $modifiedAnswerValue['num'];
                $modifiedAnswerValue = $modifiedAnswerValue['modifiedAnswer'];
        
                foreach (self::$personalityElementsArr as $personalityElement) {
                    if ($personalityElement['num'] == $num) {
                        $correctAnswer = $this->getNumberOfCorrectAnswer($modifiedAnswerValue, $personalityElement['answerShape']);
                        $numberOfHit = $this->getNumberOfHit($personalityElement['correctAnswer'], $modifiedAnswerValue);
                        // Add data to the result array
                        $personalityResultArr[] = [
                            'type' => $personalityElement['type'],
                            'num' => $num,
                            'modificationValue'=>$personalityElement['modificationValue'],
                            'correctAnswer' => $correctAnswer,
                            'numberOfHits' => $numberOfHit,
                        ];
        
                        // Break out of the inner loop since you found a match
                        break;
                    }
                }
            }
        
            // Now $personalityResultArr contains the desired structure
            return $personalityResultArr;
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