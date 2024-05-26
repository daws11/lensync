<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $appends = ["open"];

    public function getOpenAttribute(){
        return true;
    }

    // Assuming a task belongs to a project
    public function project() {
        return $this->belongsTo(Project::class);
    }

    // Assuming tasks are linked
    public function links() {
        return $this->hasMany(Link::class, 'source');
    }
}
