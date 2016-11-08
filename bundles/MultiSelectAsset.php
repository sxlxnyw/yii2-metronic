<?php
/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace  sxlxnyw\metronic\bundles;

/**
 * MultiSelectAsset for multi select widget.
 */
class MultiSelectAsset extends BaseAssetBundle
{

    public $js = [
        'plugins/jquery-multi-select/js/jquery.multi-select.js',
    ];

    public $css = [
        'plugins/jquery-multi-select/css/multi-select.css',
    ];

    public $depends = [
        'sxlxnyw\metronic\bundles\CoreAsset',
    ];
}
