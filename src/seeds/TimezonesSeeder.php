<?php
use Illuminate\Database\Seeder;
class TimezonesSeeder extends Seeder
{
    public function run()
    {
        \DB::table('timezones')->insert([
        	'name' => 'Karachi',
        	'code' => 'Asia-Karachi',
        	'description' => 'Timezone for Karachi Pakistan.',
        	'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
