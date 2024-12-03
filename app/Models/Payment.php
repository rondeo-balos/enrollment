<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id',
        'amount',
        'payment_date',
        'payment_method',
        'outstanding_bal',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'student_id' => 'integer',
        'amount' => 'float',
        'payment_date' => 'datetime',
        'outstanding_bal' => 'float',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
