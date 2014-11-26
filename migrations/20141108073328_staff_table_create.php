<?php

use Phinx\Migration\AbstractMigration;

class StaffTableCreate extends AbstractMigration
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
		CREATE TABLE IF NOT EXISTS `staff` (
  `id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(150) NOT NULL,
  `surname` VARCHAR(150) NOT NULL,
  `patronymic` VARCHAR(150) NULL,
  `brithdate` DATE NOT NULL,
  `gender` ENUM('F','M') NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `department` ENUM('OT1','OT2','OT3','ADM') NOT NULL,
  `position` VARCHAR(100) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC))
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