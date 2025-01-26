<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeePaidLeave extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'placement_id',
        'date',
        'time',
        'option',
        'reason',
        'approved_by_admin',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'placement_id' => 'integer',
        'date' => 'date',
        'option' => 'integer',
        'approved_by_admin' => 'boolean',
    ];

    public function placement(): BelongsTo
    {
        return $this->belongsTo(Placement::class);
    }

    public function option(): BelongsTo
    {
        return $this->belongsTo(EmployeesLeaveOption::class);
    }
}
