<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240319101714 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tracks ADD COLUMN description CLOB NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__tracks AS SELECT id, track_id, track_distance, track_image, track_name, track_surface FROM tracks');
        $this->addSql('DROP TABLE tracks');
        $this->addSql('CREATE TABLE tracks (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, track_id INTEGER NOT NULL, track_distance DOUBLE PRECISION NOT NULL, track_image VARCHAR(255) NOT NULL, track_name VARCHAR(255) NOT NULL, track_surface VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO tracks (id, track_id, track_distance, track_image, track_name, track_surface) SELECT id, track_id, track_distance, track_image, track_name, track_surface FROM __temp__tracks');
        $this->addSql('DROP TABLE __temp__tracks');
    }
}
