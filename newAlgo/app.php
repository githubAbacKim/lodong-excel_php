<?php
    include 'func.coversation.php';
    include 'func.personalityElements.php';
    include 'func.conditionJobAptitude.php';
    include 'func.jobAplitude.php';
    include 'funct.responseReliability.php';

    // $arrayAnswers = [1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,13=>0,14=>0,15=>0,16=>0,17=>0,18=>0,19=>0,20=>0,21=>0,22=>0,23=>0,24=>0,25=>0,26=>0,27=>0,28=>0,29=>0,30=>0,31=>0,32=>0,33=>0,34=>0,35=>0,36=>0,37=>0,38=>0,39=>0,40=>0,41=>0,42=>0,43=>0,44=>0,45=>0,46=>0,47=>0,48=>0,49=>0,50=>0,51=>0,52=>0,53=>0,54=>0,55=>0,56=>0,57=>0,58=>0,59=>0,60=>0,61=>0,62=>0,63=>0,64=>0,65=>0,66=>0,67=>0,68=>0,69=>0,70=>0,71=>0,72=>0,73=>0,74=>0,75=>0,76=>0,77=>0,78=>0,79=>0,80=>0,81=>0,82=>0,83=>0,84=>0,85=>0,86=>0,87=>0,88=>0,89=>0,90=>0,91=>0,92=>0,93=>0,94=>0,95=>0,96=>0,97=>0,98=>0,99=>0,100=>0,101=>0,102=>0,103=>0,104=>0,105=>0,106=>0,107=>0,108=>0,109=>0,110=>0,111=>0,112=>0,113=>0,114=>0,115=>0,116=>0,117=>0,118=>0,119=>0,120=>0,121=>0,122=>0,123=>0,124=>0,125=>0,126=>0,127=>0,128=>0,129=>0,130=>0,131=>0,132=>0,133=>0,134=>0,135=>0,136=>0,137=>0,138=>0,139=>0,140=>0,141=>0,142=>0,143=>0,144=>0,145=>0,146=>0,147=>0,148=>0,149=>0,150=>0,151=>0,152=>0,153=>0,154=>0,155=>0,156=>0,157=>0,158=>0,159=>0,160=>0,161=>0,162=>0,163=>0,164=>0,165=>0,166=>0,167=>0,168=>0,169=>0,170=>0,171=>0,172=>0,173=>0,174=>0,175=>0,176=>0,177=>0,178=>0,179=>0,180=>0,181=>0,182=>0,183=>0,184=>0,185=>0,186=>0,187=>0,188=>0,189=>0,190=>0,191=>0,192=>0,193=>0,194=>0,195=>0,196=>0,197=>0,198=>0,199=>0,200=>0,201=>0,202=>0,203=>0,204=>0,205=>0,206=>0,207=>0,208=>0,209=>0,210=>0,211=>0,212=>0,213=>0,214=>0,215=>0,216=>0,217=>0,218=>0,219=>0,220=>0,221=>0,222=>0,223=>0,224=>0,225=>0,226=>0,227=>0,228
    // ];

    $arrayAnswers = [];

    for ($i = 1; $i <= 228; $i++) {
        $arrayAnswers[] = ['num'=>$i,'answer'=>rand(1,5)];
    }

    // array of sample answers
    /* print_r($arrayAnswers);
    echo '<br><br>'; */

    $conversation = new Conversation($arrayAnswers);
    /* $modifiedAnswer = $conversation->saveModifiedAnswer();

    echo print_r($modifiedAnswer); */

    $personalityElem = new PersonalityElem($arrayAnswers);
    $finalResult = $personalityElem->savePersonalityResult();
    $savePersonalityInitResults = $personalityElem->savePersonalityInitResults();
    
    // echo print_r($savePersonalityInitResults);
    echo '<br><br>';
    echo $finalResult[0]['score'];
    echo print_r($finalResult);
    $condition = new ConditionJobAptitude($arrayAnswers);
    $sumCorrectAnswer = $condition->sumCorrectAnswer();
    $saveCandidateAnswer = $condition->saveCandidateAnswer();

    // echo print_r($sumCorrectAnswer);
    echo '<br><br>';

    $jobAptitude = new JobAptitude($arrayAnswers);
    $saveTotalCorrectAnswer = $jobAptitude->saveTotalCorrectAnswer();
    $acquisition = $jobAptitude->getPersonalityAcquisitionScore();
    
    // echo print_r($saveTotalCorrectAnswer);
    echo '<br><br>';
    // echo print_r($acquisition);

    $responseReliabilitty = new ResponseReliability($arrayAnswers);
    // $primaryConditionResult = $responseReliabilitty->primaryConditionResult();
    // $secondaryConditionResult = $responseReliabilitty->secondaryConditionResult();
    // $deductionResult = $responseReliabilitty->deductionResult();
    $finalResponseResult = $responseReliabilitty->finalResponseResult();

    // echo print_r($primaryConditionResult);
    // ['primResult1'=>$result1,'confidenceRef'=>$data['confidenceRef'],'primResult2'=>$result2]
    /* foreach ($primaryConditionResult as $key => $value) {
        echo 'result1 = '.$value['primResult1'].', result2 = '.$value['primResult2'].'<br>';
    } */
    echo '<br><br>';
    /* foreach ($secondaryConditionResult as $key => $value) {
        echo 'result1 = '.$value['secondaryResult1'].', result2 = '.$value['secondaryResult2'].', result3 = '.$value['secondaryResult3'].', result4 = '.$value['secondaryResult4'].', scoreRef = '.$value['scoreRef'].'<br>';
    } */
    // echo print_r($secondaryConditionResult);
    echo '<br><br>';
    // echo print_r($deductionResult);
    echo '<br><br>';
    echo print_r($finalResponseResult);

    /* $emotionalState = isset($secondaryResult[5]['score']) ? $secondaryResult[5]['score'] : 0;
    $emotionalStability = isset($secondaryResult[7]['score']) ? $secondaryResult[7]['score'] : 0;
    $concentration = isset($secondaryResult[6]['score']) ? $secondaryResult[6]['score'] : 0;
    $testerStatus = ($emotionalState + $emotionalStability) / 2;
    $testAttitude = $concentration - 0; */
?>