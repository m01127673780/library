<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontends', function (Blueprint $table) {
            $table->increments('id');
            $table->text('logo')->nullable();
            $table->text('icon')->nullable();
            $table->text('img_larg')->nullable();
            $table->text('img_insid')->nullable();
            $table->text('section_three_img_one')->nullable();
            $table->text('section_three_img_two')->nullable();
            $table->text('section_three_img_three')->nullable();
            $table->text('section_tow_img_one')->nullable();
            $table->text('section_tow_img_two')->nullable();
            $table->longText('section_footer_about_ar')->nullable();
            $table->longText('section_footer_about_en')->nullable();
            $table->text('section_footer_img_about')->nullable();
            $table->text('section_footer_img_payment_methods')->nullable();
            $table->text('section_footer_address_ar')->nullable();
            $table->text('section_footer_address_en')->nullable();
            $table->text('section_footer_phone')->nullable();
            $table->text('section_footer_email')->nullable();
            $table->text('section_footer_sen_message')->nullable();
            $table->text('section_footer_sen_email')->nullable();
            $table->text('section_footer_payment_methods')->nullable();
            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('instagram')->nullable();
            $table->text('gmail')->nullable();
            // ------------------------start articles
             $table->text('section_footer_contact_us_title_ar')->nullable();
            $table->text('section_footer_contact_us_title_en')->nullable();
            $table->text('section_footer_contact_us_content_ar')->nullable();
            $table->text('section_footer_contact_us_content_en')->nullable();
 

            $table->text('section_footer_part_two_title_ar')->nullable();
            $table->text('section_footer_part_two_title_en')->nullable();
            $table->text('section_footer_part_two_content_ar')->nullable();
            $table->text('section_footer_part_two_content_en')->nullable();
 
            $table->text('section_footer_part_three_title_ar')->nullable();
            $table->text('section_footer_part_three_title_en')->nullable();
            $table->text('section_footer_part_three_content_ar')->nullable();
            $table->text('section_footer_part_three_content_en')->nullable();
 
            $table->text('section_footer_payment_methods_title_ar')->nullable();
            $table->text('section_footer_payment_methods_title_en')->nullable();
            $table->text('section_footer_payment_methods_content_ar')->nullable();
            $table->text('section_footer_payment_methods_content_en')->nullable();
           


            $table->text('section_two_part_one_icon')->nullable();
            $table->text('section_two_part_one_photo')->nullable();
            $table->text('section_two_part_one_title_ar')->nullable();
            $table->text('section_two_part_one_title_en')->nullable();
            $table->longText('section_two_part_one_content_ar')->nullable();
            $table->longText('section_two_part_one_content_en')->nullable();

            $table->text('section_two_part_two_icon')->nullable();
            $table->text('section_two_part_two_photo')->nullable();
            $table->text('section_two_part_two_title_ar')->nullable();
            $table->text('section_two_part_two_title_en')->nullable();
            $table->longText('section_two_part_two_content_ar')->nullable();
            $table->longText('section_two_part_two_content_en')->nullable();


            $table->text('section_two_part_three_icon')->nullable();
            $table->text('section_two_part_three_photo')->nullable();
            $table->text('section_two_part_three_title_ar')->nullable();
            $table->text('section_two_part_three_title_en')->nullable();
            $table->longText('section_two_part_three_content_ar')->nullable();
            $table->longText('section_two_part_three_content_en')->nullable();




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
        Schema::dropIfExists('frontends');
    }
}
