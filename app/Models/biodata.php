<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    protected $table = "biodata";
    protected $primerykey = "id";
    protected $filable = ['id','nama','alamat','jk','tgllhr','agama','telpon','hoby'];
    // use HasFactory;
}
