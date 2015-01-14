<?php

use Phinx\Migration\AbstractMigration;

class EditingCollationDatabase extends AbstractMigration
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
        ALTER DATABASE `webdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
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