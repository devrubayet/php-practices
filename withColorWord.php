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

// Function to print a word using asterisks with colors
function printWordWithStars($word) {
    $word = strtoupper($word); // Convert to uppercase to match the pattern definitions
    $rows = 5; // Each letter has 5 rows
    $colors = ['red', 'green', 'blue', 'orange', 'purple', 'brown', 'pink']; // Array of colors
    $output = ""; // String to store the final output

    // Loop over the rows
    for ($row = 0; $row < $rows; $row++) {
        // Loop through each letter in the word
        for ($i = 0; $i < strlen($word); $i++) {
            $letter = $word[$i];
            $pattern = getLetterPattern($letter);
            $color = $colors[$i % count($colors)]; // Pick a color from the array based on index
            if (!empty($pattern)) {
                // Wrap each letter's row in a <span> with the color
                $output .= "<span style='color: black;'>" . $pattern[$row] . "</span> ";
            }
        }
        $output .= "\n"; // Add a new line after each row
    }

    return $output;
}

// Example usage
$wordToPrint = "Papry I  Love You";
$starWordOutput = printWordWithStars($wordToPrint);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word with Stars in Colors</title>
    <style>
        body {
            font-family: monospace;
        }

        pre{
            font-size: 25px;
            color: black;
        }
    </style>
</head>
<body>
    <h1>Word Made of Stars with Colors</h1>
    <pre><?php echo $starWordOutput; ?></pre> <!-- Preserve formatting and display with colors -->
</body>
</html>
