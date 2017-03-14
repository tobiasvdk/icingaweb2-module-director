<?php

namespace Icinga\Module\Director\Objects;

use Icinga\Module\Director\IcingaConfig\IcingaConfig;

class IcingaUserGroup extends IcingaObjectGroup
{
    protected $table = 'icinga_usergroup';

    protected $defaultProperties = array(
        'id'            => null,
        'object_name'   => null,
        'object_type'   => null,
        'disabled'      => 'n',
        'display_name'  => null,
        'zone_id'       => null,
    );

    protected $relations = array(
        'zone' => 'IcingaZone',
    );

    public function getRenderingZone(IcingaConfig $config = null)
    {
        if ($this->prefersGlobalZone()) {
            return $this->connection->getDefaultGlobalZoneName();
        }

        $zone = parent::getRenderingZone($config);

        return $zone;
    }
}
