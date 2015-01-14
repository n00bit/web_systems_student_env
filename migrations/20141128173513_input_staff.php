<?php

use Phinx\Migration\AbstractMigration;

class InputStaff extends AbstractMigration
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
        INSERT INTO `staff` (`id`, `name`, `surname`, `patronymic`, `brithdate`, `gender`, `login`, `password`, `department`, `position`) VALUES
(1, 'Tyler', 'Lannigham', 'Marie', '2002-08-21', 'F', 'xcL', 'TKNOlLrJxDjoYXoINEt7tZNNmMQYOp0m67jMknj7c86W1kqINupxAxWTKSFkd7u2VGcAknk6f0jygv5wwHTcZZEViGRm37AZ7YrFNimyJ3C80qxVNihYc7dsDSQz5RTO2diGUGTQWsmEAQOZrclpvHYVeIlJky7ejxyuaB2S8llp6eyM3dln3kZjy8yPRYa4jYglJrE0ZgM8y', 'OT2', 'operator'),
(2, 'Catherine', 'Gonzalez', 'Samuel', '2013-03-23', 'M', 'icCZlenkDbaDA6rWXjCWHJsqOWHl8WUV4J85OkAutz', 'nahu07AWyGC6Q6JBqzbNTvFGRsHaWp228SK8NJ3aPXFeWPmlfpFAvYI35nhNJfL7L0MLsnRGcWDPG3241WNwdXyUtEaGsbkHAcXaf03kqgduHahGOFrdhJk31FGpgUMZxeoyDeu8nGMO8nQASLryfhWoYgqsuzTucmfaShzWIjokybd4eauYjIj4nUAw7psBCW05Ceo4', 'OT3', 'apprentice-operator'),
(3, 'Klaas', 'Brylle', 'Robert', '2001-05-20', 'M', 'w', 'PyM1zwsHwWHE0haRllhYGbRZTFGE6TbpinTnovnOu1uwgIXOa8Bo6kqd1bhjigOdpz1X2rRjYkkizFi6KA0OHQeS8DlysfVN5elGmi2e1Fh1dw0OXseCuts3V30iW1Icn7a16I343OPe4O0PVq7M3nMVxEYouePmrK1fygY0Inv3xSgO3Yx1pPi0MhvR', 'OT2', 'chief-operator'),
(4, 'Patty', 'Toreau', NULL, '2001-05-03', 'M', 'Vdfch8nm2vCukK5TG3wr1X0ln', 'WaP4cAM', 'OT3', 'chief-operator'),
(5, 'Bas', 'Long', 'Ainhoa', '2012-05-02', 'M', '64lCPb0z4evMsMuUmxqvrQaaqVFZFn3wDdv4LU5', '4oo3TNPFZwLxNKs1PKoSRkgaidHyPpCj7ME0MbO7dJSRd2XDdj4Th8pgWFiXNR4nbVLTLBwocdncbLiIP85tGoetltXtFxB1C250FYzXOj7ftAni', 'OT3', 'apprentice-operator'),
(6, 'Sigrid', 'Wong', 'Krzysztof', '2011-10-23', 'F', 'uXsenBsi5ov8mxrWmSx3OC6YIjxnuOBvZ8', 'k4D1HHFRTqGUhHHDFiLGUmch45ItdNSF6vcA1zcOCdgqLTb1KapCx448PacHIWSeL7OskApqgeYODYQna', 'ADM', 'chief-operator'),
(7, 'Roger', 'Wicks', NULL, '2011-06-04', 'M', 'z2NTz', 'GRjcatvr7g7nwvLCsG3jzkbGlgLdXYkejrfDnhNSZxJC7MIfR0S4rZduCGUhrgiJRDby5R4wefy35TWGshnN0ayjYZaObbbD5MVawkqlXLirtQ5BXKAMsaeRwlFS175', 'OT3', 'operator'),
(8, 'Janet', 'Perilloux', 'Julie', '2002-10-25', 'M', '7wCr5pOzmp1sEGOL', 'jwisLZtRzTpUW31K5ivDRC53jhqZ', 'OT3', 'chief-operator'),
(9, 'Cian', 'Jones', 'Cristian', '2011-09-13', 'M', 'KQ11TTCtmm5FCV8m', 'HRC67bvdPkrN3SPRqfvnyoDWTsPdx3zlu6VUhMebDNbn2ukjO8kYldezU1hKE2bQkspJ02pdzXQ6YYOv6jAhC0wEtZFiQy05m2C4AbkUls6tqJj3p2HF8nIGcKXj1DLDCEulpAlU1bJn6UqNzcYzzS18f3Ay0AKi', 'ADM', 'chief-operator'),
(10, 'Benjy', 'Wakefield', NULL, '2012-01-21', 'M', 'xVp3J1ImwLY3oFsPCqc0pnsA3FV5', 'p4PUj1XJbZK', 'OT2', 'operator'),
(11, 'Fabian', 'Deleo', 'Maggie', '2013-06-12', 'M', 'unU4vlcmz8izDtB1TDUpMe', 'boNtptQ6KvfDnYBQ2vEfMImc4IaBIIla2IqRQULxNuG0EJTe6Ap3FGcQGI4wxPIoN1dbktnq77jLa2BkLY4kHTyqth4gfEFK3EUduTZOWktcnPRH7BSOhSDVhyKuBuHkW0ymGO3nJtDmqJTqubiqiEGnRscMS5qOWVrOo6ZCjuedGAympxc6vEZdomWkeVl', 'OT3', 'apprentice-operator'),
(12, 'Georgina', 'Alspaugh', 'Anne', '2012-01-03', 'F', '6iBvN7sNRquWZkyCc7mV2vLc', 'kCaWzjMvOmDmNOobQBs8t3lZgIMRYBTEnUM2YNokD7c4PmEcwFzHJwnkBoZNj7Pqaijv4J77UC65aLRe8sIV0ya4cM3ibWAorgM', 'OT1', 'slave-operator'),
(13, 'Matthew', 'McCormick', 'Jody', '2006-08-22', 'F', 'OXmn1jzY8G7pNWUbTxCHoTRi', 'ZjaYOIj0RzZNgiVhBqnCfUSMGyRIkfO10YCiyzyqdQfEsmbfCz6DeLiQfGjWuAKwpLXheshwOVzkMFNzzAP5aQAIXs11HyzLh82MWdc45hLmmBYYRMDT36inBalAgL53tJFwbTQHUYfXGTZsIvolOLpsH8FiYpu4VDuo1j2sftZ2N0Lpr0CYWfYemVaPVOdOMNqLeBUzLknyJGUKMkNO', 'ADM', 'chief-operator'),
(14, 'Marek', 'Ratliff', 'Peter', '2007-05-19', 'M', 'KZU6EY1YlbzIdoSq6hwcNJhOgYD8epzw8kTLKEFVot', 'snne1UDJtloH5vOyqbhlvZxVYwzcOA6v6KyFu6sARjjgtRgggzLLExpZWwQFOcJGFsMIUIV38', 'OT3', 'slave-operator'),
(15, 'Netty', 'Bright', 'Marty', '2009-07-12', 'M', 'J4HnPsx2t7GRsjc45rqciv', 'CRig0tAfgUub12IaT8VNVOM5rVF8WFAVtnvgbkOf61fXl3hyxIlU2kLqdoTctnlIPGl4xA8SxAWwPUV5c3QJsONT7nSPmXda6CQdubXjmdsvJyDkxECLPTUSxFgpZR7vFn7RH7ghUV6tLkoT5GGUDrDMUPCOnKfF4vMKSYd5vsPcVfHHApyPnom4aO1z08Ug4SGcri354VqTpvUJPKCNAYS0pPc6AhmoPgLcLKeaOGQVtA7fqgoZRMn', 'ADM', 'slave-operator'),
(16, 'Herbert', 'Press', NULL, '2010-01-03', 'M', 'f4s', 'C5YgU6dfGBXzx1GmJO3XevnNNCDQ4YjZaeJqwgBnaZTiysQZ5WbbDNyaEckgq6A7rspISRTFLmCyemR3ZHjLcbbZoDtPTkJ8beIMGhHqqfrWKoe4QVXGN7sNJJVc4yqCvOitTksUYQ7osRdfDKJfGIZHLEcevOBLYtVHUxhsEuhVwd8KsDUGTsZTDH03nTzZOdifihE12pV', 'ADM', 'operator'),
(17, 'Patricia', 'Laudanski', 'Gillian', '2000-02-27', 'M', 'U3R2udDoY3hIL50TUzDu', 'T2ufwedNgFSxISGuSLJHReDLQV15o6UiQEtZO1NGaNtKBZUUgEGAI6KAVtBmwtUnnAvCl4vdpwBuXRP8oDKteusXsMweaQfDeKiTr1ypGNNJjFOH6MqdhfJL0KdDDDTEId8nwrRjfhqEru4h7HuzCKe6uPwVkm3uG', 'OT2', 'chief-operator'),
(18, 'Dick', 'Phillips', 'Emil', '2002-03-19', 'F', 'M26IyeIAj7xNr2NGJdCrKNeYo656vgQbalzVQgNIPkqs', 'tCv0wVAuDyGvrOfi8OKRKwSues1QmHC4dYLegfCOynKpniekWyQeMSoY2IIE58uL6swDopmwwVawCYnTbMsM6fcTQaoRnFuHXMHKQhdVWQfDqXDQnYJIBUonDS1OnmeoNzlrQXKHLVG264RFCA2IJMj7GCG4UpDmyjAi4Tm2QK51WpyKDWV3nqQQw18enN4CkdWod0Janzo4bH8uBdAQfEaWQT', 'OT1', 'apprentice-operator'),
(19, 'Rosa', 'Poplock', 'Madison', '2001-03-11', 'F', 'DCt7TSNtk60DDwf6p2TUj2u6Fsi2d35115CN', 't6GFQgcFi2uoHu8zB8BWah5pYx58YOJlGUWOn7cmbS0nxME3yzA6DDvBlZ5WW2fIxiUzVObUaaxWDSGInE', 'OT2', 'chief-operator'),
(20, 'Cian', 'Ecchevarri', 'Sjanie', '2013-09-08', 'F', 'vqxcdjkcln0OfFO50ENTaqUMLbj2ZcSr', 'H0NnzkhKESmuKjlLq11BlBmUqJo0RI1rlRauiUkRk2K5QInhZsFq2MTemX52kicI1rrQHCLwlCowFA', 'OT2', 'apprentice-operator'),
(21, 'Luca', 'Freeman', 'Rob', '2008-06-08', 'M', 'S8mx4QTUWLGeEE2huT3YE2hfEa1Vw', 'KOju1zT70qsVSNShEYnbxwcMUbhvhKDnUNUQgQVOslDp4C8DlzO5rfsiiGL4aEgO0RY8PWPhGGKMGVBuX1JuU6rU6hIT2CanATMulVCiIFlJV2wKVxctSJj2uHlUTERmfJYzaTUhpjjhedh55LOkmPlyG1Pg5T1HNVeTfksZ14n18wN1l6BEEv05Ns2P4qVKwnvLMEkLdcmHtCVtO08SYE0v0xKzrdbSye2bCw', 'OT3', 'operator'),
(22, 'Sherm', 'Reames', NULL, '2008-12-25', 'M', 'R7Z4b', 'imE6LYR5CyEyrOtK6H5ebPUrEzirAmZWq4IZsRFNT0nCtv0eZrHFPa3Ic6', 'OT1', 'apprentice-operator'),
(23, 'Edwin', 'McCrary', 'Fons', '2007-01-03', 'F', '0fRWP', 'zzTMf0YN00JHbmBFEfJBh3ZRpNsWtB5m5eku46OHZ4Fw28NmS7D78Lz4DEExOaIpQXSRjWYYovrYSOz45BJhy4VclcMIBDbnSELwXXNUQou4Afyzct4E8SkinPqbICHa4zMB', 'OT2', 'operator'),
(24, 'Thomas', 'Nelson', NULL, '2007-09-23', 'M', 'bklUU3DEk3oGmD2NTLhedkgiircj8QhJsaNb71TbTC7M', 'FNwegf6uytgrDEO4WGUAHOu3RgZHnL4ECEC5Fw3u3BG7nrRdWm4r3OBvLrgDSoRbnomg58zG5KZ801DxBGSFf1KXR0clqWJMcvPAzWHDz0GvasfHx1GupAt2FxEC1Ek53qjlpLOhitmYfXrIkLRBEBk5q6LjaEPFMiVltsSpn4N6A2EtbfVCtDCRv4ioAgRBztBsMsPcpBPnAmbcBPFHpstRmjT2IiRdqRhaEohkzN', 'OT1', 'apprentice-operator'),
(25, 'Drew', 'Crocetti', 'Izzy', '2000-11-05', 'F', 'zMKTau4AWqfEosmUZN00HrmWCAo0wxoYZj', 'SXteRi0EeAvWv5TP0ADuxYIp78Z0y1lCoP5lcSPS5HFHBQabuDqPkorDp3h8xhWZfJ3i8hDxWaNI7fPRQa7guoIitSwLoBfTNx2vXh4AsY5YrGENQXw6f53TXFQzR0eSXBTEAKNSyCdrcYRuPensPNRBPye8EuzESFwxeSa0mFwJd5jNaMq1C8tQdCF8dDnp1QTWsMgrX', 'OT3', 'chief-operator'),
(26, 'Ester', 'Clarke', 'Juan', '2006-06-29', 'F', '3qGydA34OIV6DZKpKhrxyh', 'exz53w0BzLmju3y40uzRoMK1gBJUZdhV6D2MTBFFzHBHUoCPLs02qjxYSp4VeSR75KRAgRXxfcD4JR6vpqcXXKieZMCZiX', 'OT2', 'apprentice-operator'),
(27, 'Camila', 'Igolavski', 'Sammy', '2010-04-22', 'F', 'lAZ8BdGZKLLyW6bkSUk2G4HL', 'z6SJgSYWM3dUldZobUCkRBB6Eek3lfkEiL58kHCvLa6skHNkcrjZmU6JCrkcTVK', 'OT1', 'slave-operator'),
(28, 'Jim', 'Turk', 'Ciara', '2013-11-07', 'F', 'brfhv6yTCRPq4SUraAvk3wFZwB', 'rPVDIdh54zOv2E7NRepHpnVnaaLLx8rQmlPvqLpCej4HVhMy60xb2STHluyPteqzZukj7vPgpvVoGBxeGVwcYFX4', 'ADM', 'chief-operator'),
(29, 'Madison', 'Long', 'Anne', '2001-10-26', 'F', '2zDG4SbUZaSo1jhQLAUwo4FD', 'veeEYkBEowCmIPwET8fCvNtT6KIFdGa1AZh2tvyJHjIQWvcc5GuMXB64CQsDCrc2st0uDWGRD5NK15hDPzzqo3KW3QWsCq7haSVpdr3dPmxiy8uQ57K1b4qMdfZTugQkegzJeJxPtMAJtKBV73QJOSAjmwf3z5JfXiweI3EZAy7PR03AoSqc6Cxxk341H0loZDNpvh5f', 'OT3', 'slave-operator'),
(30, 'Rolla', 'Deans', 'Scottie', '2003-08-06', 'M', 'fi7', 'FKeajbrNE6DckE2ATSDV1pHVBz1PX7IJBgaE2F0cO8HYPNyMjLNICdgQGJKbh6VEKwo6eclroMsoX0EGiGbQpWVQtfzPIf0xEnqKTbysDKHDmIivX4pGljKT1qXET8hN3Y', 'ADM', 'apprentice-operator'),
(31, 'Paula', 'Gildersleeve', 'Katie', '2002-10-18', 'F', 'pJBourGjVsUVUwO3vHbz3iKX', 'Fo0uK7UdaTTcZaA2nAXTqvuvpVUwWSWwmXC8F8bGd6YKf4L1axGjcBOsRmfCQeerHDiPHsZPAqAaMDAgnda5wRvoAKoXEXGbdPDxT2Dw2kzQYAq4j6O0587Es8olntx6tNG5BYE6mhn3SGJbgLXUywjnHvjnH35aA3dhxItcgdGJtkfEq6xGWcYizNJZsZl0bF2cVIFrdhuSlTuT', 'OT3', 'operator'),
(32, 'Maria', 'Overton', NULL, '2001-11-06', 'F', 'nFyzlgwT7sC76v0sh2KgpaugCQBkJ2VPgg0', 'EsYsSpW00zsAbFz4kHFoCoxMJPY8dZiwjx3yUhtTrKYVHYthKHgQtwZbcWAIg6sobMQuTbvPE7cnDMe', 'OT2', 'apprentice-operator'),
(33, 'Gabbie', 'Bernstein', 'Stanislaw', '2008-10-17', 'F', '1jzLKd4lxRYCXbQZgUaZ', 'CclZoEyP5RSiDGbEhM82PrJbwONetjIFwc7l5c6IhEKYIhitocFqN52ONLmrIygnrzdErxk5iiryp7nkza7UvR3gYw4MAfLxgDUc8pC153HniHorSZ2cRndaHKTTEsEBxhKul8of7bxIKeKGpyRvIBf0Ld8O4bjEcVJ2SbeShkWuVG7Sn4rR6flA185svtQsHYF0GztEJQsdXqaJpUiDfYNbdVP5XWXpwl4ddyV4w0bWDEr6Y4mZ48', 'OT1', 'chief-operator'),
(34, 'Pete', 'Wargula', 'Cloe', '2006-06-07', 'F', 'uoQL', 'VGA86kNJ5HNCLkfpZCR7oQuNg44VnRxhbpyR4FuYftEKvTYwfqXr4N3spLnTwZwjqLNuhO8hQ6JUGtuCnxX3kUmusDGRiiahH5WUj7wwq2whTNrhWpjLrpFyGHi7M1iskYx6NLfsLep10eWuQ6KgJft1kFxjTKiNYhOoQYenGfrWClkLsmlGspFYr4uFbJmZ1a1ji5vOg0MqnGTjnx2LihLkkTnQ5kssLvCiTUO0sy0D3TwHAGrKGJ', 'OT1', 'slave-operator'),
(35, 'Ryan', 'Shapiro', 'Sjon', '2003-09-22', 'M', '5CFWLPAFnDSKSuWtvIPg', 'y4OUuuHLWCLUXOl0MV5n1dbPu558u1Hl6qmU5dUgo5hsCENgGJJCoMBXPRxnfQKN32Cz2HiiqkjKCmsui4tS2YKpvAF3bw742NGkX3nYUSVQkcw5SVmyXOXIu37xFlORdGhMWZkle2YdvumUBhkcnZAmlfyrFCeFR37b3cDiFgNvKQ13V0QPPdVyh', 'OT2', 'apprentice-operator'),
(36, 'Joost', 'Langham', 'Lauren', '2005-07-08', 'M', 'gmv2NBP5mc4MN6', 'E2PyFWzf5oLe0EgbD0v7gz4CpEW1rDJ6WbZ', 'ADM', 'chief-operator'),
(37, 'Cees', 'Helfrich', 'Dorothy', '2000-12-31', 'M', 'Ff3uCBAKW3wJ8fwrRJoi6oNXGXHaOWERp', 'CgfYkbptaKVaaEjgiZ2NkunMQi1rNqjVWDcx2cQVhFhhbv1cNuRM5ijFjHuYqLIdpni22Zcl1EVQ65NxyWT4VRw4dCgFOa3L5YDThj2k7UW4pU7WA3NRlQcNYF2Rq2H2ILydQh44GY5ykRA3ZmUFEBCqL1cj4APyOD1JEIpNbbSTGjx0LZBgCeCIGbYQ1qKKjGTm0DjeMRW8SQhmEE7VjiF8nb5DW6OiZtAYSTZy7WtYROCFG8TURADlhEMJh', 'OT2', 'chief-operator'),
(38, 'Peggy', 'van Dijk', 'Delphine', '2014-03-16', 'F', 'LlGcZONAwnED', '60TeJ4pxbodABwGWenhcLTAvaacjeV6k0eL81tQdHrPTBk2sf5qEmnujvJooCI00x7HMHcxGFJD2KfMzMFYjaCMQedKHHcgxsegxCWrab7CosQmNHCtP8rCjqdDeRkUbK3A0we2I5OdZPeiS63l1yGwItwhODqBSPYlRRNfec2qz5HwmvNih2tKW7JMJkFGQ7rfMQYTjPpwHwUC2tSNEqZyYn', 'OT1', 'operator'),
(39, 'Alex', 'Shapiro', 'Isak', '2004-05-25', 'M', 'ffYxqJlgDPDFw3jsRL8CNkj3RfjeZC1IwlraWE', 'qn5uTDSK2jmcoBvmbOIXdK24nPzwoXpLUWjqt3hIv5xwl1lKIRf6ZS2OaFQsTyixeXVkTWidpwPYabfMiZpzs5GrFtfklRM8j2SxsaazNpHlnUQsxmoHxUJ4GXFqxV5HQ6LqNzwX3rIXnzvV5s2mfUsMwKr7pHatcFeFxW2UwTRjnADEgk8laQ4HOqdCyGQIhjzq3RD2Zxpaxw5HqU1PVrcPoVf6grXd7FflrDVk', 'OT3', 'apprentice-operator'),
(40, 'Scottie', 'Langham	', 'Callum', '2014-04-23', 'F', 'UOVFlSeWrvBBhzsREYvRyEtHpgaGFEPHxj05MxWxSI', 'AteNdMP8VuQYMxn4KeIwWjME4VFPlOXOGLXCEqWfhXBuQD1dIFgv2WlUISjBTODV2vJrMRskUlg6hMu6UaRi3xkpK0kWMt3aDZ7ayoYJctXyNSG4U2rhJKtFbpsLwbW8CdPrlsVynRCTTmgY7JKpJJSIUsB2TFzhXSWuViqxn8uicIJBZwwJSKWOuZWuENFJETvopBBTud70fuqDl2TfQIBDoGKR', 'ADM', 'apprentice-operator'),
(41, 'Tommy', 'Sharp', 'Theo', '2007-01-09', 'F', 'L6ILtzRO2TE', 'jU0D2HuAMyvnE61hU46Azeqhd1A8fkJwziAPWX8eZhOwnHYT2Kb6ZA75uy2PDrPtWKctnCoTH6CgYUrFKrti3maKgU8NWNgALr2p3', 'ADM', 'operator'),
(42, 'Alex', 'Naff', NULL, '2009-06-09', 'F', 'Vu3XSggM1fKAOj2OPo1h1', 'QBD24cRCH8nXoxCB5q5SCOtJIKxgcZUokJXc6IZUsmqUGZNWtGL1rQuebfwUHXxp66X6G2Rc3hbovauGPOxRiNjfYE7O8NeAYwrZArRpNk4Ey2l5dhwIq7tFldoinWBd1igW1lWzsDHDXhOJEap4zK1abEaitldSDzqUeT7HTVx4hGvzSUlpabqyGSzLayaQfYgigrUUOUf0UGSiKniRp6Ds', 'OT2', 'operator'),
(43, 'Lucy', 'Wood', 'Peggy', '2013-03-26', 'M', '6YO', '7kpUBPmUGQ0m8BFZXpEmJIRlDi6KBpqbOaLsX5QGes5SAYoHpO37xBJmEdqVLDTetuHRhXcWrRu2WOVrgYDVIxjFsIsRR8ugD7vniRz6iOb5N', 'OT3', 'chief-operator'),
(44, 'Carla', 'Spensley', 'Bo', '2002-12-15', 'F', 'pEbontDzk6g7WtnVI6ASkxMUBssp5tpQl', 'k4b40lsaPWCm5KtDsXDTbQgzrmFe7TGHJtRQbZ8tfIzmP6ofPOiDGO0Cb13SC3eMFpDUDyNJhkwswxPWnxaq74F2Pq5u3C1gXJsvxQeo2rBJVVwAXjPdqfN6pGMOUvbygt5bAYaEQHYAdnKnWQGqLKXxGtLNHymd0OalCJ7XgzqbQbFaXNoIEvrbC1FRpEO08xStDqvaZOqjRiTJAkgpMXYWfyP1Fdi2OWm5syIVRbhhayHxWPOQ0', 'OT1', 'chief-operator'),
(45, 'Babet', 'Blacher', NULL, '2001-05-12', 'F', '0fn0', 'NVwpQta5h1cchlCxojbNhanoo0HmygcbCzrAah5EeJ5o02h12N6cZSpmH88', 'ADM', 'apprentice-operator'),
(46, 'Madison', 'Cooper', NULL, '2000-07-27', 'M', 'AYGQvvDf2rtOlC2NsB3jLFnjH6HKYPD2b3pAv', 's7dmmzFusfBx8xDZAX2l4rQkHswytMzWTuf8vmZWW8MXiS5X1dhPRb6A0W1JNtxkBAq', 'OT1', 'operator'),
(47, 'Christian', 'Stevenson', 'Katarzyna', '2001-05-13', 'F', 'c5', 'cAZC2RxWexNnSOGj36MJBTk3NBlMbbGGmUl8IHkxutdnJU5bkS5fwedHwLmHePv3LOhyMxOzF71ihLzl8072D8kbpYoWJMnKT735rtlleUisEntJrjYwialdjSX8UxQCteGBvxmcWLZa8yCBKvgx5y0IyratpRQWtu5v5kHDJrsU1DxOmX24Etb2wxVlS6XKkRlF30GTkPQOJt8UCqjkedu4gTJgQZesHUvuzCNnEB', 'OT1', 'apprentice-operator'),
(48, 'Lauren', 'Crocetti', 'Jurre', '2014-04-03', 'M', 'nUyEkP', 'hoRDVId', 'OT3', 'operator'),
(49, 'Niek', 'Angarano', 'Dorothy', '2006-08-12', 'M', '8jWqnkEplZRzKRyivdYln6eiI', 'MPCKQucBZHADjl5NqveZym5JfpNhm1EEVJKBqeUw7QzF2AXSTsdol5WqpNc1cFBoprMEYwZzgd5K7FGyKrTWZy0Us1IwPOrsscvuNZkISFKk1Spo2UIsAxkrtAB8OhfdSTBZq', 'ADM', 'apprentice-operator'),
(50, 'Babet', 'Haynes', NULL, '2004-08-11', 'F', 'mjQzu1XOrchE05DPHrtzs5oHrKZwjC1nV7', 'T20dcyfniebNKbjngvqyhsUlTBBXQwho7sPxyljpyqcwtz8KmschJxGXd2dA3Kw8XRnRcrgmGmavdTrPCvHbM8RcwfcKxLOfykBmKESsVYV0tpDhvLKHEmabUwgxGdWunachHWXDo8KmuMdDEezJkFZc8evOkOASxFFRHF2ruiwMsxFdPunn8Rt1vT3brRjxKlmepY82LFbNFJtpbC6afWNKcaIKz28TPKWfWf4LBNw6kg8kV0tKO', 'ADM', 'operator'),
(51, 'Tony', 'Shapiro', 'Nigel', '2014-10-03', 'M', 'PJ2ZxkMRCJcOfe1g2aP6Qr', 'MBBCkDz7fVIZVLm82emUY1Y5CDtZmCVh4LM0RzDSIrjg0Wop2Cb7fEnTcDcY5IlTWcBdOFL4iYJIfDO4BOLjrZug0gk', 'OT2', 'slave-operator'),
(52, 'Nate', 'White', 'Victor', '2012-07-15', 'M', 'AlyV0hwAYYRTG1Ayg5PmEmPTKPNQBQHrFJyrAo3sxcPo8', 'OpmjzgIDKXGogNlkzA6eLb63CcscMssBhZx088BTlcUdlYcSxjhKQXkrvUWb6wKRSb6nW1ZoblKK42', 'OT2', 'slave-operator'),
(53, 'Taylor', 'Pekaban', 'Erik', '2007-09-18', 'F', '3O', 'jVfCjG7yIUilip3VXtiKGuGb4Qdrm4ue0Tk1jYsZdQBCfO3TOhNNjr8vHLIKTeqzJJDC71p4WT3M4AUV07ZCMZ61xINwZWTPzVCMnXkDBiwlLEf0weQgpq8JqRE4i2XYRIMPPjm0PS', 'ADM', 'apprentice-operator'),
(54, 'Philippa', 'Suszantor', 'Jorge', '2000-03-26', 'F', 'RD67wpKNhgeAZAOZOXrjfrTon2lPWgBP52hy', 'NNHn2JEhY21AdblMu7XIJBvPFc0HdWSBGKu6qgTkmOBBRxypj5fBSlA7yQPgCEUjJW0WQKbpm85q3Y4USYWGcjqcWgtpSr5EYJIBhUEmDGw4Szh7Hbhe3UwAPrt3QVuYpFGW0mJNsigjE8DhOVzkYdHNnfG4XtnkdoS', 'OT1', 'slave-operator'),
(55, 'Lars', 'Heyn', 'Hank', '2008-12-24', 'F', '0ShjJXGxVpcOMpnkCUHvf2Ci8eDV3eOZGhUg', '8lDKveaLrZVTBeLwICUA8yoyr66AJU5dqOQtWqwfJhXRRXRZQhigXhgOpu8BUTO', 'ADM', 'operator'),
(56, 'Anton', 'Daley', 'Annie', '2013-04-10', 'F', 'JBkt3vHpkfIeXky74', 'X2UeW830mr0Zvcuwk7F6pPAYT7t4ffS2Aw3nyUMhkNltmuwowHHRZZCqWAuIek1kFQNFiQZ6ttlfXVkVUGceB4ewZ3L24xFS2Rr7jLAfMQ2Z0pzYkJzv5bDdFHGC5ucAVVHsEWmFAk5j2moJfBA03m2GnQn', 'OT1', 'slave-operator'),
(57, 'Guus', 'Sakurai', 'Henry', '2009-09-17', 'M', 'kViSKzzFLlYY', 'xgNpElfpgmNGstJCnFRB25K3uwOSKKqUEpOyNUa8SP7V0HMXCYytjZFCIqYd0dGXphijviQjZcU4rlTI1vjMnLDj6OTf0lbqLoiZG1UO3uGCKGLuNFD4RMeyiDv0eSVrAOAYtRpp5ZEYyMpOLMueU6vDbF0Xwpy4ix6ULmirpB0CJdtkXOyMk', 'OT3', 'operator'),
(58, 'Fons', 'Alspaugh', 'Ruth', '2012-01-12', 'F', 'qJT8m5bbJFjEWNe', 'l7jIY37bgkdcTuCU6MrcofqpJD0HN6Vb2qCNw5U4yQ8AhWX7vBBRY82cTLXdQDarmT0G2kDiTqJffFiChc5s5eQVAbILoqbmX4zelNicH1lNBKli5smy52U4nRrkmE', 'OT3', 'operator'),
(59, 'Henry', 'Matthew', 'Tyler', '2010-10-12', 'M', 'x', '1Vlf65FsZAHfvcgQPkkDlUbjHUaD', 'OT3', 'operator'),
(60, 'Ana', 'van Dijk', 'Callum', '2002-03-19', 'M', 'AGfMNh7iW858LQ6lNmjc1Yl', 'KHRN0KCN68RoyxmtQNHuhomCk4QJBKUoaB6qTjp8Fn77eM1SUrZ2ZFOUb6ZKxMp5wG5cKA0waaIYNmqirybIS0WHuxV', 'OT1', 'chief-operator'),
(61, 'Matthew', 'Lamere', 'Saskia', '2004-07-08', 'M', 'Ua6c1tsdlbhjeOht7RqBGDkJokLfNB', 'zd1NO2ibDSEno6xldwnJYzQjLOSiWucjojlJFNdfnx4jfyAyzXFiocEO5KBflLex5gr8P1z7LMTJO2AfvhvbpcDqbsMlwzV8ksz8VOZU8T42uDmQ7ykRWapykFCeVgzknH14aApWBJrEBk6FTzKlv7O4oLZRVSsQgMt1qeE38MBmYF506PIGLoChOy6tyvNBQhVNuoqZIbdoyg4ki6fdV', 'OT2', 'slave-operator'),
(62, 'Margaret', 'Oyler', 'Steph', '2013-02-14', 'M', 'PF', 'EvmGZzQlbzdQiCYhUFGNEvE0Qtlq1RuRNYeVnlQ2ixurs0rk1LW81nykbSMd2aNPlKcUVmLIl8IMNDpYMcammlP87CQvZ1nAgPXKQ5j3Yslcg0r8atVXNKlN6yuHFmfPgwkvBknApSgMy53hML44MkrFV3tqkpDeszPJE50pzVvkAXLkoEC6', 'OT2', 'slave-operator'),
(63, 'Alex', 'Yinger', 'Lu', '2012-09-16', 'F', 'e8a4QXt3uM', 'TMmTOBha4yCh5LbFsZ7AXiWnLnDBAK7QejXV3P0eOtjWrOMfQjq7EVIfQIbVBDdP7KRTg6VgeZ1EJHClbxMckDUJGGlvZ', 'OT3', 'chief-operator'),
(64, 'Peg', 'Schmidt', 'Claudia', '2010-04-06', 'M', 'l0sIujx', 'hRmUhe7At0cAm4ApgLmKnEMYLaSY1st02ScKgL8lVIcN7VbbudJtS138F4MLj14Sx', 'OT2', 'slave-operator'),
(65, 'Vanessa', 'Nithman', 'Jose', '2010-05-23', 'F', 'Xrw', 'N4dQj47ORdAVJTe5XUk3JslzjvwceLiDftYNVJwE5LzaLoz0YhOzJSfKRN55yUQfYFO6WCRwv7t13JQaSWO18vk3D17Nja3jDu86iJWYHnOYA3RcBqwrzXI4kpJJE5xLLfyoCtnfIlJbGuTcfikYcdQCCoV8tKQqkuVqnSdcWMTYIfbIolciNdZbpiiV84B88fGk5yutP5oAaJ3Vpm07EkJFldG3HA68Mk33mvXT4n3e5SCbaFyzro0mN', 'OT2', 'apprentice-operator'),
(66, 'Suzanne', 'Stockton', 'Frederik', '2000-02-05', 'F', 'fLgMj7NSOtjR6FxWg', 'uct2Sz3PsyP2du3XeKBdl4Lt1CeDuefFjBS1klat77DuAHDAAhjjczDqDJUapVIIhoLEASrnWdlnrgDp6ATvEdYwWLkxzFb2LSy7IsYo6pwJFeRx4GTEGTYGIJZWnDk', 'OT2', 'chief-operator'),
(67, 'Joanne', 'Wood', 'Scott', '2008-09-23', 'F', 'Rms7us', 'pEZG5cXy7j1ajHfuA7SzRUIntFZo0VXDC5r2cSveSVPnncqN1edeYOQurjYuZoBRnFu8ClvwkN8Hi0k7m4E70T63MRlhz8OOLFsGDF0ttlWu1ZQ5rffO', 'OT2', 'slave-operator'),
(68, 'Elena', 'Watson', 'Liza', '2001-04-24', 'F', 'IiYKdz2lym', 'ehKjcwMthMR3BzTHoIkQeWxqzZUVEicN5QaFI6kHbzOhUlmhI', 'ADM', 'slave-operator'),
(69, 'Anton', 'Mejia', 'Henk', '2011-03-06', 'M', '1l1yH0AaiW4NW8yO', 'O7CnDJlazRfevHXDjtC81ojQxOrTxhchZ2yjmcwYI1eI2XjcBLMSVIW4db7nr81pkKfGB4cDjWFjg02Mv8b501b0V8B', 'OT1', 'apprentice-operator'),
(70, 'Marcin', 'Ayers', NULL, '2006-02-21', 'M', 'CnZiS2TFwB5jpW2jiKbrsdupmRIHw2gy2CCMcrnU0xFiz', 'tBuTrEtEQWgupXI', 'OT1', 'operator'),
(71, 'Kimmy', 'Zurich', NULL, '2007-07-07', 'F', 'AuxhvOgNI4t0BhI4e0', 'L8vpn8j3GC50XAjyGajl1sbp1hOV3Z1h2KAuE5qxn1rmpZt', 'OT2', 'chief-operator'),
(72, 'Krzysztof', 'Phillips', 'Lena', '2007-02-03', 'F', 'JtzegYkYNxqaMObc1McDXp', 'MdN0kYXO6MjlcXBlphEUinfHZjy5A7FNbU22gEthAq7MVzigxuRksV01LVeAbGguHl', 'OT3', 'apprentice-operator'),
(73, 'Manuel', 'Nahay', 'Klara', '2010-09-02', 'F', 'v1zWRO', 'oom6Hr8HQTr80PGCLq', 'ADM', 'operator'),
(74, 'Kay', 'Davis', 'Talita', '2004-11-04', 'F', 'DxV6vv7sG1uxHp7FmpkpzlDhCZ4VT5rSanQU', 'MqRuxK16rzACVDgDp5mjbQnderrZ4BjHjLplXVItwD3NXGEnIcpc1xXNfHWKy0napGjnsAKVcckB1szZWAF0AmhpwnxCVCirWlFc0qlThmGvOggMgnNbtsBSMtU7T4FcQy07ySJiMdjm1eKqFQQm71Na6raSv1fuNQj2bZ0atTIhU8gI', 'ADM', 'operator'),
(75, 'Sjon', 'King', NULL, '2002-05-05', 'F', 'sbuEZG7UvmdC0SkQ2Lz', 'cSS4nlIEXSmncEIGDy1aBcKS6gW44yTGi1QW88HrEiU05k07n6A5S504ePc5jukzROdArQiEP0iTGfzBkRPCNcDODjYyfwkPuoE68n1OBmAkM1hA7N7mFvU4dvXjGjwso5Y5ljWMN0FIEwq1TuZEnIPqtWoJpRo7ecWBFd3koKf6aH2jlvPxOuxbWR863YsBKFuFBeXUp5IWdwlEdG7kZ8MsR455ZQNKQttbLlyZf7uvRWSg', 'OT2', 'slave-operator'),
(76, 'Cian', 'Hopper', 'Petra', '2012-06-20', 'F', 'WJK0ML', 'RfWKYHGxOAfmPoiIz82SvrNjdrm7eygkhX7CibdzAgY6HiFRDRom34keK2HHQ5RmQOgNe0rPWn4NuZlCNyTwWT4beMpo0QicT7bnivLCOk4iDXcVdfSRITDNh5ILOPSayrrOpPrMrz5qW50XftFmJuDf8EO1pvpK8Ib7XDieGiQLu7JLTRgqd4vCS36oF', 'OT3', 'apprentice-operator'),
(77, 'Sue', 'Frega', 'Ashley', '2014-08-13', 'F', '4PORQIZwPwzwP8r3EyWWqKR', 'kqNitARY36ayW6M5vMs4jL4vNQzQIrxFLMwyEovc2cFz0WNdBvBSHoWvM3EWP5qWDxxqOdVRQloJOnMYFuiYx', 'OT3', 'apprentice-operator'),
(78, 'Dylan', 'Lawton', 'Lu', '2014-11-08', 'F', '1', 'XKJTrQoHg7sdyp3YevJkwXgmtjMjhqSZX2HkxWOGldlv4s050ptnVwaJ1gb47wWZTx6M0p', 'OT3', 'chief-operator'),
(79, 'Sjon', 'Petterson', 'Ton', '2001-04-05', 'F', 'bTjqD2VTbdcawp3mWfbltoN', '5xHTLzImv6F1XdkgJJBQBf1PUwuvyAvNwqvwqQy2DrvlSJ1XGV2BCmCAZ4znkB3h3hRbAYKGGHZsA7ImClOLr', 'ADM', 'operator'),
(80, 'George', 'Jiminez', 'Cathy', '2011-08-02', 'M', 'ULy6gydZsMpQiGgPWO', 'Yg7sIJs1kvGdzJiOQZsioi8Sfgy4RJYjfO1ZSlNRcyc2xFWTMZPO', 'ADM', 'chief-operator'),
(81, 'Sharon', 'Durso', 'Juana', '2010-07-30', 'F', 'zFrQhfJBvb7vHI2c7ANLVnWfNDus3a', '2KFBJ7VY5JT0BJoiQOiQMMelPZF3juVtjj20p6x00xYGOyVrV6XuieNeIrJOPobabM8kUZtFbQQst4qen3JXOhQZyPeRIrDoySjcP8PKa5v6hCsMYUVUsb2Y73aViUtLTyAOtQ00O', 'OT3', 'apprentice-operator'),
(82, 'Dave', 'Walker', 'Niklas', '2011-02-13', 'M', 'DvJTGlXCdoeyPPV0kNLyI', 'yMzgYZy5uAElOSfURObexBbkIoDcOCZxsaYFgsa0Y4SgPcZKZl0YxL1VogetC52g3JtTt6fmkKJrAFhXA3ZpdHIvmsrSXJBTV4NNDClCIjGSag0zI4y6mVRYduSUC5EM04YiKKykvq5JDL1KGRBbJOR4bstvXQ8KHcZcWp4T3nkeuYZ8RgJbqC5YMJoORLSg', 'OT2', 'operator'),
(83, 'Alex', 'Maribarski', NULL, '2000-02-24', 'F', 'EMw1uERzSA2vW62P', 'hXjv4ZPPBkdDEflxCQMiwZweWeBiQ1X0g5c3ksZYmHBpRxRofNqDz5XrpJxBS6ENLNLOmUoan1xq0TQw2dghxRjLNMHmtQ6pDhcR2M86Cm', 'OT2', 'operator'),
(84, 'Luke', 'Love', 'Martina', '2010-04-17', 'F', 'c3yL4E6TvFp1lBy5A3WDIhcKP7OC6YE0YaG', 'lISjMzDGs1iueRNoHgG4Q6hz1UiGtKEHUiMmFe5XBcGtTY8weUlJJclcItRKi7emStReG7W6byx0TceK2zIxnqmgfenqeKIPPnVsYsGKAUJ5VGLZYMuokDQeP0PqEqVyEob0AYhaJGihbEQ3sRqz1ZxI1SSDxkg', 'OT1', 'operator'),
(85, 'Lea', 'Gaskins', NULL, '2006-03-03', 'M', 'aPtpfhSXtTJgf03wdVl62sQ0O1i2Rq7zU5oAM8ZaIsF', 'hV6sPkyKtaT6bJg7ahecDjGeaCEYBCDfYWUv8Yy0vv5Zj8aElQSwdH6mB6mQ40WgPpqXaE8nK2fVq75LIvSaWTGxI1z31VCpXHkn', 'OT2', 'operator'),
(86, 'Gerrit', 'Otto', 'Sjaak', '2005-07-05', 'M', 'vRPqbZqn68bSJi', 'wb4j8JoqvQW80CuXGhl18aTlOAlHrEXyyy8azjWjAXGgk1S5QnJA6eILWsh6wZ1azaaMNt2QJqh8afgXyG1s4n1WGs0Nc6Qj0TJ5TWBGFbeZr1tkMQS4z5LfewghBkgVEWn5X440Au7EmGoJAAkryALROsASyH2gG6JhUxfT4v8WJpsv6P0HPANlTofG112kHQOsiByLd', 'OT2', 'chief-operator'),
(87, 'Karen', 'Huston', 'Pauline', '2011-03-16', 'F', 'kngbQIVxTZnVO3xGsz', 'YKbOmPOEflaRZJonQKNnzMOEUNTQIUJ34C4BsGRxk6K3H7EMBUngN', 'ADM', 'slave-operator'),
(88, 'Dave', 'Schlee', NULL, '2013-12-10', 'F', 'G2jFdQk7rerQbrArTACFlCUQFtIhFLvMCIpgoTQjQJ', 'PTp1ZkpEzBCzyvDxDtnu6OIDufNAKTiU4fJomDoGpCz3tJkUft6EFO5BfeCzkhFTYVfeJxtZgEtEmGUF5kwTdbpXjwBBIjYQKV4nsxN7n7NBG2BHeH0ceKeTLQIeOGBVuyDjRAGDhsYR0Omq7P', 'OT2', 'operator'),
(89, 'Maria', 'Pickering', 'Agnieszka', '2013-03-05', 'M', 'TO3M3gsj1a1dKSWOIUStm8trd', 'Aj3ApG0gVFVufJ2lPiE80xSJZdw40V608s5zQ1LYFNIZ4bXUKAvSXK8ChIlLKnietFEpR3zrDXe0ApOURpVADP3lCSWMJJETf85ZxzvBzTciAjlZ6mCAUHeuhE2L8BZlFFYgDIe6IJZjbz5vwptXpGIh52hMBxFkmfr', 'OT2', 'apprentice-operator'),
(90, 'Tomas', 'Jiminez', 'Matt', '2004-11-18', 'M', 'vloXJywyEhcJRdVeb', 'itNVaOZE0uRHITU2pVqnYgZPfXnCB4hg6k1sdXrPiztsfg2o7IQ2YOrOrPwCgyIOOpSorVFkOmeqsNDvah8B7d6YxJ4cOmFSPnYOosqRRdsLaxCtqDsgzA', 'OT2', 'operator'),
(91, 'Sean', 'Zapetis', 'Rogier', '2005-11-02', 'M', 'jcZ7HcREl0Ua1R5psbbPK27iSC8XstT', '6wUJwMtMt38TUg6SUTYiBrl3Ym0DLmbtd40Hc2BnB2eh4H5Ntmd2Ymf5bYiqe2JcRxlKyOOlDxZCo1JGWb3ixbzalcUb6HXqo3L5zadXrCqglFUIhevbQFgAZpOtTHbeENhMCdSuqDnSCQlY3YAUSeDxOyEgBR28PHjfNvHJCzcKwRzoXnMBlDpIqjj0abp8YYmsEAcqysqd', 'OT3', 'apprentice-operator'),
(92, 'Lizzy', 'Wooten', NULL, '2009-11-10', 'M', 'LBCZ8bUXf0Sdx7UPqIjIvIt', '37BdaSkUZKYU0a3OTGerZNsrqGNryTtSzynbmolwRqBJRaHlrxp0SGku7Xp0NR1bdWZNxohRXAZYHRXnRZFeYfVYp8W2CdbEx3QcID0EVbaiE2P2lfUvFnKodEJ6fuw3QZzpc51DpgJE66yc0Uq51cr4pkFJAkCcrZIXFU', 'OT1', 'apprentice-operator'),
(93, 'Petra', 'Igolavski', 'Jill', '2006-06-09', 'F', 'sHnM0QEBTUOuwGtY8wthmfhbzjIY', 'swoMstoe2qEHLE7KSm0qGEsZr2P0rD2vswPqsu7FJBGlrd3Ca1YznVLAUTqgEQ3ccRjtyWQ3RCdxYL3dW8HZZxHqaJyTz7rqUQVV5gSpgZHTlFYYRBVmVS2u3erSSwnbQb6dmBSVxYmb', 'OT3', 'operator'),
(94, 'Tony', 'Van Dinter', NULL, '2004-06-03', 'M', 'yt1', 'Q7EoHk2K2ZOlONYmeXdZb0wCXlApQhkor8cYCY6rzXPgtb1NwK5FCbnniL0ZeqCU03Dlo5ChlNNf', 'OT2', 'slave-operator'),
(95, 'Cathy', 'DeBuck', 'Rob', '2002-10-11', 'M', '14gn', 'FLbjn1q0jJouR8PVG1XGssvOs1qjLoQK4XlzkdAwPtH5KxMBFobFnhmgESMSfwmknUmwmB7GaWR4Lu7neqkobuvml0dNcO8HGXKwWMrQJpLBZjreU1XnC2cKlvxetYhrw8hJU7ZWp2hO7MDiO6fbXxQgzgiImGFAAPltcRZkCHRvH4AemkgXqCIU', 'OT2', 'slave-operator'),
(96, 'Camilla', 'Pensec', 'Jody', '2003-06-12', 'F', 'dJ6wM', 'AiLfurKR2LtTSeaWB2fAEPUIXYAi5HyoMPRsSg5BMFKw3Cr6fuGwMeZ4KCFQsXnJ1xIPXYRdn7LKcOqujwckRZipFG53tOyfHKz0CsKCwTZykOC6kKTNkFoapnGCnFMbQwz1XkC', 'ADM', 'slave-operator'),
(97, 'Luca', 'Dittrich', 'Mathilde', '2003-10-10', 'M', 'oQprYVUuYNFEOAu1NF', 'G2DfhzfcbAZbgNOxrJi00usCmFBzEq1k3AxVYmOkvPl43phHTmsO4ny4MReKKkzgfzvGx8EjN4rUcBYq3eliwepw6yFyqFuwmwrzHDQKt7pV7Rt84GzPNohnSFezp6u7Rmh2vWgzrlZnRBEyxtOO0fOFcOFbcy8dR2zqo73icFqyrv8S', 'OT1', 'slave-operator'),
(98, 'Patty', 'Arcadi', 'Jeanette', '2013-04-28', 'M', '0sLKIu6Sa', 'Tp7oJsJHLp8VOg2G7daghGw0zYseUzTxoxExoMjvvNSeLy0u5IJovuk8SQzqaDMErnRNnlIDxWfyZgO8Pnht5kxhtopmM1UhDRP0Ik3BjEa2uFMVpQjUcvXa8QSfudbrUcOHL1LeAIQ06d7kjebeq1a6Ejk1yLDYXWmIpPjsSQX75JHE0snoQXyFWLYcIb8TG', 'ADM', 'operator'),
(99, 'Victor', 'Brown', 'Truus', '2010-07-21', 'M', 'oPpTvxdz7wKeziLeSs2sPSwpOP6W5r678fL', 'UdqkjS0PndIQi8E11Qz7GQ7VZYgXzpYnxzPZvLz0fyWfOAH07UULhbtWTupWFELQbjLs', 'OT3', 'operator'),
(100, 'Jesse', 'Bertelson', 'Guus', '2002-11-17', 'F', 'jj1boH0Wbkk8R6AOHbYlF8vh5a5Xx83ZqggyswF', 'nCcVNrJ3oY8G2dxNYCA3pvowoswzXdOxLvJ5vkdHkak2OKE1oruVf7qlw70qMyYhQcaCfphzBRWaByqx1cUKTZKvuIZegWUzoAPoVOARxJ4PYKl0cP1EzqthV0rhRBXk6PA', 'OT2', 'slave-operator');

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