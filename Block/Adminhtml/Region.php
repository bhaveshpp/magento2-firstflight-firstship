<?php
namespace Firstflight\Firstship\Block\Adminhtml;

/**
 * Adminhtml cms blocks content block
 */
class Region extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_blockGroup = 'Firstflight_Firstship';
        $this->_controller = 'adminhtml_region';
        $this->_headerText = __('Regions Manager');
        $this->_addButtonLabel = __('Add New Region');
        parent::_construct();
    }
}
