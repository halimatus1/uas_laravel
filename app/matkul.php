<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
    protected $table     = 'matkul';
    protected $fillable  = ['id','kd_matkul','nama_matkul','sks'];
    protected $primarykey = 'id';
    public $timestamps   = false;

    public function nilai()
    {
        return $this->hasMany(nilai::class, 'matkul_id', 'id');
    }
}
