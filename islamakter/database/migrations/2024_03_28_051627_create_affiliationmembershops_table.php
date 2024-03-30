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
        Schema::create('affiliationmembershops', function (Blueprint $table) {
            $table->id();
            $table->string('affiliation_title')->nullable();
            $table->string('affiliation_subheading')->nullable();
            $table->string('affiliation_heading')->nullable();
            $table->longText('affiliation_paragraph1')->nullable();
            $table->longText('affiliation_paragraph2')->nullable();
            $table->string('affiliation_image')->nullable();
            $table->string('type')->nullable();
            $table->string('membership_title')->nullable();
            $table->string('membership_subheading')->nullable();
            $table->string('membership_heading')->nullable();
            $table->string('membership_image')->nullable();
            $table->longText('membership_paraheading')->nullable();
            $table->longText('membership_paragraph')->nullable();
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
        Schema::dropIfExists('affiliationmembershops');
    }
};
