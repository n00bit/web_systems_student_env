<?php

use Phinx\Migration\AbstractMigration;

class SeviceInfoCreateTable extends AbstractMigration
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
CREATE TABLE IF NOT EXISTS `service_info` (
  `begin_date` DATE NOT NULL,
  `end_date` DATE NULL,
  `service_id` INT(2) UNSIGNED NOT NULL,
  `subscriber_id` INT(5) UNSIGNED NOT NULL,
  INDEX `service_id_idx` (`service_id` ASC),
  INDEX `subscriber_id_idx` (`subscriber_id` ASC),
  CONSTRAINT `con_service_id`
    FOREIGN KEY (`service_id`)
    REFERENCES `webdb`.`service` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `con_subscriber_id`
    FOREIGN KEY (`subscriber_id`)
    REFERENCES `webdb`.`subscriber` (`id`)
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