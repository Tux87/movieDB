<?php

namespace App\Controller;

use App\Entity\Character;
use App\Entity\Episode;
use App\Entity\Season;
use App\Entity\TvShow;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FakeMakerController extends AbstractController
{
    /**
     * @Route("/fake/data/got/", name="fake_data_got")
     */
    public function got(EntityManagerInterface $entityManager): Response
    {

        // créer un  show
        $got = new TvShow();
        $got->setTitle('Game of Thrones');
        $got->setSynopsis('Game of Thrones - il fait froid et plein de gens font pleins de trucs, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, debitis atque perferendis neque natus optio minus. Nihil temporibus velit in nam at blanditiis quisquam eligendi nisi aspernatur magni, dolore, reprehenderit ad enim architecto atque fugiat libero, quae eos beatae? Aliquid iure, ullam vitae eaque deleniti quidem quod fugit dignissimos et? Voluptatem voluptates tempore sapiente hic suscipit eveniet excepturi, iure dicta. Maiores animi nostrum iste nulla placeat exercitationem, dolorum quasi magnam magni incidunt cumque voluptate eaque quaerat, dolor consequatur sit voluptas, officiis fuga voluptatem deleniti blanditiis amet? Rem quo, qui sed numquam ex similique aperiam harum cum deleniti commodi officia sit.');
        $got->setImage('https://fr.web.img6.acsta.net/pictures/19/03/21/17/05/1927893.jpg');
        $got->setNbLikes(mt_rand(1, 1000));
        $got->setCreatedAt(new DateTimeImmutable);
        // les valeurs suivantes sont définies en valeur par défaut
        // $got->setCreatedAt(new DateTimeImmutable());
        // $got->setNbLikes(0);
       

        $entityManager->persist($got);


        // créer des saisons
        $year = 2010;
        for ($seasonNumber = 1; $seasonNumber <= 7; $seasonNumber++) {
            $season = new Season();
            $seasonYear = $year + $seasonNumber;
            $season->setCreatedAt(new DateTimeImmutable($seasonYear . '-01-01'));
            $season->setSeasonNumber($seasonNumber);
            // associer les saisons au show
            $season->setTvShow($got);

            $entityManager->persist($season);

            // pour la saison actuelle, on crée des épisodes
            for ($episodeNumber = 1; $episodeNumber <= 9; $episodeNumber++) {

                $episode = new Episode();
                $episode->setEpisodeNumber($episodeNumber);
                $episode->setTitle('S0' . $seasonNumber . 'x0' . $episodeNumber);
                // associer les épisodes aux saisons
                $episode->setSeason($season);
                $episode->setCreatedAt(new DateTimeImmutable);


                $entityManager->persist($episode);
            }
        }

        // enregistrer le tout en BDD
        $entityManager->flush();


        return $this->render('fake_data_maker/index.html.twig', [
            'controller_name' => 'FakeDataMakerController',
        ]);
    }

    /**
     * @Route("/fake/data/mrRobot/", name="fake_data_robot")
     */
    public function mrRobot(EntityManagerInterface $entityManager): Response
    {

        // créer un  show
        $tvShow = new TvShow();
        $tvShow->setTitle('Mr Robot');
        $tvShow->setSynopsis('Hacking++ , Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, debitis atque perferendis neque natus optio minus. Nihil temporibus velit in nam at blanditiis quisquam eligendi nisi aspernatur magni, dolore, reprehenderit ad enim architecto atque fugiat libero, quae eos beatae? Aliquid iure, ullam vitae eaque deleniti quidem quod fugit dignissimos et? Voluptatem voluptates tempore sapiente hic suscipit eveniet excepturi, iure dicta. Maiores animi nostrum iste nulla placeat exercitationem, dolorum quasi magnam magni incidunt cumque voluptate eaque quaerat, dolor consequatur sit voluptas, officiis fuga voluptatem deleniti blanditiis amet? Rem quo, qui sed numquam ex similique aperiam harum cum deleniti commodi officia sit.');
        $tvShow->setImage('https://fr.web.img3.acsta.net/pictures/15/05/06/16/13/020977.jpg');
        $tvShow->setCreatedAt(new DateTimeImmutable);
        $tvShow->setNbLikes(mt_rand(1, 1000));
        // les valeurs suivantes sont définies en valeur par défaut
        // $tvShow->setCreatedAt(new DateTimeImmutable());
        // $tvShow->setNbLikes(0);
       

        $entityManager->persist($tvShow);


        // créer des saisons
        $year = 2010;
        for ($seasonNumber = 1; $seasonNumber <= 4; $seasonNumber++) {
            $season = new Season();
            $seasonYear = $year + $seasonNumber;
            $season->setCreatedAt(new DateTimeImmutable($seasonYear . '-01-01'));
            $season->setSeasonNumber($seasonNumber);
            // associer les saisons au show
            $season->setTvShow($tvShow);

            $entityManager->persist($season);

            // pour la saison actuelle, on crée des épisodes
            for ($episodeNumber = 1; $episodeNumber <= 10; $episodeNumber++) {

                $episode = new Episode();
                $episode->setEpisodeNumber($episodeNumber);
                $episodeTitle = $tvShow->getTitle() . ' - S0' . $seasonNumber . 'x0' . $episodeNumber;
                if ($episodeNumber >= 10) {
                    $episodeTitle = $tvShow->getTitle() . ' - S0' . $seasonNumber . 'x' . $episodeNumber;
                }
                $episode->setTitle($episodeTitle);
                // associer les épisodes aux saisons
                $episode->setSeason($season);
                $episode->setCreatedAt(new DateTimeImmutable);


                $entityManager->persist($episode);
            }
        }

        // enregistrer le tout en BDD
        $entityManager->flush();


        return $this->render('fake_data_maker/index.html.twig', [
            'controller_name' => 'FakeDataMakerController',
        ]);
    }

    /**
     * @Route("/fake/data/bob/", name="fake_data_bob")
     */
    public function bob(EntityManagerInterface $entityManager): Response
    {

        // créer un  show
        $year = 2001;
        $bob = new TvShow();
        $bob->setTitle('Band of Brothers');
        $bob->setSynopsis('The series dramatizes the history of "Easy" Company, 2nd Battalion, 506th Parachute Infantry Regiment, of the 101st Airborne Division, from jump training in the United States through its participation in major actions in Europe, up until Japan\'s capitulation and the end of World War II.');
        $bob->setImage('https://fr.web.img2.acsta.net/pictures/21/02/11/14/18/3309028.jpg');
        $bob->setNbLikes(mt_rand(1, 1000));
        $bob->setCreatedAt(new DateTimeImmutable($year . '-09-09'));
        // les valeurs suivantes sont définies en valeur par défaut
        // $tvShow->setCreatedAt(new DateTimeImmutable());
        // $tvShow->setNbLikes(0);
        $entityManager->persist($bob);


        // créer des saisons
        $seasonNumber = 1;
        
        $season = new Season();
        $seasonYear = $year + $seasonNumber;
        $season->setPublishedAt(new DateTimeImmutable($seasonYear . '-09-09'));
        $season->setSeasonNumber($seasonNumber);
        $season->setCreatedAt(new DateTimeImmutable($seasonYear . '-09-09'));
        // associer les saisons au show
        $season->setTvShow($bob);

        $entityManager->persist($season);

        // pour la saison actuelle, on crée des épisodes
        for ($episodeNumber = 1; $episodeNumber <= 10; $episodeNumber++) {
            $episode = new Episode();
            $episode->setEpisodeNumber($episodeNumber);
            $episodeTitle = $bob->getTitle() . ' - S0' . $seasonNumber . 'x0' . $episodeNumber;
            if ($episodeNumber >= 10) {
                $episodeTitle = $bob->getTitle() . ' - S0' . $seasonNumber . 'x' . $episodeNumber;
            }
            $episode->setTitle($episodeTitle);
            // associer les épisodes aux saisons
            $episode->setSeason($season);
            $episode->setCreatedAt(new DateTimeImmutable);


            $entityManager->persist($episode);
        }

        $character = new Character();
        $character->setFirstName('Richard');
        $character->setLastName('Winters');
        $character->setGender('Male');
        $character->setBio('Richard Davis "Dick" Winters (January 21, 1918 – January 2, 2011) was an officer of the United States Army and a decorated war veteran. He is best known for having commanded Easy Company of the 2nd Battalion, 506th Parachute Infantry Regiment, part of the 101st Airborne Division, during World War II. He was eventually promoted to major and put in command of the 2nd Battalion.');
        $character->setAge('26');
        $character->setCreatedAt(new DateTimeImmutable);
        $entityManager->persist($character);

        $character = new Character();
        $character->setFirstName('Darrell ');
        $character->setLastName('Powers');
        $character->setGender('Male');
        $character->setBio('Staff Sergeant Darrell Cecil "Shifty" Powers (13 March 1923 – 17 June 2009)[1] was a non-commissioned officer with Easy Company, 2nd Battalion, 506th Parachute Infantry Regiment, in the 101st Airborne Division during World War II. Powers was portrayed in the HBO miniseries Band of Brothers by Peter Youngblood Hills.');
        $character->setAge('21');
        $character->setCreatedAt(new DateTimeImmutable);

        $entityManager->persist($character);


        $character = new Character();
        $character->setFirstName('Carwood');
        $character->setLastName('Lipton');
        $character->setGender('Male');
        $character->setBio('Clifford Carwood Lipton (30 January 1920 – 16 December 2001)[1] was a commissioned officer with Easy Company, 506th Parachute Infantry Regiment, 101st Airborne Division, during World War II.');
        $character->setAge('22');
        $character->setCreatedAt(new DateTimeImmutable);

        $entityManager->persist($character);
        

        // enregistrer le tout en BDD
        $entityManager->flush();

        return $this->redirectToRoute('tv_show_index');
    }
}
