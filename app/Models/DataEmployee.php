<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DataEmployee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'education_id',
        'marital_id',
        'gada_id',
        'sex',
        'phone_number',
        'birthplace',
        'birth_date',
        'address',
        'mother_name',
        'body_height',
        'body_weight',
        'kk_number',
        'ktp_number',
        'kta_number',
        'kta_reg_number',
        'bpjs_kes',
        'bpjs_ket',
        'pkwt_number',
        'npwp_number',
        'ijazah_gada_number',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'education_id' => 'integer',
        'marital_id' => 'integer',
        'gada_id' => 'integer',
        'birth_date' => 'date',
    ];

    public function placements(): HasMany
    {
        return $this->hasMany(Placement::class);
    }

    public function presenLogs(): HasMany
    {
        return $this->hasMany(PresenLog::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function education(): BelongsTo
    {
        return $this->belongsTo(Education::class);
    }

    public function marital(): BelongsTo
    {
        return $this->belongsTo(Marital::class);
    }

    public function gada(): BelongsTo
    {
        return $this->belongsTo(Gada::class);
    }
}
