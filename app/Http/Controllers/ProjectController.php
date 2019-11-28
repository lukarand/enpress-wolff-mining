<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Term;
use App\Models\TermRelationship;
use App\Models\Taxonomy;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
  public function post($project) {
    // $project = Post::published()->where('post_type', 'project')->where('post_name', $project)->firstOrFail();
    // return view('project-detail' ?: 'project', compact('project'));
  }
}