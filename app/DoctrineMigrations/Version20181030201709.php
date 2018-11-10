<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20181030201709 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE jobCategory (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, published INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE job ADD job_category INT DEFAULT NULL, CHANGE job_type job_type INT NOT NULL COMMENT \'1-Fulltime,2-Parttime\'');
        $this->addSql('ALTER TABLE job ADD CONSTRAINT FK_FBD8E0F8712A86AB FOREIGN KEY (job_category) REFERENCES jobCategory (id)');
        $this->addSql('CREATE INDEX IDX_FBD8E0F8712A86AB ON job (job_category)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE job DROP FOREIGN KEY FK_FBD8E0F8712A86AB');
        $this->addSql('DROP TABLE jobCategory');
        $this->addSql('DROP INDEX IDX_FBD8E0F8712A86AB ON job');
        $this->addSql('ALTER TABLE job DROP job_category_id, CHANGE job_type job_type INT NOT NULL COMMENT \'1-Fulltime,2-Parttime\'');
    }
}
