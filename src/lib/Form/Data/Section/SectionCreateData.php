<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace EzSystems\EzPlatformAdminUi\Form\Data\Section;

use EzSystems\EzPlatformAdminUi\Form\Data\OnFailureRedirect;
use EzSystems\EzPlatformAdminUi\Form\Data\OnFailureRedirectTrait;
use EzSystems\EzPlatformAdminUi\Form\Data\OnSuccessRedirect;
use EzSystems\EzPlatformAdminUi\Form\Data\OnSuccessRedirectTrait;

/**
 * @todo add validation
 */
class SectionCreateData implements OnSuccessRedirect, OnFailureRedirect
{
    use OnSuccessRedirectTrait;
    use OnFailureRedirectTrait;

    /** @var string|null */
    protected $identifier;

    /** @var string|null */
    protected $name;

    /**
     * @param null|string $identifier
     * @param null|string $name
     */
    public function __construct(?string $identifier = null, ?string $name = null)
    {
        $this->identifier = $identifier;
        $this->name = $name;
    }

    /**
     * @return null|string
     */
    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    /**
     * @param null|string $identifier
     */
    public function setIdentifier(?string $identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }
}
