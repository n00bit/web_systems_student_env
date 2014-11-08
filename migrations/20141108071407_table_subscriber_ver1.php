<?php

use Phinx\Migration\AbstractMigration;

class TableSubscriberVer1 extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
     * public function change()
     * {
     * }
     */

    /**
     * Migrate Up.
     */
    public function up()
    {
        $sql = <<<SQL
  CREATE TABLE IF NOT EXISTS `subscriber` (
  `id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `surname` VARCHAR(45) NOT NULL,
  `patronymic` VARCHAR(45) NULL,
  `brithdate` DATE NOT NULL,
  `gender` ENUM('M','F') NOT NULL,
  `pasport_series` VARCHAR(10) NOT NULL,
  `pas_number` VARCHAR(6) NOT NULL,
  `pas_adress` VARCHAR(150) NOT NULL,
  `pas_get_date` DATE NOT NULL,
  `pas_get_dep` VARCHAR(155) NOT NULL,
  `phone_contact` VARCHAR(11) NULL,
  `login_phone` VARCHAR(10) NOT NULL,
  `email` VARCHAR(150) NULL,
  `status` ENUM('ON','TMPOFF','OFF') NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
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