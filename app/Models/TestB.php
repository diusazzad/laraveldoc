<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestB extends Model
{
    use HasFactory;


/**
 * Get the testB that owns the TestB
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */

 /**
  * Get the testC that owns the TestB
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  */
 public function testC()
 {
     return $this->belongsTo(TestC::class, 'testb_id');
 }
}
