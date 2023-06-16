<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $form_origin
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $comment
 * @mixin Eloquent
 */
class Enquiry extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime: d M Y / H:i A'
    ];
}
