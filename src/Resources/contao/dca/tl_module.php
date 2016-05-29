<?php

/*
 * This file is part of the Logo Bundle.
 *
 * (c) Daniel Kiesel <https://github.com/iCodr8>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Table tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['logo'] = '{title_legend},name,type;{source_legend},singleSRC;{config_legend},imgSize;{redirect_legend},jumpTo;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['fields']['name']['eval']['tl_class'] = 'w50';
$GLOBALS['TL_DCA']['tl_module']['fields']['type']['eval']['tl_class'] = 'w50';
