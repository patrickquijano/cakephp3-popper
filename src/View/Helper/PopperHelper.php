<?php

namespace Popper\View\Helper;

use Cake\Core\Configure;
use Cake\View\Helper;

/**
 * @property \Cake\View\Helper\HtmlHelper $Html
 */
class PopperHelper extends Helper {

    /**
     * @var array
     */
    protected $_defaultConfig = [
        'url' => 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js',
        'integrity' => 'sha256-fTuUgtT7O2rqoImwjrhDgbXTKUwyxxujIMRIK7TbuNU=',
    ];

    /**
     * @var array
     */
    public $helpers = ['Html'];

    /**
     * @param array $options
     * @return string|null
     */
    public function script(array $options = []) {
        if (!isset($options['block'])) {
            $options['block'] = false;
        }
        $options['once'] = true;
        if (Configure::read('debug')) {
            return $this->Html->script('Popper.popper.min', $options);
        } else {
            $options['integrity'] = $this->getConfig('integrity');
            $options['crossorigin'] = 'anonymous';
            return $this->Html->script($this->getConfig('url'), $options);
        }
    }

}
