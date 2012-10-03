<?php

namespace Kunstmaan\AdminBundle\AdminList;

use Kunstmaan\AdminListBundle\AdminList\FilterType\ORM\StringFilterType;

/**
 * GroupAdminListConfigurator
 *
 * @todo We should probably move this to the AdminList bundle to prevent circular references...
 */
class GroupAdminListConfigurator extends AbstractSettingsAdminListConfigurator
{

    /**
     * Build filters for admin list
     */
    public function buildFilters()
    {
        $this->getFilterBuilder()->add('name', new StringFilterType('name'), 'Name');
    }

    /**
     * Configure the visible columns
     */
    public function buildFields()
    {
        $this->addField('name', 'Name', true);
        $this->addField('roles', 'Roles', false);
    }

    /**
     * Get repository name
     *
     * @return string
     */
    public function getEntityName()
    {
        return 'Group';
    }

}
