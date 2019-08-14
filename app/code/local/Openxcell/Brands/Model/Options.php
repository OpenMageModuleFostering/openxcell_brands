<?php 
class Openxcell_Brands_Model_Options {
    public function toOptionArray()
    {
        return array(
            array('value'=>'right', 'label'=>Mage::helper('brands')->__('Right')),
            array('value'=>'left', 'label'=>Mage::helper('brands')->__('Left')),
        );
    }
}
