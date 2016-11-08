<?php

/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace sxlxnyw\metronic\bundles;

/**
 * IonRangeSliderAsset for slider widget.
 */
class IonRangeSliderAsset extends BaseAssetBundle {

    public $js = [
        'global/plugins/ion.rangeslider/js/ion-rangeSlider/ion.rangeSlider.min.js',
    ];

    public $css = [
        'global/plugins/ion.rangeslider/css/ion.rangeSlider.css',
        'global/plugins/ion.rangeslider/css/ion.rangeSlider.Metronic.css',
    ];

    public $depends = [
        'sxlxnyw\metronic\bundles\CoreAsset',
    ];

}
