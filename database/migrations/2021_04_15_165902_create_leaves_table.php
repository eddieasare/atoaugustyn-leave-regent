web<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateLeavesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('leaves', function (Blueprint $table) {
                $table->id();
                $table->string('type');
                $table->string('description');
                $table->date('start_date');
                $table->string('end_date');
                $table->string('applied_by');
                $table->boolean('status')->default(0);
                $table->string('request_status')->nullable();
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
            Schema::dropIfExists('leaves');
        }
    }