<?php

namespace Mostafabozorgzade\Example\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasFactory;

    public $guarded = [];

    public function getUpperCaseName(): string
    {
        return strtoupper($this->name);
    }
}
