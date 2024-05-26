<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', // The 'name' field you already had
        'owner_name',
        'contract_start_date',
        'contract_end_date',
        'warranty_start_date',
        'warranty_end_date',
        'contract_value',
        'business_scheme',
        'funding_source',
        'business_line',
        // Any other existing fields
    ];

    // If you have dates, it's good to specify them so Eloquent can cast them to Carbon instances
    protected $dates = [
        'contract_start_date',
        'contract_end_date',
        'warranty_start_date',
        'warranty_end_date',
        // Any other date fields
    ];

    // Define any relationships here, for example:
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
