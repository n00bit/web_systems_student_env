<?php

use Phinx\Migration\AbstractMigration;

class MessageCreateTable extends AbstractMigration
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
CREATE TABLE IF NOT EXISTS `message` (
  `id` INT(4) NOT NULL AUTO_INCREMENT,
  `text` TEXT NOT NULL,
  `date` DATE NOT NULL,
  `direct` ENUM('ABON','OPERAT') NOT NULL,
  `ticket_id` INT(4) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `con_ticket_id`
    FOREIGN KEY (`ticket_id`)
    REFERENCES `ticket` (`id`)
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