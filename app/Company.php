<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'company_id');
    }
}
