<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NoticeAndCircular_model;

class NoticeAndCircular_new_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notice_circulars = [
            [
                'translation_id' => '1',
                 'created_by'=> 'admin',
                  'updated_by' => 'admin',

            ],
            [
                'translation_id' => '2',
                 'created_by'=> 'admin',
                  'updated_by' => 'admin',

            ],
        ];
        foreach($notice_circulars as $notice)
        {
            NoticeAndCircular_model::create([
                'translation_id' =>$notice['translation_id'],
                'created_by' =>$notice['created_by'],
                'updated_by' =>$notice['updated_by'],


            ]);
        }
    }
}
