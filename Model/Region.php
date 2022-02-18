<?php
namespace Firstflight\Firstship\Model;

class Region extends \Magento\Framework\Model\AbstractModel
{
    const CACHE_TAG = 'directory_country_region';
 
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Firstflight\Firstship\Model\ResourceModel\Region::class);
    }
}
