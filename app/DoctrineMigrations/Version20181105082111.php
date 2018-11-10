<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20181105082111 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE job_detail (id INT AUTO_INCREMENT NOT NULL, job_id INT DEFAULT NULL, responsibility VARCHAR(255) DEFAULT NULL, requirement VARCHAR(255) DEFAULT NULL, qualification VARCHAR(255) DEFAULT NULL, INDEX IDX_7E025212BE04EA9 (job_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE job_detail ADD CONSTRAINT FK_7E025212BE04EA9 FOREIGN KEY (job_id) REFERENCES job (id)');
        $this->addSql('ALTER TABLE job CHANGE job_type job_type INT NOT NULL COMMENT \'1-Fulltime,2-Parttime\'');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE job_detail');
        $this->addSql('ALTER TABLE job CHANGE job_type job_type INT NOT NULL COMMENT \'1-Fulltime,2-Parttime\'');
    }
}
