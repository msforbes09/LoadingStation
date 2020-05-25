<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function transactable()
    {
        return $this->morphTo();
    }
}
