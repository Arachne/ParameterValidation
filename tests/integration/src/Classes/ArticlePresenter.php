<?php

namespace Tests\Integration\Classes;

use Arachne\ParameterValidation\Rules\Validate;
use Arachne\Verifier\Rules\All;
use Nette\Application\UI\Presenter;
use Symfony\Component\Validator\Constraints\EqualTo;

/**
 * @author Jáchym Toušek
 */
class ArticlePresenter extends Presenter
{

	/**
	 * @Validate(parameter = "entity", property = "id", constraints = @EqualTo(value = 1))
	 * @Validate(parameter = "id", constraints = @EqualTo(value = 2))
	 */
	public function actionEdit(ArticleEntity $entity, $id)
	{
	}

	/**
	 * @All({
	 *   @Validate(parameter = "id", constraints = @EqualTo(value = 2))
	 * })
	 */
	public function actionInnerRules($id)
	{
	}

}
