<?php

use Phinx\Migration\AbstractMigration;

class CreateTableBalanceVer1 extends AbstractMigration
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
        CREATE TABLE IF NOT EXISTS `balance` (
    `summ` INT(4) NOT NULL DEFAULT 0,
  `date` DATE NOT NULL,
  `type` ENUM('dengi','bonuce') NOT NULL,
  `subscriber_id` INT(5) UNSIGNED NOT NULL,
  INDEX `subscriber_id_idx` (`subscriber_id` ASC),
  CONSTRAINT `con_subscriber_idc`
    FOREIGN KEY (`subscriber_id`)
    REFERENCES `subscriber` (`id`)
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