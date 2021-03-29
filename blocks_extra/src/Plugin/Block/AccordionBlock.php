<?php
namespace Drupal\blocks_extra\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'AccordionBlock' block.
 *
 * @Block(
 *  id = "bootstrap_accordion",
 *  admin_label = @Translation("Bootstrap Accordion"),
 * )
 */
class AccordionBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $html_out = array();
    $current_path = \Drupal::service('path.current')->getPath();
    $accordion[] = array();
    $block_title = $this->t('Block Bootstrap 4 Accordion');

    for ($i=1; $i < 6; $i++) { 

      $acc_id = 'collapse'.$i;
      $title = 'Collapsible Group Item #'.$i;
      $content = 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.'.$i;

      $accordion['items'][$acc_id] = array(
        'title' => $title,
        'content' => $content,
      );

      $expanded = ($i == 1)?'true':'false';
      $show = ($i == 1)?'show':'';

      $acc_out[] = '<div class="card">
                      <div class="card-header">
                        <a class="card-link d-block" data-toggle="collapse" data-target="#'.$acc_id.'" aria-expanded="'.$expanded.'" >'.$title.'</a>
                      </div>
                      <div id="'.$acc_id.'" class="collapse '.$show.'" data-parent="#accordion">
                          <div class="card-body">'. $content .'</div>
                      </div>
                    </div>';
    }

    if (!empty($acc_out)) {
      $html_out = '<div id="accordion">'. implode('', $acc_out).'</div>';
    }

    $accordion['block_title'] = $block_title;

    return [
      '#theme' => 'block_accordion',
      '#block_title' =>  $block_title,
      '#block_content' => array('#markup' => $html_out),
      '#accordion' => $accordion,
      '#cache'  => ['contexts' => ['url.path','url.query_args']],
    ];

  }


}
