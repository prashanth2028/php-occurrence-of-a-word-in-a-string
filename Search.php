<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Occurrence Counter</title>
</head>
<body>
<h1>Word Occurrence Counter</h1>
    
    <form method="post" action="">
        <label for="inputString">Enter a string:</label>
        <input type="text" name="inputString" required><br>
        
        <label for="searchWord">Enter a word to count:</label>
        <input type="text" name="searchWord" required><br>
        
        <input type="submit" value="Count">
    </form>

    <?php
    function countWordOccurrences($string, $word) {
        $string = strtolower($string);
        $word = strtolower($word);
        
        $occurrences = substr_count($string, $word);
        
        return $occurrences;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["inputString"];
        $searchWord = $_POST["searchWord"];

        $occurrences = countWordOccurrences($inputString, $searchWord);
        echo "<p>Your string is $inputString</p>";
        echo "<p>The word '$searchWord' occurs $occurrences times in the given string.</p>";
    }
    ?>
</body>
</html>
