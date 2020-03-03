<?php
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Theme\ThemeSettings;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\Core\Form;

function porto_form_system_theme_settings_alter(&$form, Drupal\Core\Form\FormStateInterface $form_state) {
    // ----------- DESIGN -----------
    $form['options']['design'] = array(
        '#type' => 'fieldset',
        '#title' => 'Design',
    );

    $form['options']['design']['your_css'] = array(
        '#type' => 'textarea',
        '#title' => 'Add Your Css',
        '#default_value' => theme_get_setting('your_css'),
    );

}