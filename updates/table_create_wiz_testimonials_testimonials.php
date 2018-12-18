<?php namespace Wiz\Testimonials\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class TableCreateWizTestimonialsTestimonials extends Migration
{
    public function up()
    {
        Schema::create('wiz_testimonials_testimonials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('job')->nullable();
            $table->text('testimonial')->nullable();
            $table->boolean('is_published')->nullable()->default(1);
            $table->integer('sort_order')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wiz_testimonials_testimonials');
    }
}
