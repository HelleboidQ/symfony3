<?php

namespace IKNSA\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use IKNSA\BlogBundle\Entity\Comment;

class LoadComment extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $commentOnePostSix = new Comment;
        $commentOnePostSix->setComment('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');
        $commentOnePostSix->setCreatedAt(new \Datetime);
        $commentOnePostSix->setUser($this->getReference('user-contributor'));
        $commentOnePostSix->setPost($this->getReference('post-six'));
        $this->addReference('comment-one-post-six', $commentOnePostSix);
        $manager->persist($commentOnePostSix);

        $commentTwoPostSix = new Comment;
        $commentTwoPostSix->setComment('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');
        $commentTwoPostSix->setCreatedAt(new \Datetime);
        $commentTwoPostSix->setUser($this->getReference('user-contributor'));
        $commentTwoPostSix->setPost($this->getReference('post-six'));
        $this->addReference('comment-two-post-six', $commentTwoPostSix);
        $manager->persist($commentTwoPostSix);

        $commentThreePostSix = new Comment;
        $commentThreePostSix->setComment('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');
        $commentThreePostSix->setCreatedAt(new \Datetime);
        $commentThreePostSix->setUser($this->getReference('user-contributor'));
        $commentThreePostSix->setPost($this->getReference('post-six'));
        $this->addReference('comment-three-post-six', $commentThreePostSix);
        $manager->persist($commentThreePostSix);

        $commentOnePostFive = new Comment;
        $commentOnePostFive->setComment('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');
        $commentOnePostFive->setCreatedAt(new \Datetime);
        $commentOnePostFive->setUser($this->getReference('user-contributor'));
        $commentOnePostFive->setPost($this->getReference('post-six'));
        $this->addReference('comment-one-post-five', $commentOnePostFive);
        $manager->persist($commentOnePostFive);

        $commentTwoPostFive = new Comment;
        $commentTwoPostFive->setComment('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');
        $commentTwoPostFive->setCreatedAt(new \Datetime);
        $commentTwoPostFive->setUser($this->getReference('user-contributor'));
        $commentTwoPostFive->setPost($this->getReference('post-six'));
        $this->addReference('comment-two-post-five', $commentTwoPostFive);
        $manager->persist($commentTwoPostFive);

        $commentThreePostFive = new Comment;
        $commentThreePostFive->setComment('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');
        $commentThreePostFive->setCreatedAt(new \Datetime);
        $commentThreePostFive->setUser($this->getReference('user-contributor'));
        $commentThreePostFive->setPost($this->getReference('post-five'));
        $this->addReference('comment-three-post-five', $commentThreePostFive);
        $manager->persist($commentThreePostFive);

        $manager->flush();
    }

    public function getOrder()
    {
        return 300;
    }
}
