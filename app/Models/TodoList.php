<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Todo;

class TodoList extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
  protected $fillable = [
      'title',
      'archived'
    ];

  public function user(){
    return $this->belongsTo(User::class);
  };

  public function todo(){
    return $this->hasMany(Todo::class);
  };
}
