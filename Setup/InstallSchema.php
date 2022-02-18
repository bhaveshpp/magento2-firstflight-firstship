<?php

/**
 *
 * @Author              er.sanjaygohil@gmail.com
 * @Date                2022-02-15
 * @Last modified by:   Sanjay Gohil
 * @Last Modified time: 2022-02-18
 */

namespace Firstflight\Firstship\Setup;

use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    /**
     * install tables
     *
     * @param \Magento\Framework\Setup\SchemaSetupInterface $setup
     * @param \Magento\Framework\Setup\ModuleContextInterface $context
     * @return void
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        if ($installer->tableExists('directory_country_region')) {
            $installer->getConnection()->addIndex(
                $installer->getTable('directory_country_region'),
                $setup->getIdxName(
                    $installer->getTable('directory_country_region'),
                    ['default_name'],
                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
                ),
                ['default_name'],
                \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
            );
        }
        $installer->endSetup();
    }
}
