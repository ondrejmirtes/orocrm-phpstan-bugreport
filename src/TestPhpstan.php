<?php
declare(strict_types=1);

class TestPhpstan
{
    public function test(): void
    {
        $scope = new \Oro\Bundle\ScopeBundle\Entity\Scope();
        $scope->setOrganization(new \Oro\Bundle\OrganizationBundle\Entity\Organization());
    }
}
