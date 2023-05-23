<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::withHeaders(['api-key' => '004ad16b6b573c569fd516e0b072756a'])
            ->get('https://api.scripture.api.bible/v1/bibles/de4e12af7f28f599-02/books');

        $data = array();
        $testament_id = 1;
        $order = 1;
        $orderAll = 0;
        for ($i = 0; $i < count($response->json()['data']); $i++) {

            $resp = $response->json()['data'];
            if ($i == 39) {
                $testament_id = 2;
                $order = 1;
            };
            $data[] = [
                'order' => $order,
                'testament_id' => $testament_id,
                'order_all' => $orderAll
            ];

            $order++;
            $order = $order;
            $orderAll++;

        }
        DB::table('books')->insert($data);

    }
}
