<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Asignaturas_model extends CI_Model {
  
  public function __construct() {
    parent::__construct();
  }

  public function set_asignatura($cod, $nom) {
    $data = array(
      'lista' => $cod,
      'nombre' => $nom,
      'cantidad' => $cant
    );

    $this->db->insert('peliculas', $data);
  }

  public function delete_asignatura($cod) {
    $data = array(
      'lista' => $lis
    );

    $this->db->delete('peliculas', $data);
  }

  public function update_asignatura($cod, $nom) {
    $this->db->set('nombre', $nom);
    $this->db->where('cantidad', $cant);
    $this->db->where('lista', $lis);
    $this->db->update('peliculas');
  }

  public function get_asignaturas() {
    $this->db->select('*');
    $this->db->from('peliculas');
    $this->db->order_by('codigo DESC');
    $query = $this->db->get();

    if($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }
}

?>