<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WebsiteText
 * @property string textContent
 * @property string course
 * @property int week
 * @package App
 */
class WebsiteText extends Model
{
    /**
     * @var array
         */
    protected $fillable = ['title', 'course', 'textContent', 'week', 'sprint', 'proudness', 'photopath'];

}
