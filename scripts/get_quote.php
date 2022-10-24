<?php
//get_quote.php

function create_quote_today()
{
    $quotes = file_get_contents($_SERVER['CONTEXT_DOCUMENT_ROOT']
    ."/submissions/submission02"
              . "/resources/quotes.json");
    $quotes_data = json_decode($quotes);
    $f = fopen($_SERVER['CONTEXT_DOCUMENT_ROOT']
    ."/submissions/submission02"
              . "/resources/quote_today.txt", "w");
    fwrite($f, date("l, F jS") . "\n");
    $quote_number = rand(1, count($quotes_data));
    $quote_today = "Today's "
        . $quotes_data[$quote_number-1]->adjective
        . " quote, from "
        . $quotes_data[$quote_number-1]->author
        . ":\n"
        . $quotes_data[$quote_number-1]->text;
    fwrite($f, $quote_today);
    fclose($f);
    return $quote_today;
}

if (file_exists($_SERVER['CONTEXT_DOCUMENT_ROOT']
              ."/submissions/submission02"
              . "/resources/quote_today.txt"))
{
    $f = fopen($_SERVER['CONTEXT_DOCUMENT_ROOT']
    ."/submissions/submission02"
              . "/resources/quote_today.txt", "r");
    $date = trim(fgets($f));
    if ($date == date("l, F jS"))
    {
        $quote = fgets($f, 2000);
        $quote .= fgets($f, 2000);
        fclose($f);
        echo $quote;
    }
    else
    {
        fclose($f);
        unlink($_SERVER['CONTEXT_DOCUMENT_ROOT']
        ."/submissions/submission02"
              . "/resources/quote_today.txt");
        echo create_quote_today();
    }
}
else
{
    echo create_quote_today();
}
?>