<?php

namespace ItIsAllMail\Driver;

use ItIsAllMail\DriverCommon\AbstractAddressMapper;
use ItIsAllMail\Interfaces\AddressMapperInterface;
use ItIsAllMail\SourceManager;
use ItIsAllMail\Constants;
use ItIsAllMail\CoreTypes\ParsedMessage;
use ItIsAllMail\CoreTypes\Source;

class LinuxOrgRuMapper extends AbstractAddressMapper implements AddressMapperInterface
{
    protected string $driverCode = "linux.org.ru";
}
