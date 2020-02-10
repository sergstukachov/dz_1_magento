<?php

namespace Alevel\HomeBooks\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

/**
 * Class UpgradeSchema
 * @package Alevel\HomeBooks\Setup
 */
class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * @var string $table
     */
    private $table;

    /** @var \Magento\Framework\DB\Adapter\AdapterInterface $connection  */
    private $connection;

    /**
     * Upgrades DB schema for a module
     *
     * @param SchemaSetupInterface   $setup
     * @param ModuleContextInterface $context
     *
     * @return void
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $this->table = $setup->getTable('alevel_books_model');
        $this->connection = $setup->getConnection();

        /**  version_compare() returned 1 if the second is lower. */
        if (version_compare($context->getVersion(), '1.0.0') < 0) {
            $this->addColumnTelephone();
        }

        $setup->endSetup();
    }

    /**
     *  Add new column for table.
     */
    private function addColumnTelephone()
    {
        $this->connection->addColumn(
            $this->table,
            'genre',
            [
                'type' => Table::TYPE_TEXT,
                'nullable' => true,
                'comment' => 'Genre'
            ]
        );
    }
}