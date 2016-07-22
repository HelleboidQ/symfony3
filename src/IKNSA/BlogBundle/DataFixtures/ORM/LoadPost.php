<?php

namespace IKNSA\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use IKNSA\BlogBundle\Entity\Post;

class LoadPost extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $one = new Post;
        $one->setTitle('My first post');
        $one->setSummary('N° 1');
        $one->setContent(' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
        $one->setCreatedAt(new \Datetime);
        $one->setExtension('jpeg');
        $one->setUser($this->getReference('user-contributor'));
        $manager->persist($one);

        $two = new Post;
        $two->setTitle('My second post');
        $two->setSummary('N° 2');
        $two->setContent(' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
        $two->setCreatedAt(new \Datetime);
        $two->setExtension('jpeg');
        $two->setUser($this->getReference('user-contributor'));
        $manager->persist($two);

        $three = new Post;
        $three->setTitle('My third post');
        $three->setSummary('N° 3');
        $three->setContent(' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
        $three->setCreatedAt(new \Datetime);
        $three->setExtension('jpeg');
        $three->setUser($this->getReference('user-contributor'));
        $manager->persist($three);

        $four = new Post;
        $four->setTitle('My fourth post');
        $four->setSummary('N° 4');
        $four->setContent(' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
        $four->setCreatedAt(new \Datetime);
        $four->setExtension('jpeg');
        $four->setUser($this->getReference('user-contributor'));
        $manager->persist($four);

        $five = new Post;
        $five->setTitle('My fifth post');
        $five->setSummary('N° 5');
        $five->setContent(' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
        $five->setCreatedAt(new \Datetime);
        $five->setExtension('jpeg');
        $five->setUser($this->getReference('user-contributor'));
        $manager->persist($five);

        $six = new Post;
        $six->setTitle('My sixth post');
        $six->setSummary('N° 6');
        $six->setContent(' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
        $six->setCreatedAt(new \Datetime);
        $six->setExtension('jpeg');
        $six->setUser($this->getReference('user-contributor'));
        $manager->persist($six);

        $this->addReference('post-one', $one);
        $this->addReference('post-two', $two);
        $this->addReference('post-three', $three);
        $this->addReference('post-four', $four);
        $this->addReference('post-five', $five);
        $this->addReference('post-six', $six);

        $manager->flush();
    }

    public function getOrder()
    {
        return 200;
    }
}
