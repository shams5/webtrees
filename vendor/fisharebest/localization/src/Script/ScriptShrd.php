<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptShrd - Representation of the Sharada, ΕΔradΔ script.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptShrd extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Shrd';
    }

    public function numerals()
    {
        return array('π', 'π', 'π', 'π', 'π', 'π', 'π', 'π', 'π', 'π');
    }

    public function number()
    {
        return '319';
    }

    public function unicodeName()
    {
        return 'Sharada';
    }
}
