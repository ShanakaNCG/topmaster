<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherDetails extends Model{

    //
	protected $casts = [
        'subjet_list' => 'json'
    ];
    protected $table = 'teacherdetail';
}