<?php

// require_once('IRepositorioPublic.php');

class RepositorioPublic //implements IRepositorioPublic
{

	private $con = NULL;

	public function __construct()
	{

		require_once( CAMINHO_PORTAL."conf/Conexao.php" );
		$this->con = Conexao::getConexao();
	}

	public function consultarCidades($pais, $uf, $municipio){		
		// echo '<pre>'.
		$sql = "SELECT *
				FROM pais p, uf u, municipio m
				WHERE p.codigo = u.cod_pais
					AND u.uf = m.cod_estado
					AND m.cod_municipio = ".$municipio."
					AND u.uf = ".$uf."
					AND p.codigo = '".$pais."'";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row[0];
	}
	
	public function alterar($id){
		
		$sql = "";

		$update = $this->con->prepare($sql);
	    return $update->execute();
	}
	
	public function consultarPais(){		
		
		$sql = "SELECT id, codigo, pais, tributacao
				FROM pais
				WHERE visivel = TRUE";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
	
	public function consultarUf(){		
		
		$sql = "SELECT uf, estado, sigla, cod_pais
				FROM uf;";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
	
	public function consultarMunicipio($pais, $uf, $municipio){	
		$sqlAdd = "";
		if($municipio != ""){ $sqlAdd .= "AND m.cod_municipio = ".$municipio.""; }
		if($uf != ""){ $sqlAdd .= "AND u.uf = ".$uf.""; }
		// echo '<pre>'.
		$sql = "SELECT *
				FROM pais p, uf u, municipio m
				WHERE p.codigo = u.cod_pais
					AND u.uf = m.cod_estado
					$sqlAdd
					
					AND p.codigo = '".$pais."'";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
    
	public function consultarCSOSN($cod){	
		if($cod != ""){ $sqlAdd .= "AND csosn.csocod = ".$cod; }
		// echo '<pre>'.
		$sql = "SELECT csosn.csocod AS codigo, csosn.csonom AS descricao
				FROM public.csosn
					$sqlAdd";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}

	
	public function consultarPISCOFINS($cod, $sigla){	
		if($cod != ""){ $sqlAdd .= "pis_cofins.pis_codigo = ".$cod; }
		if($sigla != ""){ $sqlAdd .= "AND pis_cofins.pis_tipo = '".$sigla."'"; }
		// echo '<pre>'.
		$sql = "SELECT pis_cofins.pis_codigo AS codigo, pis_cofins.pis_tipo AS tipo, pis_cofins.pis_descricao AS descricao
				FROM public.pis_cofins
				WHERE visivel = TRUE
				$sqlAdd";
			
		$arr = $this->con->query($sql);
		$row = $arr->fetchAll(PDO::FETCH_OBJ);
		return $row;
	}
	
}
?>
