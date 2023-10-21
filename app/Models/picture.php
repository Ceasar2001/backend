<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class picture extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string
     */

     protected $table = 'picture';


     /**
      * The attributes that are
      *
      * @var string
      */
      protected $primaryKey = 'picture_id';

      /**
       * The attributes that should be hidden for arrays.
       *
       * @var array
       */
      protected $fillable = [
        'picture_name',
        'image_path',
        'description',
        'user_id',
    ];
}
