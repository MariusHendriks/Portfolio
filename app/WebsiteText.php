<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class WebsiteText extends Model
{
    /**
     * @var array
         */
    protected $fillable = ['title', 'course', 'textContent', 'week', 'sprint', 'proudness', 'photopath'];

}
