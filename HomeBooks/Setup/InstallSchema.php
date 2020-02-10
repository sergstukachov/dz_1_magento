<?php

namespace Alevel\HomeBooks\Setup;

use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

/**
 * Class InstallSchema
 * @package Alevel\HomeBooks\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * @param SchemaSetupInterface   $setup
     * @param ModuleContextInterface $context
     *
     * @throws \Zend_Db_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()
            ->newTable($setup->getTable('alevel_books_model'))
            ->addColumn(
                'entity_id',
                Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'primary'  => true, 'nullable' => false],
                'Entity Id'
            )->addColumn(
                'title',
                Table::TYPE_TEXT,
                null,
                [ 'nullable' => false],
                'Title'
            )->addColumn(
                'author',
                Table::TYPE_TEXT,
                null,
                ['nullable' => false],
                'Author'
            )->addIndex(
                $setup->getIdxName($setup->getTable('alevel_books_model'), ['entity_id'], AdapterInterface::INDEX_TYPE_INDEX),
                ['entity_id'],
                [
                    'type' => AdapterInterface::INDEX_TYPE_INDEX
                ]
            );
        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}