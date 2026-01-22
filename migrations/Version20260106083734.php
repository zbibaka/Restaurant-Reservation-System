<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260106083734 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, client_id_id INT NOT NULL, table_id_id INT NOT NULL, date_res DATE NOT NULL, heure_res TIME NOT NULL, nb_pers INT NOT NULL, statut VARCHAR(20) NOT NULL, INDEX IDX_42C84955DC2902E0 (client_id_id), INDEX IDX_42C8495573B8532F (table_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955DC2902E0 FOREIGN KEY (client_id_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495573B8532F FOREIGN KEY (table_id_id) REFERENCES table_restaurant (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955DC2902E0');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495573B8532F');
        $this->addSql('DROP TABLE reservation');
    }
}
