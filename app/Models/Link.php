<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    // Define relationships to tasks
    public function sourceTask() {
        return $this->belongsTo(Task::class, 'source');
    }

    public function targetTask() {
        return $this->belongsTo(Task::class, 'target');
    }
}
