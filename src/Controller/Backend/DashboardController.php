<?php

declare(strict_types=1);

namespace Bolt\Controller\Backend;

use Bolt\Controller\BaseController;
use Bolt\Entity\Content;
use Bolt\Repository\ContentRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class DashboardController extends BaseController
{
    /**
     * @Route("/", name="bolt_dashboard")
     * was: ("/{vueRouting}", requirements={"vueRouting"="^(?!api|_(profiler|wdt)).+"}, name="index")
     *
     * @param ContentRepository $content
     *
     * @return Response
     */
    public function index(ContentRepository $content)
    {
        /** @var Content $records */
        $records = $content->findLatest();

        return $this->renderTemplate('dashboard/dashboard.html.twig', [
            'records' => $records,
        ]);
    }
}
