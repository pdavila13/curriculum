<?php

use Illuminate\Database\Seeder;
use Scool\Curriculum\Models\Law;

class LawsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createLaw(Law::LOE,Law::LOE_NAME);
        $this->createLaw(Law::LOGSE,Law::LOGSE_NAME);
    }

    /**
     * Create a law type by shortname and name.
     *
     * @param $shortname
     * @param $name
     */
    private function createLaw($shortname, $name)
    {
        $law = Law::firstOrCreate([
            'name' => $name
        ]);
        $law->shortname = $shortname;
    }
}