<?php

namespace Julian\M6ViewaLasVegas;

class Template
{

    /**
     * @param string $myHTML The HTML code to render in the body
     * @return string The HTML document including the body
     */
    static function render(string $myHTML, string $css): string
    {
        $document_head = <<<HEAD
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    $css
</head>
<body>
HEAD;

        $document_footer = <<<FOOTER
        </body>
        </html>
        
FOOTER;
        return $document_head . $myHTML . $document_footer;
    }
}
