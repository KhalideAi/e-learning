<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal-Bing</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/soal-metik.css')); ?>">
    <script type="text/javascript" src="<?php echo e(asset('js/soal-metik.js')); ?>" defer></script>
</head>
<body>
    <div class="quiz-container" id="quiz">
        <div class="quiz-header">
            <h2 id="question">Quiz Matematika</h2>
            <ul>
                <li><input type="radio" name="answer" id="a" class="answer"><label for="a" id="a_text">a</label></li>
                <li><input type="radio" name="answer" id="b" class="answer"><label for="b" id="b_text">b</label></li>
                <li><input type="radio" name="answer" id="c" class="answer"><label for="c" id="c_text">c</label></li>
                <li><input type="radio" name="answer" id="d" class="answer"><label for="d" id="d_text">d</label></li>
            </ul>
        </div>
        <button id="submit">Submit</button>
    </div>
</body>
</html>
<?php /**PATH /opt/lampp/htdocs/satu-quiz/resources/views/soal-metik.blade.php ENDPATH**/ ?>