<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20181105084317 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE job_detail ADD applylink VARCHAR(255) DEFAULT NULL, ADD posted_on DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, ADD last_date DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE job CHANGE job_type job_type INT NOT NULL COMMENT \'1-Fulltime,2-Parttime\'');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE job CHANGE job_type job_type INT NOT NULL COMMENT \'1-Fulltime,2-Parttime\'');
        $this->addSql('ALTER TABLE job_detail DROP applylink, DROP posted_on, DROP last_date');
    }
}
