<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'project_start_date', 'project_end_date', 'link_to_source_code', 'link_to_project_view', 'preview_image'];
}
