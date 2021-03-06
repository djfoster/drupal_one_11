<?php

namespace Drupal\mac_examples\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a mac examples form.
 */
class MacExamplesForm extends FormBase {
  
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'mac_examples_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['caja_de_texto_1'] = array(
      '#type' => 'textfield',
      '#title' => 'Ingresa tu nombre',
      '#required' => TRUE,
      '#default_value' => 'Valor por defecto'
    );
    
    $form['caja_de_texto_2'] = array(
      '#type' => 'textfield',
      '#title' => 'Ingresa tus apellidos',
      '#required' => TRUE,
     );

     
    $form['area_de_texto_1'] = array(
      '#type' => 'textarea',
      '#title' => 'Introducir Comentario',
      '#resizable' => 'none'
    );
    
    $form['checkbox_1'] = array(
      '#type' => 'checkbox',
      '#title' => 'Marca esta opción',
      '#default_value' => TRUE,
    );
    
    $form['color_1'] = array(
      '#type' => 'color',
      '#title' => 'Elije un color',
      '#default_value' => '#ffffff'
    );
    
    $form['fecha_1'] = array(
      '#type' => 'date',
      '#default_value' => '2017-08-31',
      '#title' => 'Fecha 1',
    );
    
    $form['email_1'] = array(
      '#type' => 'email',
      '#title' => 'Ingresa correo electrónico',
    );
    
    $form['numero_1'] = array(
      '#type' => 'number',
      '#title' => 'Ingresa un Numero',
      '#min' => '-20',
      '#max' => '20',
    );
    
    $form['edad_1'] = array(
      '#type' => 'number',
      '#title' => 'Ingresa tu Edad',
      '#min' => '0',
    );      

    $form['actions']['#type'] = 'actions';
    
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => 'Enviar',
    );
    
    return $form;
  }
  
  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message('Nombre: ' . $form_state->getValue('caja_de_texto_1'), 'status');
    
    drupal_set_message('Apellidos: ' . $form_state->getValue('caja_de_texto_2'), 'status');
    
    drupal_set_message('Comentario: ' . $form_state->getValue('area_de_texto_1'), 'status');
   
    drupal_set_message('Opcion: ' . $form_state->getValue('checkbox_1'), 'status');
    
    drupal_set_message('Color: ' . $form_state->getValue('color_1'), 'status');
    
    drupal_set_message('Fecha 1: ' . $form_state->getValue('fecha_1'), 'status');
    
    drupal_set_message('Correo electrónico: ' . $form_state->getValue('email_1'), 'status');
    
    drupal_set_message('Numero elegido: ' . $form_state->getValue('numero_1'), 'status');
    
    drupal_set_message('Edad: ' . $form_state->getValue('edad_1'), 'status');
    
  }
  
}
