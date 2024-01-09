<?php

it('should return a Stephen Hawnking quote', function () {
    $fakeCliente = getResponseClient();

    $quoteClass = new \Kaiopostal\RandomQuotes\RandomQuote($fakeCliente);

    $quote = $quoteClass->from('Stephen Hawking');

    expect($quote)->toContain('Be curious. by Stephen Hawking');
});
