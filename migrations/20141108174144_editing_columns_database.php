<?php

use Phinx\Migration\AbstractMigration;

class EditingColumnsDatabase extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
        $sql = <<<SQL
  ALTER TABLE subscriber CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE balance CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE brigade CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE message CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE request_card CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE service CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE service_info CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE tariff CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE tariff_info CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE ticket CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;

SQL;
        $this->execute($sql);
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}