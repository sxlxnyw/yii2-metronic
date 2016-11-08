<?php
/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace  sxlxnyw\metronic\bundles;


/**
 * NotificationAsset for notification widget.
 */
class NotificationAsset extends BaseAssetBundle
{

    public $js = [
        'global/plugins/bootstrap-toastr/toastr.min.js',
    ];

    public $css = [
        'global/plugins/bootstrap-toastr/toastr.min.css',
    ];

    public $depends = [
        'sxlxnyw\metronic\bundles\CoreAsset',
    ];
}