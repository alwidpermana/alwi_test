<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class DataNotifications extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id'=>1,
                'title' => 'Pembayaran',
                'description' => 'Pembayaran Anda Berhasil',
                'category'=>'PAYMENT',
                'user_id'=>1
            ],
            [
                'id'=>2,
                'title' => 'Promo',
                'description' => 'deskripsi promo',
                'category'=>'PROMO',
                'user_id'=>null
            ],
            [
                'id'=>3,
                'title' => 'Pembayaran',
                'description' => 'Pembayaran Dibatalkan',
                'category'=>'PAYMENT',
                'user_id'=>1
            ],
            [
                'id'=>4,
                'title' => 'Pembayaran',
                'description' => 'Segera Lakukan Pembayaran',
                'category'=>'PAYMENT',
                'user_id'=>3
            ]];

        DB::table('notifications')->insert($data);
    }
}
