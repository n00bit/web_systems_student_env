<?php

use Phinx\Migration\AbstractMigration;

class EditingTablesColumnToUtf8 extends AbstractMigration
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
  ALTER TABLE subscriber CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE balance CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE brigade CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE message CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE request_card CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE service CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE service_info CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE tariff CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE tariff_info CHARACTER SET utf8 COLLATE utf8_general_ci;
  ALTER TABLE ticket CHARACTER SET utf8 COLLATE utf8_general_ci;

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