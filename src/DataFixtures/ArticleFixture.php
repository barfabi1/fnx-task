<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Tag;
use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ArticleFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $article = new Article();
        $article->setTitle('Healthy dish you can preapare quickly');
        $article->setShortDescription('Nulla vestibulum nec, dignissim in, cursus molestie. Donec est. Integer neque quis porta nisl. Nam pulvinar, quam molestie ultricies vitae.');
        $article->setContent('Lorem ipsum primis in erat consectetuer viverra semper orci, viverra lacinia. Vestibulum aliquam lacinia, risus nunc, placerat ornare dapibus. Aenean et netus et velit. Duis hendrerit magna sapien, tempus ac, dictum sed, vestibulum vehicula. Etiam leo at risus commodo ante. Curabitur elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.');
        $article->setPrice(0);

        $category = new Category();
        $category->setName('Health');

        $article->setCategory($category);

        $tag1 = new Tag();
        $tag1->setName('everyday');

        $tag2 = new Tag();
        $tag2->setName('healthy');

        $tag3 = new Tag();
        $tag3->setName('fit');

        $article->addTag($tag1);
        $article->addTag($tag2);
        $article->addTag($tag3);

        $author = new Author();
        $author->setFirstName('Gordon');
        $author->setLastName('Ramsay');
        $author->setAbout('');

        $article->addAuthor($author);

        $manager->persist($category);
        $manager->persist($tag1);
        $manager->persist($tag2);
        $manager->persist($tag3);
        $manager->persist($author);
        $manager->persist($article);


        $article = new Article();
        $article->setTitle('Germanium-based CPU cores');
        $article->setShortDescription('Cum sociis natoque penatibus et ultrices urna, pellentesque tincidunt, velit in dui. Lorem ipsum aliquet elit. Mauris luctus et magnis.');
        $article->setContent('Curae, Mauris vel risus. Nulla facilisi. Nullam et lacus a mauris. Nunc ultricies tortor id tortor quis massa ac ipsum. Proin cursus, mi quis viverra elit. Nunc consectetuer adipiscing ornare. Nam molestie. Quisque pharetra, urna ut urna mauris, consectetuer nisl. Fusce mollis, orci a augue. Nam scelerisque pede ac nisl. Morbi fermentum leo facilisis dui ligula, quis eleifend eget, nunc. Nunc velit non sem.');
        $article->setPrice(1.5);

        $category = new Category();
        $category->setName('Science');

        $article->setCategory($category);

        $article->addTag($tag1);
        $article->addTag($tag2);
        $article->addTag($tag3);

        $author = new Author();
        $author->setFirstName('Rogen');
        $author->setLastName('Penrose');
        $author->setAbout('');

        $article->addAuthor($author);

        $manager->persist($category);
        $manager->persist($tag1);
        $manager->persist($tag2);
        $manager->persist($tag3);
        $manager->persist($author);
        $manager->persist($article);


        $article = new Article();
        $article->setTitle('A Pyramid? Found one more!');
        $article->setShortDescription('Morbi vitae dui odio nonummy eget, dignissim porttitor, arcu nunc ut erat. Duis ut aliquet ipsum sit amet, ante. Morbi.');
        $article->setContent('Aenean feugiat nec, nibh. Donec dolor nibh, dignissim tempor, pede urna mi, nec sapien mauris lacus a blandit malesuada. Suspendisse vel leo. In euismod. Integer lacinia id, sapien. Maecenas sapien quis consectetuer dignissim, lorem fermentum mi, viverra ligula. Phasellus ac lectus. Sed adipiscing risus at tortor. Integer neque ut venenatis augue quis pellentesque consectetuer, augue at consequat tortor, pretium vitae, tortor.');
        $article->setPrice(5.75);

        $category = new Category();
        $category->setName('Archeology');

        $article->setCategory($category);

        $article->addTag($tag1);
        $article->addTag($tag2);
        $article->addTag($tag3);

        $author = new Author();
        $author->setFirstName('Henry');
        $author->setLastName('Walton Jones III');
        $author->setAbout('');

        $article->addAuthor($author);

        $manager->persist($category);
        $manager->persist($tag1);
        $manager->persist($tag2);
        $manager->persist($tag3);
        $manager->persist($author);
        $manager->persist($article);

        $article = new Article();
        $article->setTitle('The prosecution just couldn\'t handle the truth');
        $article->setShortDescription('Vestibulum convallis nisl, sollicitudin sed, fermentum facilisis. Maecenas fermentum quis, velit. Duis lobortis, varius sit amet, felis. Pellentesque porta tincidunt.');
        $article->setContent('Mauris vestibulum ligula. Ut sagittis, nunc semper feugiat. Cum sociis natoque penatibus et eros orci luctus et lectus. Curabitur placerat, nisl ac odio eget velit wisi, ullamcorper mauris. Etiam ac ligula. Lorem ipsum aliquet feugiat nec, scelerisque arcu. Sed mauris sit amet, vulputate luctus. Sed fringilla sollicitudin, odio vitae velit sit amet, massa. Nunc gravida. Suspendisse est. Lorem ipsum dolor ut magna.');
        $article->setPrice(0);

        $category = new Category();
        $category->setName('Miscelenous');

        $article->setCategory($category);

        $article->addTag($tag1);
        $article->addTag($tag2);
        $article->addTag($tag3);

        $author = new Author();
        $author->setFirstName('Johann');
        $author->setLastName('Voynich');
        $author->setAbout('');

        $article->addAuthor($author);

        $manager->persist($category);
        $manager->persist($tag1);
        $manager->persist($tag2);
        $manager->persist($tag3);
        $manager->persist($author);
        $manager->persist($article);


        $article = new Article();
        $article->setTitle('A walk to the park');
        $article->setShortDescription('Lorem ipsum dolor sapien accumsan congue. Donec ullamcorper, lorem hendrerit wisi. Vestibulum turpis egestas. Aenean posuere elementum odio fermentum suscipit.');
        $article->setContent('Nullam aliquet. Vestibulum cursus vitae, sollicitudin mauris sed viverra elit viverra quis, faucibus orci quis nibh. Curabitur ultrices urna, pellentesque leo. Aenean congue porta, metus sed est. Quisque ut mauris sed eros malesuada vitae, dapibus vel, orci. Sed mauris turpis, molestie turpis sagittis libero.');
        $article->setPrice(0);

        $category = new Category();
        $category->setName('Daily life');

        $article->setCategory($category);

        $article->addTag($tag1);
        $article->addTag($tag2);
        $article->addTag($tag3);

        $author = new Author();
        $author->setFirstName('Martha');
        $author->setLastName('Stewart');
        $author->setAbout('');

        $article->addAuthor($author);

        $manager->persist($category);
        $manager->persist($tag1);
        $manager->persist($tag2);
        $manager->persist($tag3);
        $manager->persist($author);
        $manager->persist($article);


        $manager->flush();
    }
}
