<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('company_id');
            $table->integer('vacancy');
            $table->string('employment_status');
            $table->string('experience');
            $table->string('age');
            $table->string('job_location');
            $table->string('salary');
            $table->longText('job_responsibilities');
            $table->longText('educational');
            $table->longText('skills');
            $table->longText('compensation');
            $table->string('job_source');
            $table->date('published_date');
            $table->date('Application_deadline_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
