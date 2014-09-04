<?php

/**
 * This file is part of the Arachne
 *
 * Copyright (c) Jáchym Toušek (enumag@gmail.com)
 *
 * For the full copyright and license information, please view the file license.md that was distributed with this source code.
 */

namespace Arachne\PropertyVerification\DI;

use Arachne\Verifier\DI\VerifierExtension;
use Nette\DI\CompilerExtension;

/**
 * @author Jáchym Toušek
 */
class PropertyVerificationExtension extends CompilerExtension
{

	public function loadConfiguration()
	{
		$builder = $this->getContainerBuilder();

		$builder->addDefinition($this->prefix('handler'))
			->setClass('Arachne\PropertyVerification\PropertyVerificationHandler')
			->addTag(VerifierExtension::TAG_HANDLER, array(
				'Arachne\PropertyVerification\Property',
			));
	}

}
