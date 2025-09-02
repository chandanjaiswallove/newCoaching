<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::create('login__models', function (Blueprint $table) {
            $table->id();
            $table->string('adminName');
            $table->string('adminEmail');  
            $table->string('adminContact');
            $table->string('adminUniqueID');
            $table->string('emailOTP');
            $table->string('emailVerificationStatus');
            $table->string('adminContactOTP');
            $table->string('contactVerStatus');
            $table->string('adminAvatar');
            $table->string('profileStatus');
            $table->string('OrganisationName');
            $table->string('organisation_estd_year');
            $table->string('portal_purchase_date');
            $table->string('total_tenure');
            $table->string('subscription_amount');
            $table->string('payment_method');
            $table->string('transaction_id');
            $table->string('facebook_url');
            $table->string('linkedin_url');
            $table->string('facebook_url');
            $table->string('twitter_url');
            $table->string('youtube_url');
            $table->string('instagram_url');
            $table->string('aadhar_no');
            $table->string('aadhar_verification_status');
            $table->string('pancard_no');
            $table->string('pan_card_verification_status');
            $table->string('portal_password');
            $table->string('suspension_status');
            $table->string('reason_if_any');
            $table->string('asst_admin_name');
            $table->string('asst_admin_email');
            $table->string('asst_admin_contact');
            $table->string('asst_admin_password');
            $table->string('asst_admin_profile_status');
            $table->string('asst_admin_avatar');
            $table->string('org_portal_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('login__models');
    }
};
