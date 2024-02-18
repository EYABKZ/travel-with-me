<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240216151758 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment ADD post_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C4B89032C FOREIGN KEY (post_id) REFERENCES post (id_post)');
        $this->addSql('CREATE INDEX IDX_9474526C4B89032C ON comment (post_id)');
        $this->addSql('ALTER TABLE transport_reservation ADD CONSTRAINT FK_D4A6AA529395C3F3 FOREIGN KEY (customer_id) REFERENCES user (id_customer)');
        $this->addSql('ALTER TABLE transport_reservation ADD CONSTRAINT FK_D4A6AA529909C13F FOREIGN KEY (transport_id) REFERENCES moy_transport (id_transport)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C4B89032C');
        $this->addSql('DROP INDEX IDX_9474526C4B89032C ON comment');
        $this->addSql('ALTER TABLE comment DROP post_id');
        $this->addSql('ALTER TABLE transport_reservation DROP FOREIGN KEY FK_D4A6AA529395C3F3');
        $this->addSql('ALTER TABLE transport_reservation DROP FOREIGN KEY FK_D4A6AA529909C13F');
    }
}
