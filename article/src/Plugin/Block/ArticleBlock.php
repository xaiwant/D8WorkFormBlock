<?php
/**
 * @file
 * Contains \Drupal\article\Plugin\Block\ArticleBlock.
 */

namespace Drupal\article\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides a 'article' block.
 *
 * @Block(
 *   id = "article_block",
 *   admin_label = @Translation("Article block"),
 *   category = @Translation("Custom article block example")
 * )
 */
class ArticleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    //$form = \Drupal::formBuilder()->getForm('Drupal\article\Form\WorkForm');
	  return \Drupal::formBuilder()->getForm('Drupal\article\Form\WorkForm');

    //return $form;
   }
}