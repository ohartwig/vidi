<?php
namespace Fab\Vidi\Domain\Validator;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Fab\Vidi\Domain\Model\Content;
use Fab\Vidi\Exception\MissingIdentifierException;

/**
 * Validate "content"
 */
class ContentValidator
{

    /**
     * Check whether $Content object is valid.
     *
     * @param Content $content
     * @throws \Exception
     * @return void
     */
    public function validate(Content $content)
    {

        // Security check.
        if ($content->getUid() <= 0) {
            throw new MissingIdentifierException('Missing identifier for Content Object', 1351605542);
        }
    }

}
