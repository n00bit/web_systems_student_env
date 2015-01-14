<?php

use Phinx\Migration\AbstractMigration;

class InputBrigades extends AbstractMigration
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
       INSERT INTO `brigade` (`id`, `login`, `password`, `brigadier`, `auto_reg_num`) VALUES
(1, 'Nicky904', '2tPXuiO1Rq7UnwkNIis3yrOm2JgbrQDWvDlQg7NPgTEwEVJhufRPrG5wRGSuXkDdNwUBblcLp6z0eomQkLQOZFkSD22BMFB1W6l0VaZzX0gWSUfwNgzuNlc0pmC6r7COevGGyOngKvQBS3oruYQPvMHjewYA7aEGenFlkETpNcHIcGQNpIyvMEOfns0cuPe5ObzwVX6AwbdVwSGwDUA8ulr1Rtrm', 'Pauline', '5'),
(2, 'Luis8', 'ynzE1nXBlJrHSN0lqbW8hLP2AEB1SZAu1l7TsaWXbxLI4JiOtx66pFkHgoAViXYmBtRjUJp06NMDPNiZ36Blk4Rfj4A7tyXMQJOXKEgWR4wIIW1gcH5aynoMdXm1B8KUlY2ZbpBcwhbapmOWhzkQ4w8npTikyQ3FokiLrYH4dvTGqgSCAeHZ32bgC1jh36icGoVqqTl', 'Albert', 'Jx'),
(3, 'Lotte', 'DHmW5UwjEfzYMeGB', 'Ivan', 'LDRDnp4e3'),
(4, 'Nathan1', 'HmAMUN7yUqXD3jgrMSxfHGmsHm0AuOBgYw8tFreKdYXyEQGtUWeoPX6aWm4fYgP3FDcvIlmc6fFHTJmurvsOedA64foxZd61CJpubaSzAwx8a00NaorSalQwZN6wGZGZhN4JKh0JtUliOoDgkZ3UWbvSH', 'Jeanne', '6rS'),
(5, 'Tony0', 'dGWraWEyTMFjAHTvqSXJr1DyZmP6Qd1NTA3tcxwHmnkn5BRnHfcW1KFjdfVQlS37naNZ36yttJdotFPmgN1Ve25cdCiupPuLEujWaXdG5srOHEVfq7nMEqB1Zu3IecwZlhXUf78Py1vpL7LBzhvH1TZtnZvKzRNMRTsk2HjHrnI3QuGvOvPzZPv1fMFtAMbuGNV6VB5T254hjsRlitkLlcn3XpJ', 'Mary', 'JpCEkjLl'),
(6, 'Carlos', 'shHeqMXfcgyNOJXUu6Eb0OjlUwGCIi63wH4SGeG4KC6TlvRV1pJTvzWcIjmdQg0u', 'Alexis', 'S'),
(7, 'Viktor0', 'mPHxAe4', 'Thelma', 'asyi'),
(8, 'Jeanne', 'XskvrDKzslpDHyIz5Qr61yLN2Dyf6UGxDoW', 'Trevor', 'AP5'),
(9, 'Freja77', 'fmF1LeeyUwfxnTYpkFZdpfsrTK', 'Mike', 'VHSpq6Z032'),
(10, 'Carlos185', 'pSccKzH64iGuzM80MyXQXCwKR2owFrWzrs6STsyPdXAxVRntBND7iBTE5REqkb2HBOEEGyP4XBVAmq4RQhOk5kMxNuNngz0HDJ22EdnybebGES3F3vZzbNbCGlcKnhU8gyplQrmcMk8h5zMN7KlRMxrb8LImQca60', 'Nicoline', 'A'),
(11, 'Joey1', '6EIrF7vw2bgDqrEebtx3ZDjJkUjyhUBzOOmLagd3mimyVONXQi8', 'Nerea', '4c7XTb'),
(12, 'Raul81', 'RHxNVFjMMsFSmZwVKLgGN3shuU2cGiDpP5W4FTA45QOQvNPA00iYhuSZPwprAIzjKAjYO8n6ezZdcbDBTYixcVDxe6nMmS7WC5Jwau6n7MDrbl8khBilcanAN1BzYt4nHvt01DCEyAPPLCyyB2xUlssMZ3bI', 'Megan', 'f'),
(13, 'Amy3', 'nBhQrfXBV4x8RMemu8Gm', 'Ben', 'Vt'),
(14, 'Alva0', 'WHbV52mHZXtWdC2W4wOmy5hH7yVJLj178GoJZNQn1A1TKzACtt1LQTbG7CC5rSOGoglGerQSmot1L4qqBJRsyLndpssQ2oOiDnF56VvYylibup6XdG587Tb', 'Izzy', 'ZtD'),
(15, 'Nigel653', 'edGwebzUiGo2DzYJ2L3nltenq5V45XIW', 'Karin', 'sRrHd'),
(16, 'Klaas35', 'IShPrnKM4BRSaS04MlQbKpAK07PTrMADUdyufvi613ObxNQSijP7iu07Kw6HqI2', 'Sergio', 'k2rln1FP'),
(17, 'Patty186', 'eNWLkXU3lLJOM3KIzKKXjfFAAkY37I6rTbhBb1eSYN7z7ZQpXf58OwH3juIYcqDLOUZ7cVAMdXe0DwCJWQitCNnnM68TxjnatxAIz4SbJipU0MGGyNwKVBaPlP5jE80lospibX07uzVvs306JdwVRjK3nOG8BbUYu', 'Maaike', 'nJNR'),
(18, 'Jamie5', 'yLTi8RKsQZYuNDkIT7jCJFf4vnXre477atm8IqVs4E81Jj8ixeq4oDNwsHzUVvmyLli75whvVAd31cXtZDOoOfzOdHhfiBSMDtPW2AdJXyZEDHWdH2TEg1Zy7FQ0', 'Matthew', 'ob'),
(19, 'Liza46', 'euXK0ghdBCRBE22VkWVlXMPEdx6bkLCH4KNV3WzCuz8RTEgcboRikE2bzW8QUkNhuiCzfsiYDm7ZHThRWBSDQWHDXRrj8bX0HVpBBcTYkjNbfBPf4NksE5gIIxMgB4nTeRu8G2HBH5e0B0LwA0jnJfgb', 'Leon', 'anXbWDN'),
(20, 'Hannah8', '2lQdhjxHFiMT23wbSXn4erOeVYo4UHnnWble2cHPZer2jgrMIkCcXPanCunItNybVxvybsTCzHRvD4JmUDFXwenoISgu5Gm2d4Wtt1ewioQK8jzmury6MBp81l2lUUowebmQoFkAEbDeFfUf6dpOwW8kicuiORd1Lh8nU06chjlJgcisVyN4jSfNfVwBupZPBU47i8nI6OrlZ3iKmiyaeaN6J', 'Rick', 'MIM'),
(21, 'Christian8', '22OKZtD3wZEZJsLiNaFeTRFFq8AE4aPyTHlVXg3NZpqckeJj1AhcDVKSGzkF0bKkvDHa55qCh7c3RJcpt1MxxXsojyqI5oyF8VN3YIKe71ZsiANXaasnmX0Lh1mtkSSi28Jdv6vMMVMSdgl', 'Lucas', 'Q6ecLpVTY'),
(22, 'Pawel30', 'qRVuniA5jf6Ih6tt80nO5brrDvuBOIHowsOG8tb6x4MpNVAEUXIz4mHumF8NEBCchzmBS', 'Freja', 'Y2gsgHcx'),
(23, 'Niek11', '3rtRgPNSBePoafgMwxJkZ2qLVEBwoYuP8Dd1e2EYFWbCHiF0oCGUYeO0NaOjEbzCmoUPJKudKnTJwfyB8KFtCcmhw', 'Sid', 'c'),
(24, 'Iris', 'IIcyR6HpGzTgl1KKQV5ac62cCzEpwJkcx1FvwWNlfWU5ojGRx0qgxmdEHhpaufeOvysnhJJTUXR4MG', 'Ed', '4'),
(25, 'Syd', 'AcjyUqPCTKLZL5BZXih6OROAy0jrWMkLl2IBfWBSsWSUcbwEZr2sSUakFy2IqirCaw5T7eulgu1k7Tui6GY4cW3Qv7qDRnBSRGVzz12UXZ', 'Sid', 'o'),
(26, 'Maria870', 'sJQPmaTWeSKS0pA3DpZM48VowjJjsrfRj6zsHrryx6gaDSRIoGwNsfylPPFvzvqNKXU6GuWHV2k7O42QZnX3wB1sji5l0ZdazrgzBTN8YFloVJlJGfDxo', 'Emily', 'ZjXbM70Q'),
(27, 'Sofia', 'o0SWZJzj3O8ie8cl5Sj5X3If1', 'Lisa', '5j4'),
(28, 'Scott64', 'ksWVSMCx7vvUpHbpDjIMrRhiVo7zsCwynTMzm6tUAbvdGmUI5tRGAbpeNczyQf3BhbmwpjbC4i5D6mphFcThe5Lzqo2yNjRfm7JVg7mVRYUzIIYePJzGQDdH0AoKh2m1TBilBxYM', 'Jeanette', 'eyk'),
(29, 'Jim', 'FeSGStAbYL1G8GYxfVi72BXGokC7z5Di0ZrNgqOsJQE0PMNacdrqc76Ip5Uzia7ukOdRMvTvFEDY6kSqCLfcNOOjsVOJYRfRySSLLaRLjTSyzTlWmR3ZMmXoFdO5F4HpRQCmyAkA7utxgFOuk2zFJIW7TnHd7h0qC5pp28mXCLohPUgFTMGcOuguz', 'Oliver', '0lMW4'),
(30, 'Jozef1', '7BtSkKnyPPbLfPe0mcbndKuOXGvMJAyo6Fo7Fk1nX1jqLLI6rZ4d2X8dVnLJxUzEzjfgDOr7qoxslcdsoNUmGOuq', 'Elzbieta', 'Mm1'),
(31, 'Tim', 'bUSkOO11YLj7nMw3izDQbC2vyxf7rwPajExUxdLQCD5yTe4plezaRrse1rAvSJwh5ju2WhEhJRmjooNBVqnrwMx8cG2OmbTapflB5nvamP7kqLIROxnwOUyEAqgSnoyKOCrgRgscWMy1CV3IblIIlmJ7rA6TPnBvAYdDkfopGNW0kKGoMlLAqDNjWIPke6GmYsh8iK2hsL4qnhYdn2AG8fAQ1FMe6eP4mGmVb5YOUnDptOiblXEXspDLZkJNI', 'Hannah', 'Hh4F'),
(32, 'Caitlin', 'SkYzNixduoGZvmth', 'Martien', 'VIkLaAyj'),
(33, 'Piet', 'bPya1kSwXliwHvBwGKgwvtu50dQzwYSTZp6Heze45sSn7st2eCKMS7kfxoO0t6XRKmReXQqQIfQJXJCuFRdX4gy1lUiQjlpkvFxFzXPFWCGvIlzTeSuG12i02qJJhSYzzJixdZm0OjNXSfgS', 'Jo', 'HMmzDx'),
(34, 'Jacob1', 'QBJLG7zcdd0ANfBg8YfKpxorJfUGJs8S7PJnwRlEbf0Oss1rRtrLDnYYoFx', 'Krzysztof', 'IVc'),
(35, 'Edwin68', 'BcMekrHPNKRFDKxn3C2Q5hxhxL2H8Bc2yPoXoGr82nHNKk1FIVkOVtm1IkJqsD0fttWn2AendcBiJwmwSjkXfjNvxbywpFegrZle7boNFW7nCkLZ403TO66qNzQZCOhi6mKyaayjs3dl', 'Ada', 'kY3yDU'),
(36, 'Max303', '75KfPSfBoaUBBC2vUsdSfOSxb4rcMNaX6iYAC42IEdTKWn1N2hypWDP5I4UEvAZBPPTBzMAyyvV8xdxKdmpoU78t7iP1pLPX6b1inPO0CtTbqjPBxvZFLcAB4zd1PUgNdbD427UuNrwhgJ6lyOw3ryJppAKngbcHxiSCvj2w6jyS5P3Chgqla6d51xZe4DHz', 'Jonas', 'E'),
(37, 'Jorge', 'OFz6Zijt6fUvYlTkP4KojwGHqpfiHEsQy6OSvySzJ6SLsOy42CC1AfD4gwMvPysWYXZwJQRWBXoNY0XdCw', 'Rick', 'xojVzyr'),
(38, 'Lea3', 'ZINmsXLGHeCG5BoqqQtjyE3pJl5HG0WnaQLIQ3diafYLodWeJFhpFgciuzPRlqVTp7wAz1Lwoj4MgGqZdVVfxk0sRIvakn3vOSumHFCKBakQN8oZ3BXBnUYOkkemzREgNzgbAATVQ7x3gBc', 'Joe', 'gpXlhwJe'),
(39, 'Leo895', '73DFlQnHwgMaPAOjOdp0xXrXshLywlKjgfLvbNtLnT8gVCUFushFjNMH1Qn4RR3OxClnvG5', 'Susan', 'Y'),
(40, 'Tom7', 'BmnsCaZX0QBoWAJh4ckwFAbyHcEPmrZ8cSPfP7byKld4INuocwV8FHtIk6oqUL0A4QWCrUkDlsTcELuRSuzaXlELrU2iPRfdudO1fo7E0Dve8Xwx', 'Jules', '7A'),
(41, 'Alba156', 'KkfV4UlborSeW350SOeNpURpSNqa5luKB0yE6rVSibmcpPQHzIPdZKu1Z45onmFRPf8ZzqDDimzt8cPOLGKIqfIQDWOuvG5IFXXd3bLzYhGyzx4FkYY3tdbrdYgaae5iC2x1F7BLcRld57zJFBgXtOqtiL0kO05qqeJozzQwcfJyu28tJ', 'Elzbieta', '3'),
(42, 'Ana607', '6cNFPHIF5XZJqY7i3lYwENRnHAq1cRrPAuSfCgVpf6FsLHblUlv', 'Philip', 'GkofW4'),
(43, 'Maggie', '3wmgtHBQnrVhKFFumWCWgrS0IikEKKzkJdHhVclGaM5AADDYGZn8gi7m8yUwhxNASza', 'Philip', 'Ma6o8yv3I'),
(44, 'Krystyna387', '0VI3W', 'Co', '6vN1bY'),
(45, 'Andrew6', 'eG8UrJkaTW7UeBPucUPwikmNRHw7SwTxubtXUlE3badX8wAbkbz7Lb7vzh6jC2cpnhoRqIQP1LCR5RMAm7FNR0SGuWBcXed8FTVUwoyPnopXH1wtCmLhdHGvQ5v3xp3sZJj6s0Zkpg2vWQLPJgcoK41rDgTxCYhT4ZW8rPyqtKKCr8QnCg7P2', 'Tomasz', 'kXGj'),
(46, 'Stephen991', '1Ntkfaw3eTdB3Rd0OJ1SbKIJbMVwwWVFFP1RNTIoOhYYdootGdILiCktnOi5SlP55RgkE3XwmylYnIBCc3kav13hT20qcBtC78fbxGVPAz0GDXkFXC80PKXmvm3uQflJjaymHnKS3cdzDHtAxRVKkbaEW20APFCRKZluNo', 'Oscar', '8XwbHou'),
(47, 'Margo296', 'cbyrsecoungTtUidzcqzhKgDMNJQpuLBRDZ', 'Jean', 'WB8R'),
(48, 'Phil1', 'DgjZqCaHnV4bywYD1MyetFdOC0GAapYSHoSDmNH', 'Al', 'TSjfL15dw'),
(49, 'Co87', 'yW7aiWCCZ7S1OQZVbJjj08yP3fj5Q60CmAtsDahWE7QCU05ktwAymDPyrjSELYWUuqF3PI8vcccu3WUCRBWNoNqiT0uRnEBq2fGoxgFJOqdXW3QHpHlBeJbXqXVa', 'Samantha', '7zGEFhpc'),
(50, 'Cecilie907', 'x2ckV5s7tNeQ82XZyhCbnGPfpQD2yK53uwJGfDACyjI1YnyIJNX6kQwIbYSKqUTOH1JLmRSlVYKojS280gkDAoqcZrV3EdcBn6zhR5ZdVTHAAikIchEBXVuzr8ph4Dc6qLlVGoyKSDVqWFnXcOaLcobKqH62b3nzPFpXb3gSFXJnRpb', 'Hugo', 'NwWu');

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