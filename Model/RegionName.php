<?php
namespace Firstflight\Firstship\Model;

class RegionName extends \Magento\Framework\Model\AbstractModel
{
    const CACHE_TAG = 'directory_country_region_name';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Firstflight\Firstship\Model\ResourceModel\RegionName::class);
    }
}
