<?php

namespace App;

class Leader {

    public function __construct() {
        \DB::connection()->getPdo();
    }

    static function score($number)
    {
        return \DB::select('SELECT users.*, attempts.status, COUNT(mission_id)
            AS attempt_count, count(case status when "success" then 1 else null end) as success_count
            FROM users
            INNER JOIN attempts ON users.id = user_id
            GROUP BY user_id
            ORDER BY success_count DESC, attempt_count ASC
            LIMIT :number', ['number' => $number]);
    }
}
