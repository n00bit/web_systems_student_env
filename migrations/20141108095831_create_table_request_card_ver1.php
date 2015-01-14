<?php

use Phinx\Migration\AbstractMigration;

class CreateTableRequestCardVer1 extends AbstractMigration
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
CREATE TABLE IF NOT EXISTS `request_card` (
  `id` INT(5) NOT NULL AUTO_INCREMENT,
  `subscriber_id` INT(5) UNSIGNED NOT NULL,
  `operator_id` INT(5) UNSIGNED NULL,
  `brigade_id` INT(3) UNSIGNED NULL,
  `target` VARCHAR(200) NOT NULL,
  `status` ENUM('READ','EXECUTE','DONE','CANCELED') NOT NULL,
  `begin_date` DATE NOT NULL,
  `end_date` DATE NULL,
  `brigade_rating_efficiency` INT(5) UNSIGNED NOT NULL DEFAULT 0,
  `brigade_rating_speed` INT(5) UNSIGNED NOT NULL DEFAULT 0,
  `brigade_rating_service` INT(5) UNSIGNED NOT NULL DEFAULT 0,
  `operator_rating_efficiency` INT(5) UNSIGNED NOT NULL DEFAULT 0,
  `operator_rating_speed` INT(5) UNSIGNED NOT NULL DEFAULT 0,
  `operator_rating_service` INT(5) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  INDEX `operator_id_idx` (`operator_id` ASC),
  INDEX `subscriber_id_idx` (`subscriber_id` ASC),
  CONSTRAINT `con_subscriber_idd`
    FOREIGN KEY (`subscriber_id`)
    REFERENCES `subscriber` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `con_operator_id`
    FOREIGN KEY (`operator_id`)
    REFERENCES `staff` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `con_brigade_id`
    FOREIGN KEY (`brigade_id`)
    REFERENCES `brigade` (`id`)
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