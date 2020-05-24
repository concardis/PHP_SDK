<?php

namespace Concardis\Payengine\Lib\Internal\Constants;


class AuthenticationType
{
    const PAYMENT_TRANSACTION = "PAYMENT_TRANSACTION";
    const RECURRING_TRANSACTION = "RECURRING_TRANSACTION";
    const RECURRING_CARDCHECK = "RECURRING_CARDCHECK";
    const ADD_CARD = "ADD_CARD";
}