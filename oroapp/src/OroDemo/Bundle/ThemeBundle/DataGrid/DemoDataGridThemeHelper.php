<?php

namespace OroDemo\Bundle\ThemeBundle\DataGrid;

use Oro\Bundle\ProductBundle\DataGrid\DataGridThemeHelper;

class DemoDataGridThemeHelper extends DataGridThemeHelper
{

    /**
     * @return string
     */
    protected function getDefaultView()
    {
        return self::VIEW_LIST;
    }

}
