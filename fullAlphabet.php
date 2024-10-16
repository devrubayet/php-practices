<?php
// Function to get the pattern for a given letter
function getLetterPattern($letter) {
    $letters = [
        'A' => [
            "   *   ",
            "  * *  ",
            " ***** ",
            " *   * ",
            " *   * "
        ],
        'B' => [
            " ****  ",
            " *   * ",
            " ****  ",
            " *   * ",
            " ****  "
        ],
        'C' => [
            "  **** ",
            " *     ",
            " *     ",
            " *     ",
            "  **** "
        ],
        'D' => [
            " ****  ",
            " *   * ",
            " *   * ",
            " *   * ",
            " ****  "
        ],
        'E' => [
            " ***** ",
            " *     ",
            " ***** ",
            " *     ",
            " ***** "
        ],
        'F' => [
            " ***** ",
            " *     ",
            " ***** ",
            " *     ",
            " *     "
        ],
        'G' => [
            "  **** ",
            " *     ",
            " *  ** ",
            " *   * ",
            "  **** "
        ],
        'H' => [
            " *   * ",
            " *   * ",
            " ***** ",
            " *   * ",
            " *   * "
        ],
        'I' => [
            " ***** ",
            "   *   ",
            "   *   ",
            "   *   ",
            " ***** "
        ],
        'J' => [
            "   *** ",
            "    *  ",
            "    *  ",
            " *  *  ",
            "  **   "
        ],
        'K' => [
            " *   * ",
            " *  *  ",
            " ***   ",
            " *  *  ",
            " *   * "
        ],
        'L' => [
            " *     ",
            " *     ",
            " *     ",
            " *     ",
            " ***** "
        ],
        'M' => [
            " *   * ",
            " ** ** ",
            " * * * ",
            " *   * ",
            " *   * "
        ],
        'N' => [
            " *   * ",
            " **  * ",
            " * * * ",
            " *  ** ",
            " *   * "
        ],
        'O' => [
            "  ***  ",
            " *   * ",
            " *   * ",
            " *   * ",
            "  ***  "
        ],
        'P' => [
            " ****  ",
            " *   * ",
            " ****  ",
            " *     ",
            " *     "
        ],
        'Q' => [
            "  ***  ",
            " *   * ",
            " *   * ",
            " *  ** ",
            "  **** "
        ],
        'R' => [
            " ****  ",
            " *   * ",
            " ****  ",
            " *  *  ",
            " *   * "
        ],
        'S' => [
            "  **** ",
            " *     ",
            "  ***  ",
            "     * ",
            " ****  "
        ],
        'T' => [
            " ***** ",
            "   *   ",
            "   *   ",
            "   *   ",
            "   *   "
        ],
        'U' => [
            " *   * ",
            " *   * ",
            " *   * ",
            " *   * ",
            "  ***  "
        ],
        'V' => [
            " *   * ",
            " *   * ",
            " *   * ",
            "  * *  ",
            "   *   "
        ],
        'W' => [
            " *   * ",
            " *   * ",
            " * * * ",
            " ** ** ",
            " *   * "
        ],
        'X' => [
            " *   * ",
            "  * *  ",
            "   *   ",
            "  * *  ",
            " *   * "
        ],
        'Y' => [
            " *   * ",
            "  * *  ",
            "   *   ",
            "   *   ",
            "   *   "
        ],
        'Z' => [
            " ***** ",
            "    *  ",
            "   *   ",
            "  *    ",
            " ***** "
        ]
    ];

    return $letters[$letter] ?? []; // Return empty array if the letter isn't defined
}

// Function to print a word using asterisks
function printWordWithStars($word) {
    $word = strtoupper($word); // Convert to uppercase to match the pattern definitions
    $rows = 5; // Each letter has 5 rows
    $output = ""; // String to store the final output

    // Loop over the rows
    for ($row = 0; $row < $rows; $row++) {
        // Loop through each letter in the word
        for ($i = 0; $i < strlen($word); $i++) {
            $letter = $word[$i];
            $pattern = getLetterPattern($letter);
            if (!empty($pattern)) {
                $output .= $pattern[$row] . " "; // Add the row to output with spacing
            }
        }
        $output .= "\n"; // Add a new line after each row
    }

    return $output;
}

// Example usage
$wordToPrint = "abcdefghjklmnopqrstuvwxyz";
$starWordOutput = printWordWithStars($wordToPrint);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word with Stars</title>
    <style>
        body {
            font-family: monospace;
            font-size: 20px;
        }
        pre{
            color:red;
        }
    </style>
</head>
<body>
    <h1>Word Made of Stars</h1>
    <pre><?php echo htmlspecialchars($starWordOutput); ?></pre> <!-- Preserve formatting and escape HTML -->
</body>
</html>
