<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201023230317 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE competencia_deportiva (id INT AUTO_INCREMENT NOT NULL, modalidad_id INT NOT NULL, estado_id INT NOT NULL, deporte_id INT NOT NULL, usuario_id INT NOT NULL, nombre VARCHAR(255) NOT NULL, reglamento LONGTEXT DEFAULT NULL, permite_empate TINYINT(1) NOT NULL, puntos_empate INT DEFAULT NULL, puntos_partido_ganado INT DEFAULT NULL, puntos_por_presentarse INT DEFAULT NULL, cantidad_maxima_set INT DEFAULT NULL, fecha_baja DATE DEFAULT NULL, hora_baja TIME DEFAULT NULL, INDEX IDX_15D4C8791E092B9F (modalidad_id), INDEX IDX_15D4C8799F5A440B (estado_id), INDEX IDX_15D4C879239C54DD (deporte_id), INDEX IDX_15D4C879DB38439E (usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE deporte (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE disponibilidad (id INT AUTO_INCREMENT NOT NULL, competencia_deportiva_id INT NOT NULL, lugar_id INT NOT NULL, disponibilidad INT NOT NULL, INDEX IDX_4B6AAB2FBFFCDD71 (competencia_deportiva_id), UNIQUE INDEX UNIQ_4B6AAB2FB5A3803B (lugar_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE estado (id INT AUTO_INCREMENT NOT NULL, estado VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fecha (id INT AUTO_INCREMENT NOT NULL, competencia_deportiva_id INT DEFAULT NULL, numero INT DEFAULT NULL, INDEX IDX_1A8B7D9BFFCDD71 (competencia_deportiva_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lugar_de_realizacion (id INT AUTO_INCREMENT NOT NULL, usuario_id INT NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) DEFAULT NULL, codigo INT NOT NULL, INDEX IDX_6673D755DB38439E (usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lugar_de_realizacion_deporte (lugar_de_realizacion_id INT NOT NULL, deporte_id INT NOT NULL, INDEX IDX_9DEB6776B435A53 (lugar_de_realizacion_id), INDEX IDX_9DEB6776239C54DD (deporte_id), PRIMARY KEY(lugar_de_realizacion_id, deporte_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modalidad (id INT AUTO_INCREMENT NOT NULL, modalidad VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participante (id INT AUTO_INCREMENT NOT NULL, competencia_deportiva_id INT NOT NULL, nombre VARCHAR(255) NOT NULL, email VARCHAR(180) NOT NULL, imagen VARBINARY(255) DEFAULT NULL, INDEX IDX_85BDC5C3BFFCDD71 (competencia_deportiva_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partido (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE resultado (id INT AUTO_INCREMENT NOT NULL, resultado_local TINYINT(1) DEFAULT NULL, resultado_visitante TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `set` (id INT AUTO_INCREMENT NOT NULL, puntaje_local INT DEFAULT NULL, puntaje_visitante INT DEFAULT NULL, numero_de_set INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tipo_documento (id INT AUTO_INCREMENT NOT NULL, tipo_documento VARCHAR(4) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuario (id INT AUTO_INCREMENT NOT NULL, tipo_documento_id INT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nombre VARCHAR(30) NOT NULL, apellido VARCHAR(30) NOT NULL, numero_documento INT NOT NULL, catc TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_2265B05DE7927C74 (email), INDEX IDX_2265B05DF6939175 (tipo_documento_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE competencia_deportiva ADD CONSTRAINT FK_15D4C8791E092B9F FOREIGN KEY (modalidad_id) REFERENCES modalidad (id)');
        $this->addSql('ALTER TABLE competencia_deportiva ADD CONSTRAINT FK_15D4C8799F5A440B FOREIGN KEY (estado_id) REFERENCES estado (id)');
        $this->addSql('ALTER TABLE competencia_deportiva ADD CONSTRAINT FK_15D4C879239C54DD FOREIGN KEY (deporte_id) REFERENCES deporte (id)');
        $this->addSql('ALTER TABLE competencia_deportiva ADD CONSTRAINT FK_15D4C879DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE disponibilidad ADD CONSTRAINT FK_4B6AAB2FBFFCDD71 FOREIGN KEY (competencia_deportiva_id) REFERENCES competencia_deportiva (id)');
        $this->addSql('ALTER TABLE disponibilidad ADD CONSTRAINT FK_4B6AAB2FB5A3803B FOREIGN KEY (lugar_id) REFERENCES lugar_de_realizacion (id)');
        $this->addSql('ALTER TABLE fecha ADD CONSTRAINT FK_1A8B7D9BFFCDD71 FOREIGN KEY (competencia_deportiva_id) REFERENCES competencia_deportiva (id)');
        $this->addSql('ALTER TABLE lugar_de_realizacion ADD CONSTRAINT FK_6673D755DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE lugar_de_realizacion_deporte ADD CONSTRAINT FK_9DEB6776B435A53 FOREIGN KEY (lugar_de_realizacion_id) REFERENCES lugar_de_realizacion (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE lugar_de_realizacion_deporte ADD CONSTRAINT FK_9DEB6776239C54DD FOREIGN KEY (deporte_id) REFERENCES deporte (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participante ADD CONSTRAINT FK_85BDC5C3BFFCDD71 FOREIGN KEY (competencia_deportiva_id) REFERENCES competencia_deportiva (id)');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05DF6939175 FOREIGN KEY (tipo_documento_id) REFERENCES tipo_documento (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE disponibilidad DROP FOREIGN KEY FK_4B6AAB2FBFFCDD71');
        $this->addSql('ALTER TABLE fecha DROP FOREIGN KEY FK_1A8B7D9BFFCDD71');
        $this->addSql('ALTER TABLE participante DROP FOREIGN KEY FK_85BDC5C3BFFCDD71');
        $this->addSql('ALTER TABLE competencia_deportiva DROP FOREIGN KEY FK_15D4C879239C54DD');
        $this->addSql('ALTER TABLE lugar_de_realizacion_deporte DROP FOREIGN KEY FK_9DEB6776239C54DD');
        $this->addSql('ALTER TABLE competencia_deportiva DROP FOREIGN KEY FK_15D4C8799F5A440B');
        $this->addSql('ALTER TABLE disponibilidad DROP FOREIGN KEY FK_4B6AAB2FB5A3803B');
        $this->addSql('ALTER TABLE lugar_de_realizacion_deporte DROP FOREIGN KEY FK_9DEB6776B435A53');
        $this->addSql('ALTER TABLE competencia_deportiva DROP FOREIGN KEY FK_15D4C8791E092B9F');
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05DF6939175');
        $this->addSql('ALTER TABLE competencia_deportiva DROP FOREIGN KEY FK_15D4C879DB38439E');
        $this->addSql('ALTER TABLE lugar_de_realizacion DROP FOREIGN KEY FK_6673D755DB38439E');
        $this->addSql('DROP TABLE competencia_deportiva');
        $this->addSql('DROP TABLE deporte');
        $this->addSql('DROP TABLE disponibilidad');
        $this->addSql('DROP TABLE estado');
        $this->addSql('DROP TABLE fecha');
        $this->addSql('DROP TABLE lugar_de_realizacion');
        $this->addSql('DROP TABLE lugar_de_realizacion_deporte');
        $this->addSql('DROP TABLE modalidad');
        $this->addSql('DROP TABLE participante');
        $this->addSql('DROP TABLE partido');
        $this->addSql('DROP TABLE resultado');
        $this->addSql('DROP TABLE `set`');
        $this->addSql('DROP TABLE tipo_documento');
        $this->addSql('DROP TABLE usuario');
    }
}
