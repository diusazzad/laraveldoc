<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestC extends Model
{
    use HasFactory;

    /**
     * Get the testB that owns the TestC
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function testB()
    {
        return $this->belongsTo(TestB::class, 'testb_id');
    }
}
