<?php

use Phinx\Migration\AbstractMigration;

class InputServiceAndTariff extends AbstractMigration
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
        INSERT INTO `service` (`id`, `name`, `desc`, `price`, `archive`) VALUES
(1, 'Money', 'Pay normal prrice', 300, 0),
(2, 'Money+', 'Pay normal one and a half price', 450, 1),
(3, 'Money++', 'Pay normal double price', 600, 0),
(4, 'time', 'Talk normal time', 400, 0),
(5, 'time-', 'Talk smaller time', 600, 1),
(6, 'time--', 'NO talk, you have no time', 900, 0);
INSERT INTO `tariff` (`id`, `name`, `desc`, `price`, `archive`) VALUES
(1, 'Base', 'Base traiff', 600, 0),
(2, 'neBase', 'Not base tariff', 600, 1),
(3, 'Standart', 'Standart tariff', 700, 1),
(4, 'neStandart', 'Not standart tariff', 750, 0),
(5, 'VIP', 'VIP tariff', 950, 0),
(6, 'neVIP', 'Not vIP tariff', 1050, 1),
(7, 'PRO', 'It is not tariff', 1500, 1),
(8, 'nePRO', 'It is may be tariff', 1500, 0),
(9, 'LETF', 'It is left(not our) tariff', 2500, 0);
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