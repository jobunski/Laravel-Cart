<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new App\Products([
            'imagePath'=>'https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80',
            'title'=>'Milk and Honey',
            'description'=>'Non-fiction based on a true life story',
            'price'=>'250'
        ]);
        $product->save();
        $product = new App\Products([
            'imagePath'=>'https://images.unsplash.com/photo-1521123845560-14093637aa7d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80',
            'title'=>'Essay Pro',
            'description'=>'After reading this, you will pass your essay midterms',
            'price'=>'420'
        ]);
        $product->save();
        $product = new App\Products([
            'imagePath'=>'https://images.unsplash.com/photo-1511108690759-009324a90311?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80',
            'title'=>'Your Soul is A River',
            'description'=>'Written by A lady who believes rhyming words are supposed to uplift you.',
            'price'=>'300'
        ]);
        $product->save();



    }
}
