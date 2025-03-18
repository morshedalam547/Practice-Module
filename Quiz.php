<?php

function evaluateQuiz(array $questions, array $answers): int {
    $score = 0;
    foreach ($questions as $index => $question) {
         if ($answers[$index] === $question['answer']) {
    $score++;
    }
    }
    return $score;
    }


$questions = [
    ['question' => 'What is the capital of France?', 'answer' => 'Paris'],
    ['question' => 'What is 5 + 3?', 'answer' => '8'],
    ['question' => 'Who wrote "Hamlet"?', 'answer' => 'Shakespeare'],
];
$answers = [];
foreach($questions as $key=> $question){
    echo($key+1).". ".$question['question']."\n";
    $answers[] = trim(readline("your answer:"));
}
$score = evaluateQuiz($questions, $answers);
echo "/n you scored $score out of ".count($questions)."\n";

if($score === count($questions)){
    echo "Congratulations! You got all the answers right\n";
}elseif($score > 1){
    echo "Good effort !\n";
}else{
    echo "Better luck next time !\n";
}

//or   


// function evaluateQuiz(array $questions, array $answers): int {
//     $score = 0;
//     foreach ($questions as $index => $question) {
//     if ($answers[$index] === $question['correct']) {
//     $score++;
//     }
//     }
//     return $score;
//     }
    
//     $questions = [
//         ['question' => 'What is 2 + 2?', 'correct' => '4'],
//         ['question' => 'What is the capital of France?', 'correct' => 'Paris'], ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
//         ];
        
//         $answers = [];
// foreach ($questions as $index => $question) {
// echo ($index + 1) . ". " . $question['question'] . "\n";
// $answers[] = trim(readline("Your answer: "));
// }
// $score = evaluateQuiz($questions, $answers);

// echo "\nYou scored $score out of " . count($questions) . ".\n";

// if ($score === count($questions)) {
//     echo "Excellent job!\n";
//     } elseif ($score > 1) { echo "Good effort!\n";
//     } else {
//     echo "Better luck next time!\n";
//     }
    


$numbers = [1, 2, 3];

$result = array_map(function ($n) {
    return $n * 2;
}, $numbers);

echo '[' . implode(', ', $result) . ']';