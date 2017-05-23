<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(ProductTableSeed::class);
      $this->call(ReviewTableSeed::class);
      $this->call(StoreTableSeed::class);
      $this->call(ProductStoreTableSeed::class);
    }
}
