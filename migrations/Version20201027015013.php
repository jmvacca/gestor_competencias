<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201027015013 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE disponibilidad DROP FOREIGN KEY FK_4B6AAB2FBFFCDD71');
        $this->addSql('DROP INDEX IDX_4B6AAB2FBFFCDD71 ON disponibilidad');
        $this->addSql('ALTER TABLE disponibilidad CHANGE competencia_deportiva_id competenciaDeportiva_id INT NOT NULL');
        $this->addSql('ALTER TABLE disponibilidad ADD CONSTRAINT FK_4B6AAB2FE02C0CED FOREIGN KEY (competenciaDeportiva_id) REFERENCES competencia_deportiva (id)');
        $this->addSql('CREATE INDEX IDX_4B6AAB2FE02C0CED ON disponibilidad (competenciaDeportiva_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE disponibilidad DROP FOREIGN KEY FK_4B6AAB2FE02C0CED');
        $this->addSql('DROP INDEX IDX_4B6AAB2FE02C0CED ON disponibilidad');
        $this->addSql('ALTER TABLE disponibilidad CHANGE competenciadeportiva_id competencia_deportiva_id INT NOT NULL');
        $this->addSql('ALTER TABLE disponibilidad ADD CONSTRAINT FK_4B6AAB2FBFFCDD71 FOREIGN KEY (competencia_deportiva_id) REFERENCES competencia_deportiva (id)');
        $this->addSql('CREATE INDEX IDX_4B6AAB2FBFFCDD71 ON disponibilidad (competencia_deportiva_id)');
    }
}
