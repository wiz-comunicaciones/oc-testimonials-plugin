<?php namespace Wiz\Testimonials\Models;

use Model;

class Testimonial extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sortable;

    protected $dates = [
        'deleted_at',
    ];

    public $table = 'wiz_testimonials_testimonials';

    public $rules = [
        'name' => 'required',
        'job' => 'required',
        'testimonial' => 'required',
        'featured_image'   => 'required',
    ];

    public $attachOne = [
        'featured_image' => [
            'System\Models\File',
            'delete' => true,
            'public' => true,
        ],
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', 1);
    }
}
