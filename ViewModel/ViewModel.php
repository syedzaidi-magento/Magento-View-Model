<?php
namespace Syedzaidi\Mvvm\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class ViewModel implements ArgumentInterface
{
    public function getPageTitle()
    {
        return "View Module Output.";
    }
}