<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210325012015 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE transaction (id INT AUTO_INCREMENT NOT NULL, utilisateur_ap_id INT NOT NULL, compte_ap_id INT NOT NULL, montant INT NOT NULL, code_transaction VARCHAR(255) NOT NULL, frais INT NOT NULL, date_transaction DATE NOT NULL, part_etat DOUBLE PRECISION DEFAULT NULL, part_systeme DOUBLE PRECISION DEFAULT NULL, part_user_depot DOUBLE PRECISION DEFAULT NULL, part_user_retrait DOUBLE PRECISION DEFAULT NULL, type VARCHAR(255) NOT NULL, INDEX IDX_723705D1568A4D80 (utilisateur_ap_id), INDEX IDX_723705D169AEF235 (compte_ap_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D1568A4D80 FOREIGN KEY (utilisateur_ap_id) REFERENCES admin_system (id)');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D169AEF235 FOREIGN KEY (compte_ap_id) REFERENCES compte_agence_partenaire (id)');
        $this->addSql('DROP TABLE transactions');
        $this->addSql('ALTER TABLE admin_system ADD avatar LONGBLOB DEFAULT NULL');
        $this->addSql('ALTER TABLE agence_partenaire DROP statut');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE transactions (id INT AUTO_INCREMENT NOT NULL, utilisateur_ap_id INT NOT NULL, compte_ap_id INT NOT NULL, compte_ap_retrait_id INT DEFAULT NULL, utilisateur_ap_retrait_id INT DEFAULT NULL, montant INT NOT NULL, code_transaction VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, frais INT NOT NULL, date_transaction DATE NOT NULL, part_etat DOUBLE PRECISION DEFAULT NULL, part_systeme DOUBLE PRECISION DEFAULT NULL, part_user_depot DOUBLE PRECISION DEFAULT NULL, part_user_retrait DOUBLE PRECISION DEFAULT NULL, nom_complet_beneficiaire VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, numero_tel_client VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nom_complet_client VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, numero_tel_beneficiaire VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, retrait_effectif TINYINT(1) NOT NULL, date_retrait DATE DEFAULT NULL, cni_client VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, cni_beneficiaire VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_EAA81A4C5DD51E3C (compte_ap_retrait_id), INDEX IDX_EAA81A4CAAB291C1 (utilisateur_ap_retrait_id), INDEX IDX_EAA81A4C568A4D80 (utilisateur_ap_id), INDEX IDX_EAA81A4C69AEF235 (compte_ap_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE transactions ADD CONSTRAINT FK_EAA81A4C568A4D80 FOREIGN KEY (utilisateur_ap_id) REFERENCES admin_system (id)');
        $this->addSql('ALTER TABLE transactions ADD CONSTRAINT FK_EAA81A4C5DD51E3C FOREIGN KEY (compte_ap_retrait_id) REFERENCES compte_agence_partenaire (id)');
        $this->addSql('ALTER TABLE transactions ADD CONSTRAINT FK_EAA81A4C69AEF235 FOREIGN KEY (compte_ap_id) REFERENCES compte_agence_partenaire (id)');
        $this->addSql('ALTER TABLE transactions ADD CONSTRAINT FK_EAA81A4CAAB291C1 FOREIGN KEY (utilisateur_ap_retrait_id) REFERENCES admin_system (id)');
        $this->addSql('DROP TABLE transaction');
        $this->addSql('ALTER TABLE admin_system DROP avatar');
        $this->addSql('ALTER TABLE agence_partenaire ADD statut TINYINT(1) DEFAULT NULL');
    }
}
