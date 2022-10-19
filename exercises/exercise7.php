
<html>
    <head>
        <title>Exercise 7</title>
    </head>
    <body>
        <form action="exercise7.php" method="post">
            <p>Quiz</p><input type="text" name="quiz"/>
            <p>Project</p><input type="text" name="proj"/>
            <p>Exams</p><input type="text" name="exams"/>
            <p>Exercises</p><input type="text" name="exercises"/>
            <br/><br/>
            <input type="submit" name="submit"/>
        </form>
        <?php 
            //1. Get all values from form via $_POST
            //2. Compute the grade via formula 
            // (Quiz * 20%) + (Project * 30%) + (Exams * 20%) + (Exercises * 30%)
            if(isset($_POST['submit'])) {
                $quiz = floatval($_POST['quiz']);
                $proj = floatval($_POST['proj']);
                $exams = floatval($_POST['exams']);
                $exercises = floatval($_POST['exercises']);
               
                $grade = ($quiz * 0.20) + ($proj * 0.30) + ($exams * 0.20) + ($exercises * 0.30);
                echo "$grade";
                
                if($grade >= 1.0 && $grade <= 1.5) {
                    //echo "Perfect";
                    $remarks = "Perfect";
                } elseif($grade >1.5 && $grade <=2.0) {
                    //echo "Great";
                    $remarks = "Great";
                } elseif($grade >2.0 && $grade <=2.5) {
                    //echo "Good";
                    $remarks = "Good";
                } elseif($grade >2.5 && $grade <=3.0) {
                    //echo "Try harder!";
                    $remarks = "Try harder";
                } elseif($grade >=3.1) {
                    //echo "Better luck next time!";
                    $remarks = "Better luck next time!";
                }

                echo $remarks;
            }
        ?>
    </body>
</html>
