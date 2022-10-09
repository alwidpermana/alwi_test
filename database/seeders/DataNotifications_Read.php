<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class DataNotifications_Read extends Seeder
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
                'is_read' => 1,
                'notification_id' => 1,
                'user_id'=>1
            ],
            [
                'is_read' => 1,
                'notification_id' => 2,
                'user_id'=>1
            ],
            [
                'is_read' => 1,
                'notification_id' => 3,
                'user_id'=>3
            ],
            [
                'is_read' => 1,
                'notification_id' => 3,
                'user_id'=>2
            ],];

        DB::table('notification_reads')->insert($data);
    }
}
