<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Produto');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('produtos')->insert([
                'nome' => $faker->company(),
                'valor' => $faker->numberBetween(1, 50),
                'quantidade' => $faker->numberBetween(1,50),
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
