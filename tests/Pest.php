<?php

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "uses()" function to bind a different classes or traits.
|
*/

// uses(Tests\TestCase::class)->in('Feature');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/

function getResponseClient()
{
    $handler = new \GuzzleHttp\Handler\MockHandler();

    $handler->append(new \GuzzleHttp\Psr7\Response(
        status: 200,
        body:'{"_id": "ZsD4Hq1Z5",  "content": "Look up at the stars and not down at your feet. Try to make sense of what you see, and wonder about what makes the universe exist. Be curious.",  "author": "Stephen Hawking",  "tags": ["Inspirational"  ],"authorSlug": "stephen-hawking",  "length": 142, "dateAdded": "2019-03-15", "dateModified": "2023-04-14"}'
    ));

    return new \GuzzleHttp\Client([
        'handler' => $handler
    ]);
}
