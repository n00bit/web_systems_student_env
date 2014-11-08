<?php

use Phinx\Migration\AbstractMigration;

class CreateTableTariffinfoVer1 extends AbstractMigration
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
CREATE TABLE IF NOT EXISTS `tariff_info` (
  `begin_date` DATE NOT NULL,
  `end_date` DATE NULL,
  `tariff_id` INT(2) NOT NULL,
  `subscriber_id` INT(5) UNSIGNED NOT NULL,
  INDEX `subscriber_id_idx` (`subscriber_id` ASC),
  INDEX `tariff_id_idx` (`tariff_id` ASC),
  CONSTRAINT `con_subscriber_idb`
    FOREIGN KEY (`subscriber_id`)
    REFERENCES `subscriber` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `con_tariff_id`
    FOREIGN KEY (`tariff_id`)
    REFERENCES `tariff` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
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