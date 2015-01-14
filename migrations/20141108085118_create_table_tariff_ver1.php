<?php

use Phinx\Migration\AbstractMigration;

class CreateTableTariffVer1 extends AbstractMigration
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
    CREATE TABLE IF NOT EXISTS `tariff` (
    `id` INT(2) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(155) NOT NULL,
  `desc` TEXT NOT NULL,
  `price` INT(3) UNSIGNED NOT NULL,
  `archive` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;
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