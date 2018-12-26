<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PeakAddress extends Migration
{

	const TABLE = \Peak\Laravel\Model\Address\Core::TABLE;

    public function up()
    {

		DB::statement('CREATE TABLE IF NOT EXISTS `'.self::TABLE.'` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `province` text,
  `city` text,
  `area` text,
  `address` text,
  `name` varchar(50) NOT NULL,
  `phone` text,
  `tel` text,
  `status` tinyint(1) NOT NULL DEFAULT \'0\' COMMENT \'默认地址\',
  `user_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(self::TABLE);
    }
}
