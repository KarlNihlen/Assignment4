<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StoreTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('stores')->insert([
  [
      "name" => "Elgiganten",
      "city" => "Lund"
  ],
  [
      "name" => "Media Markt",
      "city" => "Malmö"
  ],
  [
      "name" => "Expert",
      "city" => "Staffanstorp"
  ],
  [
      "name" => "Siba",
      "city" => "Helsingborg"
  ]
]);
    }
}
