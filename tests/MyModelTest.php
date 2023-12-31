<?php

use Mostafabozorgzade\Example\MyModel;

it('can create a model', function () {
    $myModel = MyModel::factory()->create();

    $this->assertModelExists($myModel);
});
