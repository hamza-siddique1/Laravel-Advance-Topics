<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillionUserSeeder extends Seeder
{
    public function run(): void
    {

        $startTime = microtime(true);  // Start timer

        $target = 5_000_000;   // 1 billion
        $batchSize = 21000;       // Efficient for modern CPUs
        $batches = intval($target / $batchSize);

        for ($i = 0; $i < $batches; $i++) {

            $data = [];

            for ($j = 0; $j < $batchSize; $j++) {
                $uuid = uuid_create(UUID_TYPE_RANDOM);
                $data[] = [
                    'name' => "User $uuid",
                    'email' => "$uuid@example.com",
                    'password' => 'password',
                ];
            }

            DB::table('users')->insert($data);
            unset($data);
            gc_collect_cycles();

            echo "Inserted batch " . ($i + 1) . " / $batches" . PHP_EOL;
        }

        $endTime = microtime(true);
        $totalTime = $endTime - $startTime;

        echo "Total seeding time: " . round($totalTime, 2) . " seconds" . PHP_EOL;
    }
}
