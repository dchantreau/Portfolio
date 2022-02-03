<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220203145318 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD age INT NOT NULL, ADD username VARCHAR(255) NOT NULL, ADD photo VARCHAR(255) NOT NULL, ADD mail VARCHAR(255) NOT NULL, ADD linkedin VARCHAR(255) NOT NULL, ADD github VARCHAR(255) NOT NULL, ADD roles JSON NOT NULL, ADD password VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE creation CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE experience CHANGE texte texte LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo photo VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE portrait CHANGE photo1 photo1 VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo2 photo2 VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE texte1 texte1 VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE texte2 texte2 VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user DROP age, DROP username, DROP photo, DROP mail, DROP linkedin, DROP github, DROP roles, DROP password');
        $this->addSql('ALTER TABLE visiteur CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE mail mail VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE message message LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
