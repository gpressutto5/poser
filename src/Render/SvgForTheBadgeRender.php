<?php

/*
 * This file is part of the badge-poser package.
 *
 * (c) PUGX <http://pugx.github.io/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PUGX\Poser\Render;

/**
 * Class SvgForTheBadgeRender
 *
 * @author Guilherme Pressutto <gpressutto5@gmail.com>
 */
class SvgForTheBadgeRender extends LocalSvgRenderer
{
    /**
     * A list of all supported formats.
     *
     * @return array
     */
    public function supportedFormats()
    {
        return array('for-the-badge');
    }

    protected function getTemplateName()
    {
        return 'for-the-badge';
    }
}
