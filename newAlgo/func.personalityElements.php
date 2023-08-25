<?php
    class PersonalityElem extends Conversation{
        public $val;
        // this will contain 
        protected $personalitiesData = [];

        // store the results for the actual score for all personalities
        protected $personalityResult1 = [];
        protected $personalityResult2 = [];


        protected static $personnalityResultLabel1 = ['a deligence', 'b responsibility', 'c cooperation', 'd autonomy','e leadership', 'f emotional state', 'g concentration', 'h emotional stability', 'i compliance', 'talentSynthesis'];
        protected static $personnalityResultLabel2 = ['confidenceLevel', 'testAttitude', 'testStatus', 'nonResponseRate', 'responseConsistency', 'antisocial'];


        protected static $personalityElementsArr = [
            ['type'=>'a deligence','num'=>4,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'a deligence','num'=>24,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'a deligence','num'=>25,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'a deligence','num'=>34,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'a deligence','num'=>44,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'a deligence','num'=>54,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'a deligence','num'=>64,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'a deligence','num'=>74,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'a deligence','num'=>84,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'a deligence','num'=>94,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'a deligence','num'=>104,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'a deligence','num'=>114,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'a deligence','num'=>124,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'a deligence','num'=>134,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'a deligence','num'=>144,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'a deligence','num'=>212,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>2,'modificationValue'=>-3],
            ['type'=>'a deligence','num'=>226,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>4,'modificationValue'=>-3],
            ['type'=>'b responsibility','num'=>6,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'b responsibility','num'=>16,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'b responsibility','num'=>26,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'b responsibility','num'=>36,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'b responsibility','num'=>46,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'b responsibility','num'=>56,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-3],
            ['type'=>'b responsibility','num'=>66,'correctAnswer'=>1,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'b responsibility','num'=>76,'correctAnswer'=>1,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'b responsibility','num'=>96,'correctAnswer'=>1,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'b responsibility','num'=>106,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'b responsibility','num'=>116,'correctAnswer'=>1,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'b responsibility','num'=>126,'correctAnswer'=>1,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'b responsibility','num'=>136,'correctAnswer'=>1,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'b responsibility','num'=>146,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-4],
            ['type'=>'b responsibility','num'=>137,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'b responsibility','num'=>208,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>3,'modificationConversionToActual'=>1,'modificationValue'=>-3],
            ['type'=>'b responsibility','num'=>217,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>3,'modificationConversionToActual'=>5,'modificationValue'=>-3],
            ['type'=>'b responsibility','num'=>221,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>3,'modificationValue'=>-3],
            ['type'=>'c cooperation','num'=>8,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'c cooperation','num'=>18,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'c cooperation','num'=>28,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'c cooperation','num'=>33,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'c cooperation','num'=>38,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'c cooperation','num'=>39,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'c cooperation','num'=>48,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'c cooperation','num'=>58,'correctAnswer'=>1,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'c cooperation','num'=>68,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'c cooperation','num'=>78,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'c cooperation','num'=>98,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'c cooperation','num'=>108,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'c cooperation','num'=>128,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'c cooperation','num'=>132,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'c cooperation','num'=>148,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'c cooperation','num'=>225,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>5,'modificationValue'=>-3],
            ['type'=>'c cooperation','num'=>223,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>4,'modificationValue'=>-3],
            ['type'=>'d autonomy','num'=>1,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'d autonomy','num'=>11,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'d autonomy','num'=>14,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'d autonomy','num'=>21,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'d autonomy','num'=>31,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'d autonomy','num'=>41,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'d autonomy','num'=>51,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'d autonomy','num'=>71,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'d autonomy','num'=>81,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'d autonomy','num'=>91,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'d autonomy','num'=>101,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'d autonomy','num'=>111,'correctAnswer'=>1,'answerShape'=>2,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'d autonomy','num'=>118,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'d autonomy','num'=>131,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'d autonomy','num'=>141,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'d autonomy','num'=>220,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>5,'modificationValue'=>-3],
            ['type'=>'d autonomy','num'=>224,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>5,'modificationValue'=>-3],
            ['type'=>'e leadership','num'=>9,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>-2,'modificationValue'=>''],
            ['type'=>'e leadership','num'=>19,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>-1,'modificationValue'=>''],
            ['type'=>'e leadership','num'=>29,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'e leadership','num'=>49,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'e leadership','num'=>69,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'e leadership','num'=>79,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'e leadership','num'=>89,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'e leadership','num'=>99,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'e leadership','num'=>109,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'e leadership','num'=>119,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'e leadership','num'=>129,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'e leadership','num'=>138,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'e leadership','num'=>139,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>-1,'modificationValue'=>''],
            ['type'=>'e leadership','num'=>149,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>-2,'modificationValue'=>''],
            ['type'=>'e leadership','num'=>150,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>-3,'modificationValue'=>''],
            ['type'=>'f emotional state','num'=>5,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'f emotional state','num'=>17,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'f emotional state','num'=>27,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'f emotional state','num'=>37,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'f emotional state','num'=>47,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'f emotional state','num'=>55,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'f emotional state','num'=>57,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'f emotional state','num'=>61,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'f emotional state','num'=>67,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'f emotional state','num'=>77,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'f emotional state','num'=>97,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'f emotional state','num'=>107,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'f emotional state','num'=>117,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'f emotional state','num'=>127,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'f emotional state','num'=>147,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'f emotional state','num'=>214,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>4,'modificationValue'=>-2],
            ['type'=>'f emotional state','num'=>228,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>3,'modificationConversionToActual'=>5,'modificationValue'=>-2],
            ['type'=>'f emotional state','num'=>209,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>2,'modificationValue'=>-2],
            ['type'=>'f emotional state','num'=>216,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>3,'modificationValue'=>-2],
            ['type'=>'f emotional state','num'=>213,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>5,'modificationValue'=>-2],
            ['type'=>'g concentration','num'=>7,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'g concentration','num'=>15,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'g concentration','num'=>35,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'g concentration','num'=>45,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'g concentration','num'=>65,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'g concentration','num'=>75,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'g concentration','num'=>85,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'g concentration','num'=>95,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'g concentration','num'=>105,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'g concentration','num'=>115,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'g concentration','num'=>125,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'g concentration','num'=>55,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'g concentration','num'=>135,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'g concentration','num'=>145,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'g concentration','num'=>87,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'g concentration','num'=>215,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>3,'modificationConversionToActual'=>5,'modificationValue'=>-3],
            ['type'=>'g concentration','num'=>219,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>4,'modificationConversionToActual'=>5,'modificationValue'=>-3],
            ['type'=>'g concentration','num'=>227,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>3,'modificationValue'=>-3],
            ['type'=>'h emotional stability','num'=>3,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'h emotional stability','num'=>13,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'h emotional stability','num'=>23,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'h emotional stability','num'=>43,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'h emotional stability','num'=>53,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'h emotional stability','num'=>63,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'h emotional stability','num'=>73,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'h emotional stability','num'=>83,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'h emotional stability','num'=>93,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'h emotional stability','num'=>103,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'h emotional stability','num'=>113,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-3],
            ['type'=>'h emotional stability','num'=>59,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'h emotional stability','num'=>133,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'h emotional stability','num'=>132,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'h emotional stability','num'=>143,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'h emotional stability','num'=>210,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>4,'modificationValue'=>-3],
            ['type'=>'h emotional stability','num'=>222,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>5,'modificationValue'=>-3],
            ['type'=>'i compliance','num'=>2,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'i compliance','num'=>12,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'i compliance','num'=>22,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'i compliance','num'=>32,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'i compliance','num'=>42,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'i compliance','num'=>52,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'i compliance','num'=>62,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'i compliance','num'=>72,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'i compliance','num'=>82,'correctAnswer'=>1,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-1],
            ['type'=>'i compliance','num'=>88,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'i compliance','num'=>92,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'i compliance','num'=>102,'correctAnswer'=>1,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'i compliance','num'=>112,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'i compliance','num'=>122,'correctAnswer'=>2,'answerShape'=>1,'shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>-2],
            ['type'=>'i compliance','num'=>142,'correctAnswer'=>2,'answerShape'=>'','shapeModification'=>'','modificationConversionToActual'=>'','modificationValue'=>''],
            ['type'=>'i compliance','num'=>218,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>4,'modificationValue'=>-3],
            ['type'=>'i compliance','num'=>207,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>2,'modificationConversionToActual'=>4,'modificationValue'=>-3],
            ['type'=>'i compliance','num'=>211,'correctAnswer'=>'','answerShape'=>'','shapeModification'=>1,'modificationConversionToActual'=>2,'modificationValue'=>-3]
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

        protected function getIncrementalScore($correctAnswerArr) {
            $sum = 0;
            
            foreach ($correctAnswerArr as $value) {
                if(is_numeric($value)){
                    $sum += $value;
                }
            }
            
            return $sum;
        }
        

        protected function getTotalNumberOfHits($numberOfHitsArr) {
            $count = 0;
            foreach ($numberOfHitsArr as $value) {
                if ($value == true) {
                    $count++;
                }
            }
            return $count;
        }

        protected function getAverageScore(){
            return 87;
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
                        // break;
                    }
                }
            }
        
            // Now $personalityResultArr contains the desired structure
            return $personalityResultArr;
        }

        public function savePersonalityInitResults() {
            // Initialize the result array
            $savePersonalityInitResult = [];
        
            $findPersonalityArr = $this->findPersonality();
        
            foreach (self::$personnalityResultLabel1 as $label) {
                $numHitsArr = [];
                $totalHits = 0;
                $averageScore = 0;
                $actualScore = 0;
        
                // Initialize variables to store correctAnswer sum for the current label
                $correctAnswerSum = 0;
        
                foreach ($findPersonalityArr as $result) {
                    if ($label == $result['type']) {
                        $numHitsArr[] = $result['numberOfHits'];
        
                        // Accumulate correctAnswer values for the current label
                        $correctAnswerSum += is_numeric($result['correctAnswer']) ? $result['correctAnswer'] : 0;
                    }
                }
        
                $totalHits = $this->getTotalNumberOfHits($numHitsArr);
                $averageScore = $this->getAverageScore();
                $actualScore = $this->getActualScore($correctAnswerSum, $averageScore);
        
                $savePersonalityInitResult[] = [
                    'type' => $label,
                    'incrementalScore' => $correctAnswerSum, // Store the sum of correctAnswer values
                    'totalNumberOfHits' => $totalHits,
                    'actualScore' => $actualScore,
                    'averageScore' => $averageScore,
                ];
            }
        
            return $savePersonalityInitResult;
        }

        
        protected function savePersonalityResult(){
            $initResult = $this->savePersonalityInitResults();
        }

        public function testFunction(){
            $modifiedAnswer = parent::saveModifiedAnswer();

            return $modifiedAnswer;
        }
        

    }
?>