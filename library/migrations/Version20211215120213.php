<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211215120213 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category ADD directory VARCHAR(255) NOT NULL');

        $this->addSql('UPDATE category SET directory = \'Pocitacova_grafika\' WHERE id = 1');
        $this->addSql('UPDATE category SET directory = \'Operacne_systemy\' WHERE id = 2');
        $this->addSql('UPDATE category SET directory = \'Databazove_systemy\' WHERE id = 3');
        $this->addSql('UPDATE category SET directory = \'Pocitacova_analyza_dat\' WHERE id = 4');
        $this->addSql('UPDATE category SET directory = \'Multimedia\' WHERE id = 5');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category DROP directory');
    }
}
