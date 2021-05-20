<?php

namespace Bidcoz\Bundle\CoreBundle\Entity;

class UserRepository
{
    public function getUser() : User
    {
        $user = new User();
        $user->setFirstName('Foo');
        $user->setLastName('Bar');

        $address = new Address();
        $address->setAddress1('123 ABC Street');
        $address->setAddress2('floor 1, apartment 1');
        $address->setCity('New York');
        $address->setState('New York');
        $address->setZip('10000');

        $user->setAddress($address);

        return $user;
    }
}
