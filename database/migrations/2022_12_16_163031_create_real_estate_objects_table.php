<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('real__estate__objects', function (Blueprint $table) {

                $table->id();
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->string('object_title')->nullable();
                $table->string('tags')->nullable();
                $table->string('images')->nullable();
                $table->boolean('hasImages')->nullable();
                $table->string('offer_type')->nullable();
                $table->string('object_type')->nullable();
                $table->longText('object_details')->nullable();
                $table->string('location')->nullable();
                $table->longText('maps_url')->nullable();
                $table->string('area_size')->nullable();
                $table->string('object_status')->nullable();
                $table->string('object_price')->nullable();
                $table->string('object_price_POA')->nullable();
                $table->string('numBedrooms')->nullable();
                $table->string('numBathrooms')->nullable();
                $table->string('airco')->nullable();
                $table->string('object_address_street')->nullable();
                $table->string('object_address_no')->nullable();
                $table->longText('features')->nullable();
                $table->longText('description')->nullable();
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
            Schema::dropIfExists('real__estate__objects');
        }
    };
