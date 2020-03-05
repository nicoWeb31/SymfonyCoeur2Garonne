<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200305173106 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'users categorie';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_cat (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_cat_users (user_cat_id INT NOT NULL, users_id INT NOT NULL, INDEX IDX_A81898E083FFB27E (user_cat_id), INDEX IDX_A81898E067B3B43D (users_id), PRIMARY KEY(user_cat_id, users_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_cat_users ADD CONSTRAINT FK_A81898E083FFB27E FOREIGN KEY (user_cat_id) REFERENCES user_cat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_cat_users ADD CONSTRAINT FK_A81898E067B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE users CHANGE photo photo VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user_cat_users DROP FOREIGN KEY FK_A81898E083FFB27E');
        $this->addSql('DROP TABLE user_cat');
        $this->addSql('DROP TABLE user_cat_users');
        $this->addSql('ALTER TABLE users CHANGE photo photo VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
