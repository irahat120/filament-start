<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */protected $students = [
        [
            'user_id' => 1,
            'name' => 'rahat',
            'email' => 'rahat@filament.com',
            'categories_id' => 10,
            'color' => '#a34646',
            'content' => 'A paragraph is a series of sentences that are organized and coherent, and are all related to a single topic. Almost every piece of writing you do that is longer than a few sentences should be organized into paragraphs. This is because paragraphs show a reader where the subdivisions of an essay begin and end, and thus help the reader see the organization of the essay and grasp its main points.',
            'hobbys' => '["cricket","golf","gardening"]',
            'images' => 'images/01JT30P04KSAHTVRZ4DGMK5HJB.jpg',
        ], [
            'user_id' => 2,
            'name' => 'King',
            'email' => 'King@filament.com',
            'categories_id' => 4,
            'color' => '#0014ff',
            'content' => 'Paragraphs can contain many different kinds of information. A paragraph could contain a series of brief examples or a single long illustration of a general point. It might describe a place, character, or process; narrate a series of events; compare or contrast two or more things; classify items into categories; or describe causes and effects. Regardless of the kind of information they contain, all paragraphs share certain characteristics. One of the most important of these is a topic sentence.',
            'hobbys' => '["Driving","Walking"]',
            'images' => 'images/01JT2RG4YDZ58Q04GFWNN1KHQC.jpg',
        ], [
            'user_id' => 1,
            'name' => 'Aiman',
            'email' => 'Aiman@filament.com',
            'categories_id' => 6,
            'color' => '#ff17ab',
            'content' => 'Although most paragraphs should have a topic sentence, there are a few situations when a paragraph might not need a topic sentence. For example, you might be able to omit a topic sentence in a paragraph that narrates a series of events, if a paragraph continues developing an idea that you introduced (with a topic sentence) in the previous paragraph, or if all the sentences and details in a paragraph clearly refer—perhaps indirectly—to a main point. The vast majority of your paragraphs, however, should have a topic sentence.',
            'hobbys' => '["gardening","Fishing","Driving"]',
            'images' => 'images/01JT2NGQWQGHGY2YXKB3GTFWCD.jpg',
        ]
        
    ];
    public function run(): void
    {
        foreach($this->students as $student) {
            Student::insert($student);
        }
    }
}
