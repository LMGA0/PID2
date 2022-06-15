<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencies extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ag_name'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agencies';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the artist for this agency
     */
    public function artists()
    {
      return $this->hasMany(Artist::class);
    }
}
