<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    //
    protected $table = '_data';
    protected $fillable = ['name,DoGood'] ; //สามารถเพิ่มข้อมูลได้ในคำสั่ง Mass Assignment
}
