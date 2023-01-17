<?php

namespace Database\Seeders;

use App\Models\Makan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class MakanSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // Makan::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data=[
        //     ['nama'=> 'ayu','jenis'=>'M'],
        //     ['nama'=> 'lele','jenis'=>'o'],
        //     ['nama'=> 'fani','jenis'=>'p'],
        // ];

        // foreach ($data as $value) {
        //     Makan::insert([
        //         'nama'=>$value['nama'],
        //         'jenis'=>$value['jenis']
        //     ]);
        // }

        Schema::disableForeignKeyConstraints();
        Makan::truncate();
        Schema::enableForeignKeyConstraints();

        // $data = [
        //     ['nama' => 'fadel', 'jenis' => 'L'],
        //     ['nama' => 'syahbana', 'jenis' => 'P'],
        //     ['nama' => 'tamran', 'jenis' => 'L'],
        // ];

        // foreach ($data as $value) {
        //     Makan::insert([
        //         'nama' => $value['nama'],
        //         'jenis' => $value['jenis'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // }

        // Makan::factory()->count(20)->create();

        Makan::factory()->count(10000)->create();

    }
}
