<?php

use Mostafabozorgzade\Example\Commands\ExampleCommand;

use function Pest\Laravel\artisan;

it('can test', function () {
    artisan(ExampleCommand::class)
        ->expectsOutput(config('exapmle.command_output'))
        ->assertExitCode(0);
});

it('can output the another value', function () {

    config()->set('exapmle.command_output', 'something else');

    artisan(ExampleCommand::class)
        ->expectsOutput('something else')
        ->assertExitCode(0);
});
