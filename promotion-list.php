<?php

namespace ELMTW\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class FormPromotion extends Widget_Base{

  public function get_name(){
    return 'formpromotion';
  }

  public function get_title(){
    return 'Form Promotion List';
  }

  public function get_icon(){
    return 'fa fa-code';
  }

  public function get_categories(){
    return ['general'];
  }

  protected function _register_controls(){

    $this->start_controls_section(
      'section_content',
      [
        'label' => 'Content',
      ]
    );

    $this->add_control(
      'promotion1',
      [
        'label' => 'Promotion #1',
        'type' => \Elementor\Controls_Manager::CODE,
        'default' => '<ul>
  <li></li>
</ul>'
      ]
    );

    $this->add_control(
      'promotion2',
      [
        'label' => 'Promotion #2',
        'type' => \Elementor\Controls_Manager::CODE,
        'default' => '<ul>
  <li></li>
</ul>'
      ]
    );

    $this->add_control(
      'promotion3',
      [
        'label' => 'Promotion #3',
        'type' => \Elementor\Controls_Manager::CODE,
        'default' => '<ul>
  <li></li>
</ul>'
      ]
    );

    $this->add_control(
      'promotion4',
      [
        'label' => 'Promotion #4',
        'type' => \Elementor\Controls_Manager::CODE,
        'default' => '<ul>
  <li></li>
</ul>'
      ]
    );

    $this->end_controls_section();
  }
  
//PHP RENDER
  protected function render(){
    $settings = $this->get_settings_for_display();


    ?>
      <div class="promotion-group">
        <div class="promotion-info" id="promo1" <?php echo $this->get_render_attribute_string('promotion1'); ?>>
          <?php echo $settings['promotion1'] ?>
        </div>
        <div class="promotion-info" id="promo2" <?php echo $this->get_render_attribute_string('promotion2'); ?>>
          <?php echo $settings['promotion2'] ?>
        </div>
        <div class="promotion-info" id="promo3" <?php echo $this->get_render_attribute_string('promotion3'); ?>>
          <?php echo $settings['promotion3'] ?>
        </div>
        <div class="promotion-info" id="promo4" <?php echo $this->get_render_attribute_string('promotion4'); ?>>
          <?php echo $settings['promotion4'] ?>
        </div>
      </div>

     
    <?php echo"<script language='javascript'>

         
          </script>";
    ?>

    <?php
  }

  // RENDER WHILE EDTING
  protected function _content_template(){
    ?>
      <div class="promotion-group">
        <div class="promotion-info" id="promo1">{{{ settings.promotion1 }}}</div>
        <div class="promotion-info" id="promo2">{{{ settings.promotion2 }}}</div>
        <div class="promotion-info" id="promo3">{{{ settings.promotion3 }}}</div>
        <div class="promotion-info" id="promo4">{{{ settings.promotion4 }}}</div>
      </div>
    
    <?php
  }
}
