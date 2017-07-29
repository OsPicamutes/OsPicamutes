<?php

//require_once('IRepositorioUsuario.php');

class RepositorioAuxiliares //implements IRepositorioUsuario
{

	private $con = NULL;

	public function __construct()
	{
		require_once( CAMINHO_PORTAL."conf/Conexao.php" );
		$this->con = Conexao::getConexao();
	}
	
	/****************************INÍCIO DOCUMENTOS****************************/
	
	public function inserirDocumento($objBusca){		
		// echo '<pre>'.
		$sql = "INSERT INTO
	                   auxiliares.documentos(doc_descricao) 
	               VALUES
	                   (".$objBusca->descricao.");";

		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
	
	public function atualizarDocumento($objBusca){		
		// echo '<pre>'.
		$sql = "UPDATE auxiliares.documentos
				SET doc_descricao = ".$objBusca->descricao."
	            WHERE doc_id = ".$objBusca->id.";";

		$update = $this->con->prepare($sql);
	    return $update->execute();
	}
	
	public function excluirDocumento($objBusca){		
		// echo '<pre>'.
		$sql = "DELETE FROM auxiliares.documentos
	            WHERE doc_id = ".$objBusca->id.";";

		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
	
	public function consultarDocumentos($objBusca){
		if($objBusca->id != ""){
			$search = "AND documentos.doc_id = ".$objBusca->id;
		}
		if($objBusca->search != ""){
			$search = "AND ( remove_acento(documentos.doc_descricao) iLIKE remove_acento('%".$objBusca->search."%'))";	
		}
		if($objBusca->orderby != ""){
			$orderby = "ORDER BY ".$objBusca->orderby;
		}
		if($objBusca->offset != "" || $objBusca->limit != ""){
			$limit = "LIMIT ".$objBusca->limit." OFFSET ".$objBusca->offset;
		}
		//LPAD(cast(fornecedor.for_id as varchar),6,'0')
		// echo '<pre>'.
		$sql = "SELECT 
					doc_id AS id, LPAD(cast(doc_id as varchar),6,'0') AS codigo, doc_descricao AS descricao
				FROM 
					auxiliares.documentos
				WHERE visivel = TRUE
					$search
					$orderby
				$limit";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
	
	/****************************FIM DOCUMENTOS****************************/
	/****************************INÍCIO CARGOS****************************/
	
	public function inserirCargo($objBusca){		
		// echo '<pre>'.
		$sql = "INSERT INTO
	                   auxiliares.cargos(car_descricao) 
	               VALUES
	                   (".$objBusca->descricao.");";

		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
	
	public function atualizarCargo($objBusca){		
		// echo '<pre>'.
		$sql = "UPDATE auxiliares.cargos
				SET car_descricao = ".$objBusca->descricao."
	            WHERE car_id = ".$objBusca->id.";";

		$update = $this->con->prepare($sql);
	    return $update->execute();
	}
	
	public function excluirCargo($objBusca){		
		// echo '<pre>'.
		$sql = "DELETE FROM auxiliares.cargos
	            WHERE car_id = ".$objBusca->id.";";

		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
	
	public function consultarCargos($objBusca){
		if($objBusca->id != ""){
			$search = "AND cargos.car_id = ".$objBusca->id;
		}
		if($objBusca->search != ""){
			$search = "AND ( remove_acento(cargos.car_descricao) iLIKE remove_acento('%".$objBusca->search."%'))";	
		}
		if($objBusca->orderby != ""){
			$orderby = "ORDER BY ".$objBusca->orderby;
		}
		if($objBusca->offset != "" || $objBusca->limit != ""){
			$limit = "LIMIT ".$objBusca->limit." OFFSET ".$objBusca->offset;
		}
		//LPAD(cast(fornecedor.for_id as varchar),6,'0')
		// echo '<pre>'.
		$sql = "SELECT 
					car_id AS id, LPAD(cast(car_id as varchar),6,'0') AS codigo, car_descricao AS descricao
				FROM 
					auxiliares.cargos
				WHERE visivel = TRUE
					$search
					$orderby
				$limit";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
	
	/****************************FIM CARGO****************************/
	/****************************INÍCIO SITUACOES****************************/
	
	public function inserirSituacao($objBusca){		
		// echo '<pre>'.
		$sql = "INSERT INTO
	                   auxiliares.situacoes(sit_descricao) 
	               VALUES
	                   (".$objBusca->descricao.");";

		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
	
	public function atualizarSituacao($objBusca){		
		// echo '<pre>'.
		$sql = "UPDATE auxiliares.situacoes
				SET sit_descricao = ".$objBusca->descricao."
	            WHERE sit_id = ".$objBusca->id.";";

		$update = $this->con->prepare($sql);
	    return $update->execute();
	}
	
	public function excluirSituacao($objBusca){		
		// echo '<pre>'.
		$sql = "DELETE FROM auxiliares.situacoes
	            WHERE sit_id = ".$objBusca->id.";";

		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
	
	public function consultarSituacoes($objBusca){
		if($objBusca->id != ""){
			$search = "AND situacoes.sit_id = ".$objBusca->id;
		}
		if($objBusca->search != ""){
			$search = "AND ( remove_acento(situacoes.sit_descricao) iLIKE remove_acento('%".$objBusca->search."%'))";	
		}
		if($objBusca->orderby != ""){
			$orderby = "ORDER BY ".$objBusca->orderby;
		}
		if($objBusca->offset != "" || $objBusca->limit != ""){
			$limit = "LIMIT ".$objBusca->limit." OFFSET ".$objBusca->offset;
		}
		//LPAD(cast(fornecedor.for_id as varchar),6,'0')
		// echo '<pre>'.
		$sql = "SELECT 
					sit_id AS id, LPAD(cast(sit_id as varchar),6,'0') AS codigo, sit_descricao AS descricao
				FROM 
					auxiliares.situacoes
				WHERE visivel = TRUE
					$search
					$orderby
				$limit";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
	
	/****************************FIM SITUACOES****************************/
	/****************************INÍCIO SERVICOS****************************/
	
	public function inserirServico($objBusca){		
		// echo '<pre>'.
		$sql = "INSERT INTO
	                   auxiliares.servicos(ser_descricao, ser_status, ser_valor) 
	               VALUES
	                   (".$objBusca->descricao.", ".$objBusca->status.", ".$objBusca->valor.");";

		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
	
	public function atualizarServico($objBusca){		
		echo '<pre>'.
		$sql = "UPDATE auxiliares.servicos
				SET ser_descricao = ".$objBusca->descricao.",
					ser_status = ".$objBusca->status.",
					ser_valor = ".$objBusca->valor."
	            WHERE ser_id = ".$objBusca->id.";";

		$update = $this->con->prepare($sql);
	    return $update->execute();
	}
	
	public function excluirServico($objBusca){		
		// echo '<pre>'.
		$sql = "DELETE FROM auxiliares.servicos
	            WHERE ser_id = ".$objBusca->id.";";

		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
	
	public function consultarServicos($objBusca){
		if($objBusca->id != ""){
			$search = "AND servicos.ser_id = ".$objBusca->id;
		}
		if(trim($objBusca->search) != ""){
			if(strtolower(trim($objBusca->search) == 'ativo')){ $objBusca->search = 'A'; }
			if(strtolower(trim($objBusca->search) == 'inativo')){ $objBusca->search = 'I'; }
			$search = "AND ( ";
			$search .= " remove_acento(servicos.ser_descricao) iLIKE remove_acento('%".$objBusca->search."%') OR servicos.ser_status = '".$objBusca->search."' ";
			if(is_float(str_replace(",", ".", $objBusca->search)) || is_int(str_replace(",", ".", $objBusca->search)) || is_numeric(str_replace(",", ".", $objBusca->search))){
				$search .= "OR servicos.ser_id = ".str_replace(",", ".", $objBusca->search)." OR servicos.ser_valor = ".str_replace(",", ".", $objBusca->search)." ";
			}
			$search .= ") ";
		}
		if($objBusca->orderby != ""){
			$orderby = "ORDER BY ".$objBusca->orderby;
		}
		if($objBusca->offset != "" || $objBusca->limit != ""){
			$limit = "LIMIT ".$objBusca->limit." OFFSET ".$objBusca->offset;
		}
		// LPAD(cast(fornecedor.for_id as varchar),6,'0')
		// echo '<pre>'.
		$sql = "SELECT 
					ser_id AS id, LPAD(cast(ser_id as varchar),6,'0') AS codigo, ser_descricao AS descricao,
					CASE ser_status
						WHEN 'A' THEN 'ATIVO'
						WHEN 'I' THEN 'INATIVO'
					END status_descricao, ser_status AS status, ser_valor AS valor,
					'R$ ' || TRIM(from TO_CHAR(ser_valor, '999G999G999G990D99')) AS valorrs
				FROM 
					auxiliares.servicos
				WHERE visivel = TRUE
					$search
					$orderby
				$limit";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
	
	/****************************FIM SERVICOS****************************/
	/****************************INÍCIO SERVICOS****************************/
	
	public function inserirAtividadeEconomica($objBusca){		
		// echo '<pre>'.
		$sql = "INSERT INTO
	                   auxiliares.atividade_economica(atveco_cnae, atveco_descricao) 
	               VALUES
	                   (".$objBusca->cnae.", ".$objBusca->descricao.");";

		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
	
	public function atualizarAtividadeEconomica($objBusca){		
		echo '<pre>'.
		$sql = "UPDATE auxiliares.atividade_economica
				SET atveco_descricao = ".$objBusca->descricao.",
					atveco_cnae = ".$objBusca->cnae."
	            WHERE atveco_id = ".$objBusca->id.";";

		$update = $this->con->prepare($sql);
	    return $update->execute();
	}
	
	public function excluirAtividadeEconomica($objBusca){		
		// echo '<pre>'.
		$sql = "DELETE FROM auxiliares.atividade_economica
	            WHERE atveco_id = ".$objBusca->id.";";

		$inserir = $this->con->prepare($sql);
	    return $inserir->execute();
	}
	
	public function consultarAtividadeEconomica($objBusca){
		if($objBusca->id != ""){
			$search = "AND atividade_economica.atveco_id = ".$objBusca->id;
		}
		if(trim($objBusca->search) != ""){
			$search = "AND ( ";
			$search .= " remove_acento(atividade_economica.atveco_descricao) iLIKE remove_acento('%".$objBusca->search."%') OR atividade_economica.atveco_cnae iLIKE '".$objBusca->search."' ";
			if(is_float(str_replace(",", ".", $objBusca->search)) || is_int(str_replace(",", ".", $objBusca->search)) || is_numeric(str_replace(",", ".", $objBusca->search))){
				$search .= "OR atividade_economica.atveco_id = ".str_replace(",", ".", $objBusca->search)." ";
			}
			$search .= ") ";
		}
		if($objBusca->orderby != ""){
			$orderby = "ORDER BY ".$objBusca->orderby;
		}
		if($objBusca->offset != "" || $objBusca->limit != ""){
			$limit = "LIMIT ".$objBusca->limit." OFFSET ".$objBusca->offset;
		}
		// LPAD(cast(fornecedor.for_id as varchar),6,'0')
		// echo '<pre>'.
		$sql = "SELECT 
					atveco_id AS id, LPAD(cast(atveco_id as varchar),6,'0') AS codigo, atveco_descricao AS descricao,
					atveco_cnae AS cnae
				FROM 
					auxiliares.atividade_economica
				WHERE visivel = TRUE
					$search
					$orderby
				$limit";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
	
	/****************************FIM SERVICOS****************************/
}
?>
