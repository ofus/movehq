<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Green Eggs and Ham',
            'author' => 'Dr. Seuss',
            'publisher' => 'Random House',
            'ISBN' => '0545002850',
            'ISBN13' => '9780394800165',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'title' => 'The Cat in the Hat',
            'author' => 'Dr. Seuss',
            'publisher' => 'Random House',
            'ISBN' => '039480001X',
            'ISBN13' => '9780394800011',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'title' => 'A Tale of Two Cities',
            'author' => 'Charles Dickens',
            'publisher' => 'Chapman & Hall',
            'ISBN' => '0141439602',
            'ISBN13' => '9780141439600',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'title' => '1984',
            'author' => 'George Orwell',
            'publisher' => 'Signet Classic',
            'ISBN' => '0451524935',
            'ISBN13' => '9780451524935',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'title' => 'The Hunger Games',
            'author' => 'Suzanne Collins',
            'publisher' => 'Scholastic',
            'ISBN' => '439023483',
            'ISBN13' => '9780439023480',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'title' => 'Harry Potter and the Philosopher\'s Stone',
            'author' => 'J.K. Rowling',
            'publisher' => 'Bloomsbury',
            'ISBN' => '439554934',
            'ISBN13' => '9780439554930',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'publisher' => 'HarperCollins Publishers',
            'ISBN' => '61120081',
            'ISBN13' => '9780061120080',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'publisher' => 'Charles Scribner\'s Sons',
            'ISBN' => '743273567',
            'ISBN13' => '9780743273560',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        \App\Models\Book::factory(50)->create();

    }
}
