namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Produto;
use Faker\Factory as Faker;


class ProdutoSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();


        // Gerar 50 produtos
        for ($i = 1; $i <= 50; $i++) {
            Produto::create([
                'nome' => 'Produto ' . $i,
                'descricao' => $faker->sentence,
                'preco' => $faker->randomFloat(2, 1, 1000),
                'quantidade' => $faker->numberBetween(1, 100),
            ]);
        }
    }
}

