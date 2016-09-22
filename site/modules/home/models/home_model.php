<?php
class Home_model extends CI_Model {

	public function listar_torneios_finalizados() {
		$sql = "SELECT t.codigo,
					l.descricao as local,
					date_format(t.data_hora_inicio, '%d/%m/%Y') as data
				FROM torneio t
				JOIN local l
				ON l.codigo = t.local";
		$qry = $this->db->query($sql);
		if ($qry->num_rows() > 0) {
			return $qry->result_array();
		} else {
			return FALSE;
		}
	}

}