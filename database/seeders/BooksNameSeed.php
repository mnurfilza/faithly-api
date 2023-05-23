<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class BooksNameSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::withHeaders(['api-key' => '004ad16b6b573c569fd516e0b072756a'])
            ->get('https://api.scripture.api.bible/v1/bibles/de4e12af7f28f599-02/books');

        $books = 1;

        for ($i = 0; $i < count($response->json()['data']); $i++) {
            $resp = $response->json()['data'];

            $data[] = [
                'version_id' => 1,
                'book_id' => $books,
                'name' => $resp[$i]['name']
            ];
            $books++;
        }

        DB::table('book_names')->insert($data);

    }
}
