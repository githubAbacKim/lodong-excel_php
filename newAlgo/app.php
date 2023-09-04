<?php
    include 'func.coversation.php';
    include 'func.personalityElements.php';
    include 'func.conditionJobAptitude.php';
    include 'func.jobAplitude.php';
    include 'funct.responseReliability.php';

    $arrayAnswers = [];

    for ($i = 1; $i <= 228; $i++) {
        $arrayAnswers[] = ['num'=>$i,'answer'=>rand(1,5)];
    }

    echo '<h3>Takers Answers:</h3> <br>';
    echo json_encode($arrayAnswers);
    echo "<br><br>";

    $conversation = new Conversation($arrayAnswers);
    $modifiedAnswer = $conversation->saveModifiedAnswer();

    echo '<h3>Conversation - Modified Answer:</h3> <br>';
    echo json_encode($modifiedAnswer);
    echo "<br><br>";

    $personalityElem = new PersonalityElem($arrayAnswers);
    $finalPersonalityResult = $personalityElem->savePersonalityResult();
    $savePersonalityInitResults = $personalityElem->savePersonalityInitResults();

    echo '<h3>PersonalityElem - savePersonalityInitResults:</h3> <br>';
    echo json_encode($savePersonalityInitResults);
    echo "<br><br>";

    echo '<h3>PersonalityElem - finalPersonalityResult:</h3> <br>';
    echo json_encode($finalPersonalityResult);
    echo "<br><br>";
    
    $condition = new ConditionJobAptitude($arrayAnswers);
    $sumCorrectAnswer = $condition->sumCorrectAnswer();
    $saveCandidateAnswer = $condition->saveCandidateAnswer();
    
    echo '<h3>ConditionJobAptitude - sumCorrectAnswer:</h3> <br>';
    echo json_encode($sumCorrectAnswer);
    echo "<br><br>";

    echo '<h3>ConditionJobAptitude - saveCandidateAnswer:</h3> <br>';
    echo json_encode($saveCandidateAnswer);
    echo "<br><br>";

    $jobAptitude = new JobAptitude($arrayAnswers);
    $saveTotalCorrectAnswer = $jobAptitude->saveTotalCorrectAnswer();
    $acquisition = $jobAptitude->getPersonalityAcquisitionScore();
    echo '<h3>JobAptitude - saveTotalCorrectAnswer:</h3> <br>';
    echo json_encode($saveTotalCorrectAnswer);
    echo "<br><br>";
    echo '<h3>JobAptitude - acquisition:</h3> <br>';
    echo json_encode($acquisition);
    echo "<br><br>";

    $responseReliabilitty = new ResponseReliability($arrayAnswers);
    /* $primaryConditionResult = $responseReliabilitty->primaryConditionResult();
    $secondaryConditionResult = $responseReliabilitty->secondaryConditionResult(); */
    $finalResponseResult = $responseReliabilitty->finalResponseResult();

    echo '<h3>ResponseReliability - finalResponseResult:</h3> <br>';
    echo json_encode($finalResponseResult);
    echo "<br><br>";

    // make result arrays from different processing
    function calculateAverage($scores){
        $average = count($scores);
        $sum = 0;

        foreach($scores as $score){
            $sum += $score;
        }

        return round($sum / $average);

    }

    function findLargestAndSecondLargest($arr) {
        $largest = $secondLargest = PHP_INT_MIN; // Initialize with smallest possible integer
        $firstAptitude = null;
        $secondAptitude = null;
        foreach ($arr as $value) {
            if ($value['score'] > $largest) {
                $secondLargest = $largest; // Move the current largest to second largest
                $largest = $value['score']; // Update the largest
                $firstAptitude = $value['type'];
            } elseif ($value['score'] > $secondLargest && $value['score'] != $largest) {
                $secondLargest = $value['score']; // Update the second largest
                $secondAptitude = $value['type'];
            }
        }

        return [$firstAptitude, $secondAptitude];
    }

    function identifyResult($arr){
        $average = calculateAverage($arr);

        if($average <= 70){
            return '양호';
        }elseif($average >= 71 && $average <= 80){
            return '보통';
        }elseif($average >= 81){
            return '부적합';
        }
    }

    $nonResponseRate = 0;
    $testAttitude = $finalPersonalityResult[6]['score'] - $nonResponseRate;
    $testerStatus = ($finalPersonalityResult[5]['score'] + $finalPersonalityResult[7]['score']) / 2;

    $inspectorStatus = $finalResponseResult['confidencelevel'];
    $nonResponse = $testAttitude;
    $responseConfidenseLevel = round($testerStatus);
    $organizationalLifeAdaptionIndex = $nonResponseRate;
    $inabilityToHandleWork = $finalResponseResult['responseConsistency'];
    $independence = $finalPersonalityResult[0]['score']; //deligence
    $leadership = $finalPersonalityResult[1]['score']; //responsibility
    $emotionalState = $finalPersonalityResult[2]['score']; //cooperation
    $concentration = $finalPersonalityResult[3]['score']; //autonomy 
    $emotionalStability = $finalPersonalityResult[4]['score']; //leadership
    $compliance = $finalPersonalityResult[5]['score']; //emotional state
    $humanResourceSynthesis = $finalPersonalityResult[6]['score']; //concentration

    $technology = $finalPersonalityResult[7]['score']; //emotionalStability
    $officeAdministration = $finalPersonalityResult[8]['score']; //compliance
    $financeAccounting = $finalPersonalityResult[9]['score']; //talent synthesis
    $salesManagement = $acquisition[4]['score']; //technique
    $computerIT =  $acquisition[3]['score']; //administrator

    $productionManagement =  $acquisition[0]['score']; //management
    $researchAptitudeSynthesis =  $acquisition[6]['score']; //it
    $safety = $acquisition[1]['score']; //safety
    $productionManufacturing = $acquisition[7]['score']; //manufacturing
    $research = $acquisition[5]['score']; //research

    list($firstAptitude, $secondAptitude) = findLargestAndSecondLargest($acquisition);
    // $firstAptitude = implode(', ',$firstAptitude);
    // $secondAptitude = implode(', ',$secondAptitude);
    
    $diligence = calculateAverage([$emotionalState,$compliance,$humanResourceSynthesis,$technology,$officeAdministration]);
    $responsibility = calculateAverage([$independence,$leadership,$concentration]);
    $cooperation = calculateAverage([$leadership,$compliance,$officeAdministration]);    
    $resistanceConsciousness = identifyResult([$diligence,$responsibility,$cooperation]);
    
    $safetyAv = calculateAverage([$salesManagement,$research,$researchAptitudeSynthesis,$productionManufacturing]);

    $aptitudeSynthesis = calculateAverage([$salesManagement,$computerIT,$safety,$productionManagement,$researchAptitudeSynthesis,$safety,$productionManufacturing,$research]);
    
    $judgement = 0;
    $numeracy = 0;
    $applicability = 0;
    $logic = 0;
    $thinkingSkills = 0;
    $intelligence = 0;
    $exploratoryPower = 0;
    $creativity = 0;
    $jobSynthesis = 0;

    $examResult = [
        'inspector status'=>$inspectorStatus,
        'non-response'=>$nonResponse,
        'response confidense level'=>$responseConfidenseLevel,
        'organizational life adaption index'=>$organizationalLifeAdaptionIndex,
        'inability to handle work'=>$inabilityToHandleWork,
        'resistance consciousness'=>$resistanceConsciousness,    
        'diligence'=>$diligence,
        'responsibility'=>$responsibility,
        'cooperation'=>$cooperation,    
        'independence'=>$independence,
        'leadership'=>$leadership,
        'emotionalState'=>$emotionalState,
        'concentration'=>$concentration,
        'emotional stability'=>$emotionalStability,
        'compliance'=>$compliance,
        'human resource synthesis'=>$humanResourceSynthesis,
        'technology'=>$technology,
        'office administration'=>$officeAdministration,
        'finance accounting'=>$financeAccounting,
        'sales management'=>$salesManagement,
        'computer IT'=>$computerIT,
        'safety average'=>$safetyAv,
        'production management'=>$productionManagement,
        'research aptitude synthesis'=>$researchAptitudeSynthesis,
        'safety'=>$safety,
        'production manufacturing'=>$productionManufacturing,
        'research'=>$research,
        'aptitude synthesis'=>$aptitudeSynthesis,
        'first aptitude'=>$firstAptitude, 
        'second aptitude'=>$secondAptitude,    
        'judgement'=>$judgement,
        'numeracy'=>$numeracy,
        'applicability'=>$applicability,
        'logic'=>$logic,
        'thinking skills'=>$thinkingSkills,
        'intelligence'=>$intelligence,
        'exploratory power'=>$exploratoryPower,
        'creativity'=>$creativity,
        'job synthesis'=>$jobSynthesis
    ];

    echo '<h3>HDA Exam Result:</h3> <br>';
    echo json_encode($examResult);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Result Page</title>
</head>
<body>
    <style>
        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto,
                Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji,
                Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5;
        }
        table{
            width: 60vw;
            margin: auto !important;
        }
        td{
            text-align: center;
            padding: 0.5em;
        }

        th{
            text-align: left;
            padding: 0.5em;
        }
        table td, table th{
            border: solid 1px;
        }
        h1{
            text-align: center;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th colspan="2"><h1>HDA Exam Result</h1></th>
            </tr>

        </thead>

        <tbody>
                <?php
                    foreach($examResult as $label=>$result){
                        $capitalizeLabel = ucfirst($label);
                        echo "<tr> <th>$capitalizeLabel</th> <td>$result</td></tr>";
                    }
                ?>
        </tbody>
    </table>
</body>
</html>