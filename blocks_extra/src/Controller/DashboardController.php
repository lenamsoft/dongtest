<?php
/**
 * @file
 * Contains \Drupal\blocks_extra\Controller\DashboardController.
 */
namespace Drupal\blocks_extra\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Drupal\node\Entity\Node;

class DashboardController extends ControllerBase {
 	
	public function build()
	{

		return [
	      '#theme' => 'page_dashboard',
	      '#dashboard_content' => 'Dashboard page content',
	    ];

	}
}
