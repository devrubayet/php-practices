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

    // Loop over the rows
    for ($row = 0; $row < $rows; $row++) {
        // Loop through each letter in the word
        for ($i = 0; $i < strlen($word); $i++) {
            $letter = $word[$i];
            $pattern = getLetterPattern($letter);
            if (!empty($pattern)) {
                echo $pattern[$row] . " "; // Print the row for the current letter
            }
        }
        echo "\n"; // Move to the next line after printing all letters for this row
    }
}

// Example usage
printWordWithStars("Rubayet");

?>
