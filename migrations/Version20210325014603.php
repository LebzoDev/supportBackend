<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210325014603 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin_system DROP avatar');
        $this->addSql('ALTER TABLE agence_partenaire ADD statut TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE transaction ADD compte_apretrait_id INT DEFAULT NULL, ADD utilisateur_apretrait_id INT DEFAULT NULL, ADD nom_complet_beneficiaire VARCHAR(255) DEFAULT NULL, ADD nom_complet_client VARCHAR(255) NOT NULL, ADD numero_tel_beneficiaire VARCHAR(255) DEFAULT NULL, ADD retrait_effectif TINYINT(1) DEFAULT NULL, ADD cni_client VARCHAR(255) DEFAULT NULL, ADD cni_beneficiaire VARCHAR(255) DEFAULT NULL, ADD date_retrait DATE DEFAULT NULL, CHANGE type numero_tel_client VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D1C7581D90 FOREIGN KEY (compte_apretrait_id) REFERENCES compte_agence_partenaire (id)');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D1C280BD04 FOREIGN KEY (utilisateur_apretrait_id) REFERENCES admin_system (id)');
        $this->addSql('CREATE INDEX IDX_723705D1C7581D90 ON transaction (compte_apretrait_id)');
        $this->addSql('CREATE INDEX IDX_723705D1C280BD04 ON transaction (utilisateur_apretrait_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin_system ADD avatar LONGBLOB DEFAULT NULL');
        $this->addSql('ALTER TABLE agence_partenaire DROP statut');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D1C7581D90');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D1C280BD04');
        $this->addSql('DROP INDEX IDX_723705D1C7581D90 ON transaction');
        $this->addSql('DROP INDEX IDX_723705D1C280BD04 ON transaction');
        $this->addSql('ALTER TABLE transaction ADD type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP compte_apretrait_id, DROP utilisateur_apretrait_id, DROP nom_complet_beneficiaire, DROP numero_tel_client, DROP nom_complet_client, DROP numero_tel_beneficiaire, DROP retrait_effectif, DROP cni_client, DROP cni_beneficiaire, DROP date_retrait');
    }
}
