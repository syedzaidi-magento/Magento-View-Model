<?php
namespace Syedzaidi\Mvvm\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class MyNewViewModel implements ArgumentInterface
{
    public function getPageTitle()
    {
        return "M.V.V.M Module Output from Method.";
    }
}