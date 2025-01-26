<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Placement extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_number',
        'employee_id',
        'location_id',
        'position_id',
        'placement_status_id',
        'shift_id',
        'placement_start',
        'placement_end',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'employee_id' => 'integer',
        'location_id' => 'integer',
        'position_id' => 'integer',
        'placement_status_id' => 'integer',
        'shift_id' => 'integer',
        'placement_start' => 'date',
        'placement_end' => 'date',
    ];

    public function employeeLogbooks(): HasMany
    {
        return $this->hasMany(EmployeeLogbook::class);
    }

    public function employeePaidLeaves(): HasMany
    {
        return $this->hasMany(EmployeePaidLeave::class);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(DataEmployee::class);
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Placementlocation::class);
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    public function placementStatus(): BelongsTo
    {
        return $this->belongsTo(PlacementStatus::class);
    }

    public function shift(): BelongsTo
    {
        return $this->belongsTo(Shift::class);
    }
}
