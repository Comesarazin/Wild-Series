<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use App\Repository\ProgramRepository;
use App\Repository\SeasonRepository;
use App\Entity\Program;
use App\Entity\Season;
use App\Entity\Episode;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\ProgramType;
use App\Repository\CategoryRepository;



#[Route('/program', name: 'program_')]
class ProgramController extends AbstractController
{

/*     private array $categorys;

    public function __construct(private CategoryRepository $categoryRepository) 
    {
        $this->categorys = $this->categoryRepository->findAll();
        $this->container->get('twig')->addGlobal('categorys', $this->categorys);
    } */

    #[Route('/', name: 'index')]
    public function index(ProgramRepository $programRepository): Response
    {
        $programs = $programRepository->findAll();

        return $this->render('program/index.html.twig', [
            'programs' => $programs
         ]);
    }

    #[Route('/show/{id}', name: 'show')]
    public function show(Program $program): Response
    {
        return $this->render('program/show.html.twig', [
            'program' => $program,
        ]);
    }

    #[Route('/new', name: 'new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $program = new Program();
        $form = $this->createForm(ProgramType::class, $program);
        $form->handleRequest($request);

    if ($form->isSubmitted()) {
        $entityManager->persist($program);
        $entityManager->flush();            

        // Redirect to categories list
        return $this->redirectToRoute('program_index');
    }

    // Render the form
    return $this->render('program/new.html.twig', [
        'form' => $form,
    ]);
    }


    #[Route('/{program_id}/season/{season_id}', name: 'season_show')]
    public function showSeason(
        #[MapEntity(mapping: ['program_id' => 'id'])] Program $program,
        #[MapEntity(mapping: ['season_id' => 'id'])] Season $season
    ): Response
    {
        /* // Récupérer le programme par son identifiant
        $program = $programRepository->find($programId);

        // Vérifier si le programme existe
        if (!$program) {
            throw $this->createNotFoundException('Program not found');
        }

        // Récupérer la saison du programme par son identifiant
        $season = $seasonRepository->find($seasonId);

        // Vérifier si la saison existe
        if (!$season) {
            throw $this->createNotFoundException('Season not found');
        }
 */
        return $this->render('program/season_show.html.twig', [
            'program' => $program,
            'season' => $season,
        ]);
    }

    #[Route('/{program_id}/season/{season_id}/episode/{episode_id}', name: 'episode_show')]
    public function showEpisode(
        #[MapEntity(mapping: ['program_id' => 'id'])] Program $program,
        #[MapEntity(mapping: ['season_id' => 'id'])] Season $season,
        #[MapEntity(mapping: ['episode_id' => 'id'])] Episode $episode
    ): Response
    {
        return $this->render('program/episode_show.html.twig',[
            'program' => $program,
            'season' => $season,
            'episode' => $episode
        ]);
    }
}
