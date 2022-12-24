<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use function Symfony\Component\Translation\t;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Real_Estate_Object>
 */
class Real_Estate_ObjectFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


     /*

     $table->id();
	$table->string('object_title')->nullable();
	$table->string('tags')->nullable();
	$table->string('offer_type')->nullable();
	$table->string('object_type')->nullable();
	$table->longText('object_details')->nullable();
	$table->string('website')->nullable();
	$table->string('maps_url')->nullable();
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

     */


     public function definition() {

        return [
            'object_title' => $this->faker->sentence(3),
            'tags' => implode(', ', array_rand(['a', 'b', 'c', 'd', 'e', 'f', 'g'], 4)),
            'images' => 'images/post-5.jpg',
            'hasImages' => 0,
            'offer_type' => 'sale', // sale, rent or sale/rent
            'object_type' => 'land', // land, apartment, realEstate
            'object_details' => $this->faker->paragraph(4),
            'location' => $this->faker->city(),
            'maps_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31041.90518697262!2d-16.61646749202843!3d13.459412144371234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec29c2965af3807%3A0xa1e31751fbae2c52!2sBanjul%2C%20The%20Gambia!5e0!3m2!1sen!2snl!4v1670877066140!5m2!1sen!2snl',
            'area_size' => '300m2',
            'object_status' => 'available',
            'object_price' => $this->faker->randomFloat(2, 15000, 23000),
            'object_price_POA' => '1',
            'numBedrooms' => $this->faker->numberBetween(0, 5),
            'numBathrooms' => $this->faker->numberBetween(0, 4),
            'airco' => 'yes',
            'object_address_street' => $this->faker->streetAddress(),
            'object_address_no' => $this->faker->buildingNumber(),
            'features' => $this->faker->paragraph(3),
            'description' => $this->faker->paragraph(6)
        ];
     }


}
