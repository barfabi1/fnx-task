<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
{
    //Dependecy Injection by constructor
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('admin');
        $user->setPassword(
          $this->encoder->encodePassword($user, '0000')
        );
        $user->setEmail('no-reply@example.com');
        $user->setWallet(20.00);

        $manager->persist($user);

        $user = new User();
        $user->setUsername('reader_1');
        $user->setPassword(
          $this->encoder->encodePassword($user, '1111')
        );
        $user->setEmail('no-reply-2@example.com');
        $user->setWallet(3.00);

        $manager->persist($user);

        $user = new User();
        $user->setUsername('reader_2');
        $user->setPassword(
          $this->encoder->encodePassword($user, '2222')
        );
        $user->setEmail('no-reply-3@example.com');
        $user->setWallet(0.00);

        $manager->persist($user);

        $manager->flush();
    }
}
