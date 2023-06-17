<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $email
 * @mixin Eloquent
 */
class NewsLetterRegistration extends Model
{
    use HasFactory;

    protected $guarded = [];
}
