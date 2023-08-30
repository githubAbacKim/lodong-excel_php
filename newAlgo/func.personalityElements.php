<?php
    class PersonalityElem extends Conversation{
        public $val;
        // this will contain 
        protected $personalitiesData = [];

        // store the results for the actual score for all personalities
        protected $personalityResult1 = [];
        protected $personalityResult2 = [];


        protected static $personnalityResultLabel1 = ['a deligence', 'b responsibility', 'c cooperation', 'd autonomy','e leadership', 'f emotional state', 'g concentration', 'h emotional stability', 'i compliance'];
        protected static $personnalityResultLabel2 = ['confidenceLevel', 'testAttitude', 'testStatus', 'nonResponseRate', 'responseConsistency', 'antisocial'];

        protected static $personalityScoringCondition = [
            [
                'numCorrectAnswer'=>0,
                'scores'=>[13,12,15,13.333333333333334,16,16,12,14,13,13,15,14,17,14,15.5,11,13,12,13,15,14,15,12,13.5,13,13]
            ],
            [
                'numCorrectAnswer'=>1,
                'scores'=>[13,12,15,13.3,16,16.0,12,14,13.0,13,15,14.0,17,14,15.5,11,13,12.0,13,15,14.0,15,12,13.5,13,13.0]
            ],
            [
                'numCorrectAnswer'=>2,
                'scores'=>[17,16,18,17.0,18,18.0,15,17,16.0,16,18,17.0,19,17,18.0,15,18,16.5,16,19,17.5,19,18,18.5,18,18.0]
            ],
            [
                'numCorrectAnswer'=>3,
                'scores'=>[27,26,29,27.3,28,28.0,24,26,25.0,24,28,26.0,29,27,28.0,25,27,26.0,27,29,28.0,27,24,25.5,28,28.0]
            ],
            [
                'numCorrectAnswer'=>4,
                'scores'=>[32,31,33,32.0,31,31.0,30,31,30.5,31,33,32.0,34,33,33.5,30,32,31.0,30,31,30.5,31,30,30.5,31,31.0]
            ],
            [
                'numCorrectAnswer'=>5,
                'scores'=>[34,33,35,34.0,33,33.0,32,34,33.0,34,36,35.0,36,35,35.5,33,35,34.0,32,34,33.0,33,32,32.5,34,34.0]
            ],
            [
                'numCorrectAnswer'=>6,
                'scores'=>[37,36,38,37.0,38,38.0,35,37,36.0,37,39,38.0,39,37,38.0,36,39,37.5,35,39,37.0,38,34,36.0,37,37.0]
            ],
            [
                'numCorrectAnswer'=>7,
                'scores'=>[48,47,49,48.0,47,47.0,43,49,46.0,43,46,44.5,48,46,47.0,46,47,46.5,44,48,46.0,43,40,41.5,48,48.0]
            ],
            [
                'numCorrectAnswer'=>8,
                'scores'=>[53,52,55,53.3,54,54.0,50,56,53.0,52,54,53.0,56,54,55.0,50,55,52.5,51,53,52.0,52,51,51.5,52,52.0]
            ],
            [
                'numCorrectAnswer'=>9,
                'scores'=>[57,56,59,57.3,58,58.0,57,59,58.0,56,58,57.0,59,57,58.0,56,59,57.5,55,57,56.0,58,55,56.5,57,57.0]
            ],
            [
                'numCorrectAnswer'=>10,
                'scores'=>[66,65,68,66.3,68,68.0,66,69,67.5,63,65,64.0,69,67,68.0,64,66,65.0,62,67,64.5,69,64,66.5,67,67.0]
            ],
            [
                'numCorrectAnswer'=>11,
                'scores'=>[75,73,78,75.3,78,78.0,77,79,78.0,73,76,74.5,79,76,77.5,75,77,76.0,73,77,75.0,79,74,76.5,76,76.0]
            ],
            [
                'numCorrectAnswer'=>12,
                'scores'=>[82,81,83,82.0,82,82.0,80,82,81.0,83,85,84.0,85,82,83.5,83,88,85.5,81,83,82.0,84,81,82.5,82,82.0]
            ],
            [
                'numCorrectAnswer'=>13,
                'scores'=>[87,85,89,87.0,89,89.0,83,87,85.0,87,89,88.0,89,87,88.0,86,88,87.0,84,88,86.0,89,85,87.0,86,86.0]
            ],
            [
                'numCorrectAnswer'=>14,
                'scores'=>[92,91,94,92.3,94,94.0,91,92,91.5,91,93,92.0,93,92,92.5,92,94,93.0,91,93,92.0,93,91,92.0,92,92.0]
            ],
            [
                'numCorrectAnswer'=>15,
                'scores'=>[98,97.0,98,98.0,94,96,95.0,94,96,95.0,97,95,96.0,95,96,95.5,95,97,96.0,95,94,94.5,95,95.0]
            ]
        ];

        protected static $averageScoreCondition = [
            [
                'type'=>'a deligence',
                'row'=>3
            ],
            [
                'type'=>'b responsibility',
                'row'=>5
            ],
            [
                'type'=>'c cooperation',
                'row'=>8
            ],
            [
                'type'=>'d autonomy',
                'row'=>11
            ],
            [
                'type'=>'e leadership',
                'row'=>14
            ],
            [
                'type'=>'f emotional state',
                'row'=>17
            ],
            [
                'type'=>'g concentration',
                'row'=>20
            ],
            [
                'type'=>'h emotional stability',
                'row'=>23
            ],
            [
                'type'=>'i compliance',
                'row'=>25
            ],
            
            
        ];

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
                return TRUE;
            } else {
                return FALSE;
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
                if ($value == TRUE) {
                    $count++;
                }
            }
            return $count;
        }

        protected function getAverageScore($totalNumHits, $condition) {
            $result = 0;
            foreach (self::$personalityScoringCondition as $scoringVal) {
                if ($totalNumHits == $scoringVal['numCorrectAnswer']) {
                    // Check if the 'scores' array contains the specified condition key
                    if (isset($scoringVal['scores'][$condition])) {
                        $result = $scoringVal['scores'][$condition];
                        // Exit the loop once a match is found
                        break;
                    }
                }
            }
            // Handle the case where there is no matching 'numCorrectAnswer'
            return $result;
        }

        protected function getActualScore($totalModificationValue,$averageScore){
            // Calculate the sum of L23 and L24
            $sum = $averageScore + $totalModificationValue;

            // Round down the sum to zero decimal places
            $result = floor($sum);

            return $result;

        }

        protected function getCondition($targetType){
            $targetRow = null; // Initialize the variable to store the row value

            foreach (self::$averageScoreCondition as $condition) {
                if ($condition['type'] === $targetType) {
                    $targetRow = $condition['row'];
                    break; // Exit the loop once the target type is found
                }
            }

            return $targetRow;
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
                    if ($personalityElement['num'] == $num && $personalityElement['correctAnswer'] != '') {
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
                $condition = $this->getCondition($label);
                $totalHits = $this->getTotalNumberOfHits($numHitsArr);
                $averageScore = $this->getAverageScore($totalHits, $condition);
                $actualScore = $this->getActualScore($correctAnswerSum, $averageScore);
        
                $savePersonalityInitResult[] = [
                    'type' => $label,
                    'incrementalScore' => $correctAnswerSum, // Store the sum of correctAnswer values
                    'totalNumberOfHits' => $totalHits,
                    'averageScore' => $averageScore,
                    'actualScore' => $actualScore
                    // 'condition'=>$condition,
                    // 'hitResult'=>$totalHits+$correctAnswerSum
                ];
            }
        
            return $savePersonalityInitResult;
        }
        
        public function savePersonalityResult(){
            $initResult = $this->savePersonalityInitResults();
            $result = [];
            $count = 0;
            $talentSynthesis = 0;
            foreach($initResult as $initVal){
                $result[] = ['type'=>$initVal['type'],'score'=>$initVal['actualScore']];
                $count++;
                $talentSynthesis += $initVal['actualScore'];
            }
            $score = round($talentSynthesis / $count);
            $result[] = ['type'=>'talent synthesis','score'=>$score];

            return $result;
        }
        

    }
?>