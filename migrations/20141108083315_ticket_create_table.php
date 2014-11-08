<?php

use Phinx\Migration\AbstractMigration;

class TicketCreateTable extends AbstractMigration
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
		CREATE TABLE IF NOT EXISTS `ticket` (
  `id` INT(4) NOT NULL AUTO_INCREMENT,
  `subscriber_id` INT(5) UNSIGNED NOT NULL,
  `operator_id` INT(5) UNSIGNED NOT NULL,
  `topic` VARCHAR(255) NOT NULL,
  `rating_efficiency` INT(5) UNSIGNED NOT NULL DEFAULT 0,
  `rating_speed` INT(5) UNSIGNED NOT NULL DEFAULT 0,
  `ratig_quality` INT(5) UNSIGNED NOT NULL DEFAULT 0,
  `status` ENUM('OPEN','CLOSED') NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `con_subscriber_ida`
    FOREIGN KEY (`subscriber_id`)
    REFERENCES `subscriber` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `operator_id`
    FOREIGN KEY (`operator_id`)
    REFERENCES `staff` (`id`)
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