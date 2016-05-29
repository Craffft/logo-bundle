<?php

/*
 * This file is part of the Logo Bundle.
 *
 * (c) Daniel Kiesel <https://github.com/iCodr8>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Craffft\Logo;

use Contao\Module;

class ModuleLogo extends Module
{
    /**
     * @var string
     */
    protected $strTemplate = 'mod_logo';

    /**
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $objTemplate = new \BackendTemplate('be_wildcard');
            $objTemplate->wildcard = '### LOGO MODULE ###';

            return $objTemplate->parse();
        }

        if ($this->singleSRC == '') {
            return '';
        }

        $objFile = \FilesModel::findByUuid($this->singleSRC);

        if ($objFile === null) {
            if (!\Validator::isUuid($this->singleSRC)) {
                return '<p class="error">' . $GLOBALS['TL_LANG']['ERR']['version2format'] . '</p>';
            }

            return '';
        }

        if (!is_file(TL_ROOT . '/' . $objFile->path)) {
            return '';
        }

        $this->singleSRC = $objFile->path;

        return parent::generate();
    }

    protected function compile()
    {
        $objImage = new \File($this->singleSRC);
        $arrMeta = $this->arrMeta[$objImage->basename];

        if ($arrMeta[0] == '') {
            $arrMeta[0] = str_replace('_', ' ', preg_replace('/^[0-9]+_/', '', $objImage->filename));
        }

        $this->arrData['alt'] = specialchars($arrMeta[0]);
        $this->arrData['size'] = $this->imgSize;
        $this->arrData['fullsize'] = $this->fullsize;

        if (!empty($this->jumpTo)) {
            $this->Template->href = '{{link_url::' . $this->jumpTo . '}}';
        }

        $this->addImageToTemplate($this->Template, $this->arrData);
    }
}
