<?php
declare(strict_types=1);
/**
 * (c) shopware AG <info@shopware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace SwagBackendOrder\Components\Order\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class CustomProduct extends Constraint
{
    /**
     * @var string
     */
    public $namespace = 'backend/swag_backend_order/validations';

    /**
     * @var string
     */
    public $snippet = 'custom_product';

    /**
     * @var string
     */
    public $pluginName = 'SwagCustomProducts';

    /**
     * {@inheritdoc}
     */
    public function validatedBy(): string
    {
        return 'swag_backend_order.validator.constraint.custom_product';
    }
}
