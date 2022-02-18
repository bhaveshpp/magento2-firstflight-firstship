<?php

/**
 *
 * @Author              sanjayonupwork@gmail.com
 * @Date                2022-02-12 03:46:38
 * @Last modified by:   Sanjay Gohil
 * @Last Modified time: 2022-02-18 18:02:07
 */

namespace Firstflight\Firstship\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $vietnam_regions = [
            ['country_id' => 'AE', 'code' => 'AUH', 'default_name' => 'Abu Dhabi'],
            ['country_id' => 'AE', 'code' => 'AAN', 'default_name' => 'Al Ain'],
            ['country_id' => 'AE', 'code' => 'DHF', 'default_name' => 'Al Dhafra'],
            ['country_id' => 'AE', 'code' => 'DWC', 'default_name' => 'Al Maktoum'],
            ['country_id' => 'AE', 'code' => 'NHD', 'default_name' => 'Al Minhad'],
            ['country_id' => 'AE', 'code' => 'AZI', 'default_name' => 'Al Bateen'],
            ['country_id' => 'AE', 'code' => 'ZDY', 'default_name' => 'Delma'],
            ['country_id' => 'AE', 'code' => 'DXB', 'default_name' => 'Dubai'],
            ['country_id' => 'AE', 'code' => 'FJR', 'default_name' => 'Fujairah'],
            ['country_id' => 'AE', 'code' => 'RKT', 'default_name' => 'Ras Al Khaimah'],
            ['country_id' => 'AE', 'code' => 'SHJ', 'default_name' => 'Sharjah'],
            ['country_id' => 'AE', 'code' => 'XSB', 'default_name' => 'Sir Bani'],
            
        ];
        foreach ($vietnam_regions as $key => $value) {
            $select = $setup->getConnection()->select()
            ->from(['dcr' => $setup->getTable('directory_country_region')])
            ->where('dcr.country_id = ?', $value['country_id'])
            ->where('dcr.code = ?', $value['code'])
            ->where('dcr.default_name = ?', $value['default_name']);
            if (!$setup->getConnection()->fetchRow($select)) {
                $setup->getConnection()->insertForce(
                    $setup->getTable('directory_country_region'),
                    $value
                );
            }
        }
    }
}
