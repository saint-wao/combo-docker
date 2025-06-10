namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComboSeeder extends Seeder
{
    public function run()
    {
        foreach (range(1, 10) as $i) {
            DB::statement("CREATE TABLE IF NOT EXISTS combo$i (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255))");

            for ($j = 1; $j <= 100000; $j++) {
                DB::table("combo$i")->insert(['name' => "Option $j"]);
            }
        }
    }
}
