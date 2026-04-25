<?php
function repeat($text, $num = 10)
{
    echo "<ol>\n";
    for($i = 0; $i < $num; $i++)
    {
        echo "<li>$text</li>\n";
    }
    echo "</ol>";
}

// Dengan 2 parameter
repeat("I'm the best", 15);

// Dengan 1 parameter (default = 10)
repeat("You're the man");
?>