<?php

namespace Drupal\tide_data_driven_component\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates the MachineNameFieldConstraint on the taxonomy_term entity.
 */
class MachineNameFieldConstraintValidator extends ConstraintValidator {

  /**
   * {@inheritdoc}
   */
  public function validate($items, Constraint $constraint) {
    $item = $items->first();
    if ($item && strrpos($item->value, " ")) {
      $this->context->addViolation($constraint->message, []);
    }
  }

}
