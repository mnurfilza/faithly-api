<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class VersesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $response = Http::withHeaders(['api-key' => '004ad16b6b573c569fd516e0b072756a'])
        ->get('https://api.scripture.api.bible/v1/bibles/de4e12af7f28f599-02/books');
        $books = 1;
        $verse_id = 1;

        for ($i = 0; $i < count($response->json()['data']); $i++) {
            $resp = $response->json()['data'];
            $id = $resp[$i]['id'];

            $resps = Http::withHeaders(['api-key' => '004ad16b6b573c569fd516e0b072756a'])
            ->get("https://api.scripture.api.bible/v1/bibles/de4e12af7f28f599-02/books/{$id}/chapters");
            for ($j = 1; $j < count($resps->json()['data']); $j++) {
                $chap = $resps->json()['data'];

                $data[] = [
                    'book_id' => $books,
                    'order' => $chap[$j]['number']
                ];

                $verses = Http::withHeaders(['api-key' => '004ad16b6b573c569fd516e0b072756a'])
            ->get("https://api.scripture.api.bible/v1/bibles/de4e12af7f28f599-02/chapters/{$chap[$j]['id']}/verses");


            for ($k=0; $k < count($verses->json()['data']); $k++) { 
                $ver = $verses->json()['data'];
                $order = explode('.',$ver[$k]['id']);
                
                $v  = [
                    'chapter_id'=> $chap[$j]['number'],
                    'order'=>$order[count($order)-1],

                ];

                $verse = Http::withHeaders(['api-key' => '004ad16b6b573c569fd516e0b072756a'])
                ->get("https://api.scripture.api.bible/v1/bibles/de4e12af7f28f599-02/verses/{$ver[$k]['id']}?content-type=text&include-notes=false&include-titles=false&include-chapter-numbers=false&include-verse-numbers=false&include-verse-spans=true&use-org-id=false");

                $v_name = [
                    'version_id'=> '1',
                    'verse_id'=>$verse_id,
                    'content'=>$verse->json()['data']['content'],

                ];

                print_r($verse->json()['data']['content']);
               DB::table('verses')->insert($v);
               DB::table('verse_contents')->insert($v_name);
               $verse_id++;
    
            }

            }
            $books++;
        }
    }
}
